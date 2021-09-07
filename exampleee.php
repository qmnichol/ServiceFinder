<!DOCTYPE html>
<html>
<head>
  <title>Fetch image from database in PHP</title>
</head>
<body>

<h2>All Records</h2>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Name</td>
    <td>Images</td>
  </tr>

<?php

include "exmp.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT * FROM sign_up"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['fname']; ?></td>
    <td><img src="asset/img/<?php echo $data['image']; ?>" width="100" height="100"></td>
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($db);  // close connection ?>

</body>
</html>