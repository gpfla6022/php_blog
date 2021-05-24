<?php

$articleId = $_GET['id'];

$dbconn = mysqli_connect("127.0.0.1", "apple", "1234", "test_blog") or die ("DB CONNECTION ERROR");

$sql = "
UPDATE article
SET title = ,
`body` = ,
updateDate = NOW()
WHERE id = ;
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
</head>
<body>
    <h1>게시물 수정</h1>
    <div>
        <p>새제목 : <input type="text" name = "title"></p>
        <p>새내용 : </p>
        <textarea name="body" cols="30" rows="10"></textarea>
        <a href="list.php"><input type="button" value = "확인"></a>
    </div>
</body>
</html>