<?php
  session_start();
 if (isset($_SESSION['pusername'])){
    
	
	   }
   else {
	   header("location: index.php");
   die("You must be Log in to view this page <a href='index.php'>Click here</a>");}
   
?>

<!DOCTYPE html>
<html lang="en">
 
            
            <form action="COUNT1.PHP" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
			
                              
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="sslc">Company Name</label>
                  <input type="text" name="cname" class="form-control" id="sslc" placeholder="">
                </div>
				
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="BE">Date</label>
                  <input type="date" name="date" class="form-control" id="BE" placeholder="">
                </div>
                
                
				
                
				
          <br>
              <div class="form-group text-right">
                <button type="submit" name="submit" class="templatemo-blue-button">submit</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>
            </form>
          </div>     
          
          <footer class="text-right">
            <p>Copyright &copy; 2015 CIT-PMS | Designed by
              <a href="http://www.wafferdevelopers.com" target="_parent">Waffer Developers</a>
            </p>
          </footer>      
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>