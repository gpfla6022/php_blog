<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';
 
$sql = "
SELECT * 
FROM board 
ORDER BY board.id DESC;
";

$rs = mysqli_query($dbConn, $sql);

$boards = DB_getRows($sql);
?>

<?=$pageTitle = "게시판 리스트"?>
<?php require_once __DIR__ . "/../head.php";?>
<a href="add.php"><input type="button" value = "게시판 작성"></a>
<hr>
<div>
    <?php foreach($boards as $board) {?>
        게시판 번호 : <?=$board['id']?><br>
        게시판 이름 : <?=$board['name']?><br>
        게시판 코드 : <?=$board['boardCode']?><br>
        작성일 : <?=$board['regDate']?><br>
        갱신일 : <?=$board['updateDate']?><br>
        <a href="../article/list.php?id=<?=$board['id']?>"><input type="button" value = "게시물 리스트"></a>
        <a href="../board/doDelete.php?id=<?=$board['id']?>"><input type="button" value = "삭제"></a>
        <a href="../article/modify.php?id=<?=$board['id']?>"><input type="button" value = "수정"></a>
        <hr>
    <?php }?>
</div>
<?php require_once __DIR__ . "/../foot.php"; ?>