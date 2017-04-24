 <!DOCTYPE html>
  <html>
    <head>
      
  <title>NEXT CARE | PAGA DOCS</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script>
            $(document).ready(function(){
                
              $('.button-collapse').sideNav({
                  menuWidth: 300, // Default is 300
                  edge: 'left', // Choose the horizontal origin
                  closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                  draggable: true // Choose whether you can drag to open on touch screens
                }
              );
            });
        </script>
    </head>

    <body style="background-color:#fafafa">
        
        <?php include "nav.php";?>
        
        <ul id="slide-out" class="side-nav">
            <center>
                  <br>  
                <img src="img/LOGO1.png" width="50%">
                  <hr style="opacity:.3">
                  <br>
                  
                  <img src="img/ava.jpg" class="circle" width="50%">
                
                <p style="font-size:120%;margin-top:0px">User Name</p>
                <a class="waves-effect waves-light btn" style="background-color:#1976d2">Edit</a>
                  
                  <br>
                  <br>
                  
                   
                  <div class="collection">
                    <a href="home.php" class="collection-item" style="background-color:#eceff1">Home</a>
                    <a href="women.php" class="collection-item" style="background-color:#eceff1">For Women</a>
                    <a href="cert.php" class="collection-item" style="background-color:#eceff1">For Infant</a>
                    <a href="paga.php" class="collection-item" style="background-color:#eceff1">Prega Tracker</a>
                    <a href="social.php" class="collection-item" style="background-color:#eceff1">Health Centre</a>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
              </center>
        </ul>
    
        <div class="row">

          <div class="col s12 m2 l2 z-depth-1 hide-on-med-and-down" style="background-color:white;"> <!-- Note that "m4 l3" was added -->
            <!-- Grey navigation panel
asd
                  This content will be:
              3-columns-wide on large screens,
              4-columns-wide on medium screens,
              12-columns-wide on small screens  -->
              <center>
                  <br>  
                <img src="img/LOGO1.png" width="40%">
                  <hr style="opacity:.3">
                  <br>
                  
                  <img src="img/ava.jpg" class="circle" width="60%">
                
                <p style="font-size:120%;margin-top:0px"><b>Claire</b></p>
                  <br>
                  <div class="collection">
                    <a href="home.php" class="collection-item" style="background-color:#eceff1">Home</a>
                    <a href="women.php" class="collection-item" style="background-color:#eceff1">For Women</a>
                    <a href="cert.php" class="collection-item" style="background-color:#eceff1">For Infant</a>
                    <a href="paga.php" class="collection-item" style="background-color:#eceff1">Prega Tracker</a>
                    <a href="social.php" class="collection-item" style="background-color:#eceff1">Health Centre</a>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
              </center>

          </div>

          <div class="col s12 m8 l8" style=""> 
            <div class="container-fluid">
                <br>
                <div class="row" style="margin-bottom:0px">
                    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nextcare";
//create connection
$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
	die("connection failed:" .$conn->connect_error);

}
else
{                   
$sql1="SELECT * from uploaddata";
$result = $conn->query($sql1);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        ?>
        
        <div class="col s11 m6 l12">
          <div class="card green darken-500">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $row["name"];?></span>
              <p><img class="responsive-img" src="img/<?php echo $row["image"];?>" style="height:100px;width:100px"  attributes="#"></img><br>Hb:<?php echo $row["data"];?><br><b><?php echo $row["test"];?></b><br>Everthing All Right</p>
            </div>
            <div class="card-action">
              <a href="#" class="black-text">View Report</a>
              
            </div>
          </div>
        </div>
      </div>
      <?php  
}
}
}

?>
        <div class="col s11 m6 l12">

          <div class="card white darken-500">
            <div class="card-content white-text">
              <div class="row">
    <form class="col s12" method="post" enctype="multipart/form-data" action="upload.php">
      <div class="row">
        <div class="input-field col s12">
         
          <input id="icon_prefix" type="text" class="validate black-text" name="name">
          <label for="icon_prefix">Report Name</label>
        </div>
        <div class="input-field col s12">
         <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="filep" size=45>
      </div>
      <div class="file-path-wrapper">
       <!-- <input class="file-path validate black-text" accept="image/*" type="text" placeholder="Upload one or more files">--><input type=file  name="filep" size=45>
      </div>
    </div>
        </div>

         <div class="input-field col s12">
          
          <input id="icon_telephone" type="tel" class="validate black-text" name="data">
          <label for="icon_telephone">Hemoglobin</label>
        </div>

         <div class="input-field col s12">
          
          <input id="icon_telephone" type="tel" class="validate black-text" name="test">
          <label for="icon_telephone">Tests/Remarks</label>
        </div>

        <div class="input-field col s12">
          
           <input class="btn waves-effect waves-light" style="background-color:#0d47a1;" type="submit" name="action">Submit</input>
    <i class="material-icons right">send</i>
        </div>
      </div>
    </form>
  </div>
          </div>
        </div>
                </div> 
                
            </div>
                  
          </div>
            
            <div class="col s12 m2 z-depth-1 l2" style="background-color:white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col m12 s12 l12" style="padding:0.5%">
                            <p>Nearest Hospital</p>
                            <hr style="opacity:0.3">
<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d109150.88831861287!2d75.63515496484219!3d31.249385017232107!3m2!1i1024!2i768!4f13.1!2m1!1snearest+hospital!5e0!3m2!1sen!2sin!4v1492867263308" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col s12 m12 l12" style="padding:0px">
                            <p>Latest News</p>
                            <hr style="opacity:0.3">
                            
                          <ul id="tabs-swipe-demo" class="tabs" style="margin:0px;background-color:#1976d2">
                            <li class="tab col s6"><a href="#test-swipe-1" style="color:white">Health</a></li>
                            <li class="tab col s6"><a href="#test-swipe-2" style="color:white">NEWS</a></li>
                          </ul>
                          
                          <div id="test-swipe-1" class="col s12">
                            <p style="font-size:110%">Woman whose overdose video went viral says clip helped save her life</p>  
                            <p style="font-size:90%">A woman whose overdose went viral last month said the negative publicity she received from it has actually given her a second chance at life.</p>  
                          </div>
                            
                            
                          <div id="test-swipe-2" class="col s12">
                            <p style="font-size:110%">Traveling soon? Look out for bed bugs</p>  
                            <p style="font-size:90%">Every traveler loves a comfy night’s sleep, whether you’re vacationing in your dream city or finding repose on a business trip. While you’re settling in for a nice sleep, however, one pest may be just waking up. That pest is a bed bug, and they pose a steep challenge to travelers.</p>  
                          </div>
                      </div>
                </div>
            </div>

    </div>
        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        