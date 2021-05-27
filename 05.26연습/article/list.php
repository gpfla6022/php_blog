<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/05.26연습/webinit.php';
 
$sql = "
SELECT * 
FROM article 
ORDER BY article.id DESC;
";

$rs = mysqli_query($dbConn, $sql);

$articles = DB_getRows($sql);
?>

<?=$pageTitle = "게시물 리스트"?>
<?php require_once __DIR__ . "/../head.php";?>
<a href="write.php"><input type="button" value = "게시물 작성"></a>
<hr>
<div>
    <?php foreach($articles as $article) {?>
        번호 : <?=$article['id']?><br>
        제목 : <?=$article['title']?><br>
        작성일 : <?=$article['regDate']?><br>
        갱신일 : <?=$article['updateDate']?><br>
        <a href="detail.php?id=<?=$article['id']?>"><input type="button" value = "상세보기"></a>
        <hr>
    <?php }?>
</div>
<?php require_once __DIR__ . "/../foot.php"; ?>