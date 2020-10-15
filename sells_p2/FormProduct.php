<html>
<title>
Sells System
</title>
<body>
<a href = "mainpage.php">Back</a>
<img src = "happydude.png" alt = "not found">
<form action = "FormHandelProduct.php" method = "POSt">

<input type = "text" name = "name" placeholder = "name">
Exp Date
<select name = "day">
<?php
for ($i = 1 ; $i < 32; $i = $i+1)
	echo "<option value = '$i'>$i</option>";
?>

</select>
<select name = "month">
<?php
for ($i = 1 ; $i < 13; $i = $i+1)
	echo "<option value = '$i'>$i</option>";
?>
</select>

<select name = "year">
<?php
for ($i = 2000 ; $i <= date(Y)+30; $i = $i+1)
	echo "<option value = '$i'>$i</option>";
?>
</select>
<input name="butsave" type = "submit" value = "save">
</form>
</body>
</html>
