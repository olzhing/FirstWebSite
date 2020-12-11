<!DOCTYPE html>
<html>
<style>

body {
	position: absolute;
	left: 530px;
	top:200px;
	text-align:center;
	border: 1px solid red;
	padding: 15px 15px 15px 15px;
}

form {
	position: relative;
	top: 20px;
}


</style>

<body>

We sent code to <?php echo $_GET["number"]; ?> 
<br>
<br>
Write down them:
<form action="Main.html" method="get">
<input type = "text" name = "number"/>
</form>

HOME


</body>
</html>
