<?php
include('connection.php');
extract($_REQUEST);
if(isset($save))
{
  $sql= mysqli_query($con,"select * from space_booking_details  where space_type='$space_type' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> account already exists</h1>";    
  }
}
  else
  {

$sql="insert into space_booking_details(space_type,check_in_date,check-in time,hours) values('$space_type','$cdate','$ctime','$htime')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>"; 
   header('location:Login.php'); 
   }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Natural Space</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top:50px;">
  <?php
  include('Menu Bar.php');
  ?>
<div class="container-fluid text-center"id="primary"><!--Primary Id-->
  <h1>[ BOOKING Form ]</h1><br>
  <div class="container">
    <div class="row">
      <center><?php echo @$msg;?></center><br>
    <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
          <div class="form-group">

           <div class="col-sm-6">
            <div class="form-group">
                <label for="validationCustom03">Space Type</label>
 <select class="form-control custom-select" name="space_type" required>
<option value="">Select Space</option>
<?php
$ret=mysqli_query($con,"select type from space");
while($row=mysqli_fetch_array($ret))
{?>
<option value="<?php echo $row['type'];?>"><?php echo $row['type'];?></option>
<?php } ?>
</select>
</div>
</div>
         
 <div class="col-sm-6">
            <div class="form-group">
                <label for="validationCustom03">Check-in Date</label>
<input type="date" class="form-control" placeholder="date" name="cdate" required>
</div>
</div> 

<div class="col-sm-6">
            <div class="form-group">
                <label for="validationCustom03">Check-in Time</label>
<input type="time" class="form-control" placeholder="time" name="ctime" required>
</div>
</div>  

<div class="col-sm-6">
            <div class="form-group">
                <label for="validationCustom03">How Many Hours</label>
              <input type="text" name="htime" class="form-control"placeholder="Enter  Hours"required>
          </div>
        </div> 
<div class="row">
            <div class="col-sm-6"style="text-align:right;"><br>
            <input type="submit" value="Submit" name="save"class="btn btn-danger btn-group-center"required style="color:#FFF;font-family: 'Arial', cursive;height:40px;"/>
         </div>
      </div>
    </div>
       </form><br>
    </div>
  </div>
</div>
</div>
<?php
include('Footer.php')
?>
</body>
</html>
`