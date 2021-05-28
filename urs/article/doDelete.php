<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/loginCheck.php';

$articleId = $_GET['id'];

$sql = "
DELETE FROM article 
WHERE article.id = $articleId;
";

$rs = mysqli_query($dbConn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 삭제</title>
    <script>
    alert("게시물 삭제가 완료되었습니다.")
    location.replace("list.php")
    </script>
</head>
<body>

</body>
</html>