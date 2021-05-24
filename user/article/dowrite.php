<?php

if(empty($_POST['title'])){
    echo "제목을 입력해 주시기 바랍니다.";
    exit;
}

$newTitle = $_POST['title'];

if(empty($_POST['body'])){
    echo "내용을 입력해 주시기 바랍니다.";
    exit;
}

$newBody = $_POST['body'];

$dbconn = mysqli_connect("127.0.0.1", "apple", "1234", "test_blog") or die ("DB CONNECTION ERROR");

$sql = "
INSERT INTO article
SET title = '$newTitle',
body = '$newBody',
regDate = now(),
updateDate = now();
";

$rs = mysqli_query($dbconn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 생성</title>
</head>
<body>
    <h1>게시물 생성</h1>
    <p>게시물 생성이 완료되었습니다.</p>
    <a href="list.php"><input type="button" value = "확인"></a>
</body>
</html>