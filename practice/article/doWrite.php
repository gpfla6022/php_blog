<?php
require_once $_server['DOCUMENT_ROOT'] . '/webinit.php';

$articleId = intval($_GET['id']);

$title = $_POST['title'];
$body = $_POST['body'];

$sql = "
INSERT INTO article
SET title = '$title',
`body` = '$body',
regDate = now(),
updateDate = NOW();
";

$rs = mysqli_query($dbconn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 작성</title>
    <script>
    alert ("게시물이 작성 되었습니다.")
    location.replace ("list.php")
    </script>
</head>
<body>

</body>
</html>