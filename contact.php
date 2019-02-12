<?php
//include files
include('header.php');
include('menu.php');
$message = $_GET[m];
?>

<!-- PAGE TITLE -->
    <div id="cbox_title">
        <div id="cpage_title_box">
            <div class="inner">
                <h1>Contact</h1>

                <div class="subtitle">
                    feel free to contact <span class="red_color">Karoli Makeup School</span>, we will reply very soon!
                </div>
            </div>
        </div>

        <div class="clear"></div>
    </div>     
    <!-- END PAGE TITLE -->
<div id="content" class="group contact">
        <div class="inner layout-sidebar-right">  
        
            <div class="clear space"></div>   
            
            <!-- START HENTRY -->                     
            <div class="hentry-post" role="main">   
            
                <h2>Get in touch</h2>
            
                <form class="contact-form" method="post" action="sendmail.php" enctype="multipart/form-data" onsubmit="return re_captcha(this)">

                    <!-- The feedback message is here -->
                	<div class="usermessagea"></div>
                	
                	<fieldset>
                
                		<ul>
                
                            <!-- NAME FIELD -->
                			<li class="text-field">
                				<label for="name-form">
                					<span class="label">Name</span>
                				</label>
                				
                				<input type="text" name="name" id="name-form" class="required" value="" required/>                   
                				<div class="msg-error"></div>
                			</li>            
                            <!-- END NAME FIELD -->
                            
                            <!-- EMAIL FIELD -->
                			<li class="text-field">
                				<label for="email-form">
                					<span class="label">Email</span> 
                				</label>
                
                				<input type="text" name="email" id="email-form" class="required email-validate" value="" required/>
                				<div class="msg-error"></div>
                			</li>   
                            <!-- END EMAIL FIELD -->
                            
                            <!-- MESSAGE FIELD -->
                			<li class="textarea-field">
                				<label for="message-form">
                					<span class="label">Message</span>
                				</label>
                				
                				<textarea name="message" id="message-form" rows="8" cols="30" class="required" required></textarea>

                				<?php if($message == 1){ echo "<div style='color:#1a7d2d; font-size:18px; font-weight:bold;'>Your message has been sent</div>";}else { echo "<div class='msg-error'></div>"; }?>
                                <?php if($message == 2){ echo "<div style='color:#C00; font-size:18px; font-weight:bold;'>Your email was not valid</div>";}else { echo "<div class='msg-error'></div>"; }?>
                			</li>      
                            <!-- END MESSAGE FIELD -->
                           
                           <!-- RECAPTCHA -->
       							<div class="g-recaptcha" data-sitekey="6LfHxJAUAAAAAC8OZj9SvyQVI7BQWM3eOJw0zmay" data-callback="enabledSubmit"></div>
       						<!-- END RECAPTCHA -->

                            <!-- SUBMIT FIELD -->
                			<li class="submit-button">
                				<input type="hidden" name="action" value="sendmail" id="action" />
                				<input type="submit" name="sendmail" value="send message" class="sendmail alignleft"/>			
                            </li>
                		</ul>
                
                	</fieldset>
                </form>

                
                <script type="text/javascript">
                    // specif here the message for each field of contact form, by ID of field
                	var error_messages = {
                		name: "It's required a valid name.",
                		email: "Write a valid email.",
                		message: "Insert the message."
                	};
                </script>
                
                <div class="hentry-corner"></div>
            
            </div>      
            <!-- END HENTRY -->      
            
            <!-- START SIDEBAR -->
            <div class="sidebar sidebar-big-size">
                
                <!-- START TEXT -->
                <div class="widget-first widget widget_text">
                    <h3>Customer support</h3>
        
                    <div class="textwidget">
                        <p> 
                        22 W 35th St. Suite 103 National City CA 91950 <br>
 
</p>
                    </div>
                </div>  
                <!-- END TEXT -->
                          
                <!-- START SOCIALIZE -->
                <div class="widget widget_nav_menu">
                  <h3>Follow us</h3>
                  <ol>
                    <li><a title="became a fan" href="http://www.facebook.com/"><img src="./images/facebook.jpg" width="16" height="16" /></a> facebook&nbsp;</li>
                    <li><a title="call us on skype" href="#"><img src="./images/skype.jpg" width="16" height="16" /></a> skype&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a title="follow us" href="http://twitter.com"><img src="./images/twitter.jpg" width="16" height="16" /></a> twitter&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                  </ol>
                </div>      
                <!-- END SOCIALIZE -->
                          
                <!-- START GOOGLE MAP -->
                <div class="widget-last widget google-map">
                    <h3>Google Map</h3>
        
 
                    <div class="google-map-frame">
                        <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3359.3599565263676!2d-117.09967628482117!3d32.649864081010534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d9520be75b07db%3A0xe21c458cf74febda!2s22+W+35th+St+%23103%2C+National+City%2C+CA+91950!5e0!3m2!1sen!2sus!4v1473435782246"></iframe><br /><small>
                        <a href="https://goo.gl/maps/MmAxJRgVTgM2" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                        <div class="shadow-thumb-sidebar"></div>
                    </div>
                </div> 
                <!-- END GOOGLE MAP -->
                
            </div>
            <!-- END SIDEBAR -->
        
        </div>
    </div>

<!-- Validate if check in captcha button -->
<script>
function re_captcha(a) {
    var response = grecaptcha.getResponse();
    if(response.length == 0){
        alert("Please check the captcha button.");
        return false;
      event.preventDefault();
    } else {
      alert("Thank you for contacting us. Soon we will contact you.");
      return true;
    }
  }
</script>
<!-- //Validate if check in captcha button -->
<?php include('footer.php'); ?>