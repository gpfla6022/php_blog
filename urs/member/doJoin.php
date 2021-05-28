<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';

$memId = $_POST['memId'];
$memPw = $_POST['memPw'];
$memName = $_POST['memName'];
$memNick = $_POST['memNick'];
$memEmail = $_POST['memEmail'];
$memPhNum = $_POST['memPhNum'];

$sql = "
INSERT INTO `member`
SET regdate = NOW(),
updateDate = NOW(),
memId = '$memId',
memPw = '$memPw',
memName = '$memName',
memNick = '$memNick',
memEmail = '$memEmail',
memPhNum = '$memPhNum';
";

DB_insert($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <script>
    alert("회원가입이 완료되었습니다.")
    location.replace("../member/login.php")
    </script>
</head>
<body>
    
</body>
</html>