<?php
require_once $_server['DOCUMENT_ROOT'] . '/webinit.php';

$articleId = intval($_GET['id']);

$sql = "
SELECT * 
FROM article
WHERE article.id = $articleId;
";

$rs = mysqli_query($dbconn, $sql);

$article = mysqli_fetch_assoc($rs);
?>


<?php
$pageTitle = "게시물 상세보기";
?>
<?php require_once __DIR__ . "/../head.php"; ?>

<div>
<p>번호 : <?=$article['id']?></p>
<p>제목 : <?=$article['title']?></p>
<p>내용 : <?=$article['body']?></p>
<p>작성일 : <?=$article['regDate']?></p>
<p>수정일 : <?=$article['updateDate']?></p>
<a href="list.php"><input type="button" value = "리스트로 돌아가기"></a>
<a href="doDelete.php?id=<?=$article['id']?>"><input type="button" value ="삭제"></a>
<a href="modify.php?id=<?=$article['id']?>"><input type="button" value = "수정"></a>
</div>


<?php require_once __DIR__ . "/../foot.php"; ?>
