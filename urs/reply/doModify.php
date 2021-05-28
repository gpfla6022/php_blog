<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';

$id = $_POST['id'];
$relId = $_POST['relId'];
$body = $_POST['body'];

$sql = "
UPDATE `reply`
SET `body` = '$body',
`updateDate` = NOW()
WHERE `id` = $id
";

DB_update($sql);

require_once __DIR__ . '/../head.php';
?>
<script>
alert("댓글 수정이 완료되었습니다.")
location.replace("../article/detail.php?id=<?=$relId?>")
</script>

<?php

require_once __DIR__ . "/../foot.php";

?>