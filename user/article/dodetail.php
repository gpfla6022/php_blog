<?php

$articleId = $_GET['id'];

$dbconn = mysqli_connect("127.0.0.1", "apple", "1234", "test_blog") or die ("DB CONNECTION ERROR");

$sql = "
SELECT *
FROM article
WHERE id = $articleId;
";

$rs = mysqli_query($dbconn, $sql);

$article = mysqli_fetch_assoc($rs);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$article['id']?>번 게시물 상세보기</title>
</head>
<body>
    <h1><?=$article['id']?>번 게시물 상세보기</h1>
    <hr>
    <div>
        <p>번호 : <?=$article['id']?></p>
        <p>제목 : <?=$article['title']?></p>
        <p>내용 : <?=$article['body']?></p>
        <p>작성일 : <?=$article['regDate']?></p>
        <p>갱신일 : <?=$article['updateDate']?></p>
        <p><a href="list.php">리스트로 돌아가기</a> / <a href="dodelete.php?id=<?=$article['id']?>">게시물 삭제</a> / <a href="domodify.php?id=<?=$article['id']?>">게시물 수정</a></p>
    </div>
</body>
</html>
