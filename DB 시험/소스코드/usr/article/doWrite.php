<?php

$dbConn = mysqli_connect("127.0.0.1", "sbsst", "123414", "php_blog_2021") or die ("DB CONNECTION ERROR");

$title = $_POST['title'];

$body = $_POST['body'];

$sql = "
INSERT INTO article 
SET `title` = '$title', 
`body` = '$body', 
`regDate` = NOW(), 
`updateDate` = NOW();
";

$rs = mysqli_query($dbConn, $sql);

$id = mysqli_insert_id($dbConn)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 작성</title>
    <script>
        alert("게시물 작성이 완료되었습니다.")
        location.replace("detail.php?id=<?=$id?>")
    </script>
</head>
<body>
    
</body>
</html>