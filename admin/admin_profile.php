<?php 
$i=1;
$sql=mysqli_query($con,"select * from admin");
while($res=mysqli_fetch_assoc($sql))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Natural Space</title>
	<link href="https://fonts.googleapis.com/css?family=Arial" rel="stylesheet">
</head>
<body>
<h1 style="background-color:#42f575;border-radius:100px;text-align:center;font-family: 'Arial', cursive;box-shadow:5px 5px 9px black;">Admin Profile</h1><br>
<center><img src="..\image\clipart\login-user-icon.png"style="width:180px;height:180px;"></center>
<div class="container"style="width:100%;">
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Name:</label>
       <input type="text" id="username" value="<?php echo $res['username']; ?>" class="form-control" name="name" readonly="readonly"/>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"value="<?php echo $res['password']; ?>">
    </div>
  </form>
</div>
<?php 	
}
?>
</body>
</html>