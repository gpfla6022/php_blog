<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/05.26연습/webinit.php';

$articleId = $_GET['id'];

$sql = "
SELECT *  
FROM article 
WHERE article.id = $articleId;
";

$article = DB_getRow($sql);

$replySql = "
SELECT * 
FROM `reply` 
ORDER BY `id` DESC;
";

$replies = DB_getRows($replySql);


?>

<?=$pageTitle = "게시물 상세보기"?>
<?php require_once __DIR__ . "/../head.php";?>
<div>
    <p>번호 : <?=$article['id']?></p>
    <p>제목 : <?=$article['title']?></p>
    <p>내용 : <?=$article['body']?></p>
    <p>작성일 : <?=$article['regDate']?></p>
    <p>수정일 : <?=$article['updateDate']?></p>
    <a href="list.php"><input type="button" value = "리스트로 돌아가기"></a>
    <a href="doDelete.php?id=<?=$article['id']?>"><input type="button" value = "삭제"></a>
    <a href="modify.php?id=<?=$article['id']?>"><input type="button" value = "수정"></a>
    <hr>
</div>
    <h2>댓글</h2>
    <hr>
    <div>
    <form method="POST" action="../reply/doWrite.php">
        <input type="hidden" name="relId" value="<?=$article['id']?>">
        <input type="hidden" name="relTypeCode" value="article">
        <input type="text" name="body">
        <input type="submit" value="작성">
    </form>
    <hr>
    <?php foreach( $replies as $reply) {
        if ($reply['relId'] == $article['id']) { ?>
            <div id = "reply">
                <?=$reply['id']?>번 댓글 : <?=$reply['body']?>
                    <a href="../reply/doDelete.php?id=<?=$reply['id']?>&relId=<?=$reply['relId']?>"><input type="button" value="삭제"></a>
                    <a href="../reply/Modify.php?id=<?=$reply['id']?>&relId=<?=$reply['relId']?>"><input type="button" value="수정"></a>
                    <br>
            </div>
    <?php   }
    }
    ?>
</div>

<?php require_once __DIR__ . "/../foot.php"; ?>



