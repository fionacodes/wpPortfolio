<!-- <footer>
    <div class="box box-right">
    	<p>Designed and Developed by Fiona &copy; <?php echo date('Y'); ?></p>
    </div>
</footer> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));

 $('#toggle').click(function() {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
   });
</script>

<?php wp_footer(); ?>
</body>
</html>