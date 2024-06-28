<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisements</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="main-content">
    <h1>Advertisements</h1>
    <table>
    
        <tr>
            <th>Advertisement Title</th>
            <th>User name</th>
        </tr>
      

        <?php 
        foreach ($advertisements as $key => $value) {
            ?>
            <tr>
                <td><?php echo $value->title ?></td>
                <td><?php echo $value->name ?></td>
            </tr>

        <?php } ?>
    </table>
</body>
</html>