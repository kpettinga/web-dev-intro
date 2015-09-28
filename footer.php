<?php 
/*
 * The Footer
 */ 
?>

</div><!-- #page -->

</body>
<!-- <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> -->
<script>
	<?php $local_jquery = home_url('/assets/js/vendor/jquery-2.1.4.min.js'); ?>
	if ( ! window.jQuery ) {
		document.write('<script src="<?php echo $local_jquery; ?>"><\/script>');
	}
</script>
<script src="<?php echo home_url('/assets/js/vendor/foundation.min.js'); ?>"></script>
<script src="<?php echo home_url('/assets/js/vendor/prism.js'); ?>"></script>
<script>$(document).foundation();</script>
</html>