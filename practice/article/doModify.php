<?php
require_once $_server['DOCUMENT_ROOT'] . '/webinit.php';

$articleId = intval($_POST['id']);

$title = $_POST['title'];
$body = $_POST['body'];

$sql = "
UPDATE article
SET title = '$title',
`body` = '$body',
updateDate = NOW()
WHERE article.id = $articleId;
";

$rs = mysqli_query($dbconn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 수정</title>
    <script>
    alert ("게시물이 수정 되었습니다.")
    location.replace ("list.php")
    </script>
</head>
<body>

</body>
</html>