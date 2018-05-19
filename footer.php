<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fahrschule-team
 */

?>

	</main><!-- /.main-container -->
    </div><!-- /.container -->

<footer class="footer">
     
     <div class="container">
       <div class="video-bg">
         <div class="row">
         
           <div class="col-md-6">
             <div class="video-bg__main">
               <h4>IMAGEFILM VON FAHRSCHULE-TEAM!</h4>
             </div>
               <div class="embed-responsive embed-responsive-16by9" data-aos="fade-up">
                   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SPND4fv-iBA" allowfullscreen></iframe>
               </div>
           </div>

           <div class="col-md-6">
             <div class="video-bg__main">
               <h4>FAHRSCHULE-TEAM!</h4>
             </div>
               <div class="embed-responsive embed-responsive-16by9" data-aos="fade-up">
                   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bdKd5xg9gzk" allowfullscreen></iframe>
               </div>
           </div>

         </div>
       </div>
     </div>

   
     <div class="container">
       <div class="copyright-main">
         <div class="row">
           <div class="col-md-6">
             
             <div class="nav-footer">
               <ul class="nav-footer__link">
                   <li><a href="http://localhost:8888/fahrschule-team-dev/agb/">AGB</a></li>
                   <li><a href="http://localhost:8888/fahrschule-team-dev/impressum/">Ipressum</a></li>
                   <li><a href="http://localhost:8888/fahrschule-team-dev/sponsor/">Sponsor</a></li>
                 </ul>
                 <div><p>Ein großer Schritt zur Unabhängigkeit - Fahrschule-Team!</p></div>
             </div>

           </div>
           <div class="col-md-6">
                 
          
              <div class="social-nav__icon-box">
                <a href="https://www.facebook.com/fahrschuleteam">
                  <svg class="social-nav__icon">
                    <use xlink:href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons.svg#facebook"></use>
                  </svg>
                </a>
                <div class="social-nav__facebook">
                  <div class="fb-like" data-href="https://www.facebook.com/fahrschuleteam" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                </div>
        
              </div>
     

           </div>

         </div>

       </div>
     </div>
   </footer>
  </div><!-- /.wrapper -->

<?php wp_footer(); ?>

   <!-- Facebook Js -->
   <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

	</body>
</html>
