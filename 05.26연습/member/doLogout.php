<?php

# 초기화 
require_once $_SERVER['DOCUMENT_ROOT'] . '/05.26연습/webinit.php';

# 로그인 여부 확인
if ( !isset($_SESSION['logonMember']) ) {
    echo ("
    <script>
        alert('이미 로그아웃 되셨습니다');
        location.replace('login.php');
    </script>
    ");
    exit;
}
if ( isset($_SESSION['logonMember']) ) {
    session_unset();
}

?>
<script>
    /* 로그아웃 */
    alert("로그아웃 되셨습니다.")
    location.replace('../article/list.php')
</script>
