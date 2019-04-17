<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
//define variables and set to empty values
$name=$email=$gender=$comment=$website="";
if($_ SERVER["REQUEST_METHOD"]=="POST"){
$name=test_input($_POST{"name"});
$email=test_input($_POST{"email"});
$website=test_input($_POST{"website"});
$comment=test_input($_POST{"comment"});
$gender=test_input($_POST{"gender"});
}
function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>
<h2>PHP form validation example</h2>
<form method="post action="<?php echohtmlspecialchars($_SERVER["PHP_SELF"]);?>"
>
Name:<input type="text"name="name">
<br><br>
E_mail:<input type="text"email="email">
<br><br>
website:<input type="text"website="website">
<br><br>
comment:<input type="text"comment="comment">
<br><br>
Gender:
<input type="radio"name="gender"value="female">female
<input type="radio"name="gender"value="male">male
<input type="radio"name="gender"value="other">other
<br><br>
<input type="submit"name="submit">
</form>
<?php
echo "<h2>your input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>

