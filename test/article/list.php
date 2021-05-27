<?php
$dbconn = mysqli_connect("127.0.0.1", "apple", "1234", "test_blog");

$sql = "
SELECT *
FROM article
ORDER BY article.id
";

$rs = mysqli_query($dbconn, $sql);

$articles = [];

while ($article = mysqli_fetch_assoc($rs)) {
    $articles[] = $article;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 리스트</title>
</head>
<body>
    <h1>게시물 리스트</h1>
    <hr>
    <div>
    <?php foreach ($articles as $article) {?>
    번호 : <?=$article['id']?><br>
    작성 : <?=$article['regDate']?><br>
    수정 : <?=$article['updateDate']?><br>
    제목 : <?=$article['title']?><br>
    <hr>
    <?php }?>
    </div>
</body>
</html>


- 14:00 ~ 15:30 점심식사
- 15:30 ~ 17:00 : 장보기
- 17:00 ~ 18:30 : php 공부
---- 1단계 완료 ----
- 18:30 ~ 19:30 : 저녁식사
- 19:30 ~ 22:30 : 코틀린 복습
- 23:30 ~ 00:00 : 운동
---- 2단계 완료 ----
- 00:00 ~ 02:00 : html 공부
- 02:00 ~ : 블로그 및 위키정리
---- 3단계 완료 ----