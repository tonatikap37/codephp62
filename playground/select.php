<?php
require_once 'connectdb.php';

$statement = "SELECT * FROM user";
$mysqli_statement = $myConn->query($statement);
// while ($row = $mysqli_statement->fetch_array()) {
//     echo $row["id"] . ' ' . $row["username"] . ' ' . $row["status"] . '<br>';
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table style="width: 100%;" border="1">
        <tr>
            <td>รหัส</td>
            <td>ชื้อผู้ใช้</td>
            <td>สถานะ</td>
            <td>แก้ไข</td>
            <td>ลบ</td>
        </tr>
        <?php
        while ($row = $mysqli_statement->fetch_array()) {
        ?>
        <tr>
            <td><?php echo $row["id"]?></td>
            <td><?php echo $row["username"]?></td>
            <td><?php echo $row["status"]?></td>
            <td><a href="update.php?id=<?php echo $row["id"]?>&username=<?php echo $row["username"]?>&status=<?php echo $row["status"]?>">edit</a></td>
            <td><a href="delete.php?id=<?= $row["id"]?>"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>