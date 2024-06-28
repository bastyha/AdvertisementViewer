<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="main-content">
    <h1>Users</h1>
    <div class="users">
        <?php 
            foreach ($users as $key => $value) {
                ?>
                    <div class="one-user" ><?php echo $value->name ; ?></div>
                <?php
            }


        ?>
    </div>
</body>
</html>
