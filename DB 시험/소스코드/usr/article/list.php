<?php

$dbConn = mysqli_connect("127.0.0.1", "sbsst", "123414", "php_blog_2021") or die ("DB CONNECTION ERROR");

$sql = "
SELECT * 
FROM article 
ORDER BY article.id DESC;
";

$rs = mysqli_query($dbConn, $sql);

$articles = [];

while ( $article = mysqli_fetch_assoc($rs)) {
    $articles[] = $article;
}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 리스트</title>
</head>
<body>
    <h1>게시물 리스트</h1>
    <hr>
    <a href="Write.php"><input type="button" value = "게시물 작성"></a>
    <hr>
    <div>
        <?php foreach ( $articles as $article ) { ?>
            번호 : <?=$article['id']?><br>
            제목 : <?=$article['title']?><br>
            작성일 : <?=$article['regDate']?><br>
            갱신일 : <?=$article['updateDate']?><br>
            <a href="detail.php?id=<?=$article['id']?>"><?=$article['id']?>번 게시물 상세보기</a>
            <hr>
        <?php } ?>
    </div>
</body>
</html>