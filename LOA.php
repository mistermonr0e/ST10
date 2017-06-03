<?php 
	include "link.php";
	$name = $_POST['name'];
	$dateS = $_POST['dateS'];
	$dateE = $_POST['dateE'];
	$res = $_POST['res'];
	echo'your LOA has been sent good job!';
	echo'<br> please check that on last time that this LOA is correct <br>
		'.$name.'<br>'.$dateS.'<br>'.$dateE.'<br>'.$res.'
		<br> <a href="index.php"> back to OP center</a>
	';
	$sql = "INSERT INTO loa (name, dateS, dateE, res) VALUES('$name','$dateS','$dateE','$res')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>