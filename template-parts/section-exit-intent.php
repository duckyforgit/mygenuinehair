 <?php
/**
 * The default template for displaying exit message
 *
 *
 * @package workroom1128
 * @since workroom1128 1.0.0
 */

?>
 
  <div id="ouibounce-modal">
          <div class="underlay"></div>
            <div class="modal">
              <div class="logo-bar"> 
                <div class="logo-wrapper">
                  <img width="250" height="169" src="<?php echo get_template_directory_uri().'/dist/assets/images/logo.png';?>" class="custom-logo" alt="Deliberate Doing">
                </div>
              </div>
                <div class="modal-title">
                    <h3>Thanks for stopping by!</h3>
                </div>
              

                <div class="modal-body">
                    <p class="text-center">Hey don't leave yet.<br>Get our free newsletter packed with career enhancing articles.</p>
                  <!-- Begin Mailchimp Signup Form -->
                  <div id="mc_embed_signup">
                    <form action="https://deliberatedoing.us19.list-manage.com/subscribe/post?u=d6a7ddf819e3f859d9c1ae3c7&amp;id=7f15c75cc7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                      <div id="mc_embed_signup_scroll">
                        <label for="mce-EMAIL"></label>
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required=""><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d6a7ddf819e3f859d9c1ae3c7_7f15c75cc7" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe now" name="subscribe" id="mc-embedded-subscribe" class="button orange"></div>
                      </div>
                    </form>
                  </div>

<!--End mc_embed_signup-->
                  </div>

                <div class="modal-footer"> 
                       <p onclick="document.getElementById('ouibounce-modal').style.display = 'none';">no thanks</p>
                </div>
            </div>
        </div> 