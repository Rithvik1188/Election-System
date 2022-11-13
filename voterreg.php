<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>online Election System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!--
             <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li> 
          -->
          </ul>
          

          <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">Voter Registration Form.</h2>
            <p class="normalFont">Prove Your Authencity of being correct voter.</p>
          </div>
          
          <form action="#" method="POST">
          <div class="form-group">
            <label>Voter's Name :</label><br>
            
            <input type="text" name="voterName"  title="Enter Your Full Name" placeholder="Enter Your Full Name" class="form-control" required/><br>

            <label>Voter's Registered Email ID :</label><br>
            <input type="text" name="voterEmail" placeholder="Enter Your Email ID" class="form-control"/><br>

            <label>Voter's Passport Number:</label><br>
            <input id="id1" type="text" name="voterID"  placeholder="Enter Your Voter Passport  ID" class="form-control" required/><br>
            
            
            <label>Location:</label><br>
            <select name=location class="form-control"><option>wichita</option></select><br>

            
            
            <button type="submit" name="submit" class="btn btn-primary"><strong>Submit</strong></button>
              <button type="submit" class="btn btn-default">Decline</button><br><br>
            </div>
          </div><br><br>
          </form><br><br>
<br><br>

                  <form action="#" method="POST">
  
<?php
    						
include('connection.php');

if(isset($_POST["submit"]))
{
$vname=$_POST['voterName'];

$vemail=$_POST['voterEmail'];

$vid=$_POST['voterID'];

$location=$_POST['location'];

$v="pending";
$type='voter';



function username_generate($chars) 
{
  $data = '1234567890';
  return substr(str_shuffle($data), 0, $chars);
}
  $loginid=username_generate(4);




function password_generate($chars) 
{
  $data = 'abcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  $password= password_generate(4)
  ;











$vi=0;
$sql6="Select voter_id from tbl_users where voter_id='$vid'";
$rs6=mysql_query($sql6) or die(mysql_error());
while($myrowc=mysql_fetch_row($rs6))
 {
           
$vi++;
}

if($vi==0)
{

$sql6="insert into tbl_users(full_name,email,voter_id,verification,location,type,loginid,password)values('$vname','$vemail','$vid','$v','$location','$type','$loginid','$password')";
$rs6=mysql_query($sql6) or die(mysql_error());

echo"<br><br><center><font color=green size=4><b><br><br>Voter Enrolled Sucessfully.. <br><br> <center><font color=blue>Generated Username :$loginid   and   Password :$password </font><br><br><center>You have to login after Admin complete the verification Process";
}

if($vi !=0)
{
echo"<center><font color=RED size=4><b>Voter Already Enrolled";
}

}

				?>

				
        </div>
      </div>
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
