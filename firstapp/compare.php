<!-- 비교연산자 == -->
<html>
<body>
<?php
echo "1==2 : ";
var_dump(1==2);           #false
echo '<br />';
echo "1==1 : ";
var_dump(1==1);           #true
echo '<br />';
echo '"one"=="two" : ';
var_dump("one"=="two");   #false
echo '<br />';
echo '"one"=="one" : ';
var_dump("one"=="one");   #true
echo '<br />';
?>
</body>
</html>

<!-- 비교연산자 != -->
<html>
<body>
<?php
echo "1!=2 : ";
var_dump(1!=2);           #true
echo '<br />';
echo "1!=1 : ";
var_dump(1!==1);           #false
echo '<br />';
echo '"one"!="two" : ';
var_dump("one"!="two");   #true
echo '<br />';
echo '"one"!="one" : ';
var_dump("one"!="one");   #false
echo '<br />';
?>
</body>
</html>

<!-- 비교연산자 > -->
<html>
<body>
<?php
echo "10>20 : ";
var_dump(10>20);           #false
echo '<br />';
echo "10>1 : ";
var_dump(10>1);           #true
echo '<br />';
echo '10>10 : ';
var_dump(10>10);   #false
?>
</body>
</html>

<!-- 비교연산자 >= -->
<html>
<body>
<?php
echo "10>=20 : ";
var_dump(10>=20);           #false
echo '<br />';
echo "10>=1 : ";
var_dump(10>=1);           #true
echo '<br />';
echo '10>=10 : ';
var_dump(10>=10);   #true
?>
</body>
</html>