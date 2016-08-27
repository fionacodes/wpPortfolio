</main> <!-- END MAIN SECTION -->

<footer class="wrapper">
    <!-- BEGIN CONTACT SECTION -->
    <div class="contact" id="contact">
      <h2>get in touch.</h2>
        <p>
            I'm currently available for full-time and contract work opportunities.
        </p>
        <p>
            Send an e-mail to <b>info@fionacodes.com</b> or through the contact form.
        </p>
        <div class="center">
          <form action="http://www.focuspocus.io/magic/fionarofl@gmail.com" method="POST">
            <input type="name" name="name" placeholder="name">
            <input type="email" name="email" placeholder="e-mail">
            <textarea name="comments" placeholder="comments"></textarea>
            <input type="submit" value="submit" class="button">
          </form>
        </div>
    </div> <!-- END CONTACT AREA -->

    <div class="copy">
      <p>Designed and Developed by Fiona. &copy; 2016</p>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));

// NAV LINKS OVERLAY
 $('#toggle').click(function() {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
        $('a').click(function() {
        $('#overlay').removeClass('open');
        $('#toggle').removeClass('active');
        });
   });

// NAV APPEAR ON SCROLL
(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 400) {$('.topbar').fadeIn(300);
            } else {
                $('.topbar').fadeOut(300);
            }
        });
    });
})(jQuery);
</script>

<?php wp_footer(); ?>
</body>
</html>