<?php
/*

	Template Name: Plymouth HS Session 4 Reg

*/
?>


<?php get_header(); ?>

<div class="row registration-page main">
	<div class="col-sm-12">
		<h2>2016 Plymouth High School Camp Registration</h2>
		<h3>Session 4 - All Levels - Sunday Morning/Afternoon</h3>
		<!-- <p><span class="red">*</span> In the weeks leading up to camp you will receive an email(s) with more camp information.</p> -->
		<!-- <p class="last"><span class="red">*</span> If needed we will refund your registration fully up until May 17th 2016 @ 11:59pm.</p> -->
		<?php gravity_form(15, false, false, false, '', true, 12); ?>
	</div>
</div>

<?php get_footer (); ?>