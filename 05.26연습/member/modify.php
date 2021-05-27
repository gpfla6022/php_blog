<?php
$pageTitle = "회원정보 수정";
require_once __DIR__ . '/../head.php';
?>
<form method = "POST" action="doModify.php">
    <table>
        <tr>
            <td>아이디</td>
            <td><input type="text" name = "memId"></td>
        </tr>
        <tr>
            <td>비밀번호</td>
            <td><input type="text" name = "memPw"></td>
        </tr>
        <tr>
            <td>이름</td>
            <td><input type="text" name = "memName"></td>
        </tr>
        <tr>
            <td>별명</td>
            <td><input type="text" name = "memNick"></td>
        </tr>
        <tr>
            <td>전화번호</td>
            <td><input type="text" name = "memPhNum"></td>
        </tr>
        <tr>
            <td>이메일</td>
            <td><input type="text" name = "memEmail"></td>
        </tr>
    </table>
    <input type="submit" value ="확인">
</form>
<?php
require_once __DIR__ . '/../foot.php';
?>