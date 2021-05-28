<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';

$relId = $_POST['relId'];
$body = $_POST['body'];

$sql = "
INSERT INTO reply
SET relId = '$relId',
`body` = '$body', 
relTypeCode = 'article',
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
    <title>댓글 작성</title>
    <script>
    alert("댓글 작성이 완료되었습니다.")
    location.replace("../article/detail.php?id=<?=$relId?>")
    </script>
</head>
<body>
    
</body>
</html>