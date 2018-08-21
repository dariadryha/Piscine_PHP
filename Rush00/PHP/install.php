<?php
$servername = "localhost";
$username = "root";
$password = "u9kx2mZu";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (!mysqli_select_db($conn, "myDB"))
{
	$sql = "CREATE DATABASE myDB";
	mysqli_query($conn, $sql);
	mysqli_select_db($conn, "myDB");
	$sql = "CREATE TABLE MyKitchenTools (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Stuff VARCHAR(30) NOT NULL,
	Category VARCHAR(30) NOT NULL,
	Photo VARCHAR(500) NOT NULL,
	Price INT(1)
	)";
	mysqli_query($conn, $sql);
	$cup1 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Cup White', 'Cup', './picture/cup1.jpg', '99')";
	$cup2 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Сup Color A', 'Cup', './picture/cup2.jpg', '120')";
	$cup3 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Cup Color B', 'Cup', './picture/cup3.jpg', '120')";
	$cup4 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Cup Metal A', 'Cup', './picture/cup4.jpg', '211')";
	$cup5 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Cup Metal B', 'Cup', './picture/cup5.jpg', '231')";

	$plate1 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Plate Color A', 'Plate', './picture/plate1.jpg', '300')";
	$plate2 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Plate Color B', 'Plate', './picture/plate2.jpg', '300')";
	$plate3 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Plate Sapphire', 'Plate', './picture/plate3.jpg', '421')";
	$plate4 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Plate Gold', 'Plate', './picture/plate4.jpg', '321')";
	$plate5 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Plate Sapphire', 'Plate', './picture/plate5.jpg', '421')";

	$glass1 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Glass Green', 'Glass', './picture/glass1.jpg', '75')";
	$glass2 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Glass Dark', 'Glass', './picture/glass2.jpg', '85')";
	$glass3 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Glass Metal', 'Glass', './picture/glass3.jpg', '120')";
	$glass4 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Glass Coctail', 'Glass', './picture/glass4.jpg', '252')";
	$glass5 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Glass Whiskey', 'Glass', './picture/glass5.jpg', '270')";

	$pan1 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Pan Type A', 'Pan', './picture/pan1.jpg', '800')";
	$pan2 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Pan Type B', 'Pan', './picture/pan2.jpg', '810')";
	$pan3 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Pan Type C', 'Pan', './picture/pan3.jpg', '810')";
	$pan4 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Pan Type D', 'Pan', './picture/pan4.jpg', '900')";
	$pan5 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Pan Type E', 'Pan', './picture/pan5.jpg', '910')";

	$pot1 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Pot Type A', 'Pot', './picture/pot1.jpg', '548')";
	$pot2 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Pot Type B', 'Pot', './picture/pot2.jpg', '568')";
	$pot3 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Pan Type C', 'Pot', './picture/pot3.jpg', '800')";
	$pot4 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Pan Type D', 'Pot', './picture/pot4.jpg', '900')";
	$pot5 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Pan Type E', 'Pot', './picture/pot5.jpg', '1000')";

	$kett1 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Kettle Type A', 'Kettle', './picture/kettle1.jpg', '644')";
	$kett2 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Kettle Type B', 'Kettle', './picture/kettle2.jpg', '568')";
	$kett3 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Kettle Type C', 'Kettle', './picture/kettle3.jpg', '800')";
	$kett4 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Kettle Type D', 'Kettle', './picture/kettle4.jpg', '900')";
	$kett5 = "INSERT INTO MyKitchenTools (Stuff, Category, Photo, Price)
		VALUES ('Kettle Type E', 'Kettle', './picture/kettle5.jpg', '1000')";	
	/*if (mysqli_query($conn, $one))
		echo "DONE";
	else
		echo "CRAP PHOTO";*/
	mysqli_query($conn, $cup1);
	mysqli_query($conn, $cup2);
	mysqli_query($conn, $cup3);
	mysqli_query($conn, $cup4);
	mysqli_query($conn, $cup5);

	mysqli_query($conn, $plate1);
	mysqli_query($conn, $plate2);
	mysqli_query($conn, $plate3);
	mysqli_query($conn, $plate4);
	mysqli_query($conn, $plate5);

	mysqli_query($conn, $glass1);
	mysqli_query($conn, $glass2);
	mysqli_query($conn, $glass3);
	mysqli_query($conn, $glass4);
	mysqli_query($conn, $glass5);

	mysqli_query($conn, $pan1);
	mysqli_query($conn, $pan2);
	mysqli_query($conn, $pan3);
	mysqli_query($conn, $pan4);
	mysqli_query($conn, $pan5);

	mysqli_query($conn, $pot1);
	mysqli_query($conn, $pot2);
	mysqli_query($conn, $pot3);
	mysqli_query($conn, $pot4);
	mysqli_query($conn, $pot5);

	mysqli_query($conn, $kett1);
	mysqli_query($conn, $kett2);
	mysqli_query($conn, $kett3);
	mysqli_query($conn, $kett4);
	mysqli_query($conn, $kett5);
}
	$a = $_GET['value'];
	$text = "SELECT Stuff, Price, Photo FROM MyKitchenTools WHERE Category = '$a'";
	$res = mysqli_query($conn, $text);
	$res =  mysqli_fetch_all($res, MYSQLI_ASSOC);
	mysqli_close($conn);
?>
