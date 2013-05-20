<!-- Begin sidebar.php -->
<aside>
  <ul class="social-links">
    <li>
      <a href="https://www.facebook.com/MS.hiphopsummit">
        <img src="wp-content/themes/theme/images/icon-facebook.png" height="49" width="45" alt="facebook">
      </a>
    </li>
    <li>
      <a href="">
        <img src="wp-content/themes/theme/images/icon-googleplus.png" height="49" width="45" alt="Google Plus">
      </a>
    </li>
    <li>
      <a href="">
        <img src="wp-content/themes/theme/images/icon-twitter.png" height="49" width="45" alt="Twitter">
      </a>
    </li>
    <li>
      <a href="http://www.youtube.com/user/ACLUofMS?feature=watch">
        <img src="wp-content/themes/theme/images/icon-youtube.png" height="49" width="45" alt="Youtube">
      </a>
    </li>
    <li>
      <a href="http://tnjdesigns.com/contact-us">
        <img src="wp-content/themes/theme/images/icon-mail.png" height="49" width="45" alt="Email">
      </a>
    </li>
  </ul>
  <h2 class="cursive blue">Your Voice</h2>
  <iframe width="300" height="169" src="http://www.youtube.com/embed/E8CSW4sRxy4?list=PL65959036F13445F7"></iframe>
  <h2 class="cursive blue">Like Us on Facebook</h2>
  <div class="fb-like-box" data-href="https://www.facebook.com/MS.hiphopsummit" data-width="300" data-height="556" data-show-faces="true" data-stream="true" data-header="true"></div>
  <ul class="widgets">
    <?php
      if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ){
        
      }else{
        
      }
    ?>
  </ul>
  <div class="clear"></div>
</aside>
<!-- End sidebar.php -->