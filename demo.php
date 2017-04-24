 <!DOCTYPE html>
  <html>
    <head>
    
  <title>NEXT CARE | WOMEN'S</title>
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
                 
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15 // Creates a dropdown of 15 years to control year
                  });
            });
            
        </script>
    </head>

    <body style="background-color:#fafafa">
        
        <?php include "nav.php";?>
        
        <ul id="slide-out" class="side-nav">
            <center>
                  <br>  
                <img src="img/next-logo.png" width="70%">
                  <hr style="opacity:.3">
                  <br>
                  
                  <img src="img/cropped-icon_16571-grey15.png" width="50%">
                
                <p style="font-size:120%;margin-top:0px">User Name</p>
                  <br>
                  
                   
                  <div class="collection">
                    <a href="home.php" class="collection-item" style="background-color:#eceff1">Home</a>
                    <a href="cert.php" class="collection-item" style="background-color:#eceff1">For Infant</a>
                    <a href="paga.php" class="collection-item" style="background-color:#eceff1">Prega Tracker</a>
                    <a href="document.php" class="collection-item" style="background-color:#eceff1">Prega Docs</a>
                    <a href="" class="collection-item" style="background-color:#eceff1">Health Centre</a>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
              </center>
        </ul>
    
        <div class="row">

          <div class="col s12 m2 l2 z-depth-1 hide-on-med-and-down" style="background-color:white;"> 
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
                    <a href="cert.php" class="collection-item" style="background-color:#eceff1">For Infant</a>
                    <a href="paga.php" class="collection-item" style="background-color:#eceff1">Prega Tracker</a>
                    <a href="document.php" class="collection-item" style="background-color:#eceff1">Prega Docs</a>
                    <a href="" class="collection-item" style="background-color:#eceff1">Health Centre</a>
                  </div>
                  <br>
                  <br>
                  <br>
              </center>

          </div>

          <div class="col s10 m8 l8" style=""> 
                <div class="card-panel teal lighten-5 z-depth-1">
                    <div class="row valign-wrapper">
                        <div class="col s2">
                            <img src="img/profile.jpg" class="circle" style="height:120px;width:120px;">
                            <!-- notice the "circle" class -->
                        </div>
                        <div class="col s10">
                            <span class="black-text">
                <b>User X</b><br>I always feel like vomating its my 3rd month.is this normal. Any Suggestions?
                <br>
                <br>
                <hr>
               <b> Dr. XYZ</b>
                <br>
                Yes,It is normal in 3rd month.
                <br>
                <br>
                <b>UPVOTE &nbsp &nbsp &nbsp &nbsp DOWNVOTE</b>
              </span>
                        </div>
                    </div>
                </div>

          <div class="col s10 m8 l12" style=""> 
                    <div class="card-panel white">
                        <span class="black-text">Ask Question
          </span>

                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12 l12">

                                        <input id="icon_prefix" type="text" class="validate white-text">
                                        <label for="icon_prefix">Your question here</label>
                                    </div>

                                </div>
                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
                            </form>
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
        