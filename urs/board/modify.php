<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';

$id = $_GET['id']; # 댓글번호
$name = $_POST['name'];
$boardCode = $_POST['boardCode'];

?>

<?=$pageTitle = "게시판 수정";?>
<?php require_once __DIR__ . "/../head.php";?>

<form method = "POST" action="doModify.php">
    <input type="hidden" name="id" value = "<?=$id?>">
    <input type="hidden" name="name" value = "<?=$name?>">
    <input type="hidden" name="boardCode" value = "<?=$boardCode?>">
    <p>게시판 이름 : <input type="text" name = "name"></p>
    <p>게시판 코드 : <input type="text" name = "boardCode"></p>
    <input type="submit" value = "확인">
</form>
<?php require_once __DIR__ . "/../foot.php"; ?>
