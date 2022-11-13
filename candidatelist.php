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
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 85%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #588181;
  color: white;
}
</style>

    
    
    
    
    
    
    
    
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
          <a href="main.phpl" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>


<div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
                         <li><a href="verification.php"><span class="subFont"><strong>Verification</strong></span></a></li>
             <li><a href="candidatelist.php"><span class="subFont"><strong>Candidate's List</strong></span></a></li>
                          <li><a href="voterslist.php"><span class="subFont"><strong>Voters List</strong></span></a></li>

            <li><a href="changePassword.php"><span class="subFont"><strong>Admin's Password</strong></span></a></li>
                      <li><a href="cpanel.php"><span class=""><strong>VOTES POLL</strong></span></a></li> 

          </ul>
          
          
          <span class="normalFont"><a href="index.html" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!--
             <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li> 
          -->
          </ul>
          

        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      
          
         
            <?php
						
include('connection.php');




echo "<table id=customers><th colspan=50 bgcolor=wheat><font color=white  size=4 ><b><center>CANDIDATE LIST</th>
 <tr>
<th><b><center>S.No</th>
<th><b><center>Name</th>
<th><b><center>Email</th>
<th><b><center>Document Number</th>
<th><b><center>About Candidate</th>
</tr>";


$sql6="Select full_name,email,voter_id,aboutcan from tbl_users where type='candidate' and verification='verify'";
$rs6=mysql_query($sql6) or die(mysql_error());


while($myrowc=mysql_fetch_row($rs6))
 {
            
$name=strtoupper($myrowc[0]);$email=strtoupper($myrowc[1]);$voterid=strtoupper($myrowc[2]);$about=strtoupper($myrowc[3]);


$i++;

echo "<tr><td><center> $i</td>
<td><center> $name</td>
<td> $email</td>
<td><center> $voterid</td>
<td><center> $about</td>";
?>

<?php
echo"</tr>";
}
echo "</table>";
?>



          </form><br><br>
<br><br>

                  <form action="#" method="POST">
  
				
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
