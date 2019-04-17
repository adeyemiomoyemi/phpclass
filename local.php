<!DOCTYPE html>
<html>
<body>
<?php
function mytest() {
$x= 5;//local scope
    echo "<p>variable x inside function is: $x </p>";
}
mytest();
    // using x outside the function will generate an error
echo "<p>variable x outside function is:$x</p>";
?>
</body>
</html>