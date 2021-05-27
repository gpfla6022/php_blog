<?php
require_once $_server['DOCUMENT_ROOT'] . '/webinit.php';
?>
<?php
$pageTitle = "게시물 작성";
?>
<?php require_once __DIR__ . "/../foot.php"; ?>
    <div>
    <form method ="POST" action="doWrite.php">
        <p>제목 : <input type="text" name = "title" autocomplete="off"></p>
        <p>내용 : </p>
        <p><textarea name="body" cols="30" rows="10"></textarea></p>
        <input type="submit"><br>
        <a href="list.php"><input type="button" value ="리스트로 돌아가기"></a>
    </form>
    </div>
    <?php require_once __DIR__ . "/../foot.php"; ?>