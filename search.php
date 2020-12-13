<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<style>
html {
	font-family: Ubuntu;
	text-align: center;
}

div {
	border: 3px solid ;
}

body a {
	font-size:35px;
	position:absolute;
	left:15px;
	top:20px;
	color:#5F39E2;
}

form {
	margin-top:70px;

}

html {
    font-family: Ubuntu;
    text-align: center;
  }

div #p {
  font-size: 35px;
  border: 1px solid transparent;
  background-color: #5F39E2;
  margin-left:150px;
  margin-right:150px;
}

a {
	text-decoration: none;
}
</style>
<body>

<a href = "Main.html">TALAPTAN</a>
<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>
</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=uni",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `message` WHERE title = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<div><p id = "p"><?php echo $row->title; ?></p><br>
		<p><?php echo $row->text;?></p>
		<p><?php echo $row->ftext;?></p>
	</div>
		

<?php 
	}
		
		
		else{
			echo "Have no in database";
		}


}

?>