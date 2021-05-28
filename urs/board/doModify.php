<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/loginCheck.php';

$id = getIntValueOr($_POST['id'], 0);

if ( $id == 0 ) {
  jsHistoryBackExit("번호를 입력해 주세요.");
}

$name = getStringValueOr($_POST['name'], "");
$boardCode = getStringValueOr($_POST['boardCode'], "");


if( !$name ) {
    jsHistoryBackExit("제목을 입력해주세요.");
}

if( !$boardCode ) {
    jsHistoryBackExit("내용을 입력해주세요.");
}


$sql = "
UPDATE board
SET `name` '$name'=,
boardCode = '$boardCode',
regDate = NOW()
WHERE board.id = $id;
";

DB_update($sql);

require_once __DIR__ . '/../head.php';
?>
<script>
alert("게시판 수정이 완료되었습니다.")
location.replace("../board/list.php")
</script>

<?php

require_once __DIR__ . "/../foot.php";

?>