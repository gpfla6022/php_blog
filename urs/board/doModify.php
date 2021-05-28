<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';

$id = $_POST['id'];
$name = $_POST['name'];
$boardCode = $_POST['boardCode'];

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