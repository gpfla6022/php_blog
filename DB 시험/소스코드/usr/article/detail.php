<?php

$dbConn = mysqli_connect("127.0.0.1", "sbsst", "123414", "php_blog_2021") or die ("DB CONNECTION ERROR");

if (isset($_GET['id']) == false) {
    echo "게시물 번호를 확인하여 주시기 바랍니다.";
    exit;
}

$articleId = intval($_GET['id']);

$sql = "
SELECT * 
FROM article 
WHERE article.id = $articleId;
";

$rs = mysqli_query($dbConn, $sql);

$article = mysqli_fetch_assoc($rs);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$article['id']?>번 게시물 상세내용</title>
</head>
<body>
    <h1><?=$article['id']?>번 게시물 상세내용</h1>
    <hr>
    <div>
        번호 : <?=$article['id']?><br>
        제목 : <?=$article['title']?><br>
        내용 : <?=$article['body']?><br>
        작성일 : <?=$article['regDate']?><br>
        갱신일 : <?=$article['updateDate']?><br>
    </div>
    <hr>
    <div>
        <a href="list.php"><input type="button" value = "리스트"></a>
        <a href="doDelete.php?id=<?=$article['id']?>"><input type="button" value = "삭제"></a>
        <a href="modify.php?id=<?=$article['id']?>"><input type="button" value = "수정"></a>
    </div>
</body>
</html>