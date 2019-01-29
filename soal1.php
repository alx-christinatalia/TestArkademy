<html>
<head>
	<title>Soal1</title>
</head>
<body>
	<?php
		getBio();
		function getBio() {
		    $data = array("name" => "Alexandria Christina Natalia", 
		    "address" 			 => "Batu City", 
		    "hobbies" 			 => array("reading", "eating"),
		    "is_marieed"          => false, 
		    "school" => array("highSchool" => "SMK PGRI 3 Malang", 
		    				  "university" => null), 
		    "skills" => array(
						        "WEB Back-End" => array("PHP", "Node JS", "Python"), 
						        "Desktop" => array("Java Net-Beans", "VB.NET"), 
						        "Mobile" => array("Java Android")));
   			echo json_encode($data);
		}
	?>
</body>
</html>