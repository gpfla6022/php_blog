<?php

$dbConn = mysqli_connect("127.0.0.1", "sbsst", "123414", "php_blog_2021") or die ("DB CONNECTION ERROR");

if (isset($_POST['id']) == false) {
    echo "게시물 번호를 확인하여 주시기 바랍니다.";
    exit;
}

$articleId = intval($_POST['id']);

$title = $_POST['title'];
$body = $_POST['body'];

$sql = "
UPDATE article 
SET `title` = '$title', 
`body` = '$body', 
`updateDate` = NOW() 
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
    <title>게시물 수정</title>
    <script>
        alert("게시물이 수정되었습니다.")
        location.replace('list.php')
    </script>
</head>
<body>
    
</body>
</html>