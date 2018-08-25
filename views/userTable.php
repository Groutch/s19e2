<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style>
        table,td {
            border: 1px solid #333;
        }
    </style>
    <?php
    $users = require_once(__DIR__.'/../data/users.php');
    echo "<table>";
    echo "<tr>";
    echo "<td>Id</td>";
    echo "<td>Email</td>";
    echo "<td>Date de création</td>";
    echo "</tr>";
    foreach($users as $usr){
        echo "<tr>";
        echo "<td>".$usr->getId()."</td>";
        echo"<td>".$usr->getEmail()."</td>";
        echo"<td>".$usr->getDate()."</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>
