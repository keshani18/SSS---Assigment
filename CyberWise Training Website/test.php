<?php
// Database Connection 
require_once("configurations/dbconfig.php");
//Check for connection error
$select = "SELECT * FROM `music`";
$result = $conn->query($select);
while($row = $result->fetch_object()){
  $pdf = "phishing-awareness-ppt.pdf";
  $path = "./uploads/music/phishing-awareness-ppt.pdf";
 
}

echo '<h1>Here is the information PDF</h1>';
echo '<strong>File Name : </strong>'.$pdf;
?>
<br/><br/>
<iframe src="<?php echo $path.$pdf; ?>" width="90%" height="500px">
</iframe>