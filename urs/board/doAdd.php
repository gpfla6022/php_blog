<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';

$name = $_POST['name'];
$boardCode = $_POST['boardCode'];

$sql = "
INSERT INTO board 
SET `name` = '$name',
boardCode = '$boardCode',
regDate = NOW(),
updateDate = NOW();
";

DB_update($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 생성</title>
    <script>
    alert("게시판 생성이 완료되었습니다.")
    location.replace("../board/list.php")
    </script>
</head>
<body>
    
</body>
</html>