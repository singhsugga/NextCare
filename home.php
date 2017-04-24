 <!DOCTYPE html>
  <html>
    <head>
    
  <title>NEXT CARE | HOME</title>
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
                    <a href="women.php" class="collection-item" style="background-color:#eceff1">For Women</a>
                    <a href="cert.php" class="collection-item" style="background-color:#eceff1">For Infant</a>
                    <a href="paga.php" class="collection-item" style="background-color:#eceff1">Prega Tracker</a>
                    <a href="document.php" class="collection-item" style="background-color:#eceff1">Prega Docs</a>
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
                    <a href="women.php" class="collection-item" style="background-color:#eceff1">For Women</a>
                    <a href="cert.php" class="collection-item" style="background-color:#eceff1">For Infant</a>
                    <a href="paga.php" class="collection-item" style="background-color:#eceff1">Prega Tracker</a>
                    <a href="document.php" class="collection-item" style="background-color:#eceff1">Prega Docs</a>
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
                    <div class="col m4 s4">
                          <div class="card " style="background-color:#1976d2">
                            <div class="card-content white-text">
                              <span class="card-title">Expected Days Left</span>
                              <p style="font-size:150%">45</p>
                            </div>
                          </div>
                    </div>
                    
                     <div class="col m4 s4">
                          <div class="card " style="background-color:#1976d2">
                            <div class="card-content white-text">
                              <span class="card-title">Next Check Up</span>
                              <p style="font-size:150%">25-4-2017</p>
                            </div>
                          </div>
                    </div>
                    <div class="col m4 s4">
                          <div class="card " style="background-color:#1976d2">
                            <div class="card-content white-text">
                              <span class="card-title">Smart Watch</span>
                                <br>
                                  <div class="switch">
                                    <label class="white-text">
                                      Off
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                      On
                                    </label>
                                  </div>
                            </div>
                          </div>
                    </div>
                </div> 
                
                <div class="row" style="margin-top:0%">
                    <div class="col m4 s4">
                          <div class="card z-depth-1" style="margin:0px;padding:0%;background-color:#1976d2">
                            <div class="card-content white-text" style="padding:2%">
                              <span class="card-title">&nbsp;&nbsp;&nbsp;Near By Doctor</span>
                            </div>
                          </div>
                        <div class="collection z-depth-1" style="margin:0px">
                            <a href="#!" class="collection-item">Dr. Dharmik </a>
                            <a href="#!" class="collection-item">Dr. Kishan</a>
                            <a href="#!" class="collection-item">Dr. Vijay</a>
                            <a href="#!" class="collection-item">Dr. Jay</a>
                        </div>
                    </div>
                    
                     <div class="col m8 s8">
                          <div class="card z-depth-1 " style="margin:0px;padding:0%;background-color:#1976d2">
                            <div class="card-content white-text" style="padding:1%">
                              <span class="card-title">&nbsp;&nbsp;&nbsp;Vaccine List</span>
                            </div>
                          </div>
                        <div class="collection z-depth-1" style="margin:0px">
                            <a href="#!" class="collection-item">Flu Shot</a>
                            <a href="#!" class="collection-item">Tetanus Toxoid</a>
                            <a href="#!" class="collection-item">Zoster</a>
                            <a href="#!" class="collection-item">Rubella</a>
                        </div>
                    </div>
                </div>
                
                <div class="row" style="margin-top:0%">
                    <div class="col m4 s4">
                          <div class="card z-depth-1" style="margin:0px;padding:0%;background-color:#1976d2;">
                            <div class="card-content white-text" style="padding:1%;">
                              <span class="card-title">&nbsp;&nbsp;&nbsp;My Messages</span>
                            </div>
                          </div>
                        <div class="z-depth-1 white" style="margin:0;height:120px">
                            <p style="margin:0px;padding:3.888%">Messages Related to check up and medicines</p>   
                        </div>
                    </div>
                    
                     <div class="col m8 s8">
                          <div class="card z-depth-1 " style="margin:0px;padding:0%;background-color:#1976d2;">
                            <div class="card-content white-text" style="padding:0.5%;">
                              <span class="card-title">&nbsp;&nbsp;&nbsp;Pulse Rate</span>
                            </div>
                          </div>
                        <img class="z-depth-1" src="img/18072855_1328780857198861_1704706545_n.gif" style="width:100%">
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
        