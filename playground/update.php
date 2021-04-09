<?php
include 'template/header.html';
require_once 'connectdb.php';

$userID = "";
$userName = "";
$userStatus = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = "";
    if (isset($_GET["id"]) && $_GET["id"] != '') {
        $userID  = $_GET["id"];
        $userName = $_GET["userName"];
        $userStatus = $_GET["userStatus"];
    } else {
        echo "ID User is null";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $userStatus = "";
    $userID  = $_GET["id"];
    $userName  = $_POST["userName"];
    $userStatus = $_POST["userStatus"];


    if ($userName && $userStatus) {
        $strSQL = "UPDATE user SET userName ='" . $userName . "' , userStatus=" . $userStatus . " WHERE userID = " . $userID;
        if (($userName == "") && ($userStatus == "")) {
            echo "can't add information";
        }

        $result = $myconn->query($strSQL);
        if ($result) {
            echo "update User Complete";
        } else {
            echo "update User failled";
        }
    }
}
?>


<body>

<form action="update.php?id=<?= $userID ?>" method="post">
    <div class="form-group">
    <label for="exampleInputEmail1">username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=" userName" value="<?= $userName ?>">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">userStatus</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="userStatus" value="<?= $userStatus ?>">
  </div>
  <button type="submit" class="btn btn-primary">save</button>
</form>

 
            <!-- <tr>
                <td>userName</td>
                <td><input type="text" name="userName" value="<?= $userName ?>"></td>
            </tr>
            <tr>
                <td>userStatus</td>
                <td><input type="text" name="userStatus" value="<?= $userStatus ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>
        </table>
    </form> -->



    <?php
    include 'template/footer.html';
    ?>
</body>

</html>