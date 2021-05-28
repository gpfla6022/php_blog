<?= require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php'; ?>

<?=$pageTitle = "게시판 생성"?>
<?php require_once __DIR__ . "/../head.php";?>

<form method = "POST" action="doAdd.php">
    <p>게시판 이름 : <input type="text" name = "name"></p>
    <p>게시판 코드 : <input type="text" name = "boardCode"></p>
    <input type="submit" value = "확인">
</form>
<?php require_once __DIR__ . "/../foot.php"; ?>