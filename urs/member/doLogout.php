<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';

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
    location.replace('../board/list.php')
</script>
