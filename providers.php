<!DOCTYPE html>
<html>
<head data-page-name="providers">
<?php include 'head.php'; ?>
</head>
<body>

<div class="grid">

	<?php include 'nav.php'; ?>

	<!-- Copy Line -->

	<?php include 'tagline.php'; ?>

	<!-- Billboard -->

	<div class="row" id="top-trigger">
		<div class="col-1-2 pad-lg mob-order2 col-flex-column bb-bg bb-logo-left">
			<h2>By Doctors, for Doctors</h2>
			<ul>
				<li>We know the obstacles of today’s health care industry.</li>
				<li>We are familiar with the facilities we staff.</li>
				<li>We aim to offer you the best opportunities for your particular needs.</li>
			</ul>
		</div>
		<div class="col-1-2 min-height bg-grey-md pad-lg bb-bg bb-providers01 mob-order1"></div>
	</div>

	<!-- Getting Started -->

	<?php include 'getting.php'; ?>

	<!-- Content Section -->

	<div class="row" id="form-section">
		<div class="col-1-2 min-height bg-grey-md pad-lg bb-bg bb-providers02"></div>
		<div class="col-1-2 min-height pad-lg col-flex-column bb-bg bb-logo-right">
			<form action="" id="form">
				<input type="text" name="firstname" id="firstname" placeholder="First Name" required>
				<input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
				<input type="text" name="email" id="email" placeholder="Email" required>
				<input type="text" name="address" id="address" placeholder="Address">
				<input type="text" name="city" id="city" placeholder="City">
				<input type="text" name="state" id="state" placeholder="State" required>
				<input type="text" name="zip" id="zip" placeholder="Zip Code">
				<input type="text" name="mobile" id="postion" placeholder="Mobile Phone">
				<input type="text" name="phone" id="" placeholder="Home Phone">
				<input type="text" name="preferred_contact_method" id="preferred_contact" placeholder="Preferred contact method">
				<input type="text" name="preferred_contact_times" id="preferred_contact_times" placeholder="Preferred contact times">
				<input type="text" name="locations_of_interest" id="locations_of_interest" placeholder="Locations of interest" required>
				<input type="text" name="additional_location1" id="additional_location1" placeholder="(additional location – optional)">
				<input type="text" name="additional_location2" id="additional_location2" placeholder="(additional location – optional)">
				<input type="text" name="how" id="how" placeholder="How did you hear about us?">
				<textarea name="comments" id="comments" placeholder="Comments"></textarea>
				<div class="form-disc">Please fill out all mandatory fields.</div>
				<button class="button" id="submit">Submit</button>
			</form>
			<div class="thanks">
				<h2>Thank you for submitting your physician application</h2>
				<p>We appreciate your interest and will reach out with a response as soon as possible.</p>
			</div>
			<div class="spinner">
				<img src="img/spinner.gif">
			</div>
		</div>
	</div>

	<!-- Questions -->

	<?php include 'questions.php'; ?>

	<!-- Top Arrow -->

	<div class="top-arrow">
		<i class="fa fa-chevron-circle-up fa-2x"></i>
	</div>

	<?php include 'foot.php'; ?>
</div>
</body>
</html>