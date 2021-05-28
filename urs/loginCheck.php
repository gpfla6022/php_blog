<?php
if ( !isset($_SESSION['logonMember']) ) {
    echo ("
    <script>
        alert('로그인 후 이용해 주시기 바랍니다.');
        location.replace('../member/login.php');
    </script>
    ");
    exit;
}
?>