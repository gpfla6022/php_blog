<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/loginCheck.php';

$id = $_GET['id'];
$relId = $_GET['relId'];

$sql = "
DELETE FROM reply 
WHERE reply.id = $id;
";

$rs = mysqli_query($dbConn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글 삭제</title>
    <script>
    alert("댓글 삭제가 완료되었습니다.")
    location.replace("../article/detail.php?id=<?=$relId?>")
    </script>
</head>
<body>

</body>
</html>