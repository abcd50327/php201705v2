<?php
include 'sqlLarry.php';
$pdo = new pdo($dsn, $user, $passwd, $opt);
if (!isset($_REQUEST['account']))

    header("Location: addMemberV2.php");
$account = $_REQUEST['account'];
$passwd =
    password_hash(
        $_REQUEST['passwd'], PASSWORD_DEFAULT);
$rname = $_REQUEST['rname'];
$sql = "INSERT INTO test (account,passwd,rname) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql);    // statement SQL
$stmt->execute([$account,$passwd,$rname]);
//echo $stmt->errorInfo();
header("Location: loginv2.php");






?>

<!--<form action="addAccount.php">-->
<!--    <input name="account" /><br>-->
<!--    <input type="password" name="passwd" /><br>-->
<!--    <input name="rname" /><br>-->
<!--    <input type="submit" value="add" />-->
<!--</form>-->