<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/05.26연습/webinit.php';

$memId = $_POST['memId'];
$memPw = $_POST['memPw'];
$memName = $_POST['memName'];
$memNick = $_POST['memNick'];
$memEmail = $_POST['memEmail'];
$memPhNum = $_POST['memPhNum'];

$sql = "
UPDATE `member`
SET regdate = NOW(),
updateDate = NOW(),
memId = '$memId',
memPw = '$memPw',
memName = '$memName',
memNick = '$memNick',
memEmail = '$memEmail',
memPhNum = '$memPhNum';
";

DB_update($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원정보 수정</title>
    <script>
    alert("회원정보 수정이 완료되었습니다.")
    location.replace("../member/login.php")
    </script>
</head>
<body>
    
</body>
</html>