<?php
require_once'connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = "";
    if(isset($_GET["id"]) && $_GET["id"] != '') {
        $id = $_GET["id"];
        $strSQL = "DELETE FROM user WHERE id=".$id;
        $result = $myConn->query($strSQL);
      
        echo $result;
        if ($result) {
            echo "เพิ่มข้อมูลสำเร็จ";
        } else {
            echo "ไม่สามารถเพิ่มข้อมูลได้";
        }
    }else{
        echo "id is null";
    }

    
}
    