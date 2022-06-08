<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/check2.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>check2</title>
</head>
<body>
	<div class="banner full-width clearfix">
		<div class="fixed-width">
			
				<table align="center" border="1px" style="width:600px; line-height:40px;">
					<tr>
            			<th> name</th>
            			<th> choice</th>
        			</tr>
        			<?php
        			$connect = mysqli_connect("localhost", "root", "", "try");
        			$sql = "SELECT * from users";
        			$result = $connect->query($sql);

        			if($result->num_rows > 0){
            			while($row = $result-> fetch_assoc()){
                			echo"<tr><td>" . $row["Name"] . "</td><td>" . $row["Choice"] . "</td></tr>";
            			}
        			}
        			else{
            			echo "No result!";
        			}
        			$connect->close();
        			?>
				</table>
			
		</div>
	</div>
</body>
</html>














