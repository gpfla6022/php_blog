<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';

if(isset($_GET['title']) == false) {
    jsHistoryBackExit("제목을 입력해주세요.");
}

if(isset($_GET['body']) == false) {
    jsHistoryBackExit("내용을 입력해주세요.");
}

$title = $_POST['title'];
$body = $_POST['body'];

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

