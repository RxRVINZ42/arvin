<DOCTYPE! html>
<html>
<head>
<title>Registration</title>
</head>
<body>

<?php
	$name = $_POST["Fname"];
	$IC_num = $_POST["noIC"];
	$email = $_POST["email"];
	$state = $_POST["negeri"];

	function getDob($IC_num){
		$tahun = substr($IC_num, 0, 2);
		$bulan = substr($IC_num, 2, 2);
		$hari = substr($IC_num, 4, 2);

		$dob = $tahun. "-" .$bulan. "-" .$hari;

		return date("d-M-Y" ,strtotime($dob));

	}

	function getGender($IC_num){
		$gender = substr($IC_num, -1);

		if (in_array($gender, array(2,4,6,8))) {
			return "girl..";
		}
		else if(in_array($gender, array(1,3,5,7,9))){
			return "boy..";
		}
	}

	echo "<center><font size = '5'>Welcome $name </center>";

	echo "<br>Your name is: ".$name;
	echo "<br>Your IC Number is: ".$IC_num;
	echo "<br>Your e-mail is: ".$email;
	echo "<br>Your state is: ".$state;
	echo "<br>Your date of birth is: ".getDob($IC_num);
	echo "<br>Your gender is: ".getGender($IC_num);




	?>

</body>
</html>