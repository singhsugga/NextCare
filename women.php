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

          <div class="col s12 m8 l8" style=""> 
                
            <div class="container-fluid">
                <br>
                <h5>Pregnent Women Registration</h5>
                <hr style="opacity:0.3">
                <br>
                <div class="row z-depth-1 white" style="margin-bottom:0px;padding:0px">
                    <div class="col m8 s8" style="padding-bottom:3%">
                        <br>
                        <br>
                        <form style="padding-bottom:3%">
                            <div class="col m10  offset-m1">
                             <p style="margin:0px;font-size:85%;color:#0d47a1">Expected Delivery Date</p>
                             <input type="date" class="datepicker" placeholder="Expected Delivery Date">
                            </div>
                            
                            <div class="col m10  offset-m1">
                             <p style="margin:0px;font-size:85%;color:#0d47a1">Ongoing Mounth</p>
                             <input type="month" class="datepicker" placeholder="Enter Your Ongoing Mounth">
                            </div>
                            
                            <div class="col m10  offset-m1">
                             <p style="margin:0px;font-size:85%;color:#0d47a1">Current Address</p>
                             <input type="text"  placeholder="Enter Your Current Address">
                            </div>
                            
                            <div class="col m10  offset-m1">
                             <p style="margin:0px;font-size:85%;color:#0d47a1">Mobile Number</p>
                             <input type="number" placeholder="Enter Your Mobile Number">
                            </div>
                            
                            <div class="col m10  offset-m1">
                             <p>
                                <input type="checkbox" id="test5" />
                                <label for="test5">I Accept the Terms and Condition</label>
                             </p>
                            </div>
                            
                            <div class="col m10  offset-m1" style="margin-top:2%">
                                <a class="waves-effect waves-light btn" style="background-color:#1976d2">Submit</a>
                            </div>
                            
                            <br>
                            <br>
                            
                        </form>
                        
                        <br>
                        <br>
                        <br>
                    </div>
                    
                     <div class="col m4 s4" style="margin:0px;padding:0px">
                          <img src="img/PregnantWoman_istock.jpg" style="width:100%;margin:0px;padding:0px">
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
        