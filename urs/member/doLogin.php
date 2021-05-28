<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';

$memId = $_POST['memId'];
$memPw = $_POST['memPw'];

$sql = "
SELECT * 
FROM `member` 
WHERE `memId` = '$memId'
";

$member = DB_getRow($sql);

if( empty ($member)) {
    echo "존재하지 않는 회원입니다.";
    exit;
}

if( $member['memPw'] != $memPw) {
    echo "비밀번호가 일치하지 않습니다.";
    exit;
}

$_SESSION['logonMember'] = $member['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <script>
    alert("로그인이 완료되었습니다.")
    location.replace("../board/list.php")
    </script>
</head>
<body>
    
</body>
</html>