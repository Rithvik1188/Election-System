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
          <a href="main.php" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
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

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">CONTROL PANEL</h2>
            <p class="normalFont">This is Administration Panel.</p>
          </div>
          
          <div class="col-sm-12">
            <?php
              include('connection.php');
  
    $tc=0;        
$sql6="Select full_name,id from tbl_users where type='candidate'";
$rs6=mysql_query($sql6) or die(mysql_error());
while($myrowc=mysql_fetch_row($rs6))
 {
$name=strtoupper($myrowc[0]);$cid=strtoupper($myrowc[1]);

$c=0;

$sql7="Select * from tbl_users WHERE voted_for='$cid'";
$rs7=mysql_query($sql7) or die(mysql_error());
while($myrowc=mysql_fetch_row($rs7))
 {
 $c++;    
 $tc++;
       
}

                          $value= $c;

                  echo "<strong>$name</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$value."%'>
                      <span class='sr-only'>$name</span>
                    </div>
                  </div>
                  ";
                                    echo "<strong>Total Poled of Votes for $name : $c<br></strong><br>";

                }

               

                  $tptal= $tc;

                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>VOTES : $tc </h3>
                  </div>
                  ";
             
            ?>
          </div>

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
