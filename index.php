<html>
	<head>
		<title></title>
		<link rel='stylesheet' href='style.css'>
	</head>
	<body>
		<!-- <img src='./images/albert_einstein.jpg'> -->
		<?php
			// names, images, age, birthday, and contact number
			$contacts = array(
				array("name"   => 'Barack Obama', 
					  "img_id" => 'images/barack_obama.jpg', 
					  "age"    => 59, 
					  "bday"   => 'August 4, 1961', 
					  "num"    => '09117311384'),
				array('name'   => 'Ellen DeGeneres', 
					  'img_id' => 'images/ellen_degeneres.jpg', 
					  'age'    => 63, 
					  'bday'   => 'January 26, 1958', 
					  'num'    => '09245094743'),
				array('name'   => 'Johnny Depp', 
					  'img_id' => 'images/johnny_depp.jpg', 
					  'age'    => 57, 
					  'bday'   => 'June 9, 1963', 
					  'num'    => '09917098018'),
				array('name'    => 'Leonardo DiCaprio', 
					  'img_id' => 'images/leonardo_dicaprio.jpg', 
					  'age'    => 46, 
					  'bday'   => 'November 11, 1974', 
					  'num'    => '09514808435'),
				array('name'   => 'Oprah Winfrey', 
					  'img_id' => 'images/oprah_winfrey.jpg', 
					  'age'    => 67, 
					  'bday'   => 'January 29, 1954', 
					  'num'    => '09910562466'), 
				array('name'   => 'Queen Elizabeth', 
					  'img_id' => 'images/queen_elizabeth.jpg', 
					  'age'    => 94, 
					  'bday'   => 'April 21, 1926', 
					  'num'    => '09633622496'), 
				array('name'   => 'Robert Downey Jr.', 
					  'img_id' => 'images/robert_downey.jpg', 
					  'age'    => 55, 
					  'bday'   => 'April 4, 1965', 
					  'num'    => '09412095632'), 
				array('name'   => 'Rowan Atkinson', 
					  'img_id' => 'images/rowan_atkinson.jpg', 
					  'age'    => 66, 
					  'bday'   => 'January 6, 1955', 
					  'num'    => '09290334376'), 
				array('name'   => 'Taylor Swift', 
					  'img_id' => 'images/taylor_swift.jpg', 
					  'age'    => 31, 
					  'bday'   => 'December 13, 1989', 
					  'num'    => '09029679884'), 
				array('name'   => 'Meryl Streep', 
					  'img_id' => 'images/meryl_streep.jpg', 
					  'age'    => 71, 
					  'bday'   => 'June 22, 1949', 
					  'num'    => '09372167088')
			);

			
			
		?>


		<table>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Image</th>
				<th>Age</th>
				<th>Birthday</th>
				<th>Contact Number</th>
			</tr>
			<tr>
				<?php
					for ($x = 0; $x < count($contacts); $x++) {
						$src = $contacts[$x]['img_id'];

						echo "<tr>";
						echo "<td>".($x + 1)."</td>";
						echo "<td>".$contacts[$x]['name'];
						echo "<td><img src='$src'></td>";
						echo "<td id='age_column'>".$contacts[$x]['age']."</td>";
						echo "<td>".$contacts[$x]['bday']."</td>";
						echo "<td>".$contacts[$x]['num']."</td>";
						echo "</tr>";
					};
				?>
			</tr>
		</table>
	</body>
</html>	
