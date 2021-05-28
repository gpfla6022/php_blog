<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/loginCheck.php';

$articleId = getIntValueOr($_POST['id'], 0);

if ( $articleId == 0 ) {
  jsHistoryBackExit("번호를 입력해 주세요.");
}

$title = getStringValueOr($_POST['title'], "");
$body = getStringValueOr($_POST['body'], "");


if( !$title ) {
  jsHistoryBackExit("제목을 입력해주세요.");
}

if( !$body ) {
  jsHistoryBackExit("내용을 입력해주세요.");
}

$sql = " 
UPDATE article
SET `title` = '$title',
`body` = '$body',
`updateDate` = NOW()
WHERE `id` = $articleId;
";

DB_update($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 수정</title>
    <script>
    alert("게시물 수정이 완료되었습니다.")
    location.replace("detail.php?id=<?=$articleId?>")
    </script>
</head>
<body>
    
</body>
</html>