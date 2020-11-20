<html>
<head>
<title>ITF Lab</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'nonthapaht228.mysql.database.azure.com', 'nonthapaht@nonthapaht228', 'Non0642306141', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM user');
?>
<center><header style="font-size:300%;">Data Base Project</header></center>
<div class="container">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<table class="table" id="myTable">
  <thead class="thead-dark">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="250"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
    <th width="70"> <div align="center">Button </div></th>
  </tr>
</thead>
<tbody>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
   <tr id="<?php echo $Result['id'];?>">
    <td><center><?php echo $Result['name'];?></center></div></td>
    <td><center><?php echo $Result['comment'];?></center></td>
    <td><center><?php echo $Result['link'];?></center></td>
    <td><center><a href="delete.php?ID=<?php echo $Result['id'];?>" class="btn btn-sm btn-danger mb-2 mb-md-0">DEL</a> <a href="edit.php?ID=<?php echo $Result['id'];?>" class="btn btn-sm btn-dark">EDIT</a></td>
  </tr>
<?php
}
?>
<script>
// function myDeleteFunction(id) {
//   var element =  document.getElementById(id);
//   element.parentNode.removeChild(element)
// }

// funtion Edit(id) {
//   document.getElementById()
// }
</script>
</tbody>
</table>
<div class="row">
  	<div class="col-6 text-right"><a href="form.php" class="btn btn-warning btn-sm font-weight-bold">ADD</a></div>
</div>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
