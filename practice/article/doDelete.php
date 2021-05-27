<?php
require_once $_server['DOCUMENT_ROOT'] . '/webinit.php';

$articleId = intval($_GET['id']);

$sql = "
DELETE FROM article 
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
    <title>게시물 삭제</title>
    <script>
    alert ("게시물이 삭제되었습니다.")
    location.replace ("list.php")
    </script>
</head>
<body>
    <h1>게시물 삭제</h1>
    <hr>
    <div>
    <p>게시물이 삭제되었습니다.</p>
    <input type="submit"><br>
    <a href="list.php"><input type="button" value = "리스트로 돌아가기"></a>
    </div>
</body>
</html>