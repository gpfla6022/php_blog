<?= require_once $_SERVER['DOCUMENT_ROOT'] . '/05.26연습/webinit.php'; ?>

<?=$pageTitle = "게시물 작성"?>
<?php require_once __DIR__ . "/../head.php";?>

<form method = "POST" action="doWrite.php">
    <p>제목 : <input type="text" name = "title"></p>
    <p>내용 : </p>
    <textarea name="body" cols="30" rows="10"></textarea>
    <input type="submit" value = "확인">
</form>
<?php require_once __DIR__ . "/../foot.php"; ?>