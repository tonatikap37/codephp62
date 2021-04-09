<?php
include 'template/header.html';
require_once 'connectdb.php';

$strSQL = "SELECT `userID`, `userName`,`userStatus` FROM `user`";
$result = $myconn->query($strSQL);

?>




<body>
   

    <table class="table table-dark">
    <thead>
        <tr>
            <td>ลำดับ</td>
            <td>ชื่อผู้ใช้</td>
            <td>สถานะ</td>
            <td>เเก้ไข</td>
            <td>ลบ</td>
        </tr>
        </thead>
        <tbody>
    <?php
    while ($row = $result->fetch_array()) {
        //  echo $row["userName"] . "<br>";
         ?>
         <tr>
        <td><?php echo $row ["userID"] ?></td>
        <td><?php echo $row ["userName"]?> </td>
        <td><?php echo $row ["userStatus"] ?></td>
       
        <td><a href="update.php?id=<?= $row["userID"]?>&userName=<?= $row["userName"]?> &userStatus=<?=$row["userStatus"]?>"><i class="fas fa-pencil-alt"></i></i></a></td>
        <td><a href="delete.php?id=<?= $row["userID"] ?>"><i class="fas fa-trash-alt"></i></a></td>
        

       
       
       
         </tr>
        <?php
    
    }
?>

    </tbody>
    </table>
    <a href="insert.php">add user</a>
    <?php
    include 'template/footer.html';
    ?>
</body>

</html>