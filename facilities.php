<!DOCTYPE html>
<html>
<head data-page-name="facilities">
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
			<h2>Right Fit, Right Place, Right Time</h2>
			<ul>
				<li>We know the importance of quality care.</li>
				<li>We know patient satisfaction comes first.</li>
				<li>We seek only the best physicians to tend to any and all patient needs.</li>
			</ul>
		</div>
		<div class="col-1-2 min-height bg-grey-md pad-lg bb-bg bb-facilities01 mob-order1"></div>
	</div>

	<!-- Getting Started -->

	<?php include 'getting.php'; ?>

	<!-- Content Section -->

	<div class="row">
		<div class="col-1-2 min-height bg-grey-md pad-lg bb-bg bb-facilities02"></div>
		<div class="col-1-2 min-height pad-lg col-flex-column bb-bg bb-logo-right">
			<form action="" id="form">
				<input type="text" name="name" id="name" placeholder="Name of Facility" required>
				<input type="text" name="contact" id="contact" placeholder="Primary Contact(s)" required>
				<input type="text" name="city" id="city" placeholder="City" required>
				<input type="text" name="state" id="state" placeholder="State" required>
				<input type="text" name="email" id="email" placeholder="Email" required>
				<input type="text" name="telephone" id="telephone" placeholder="Telephone" required>
				<input type="text" name="contact_method" id="contact_method" placeholder="Preferred contact method">
				<input type="text" name="contact_times" id="contact_times" placeholder="Preferred contact times">
				<input type="text" name="position" id="postion" placeholder="Position(s)/Specialty Needed">
				<button class="button" id="submit">Submit</button>
				<span class="form-disc">Please fill out all mandatory fields.</span>
			</form>
			<div class="thanks">
				<h2>Thank You for Submiting Your Facility Application</h2>
				<p>We appreciate your interest and will aim to get back to you as soon as possible.</p>
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