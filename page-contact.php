<?php
/*

	Template Name: Contact Page

*/
?>


<?php get_header(); ?>

<div class="contact-page row main">
	<div class="inner">
		<div class="text-center">
			<h1>Contact Us</h1>
			<p>If you would like more information or have any questions, please contact Tom Rusch and he will get back to you shortly!</p>
		</div>

		<div class="row">
			<div class="left">
		  		<h3>Phone:</h3>
		  		<p><a href="tel:+19209809856">(920) 698-2400</a></p>
		  		<h3>Email:</h3>
		  		<p><a href="mailto:rusch@lutheranhigh.com">rusch@lutheranhigh.com</a></p>
		  		<h3>Address:</h3>
		  		<p><a href="https://www.google.com/maps/place/1026+Wilson+St,+Plymouth,+WI+53073/@43.7586219,-87.9908666,17z/data=!3m1!4b1!4m2!3m1!1s0x88049d6bde6b1811:0xa679bf021b2028d" target="_blank">1026 Wilson Street<br>Plymouth, WI 53073</a></p>
		  	</div>
		  	<div class="right">
		   		<?php gravity_form(4, false, false, false, '', true, 12); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer (); ?>