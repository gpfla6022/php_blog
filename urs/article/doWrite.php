<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/loginCheck.php';

$title = getStringValueOr($_POST['title'], "");
$body = getStringValueOr($_POST['body'], "");


if( !$title ) {
    jsHistoryBackExit("제목을 입력해주세요.");
}

if( !$body ) {
    jsHistoryBackExit("내용을 입력해주세요.");
}

$sql = "
INSERT INTO article
SET title = '$title',
`body` = '$body',
regDate = NOW(),
updateDate = NOW();
";

$id = DB_insert($sql);

jsLocationReplaceExit("detail.php?id=${id}", "${id}번 게시물 작성이 완료되었습니다." );

?>

