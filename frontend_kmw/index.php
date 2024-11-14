<?php

use Keyman\Site\Common\ImageRandomizer;

require_once('../inc/head.php');

?>
<body>

<header>
  <div id='headerBackground'>
    <div id='headerRight'>
      <?php if($tier != 'stable') { ?>
      <span id='headerRight-beta'>Pre-release version</span> 
        <a id='headerRight-link' href='?tier=stable'>Return to version <?= $kmw_builds['stable'] ?></a>
      <?php } else if($hasBeta) { ?>
        <span id='headerRight-beta'>New release!</span> 
        <a id='headerRight-link' href='?tier=beta'>Try beta version <?= $kmw_builds['beta'] ?></a>
      <?php } ?>
    <!--<a href='https://keyman.com/keymanweb/' target='blank'><img src="<?php echo cdn("img/info.png"); ?>" /></a>-->
    </div>
    <div id='headerLeft'>
      <i class="fa-solid fa-bars"></i>
      <img src="<?php echo cdn("img/keymanweb-mini-logo-88.png"); ?>" alt='KeymanWeb.com' title="KeymanWeb version <?= $VersionWithTag ?>" width="20px" height="20px"/>
    </div>
    <div id="headerBar">
      <img src="<?php echo cdn("img/headerbar.png"); ?>" alt="" />
    </div>
  </div>
</header>

<!-- Footer copied from keyman.com -->

<div id="mobile-footer">
  <div id="mobile-version">KeymanWeb version <?= $VersionWithTag ?></div>
</div>

<div class="footer">
    <div class="wrapper">
        <div class="footer-third" id="footer-mailchimp">
            <h2 class="footer-third-title">Keep me updated</h2>
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
            <form action="//keyman.us1.list-manage.com/subscribe/post?u=99fcab2b035a8a51cd2158ca9&amp;id=7ccdac1e32" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div class="mc-field-group">
                    <input type="email" value="" name="EMAIL" class="required email kmw-disabled" id="mce-EMAIL" placeholder="email" />
                </div>
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
                <div class="button subscribe">
                    <h2>Subscribe</h2>
                </div>
            </form>
            </div>
            <!--End mc_embed_signup-->
            <br>
            <div id="privacy-policy"><a href="https://software.sil.org/language-software-privacy-policy/">Privacy policy</a></div>

            <div id="version">KeymanWeb version <?= $VersionWithTag ?></div>
        </div>
        <div class="footer-third" id="footer-social">
            <h2 class="footer-third-title">Keep in touch</h2>
            <div>
              <a href="https://facebook.com/KeymanApp" target="_blank" data-icon='&#xf203;'>Facebook</a>
              <a href="https://twitter.com/keyman" target="_blank" data-icon='&#xf202;'>Twitter</a>
              <a href="https://blog.keyman.com/" target="_blank" data-icon='&#xf413;'>Keyman blog</a>
              <a href="https://github.com/keymanapp" target="_blank" data-icon='&#xf200;'>GitHub</a>
              <a href="https://community.software.sil.org/c/keyman" target="_blank" id='footer-community'>Keyman Community</a>
            </div>
        </div>
        <div class="footer-third sil-logo">
            <br>
            <a href="https://www.sil.org/about/"><img id="sil-logo" src="<?php echo ImageRandomizer::randomizer(); ?>" width="50%" alt='SIL' /></a>
            <p>Created by <a href="https://www.sil.org/about/">SIL Global</a></p>
        </div>
    </div>
</div>

</body>
</html>
