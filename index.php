<?php
date_default_timezone_set("America/New_York");
$Ctime = date("H:i");
$checkDate = date("m/d/Y");
// head tag and imports
echo'
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ST10 OP Center</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="op_main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>';
//main body
echo'
<body>
<div class="jumbotron text-center">
  <h1>OP CENTER</h1>
</div>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#row1">News</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#row2">OPS</a></li>
      <li><a href="#">L.O.A</a></li>
    </ul>
  </div>
</nav>';
//main body container
echo '
<div class="container">
';
//News and emergnecy messages
echo'
	<div id="row1" class="row">
		<h3 class="text-center">News Flash</h3>
		<h4 id="clock" class="text-center">'.$Ctime.'</h4>
	</div>
';
//Operations
echo '
	<div id="row2" class="row">
		<h3 class="text-center">Upcoming Operations</h3>
	</div>
';
// L.O.A
echo '
	<div id="row3" class="row"> 
		<h3 class="text-center">L.O.A</h3>
	<div class="col-sm-6">
		<form action="LOA.php" method="post">
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="Reason">Date Start:</label>
    <input type="date" class="form-control" name="dateS">
  </div>
  <div class="form-group">
    <label for="Reason">Date End:</label>
    <input type="date" class="form-control" name="dateE">
  </div>
  <div class="form-group">
    <textarea id="res" name="res" rows="10" cols="50">
Reason for LOA, Can be anything I dont Care.
</textarea>
  </div>
  <button id="submit" type="submit" class="btn btn-default">Submit</button>
</form>
	</div>
	<div class="col-sm-6">
	<h3>Recent LOAs</h3>
	<br>
	<ul> 
		<li>'.$checkDate.'</li>
	</ul>
	</div>
	</div>
';
//close all of main body
echo '
</div>
</body>
</html>
';





?>