<?php
require_once(__DIR__."\\..\\models\\User.php");
require_once(__DIR__."\\..\\models\\Advertisement.php");

// here I would use an interface, if I hade to make full CRUD
// and I would separetly implement it for User and Advertisement
class Dao{
    private static $instance;
    private $db;
    //get every entry in table
    public function GetAll(Tables $table){
        $output = [];
        $res =null;
        if($table==Tables::Users){

            $res = $this->db->query("SELECT * FROM $table->value ;");
        }else if($table==Tables::Advertisements){

            // here i have 2 solutions:
            // 1: advertisement model not reflecting the database structure (having username in the model)
            //  with this solution i can execute the query as one
            //  I don't know if doing this is normal
            // #2: model reflecting data strutcure
            //  for every advertisement I have to separetly query the name of the user
            //  sounds terrible
            // I will use #1
            $res = $this->db->query("SELECT {$table->value}.id, title, userid, name FROM {$table->value} LEFT JOIN ".Tables::Users->value." on {$table->value}.userid=".Tables::Users->value.".id;" );
        }
        
        while(($current=$res->fetch_object($table==Tables::Users ?User::class:Advertisement::class))!==null){
            $output[]=$current;
        }
        return $output;
    }


    //singleton solution
    public static function getInstance():Dao{
        if(!isset(self::$instance)){
            self::$instance = new Dao();
        }
        return self::$instance;
    }

    protected function __construct() {
        $this->db = new mysqli("localhost", "root", "", "advertisements")or die("Connection to db could not be made");
    }
}

//possible tables
enum Tables:string{
    case Advertisements ="advertisements";
    case Users ="users";
}

?>