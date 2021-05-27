<!--1 변수가 숫자일 때-->
<html>
<body>
<?php
$a=1;
echo $a+1; #2
echo "<br />";
$a=2;
print $a+1; #3
?>
</body>
</html>

<!--2 변수가 문자일 때-->
<html>
<body>
<?php
$first = "coding";
echo $first." everybody";
?>
</body>
</html>

<!-- 3 변수가 없을 때-->
<html>
<body>
<?php
echo 100+10;
echo '<br />';
echo (100+10)/10;
echo '<br />';
echo ((100+10)/10)-10;
echo '<br />';
echo (((100+10)/10)-10)*10;
echo '<br />';
?>
</body>
</html>

<!--4 변수가 있을 때-->
<html>
<body>
<?php
$a = 100;
$a = $a + 10;
print $a.'<br />';
$a = $a / 10;
print $a.'<br />';
$a = $a - 10;
print $a.'<br />';
$a = $a * 10 ;    
print $a.'<br />';
?>
</body>
</html>