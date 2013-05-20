<?php
/*
Template Name: contactpage
*/
?>
<?php session_start(); ?>
<?php
		$returnText = '';
		if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$captcha = $_POST['captcha'];
				$messagetxt = $_POST['message'];
				$headers = 'From: '.$email.'\r\n\r\n';
				if($captcha == $_SESSION['captchaNumber']){
						if($name != '' && $email != '' && $captcha != '' && $messagetxt != ''){
								if(filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($email, FILTER_SANITIZE_EMAIL)){
										$message =
												"From:".$name."\r\n".
												"Email:".$email."\r\n\r\n"
												.$messagetxt;
										mail('tjohnson@tfgms.com','Email from website', $message, $headers);
										$returnText = "<p class='success'>Your message has been sent.  We will respond shortly.</p>";
										$_SESSION['captchaNumber'] = rand(1000, 9999);
								}else{
										$returnText = "<p class='failure'>Please enter a valid email address.</p>";
										$_SESSION['captchaNumber'] = rand(1000, 9999);
								}
						}else{
								$returnText = "<p class='failure'>Please fill out all required fields.</p>";
								$_SESSION['captchaNumber'] = rand(1000, 9999);
						}
				}else{
						$returnText = "<p class='failure'>The entered number was wrong. Please try again.</p>";
						$_SESSION['captchaNumber'] = rand(1000, 9999);
				}
		}else{
				$_SESSION['captchaNumber'] = rand(1000, 9999);
				$name = "";
				$email = "";
				$messagetxt = "";
		}
?>
<?php get_header(); ?>
<!-- Begin home.php -->
  <div class="main">
    <div class="content">
      <div class="blog">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>
              <div class="post">
                <h2><?php the_title(); ?></h2>
                <div class="entry">
                  <script>
                    function validateForm(){
                      var returnTextTest = '';
                      var name = document.forms['frmcontact']['name'].value;
                      var email = document.forms['frmcontact']['email'].value;
                      var messagetxt = document.forms['frmcontact']['message'].value;
                      var captcha = document.forms['frmcontact']['captcha'].value;
                      var captchaNumber = <?php echo $_SESSION['captchaNumber'] ?>;
                      if(captcha != captchaNumber){
                        returnTextTest = "<p class='failure'>Entered number was incorrect.</p>";
                        document.getElementById("returntext").innerHTML=returnTextTest;
                        return false;
                      }else{
                        if(name == '' || email == '' || messagetxt == '' || captcha == ''){
                          returnTextTest = "<p class='failure'>Please fill out all required fields.</p>";
                          document.getElementById("returntext").innerHTML=returnTextTest;
                          return false;
                        }else{
                          var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
                          if(!regex.test(email)){
                            returnTextTest = "<p class='failure'>Please enter a valid email address.</p>";
                            document.getElementById("returntext").innerHTML=returnTextTest;
                            return false;
                          }else{
                            returnTextTest = "<p class='success'>Success.</p>";
                            return true;
                          }
                        }
                      }
                      document.getElementById("returntext").innerHTML=returnTextTest;
                    }
                  </script>
                  <div id="form-container">
                    <div id="returntext">
                      <?php
                        if($returnText != ''){
                          echo $returnText;
                        }
                      ?>
                    </div>
                    <p id="forminfo"><span>&ast;</span> Indicates a required field.</p>
                    <form action="<?php the_permalink(); ?>" method="post"  name="frmcontact">
                      <label for="name">Name <span>&ast;</span></label>
                      <input type="text" id="name" name="name" value="<?php echo $name ?>">
                      <label for="email">Email <span>&ast;</span></label>
                      <input type="text" id="email" name="email" value="<?php echo $email ?>">
                      <label for="message">Message <span>&ast;</span></label>
                      <textarea id="message" name="message"><?php echo $message ?></textarea>
                      <label for="captcha" style="float: left;">
                        Please enter the following number:<span>&ast;</span>
                        <span class="bold"><?php echo $_SESSION["captchaNumber"] ?></span>
                        <input type="text" id="captcha" name="captcha">
                      </label>
                      <input type="submit" id="submit" name="submit" value="submit">
                      <div class="clear"></div>
                    </form>
                  </div>
                </div><!-- End entry -->
              </div><?php
            }
          }
        ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
    <div class="clear"></div>
  </div>
<?php get_footer(); ?>
<!-- End home.php -->