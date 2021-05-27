<?php
require_once $_server['DOCUMENT_ROOT'] . '/webinit.php';

$sql = "
SELECT * 
FROM article
ORDER BY article.id DESC;
";

$rs = mysqli_query($dbconn, $sql);

$articles = [];

while ($article = mysqli_fetch_assoc($rs)){
    $articles[] = $article;
}
?>


<?php
$pageTitle = "게시물 리스트";
?>
<?php require_once __DIR__ . "/../head.php"; ?>

<div>
    <a href="Write.php"><input type="button" value = "게시물 작성"></a>  
    <?php foreach ($articles as $article) {?>
    <p>번호 : <?=$article['id']?></p>
    <p>제목 : <?=$article['title']?></p>
    <p>작성일 : <?=$article['regDate']?></p>
    <p>수정일 : <?=$article['updateDate']?></p>
    <a href="detail.php?id=<?=$article['id']?>"><?=$article['id']?>번 게시물 상세보기</a>
    <hr>
    <?php }?>
</div>
<?php require_once __DIR__ . "/../foot.php"; ?>