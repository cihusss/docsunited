<!DOCTYPE html>
<html>
<head>
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

	<!-- Copy Line -->

	<div class="row">
		<div class="col-1-1 center-block-sm bg-blue-vivid pad-md col-flex-row">
			<p class="fg-white">Getting started is simple. Just complete the following form, click submit and we will be in touch shortly.</p>
		</div>
	</div>

	<!-- Content Section -->

	<div class="row">
		<div class="col-1-2 min-height bg-grey-md pad-lg bb-bg bb-facilities02"></div>
		<div class="col-1-2 min-height pad-lg col-flex-column bb-bg bb-logo-right">
			<form action="">
				<input type="text" name="name" placeholder="Name of Facility" required>
				<input type="text" placeholder="Primary Contact(s)" required>
				<input type="text" placeholder="City" required>
				<input type="text" placeholder="State" required>
				<input type="text" placeholder="Email" required>
				<input type="text" placeholder="Telephone" required>
				<input type="text" placeholder="Preferred contact method">
				<input type="text" placeholder="Preferred contact times">
				<input type="text" placeholder="Position(s)/Specialty Needed">
				<a href="#" class="button hide-mobile">Submit</a>
				<!-- <span class="disclaimer"><span class="fg-blue-vivid">blue border</span> = required</span> -->
			</form>
		</div>
	</div>

	<!-- Button Section -->

	<div class="row hide-desktop">
		<div class="col-1-1 center-block-lg pad-md bg-blue-vivid-lt col-flex-row">
			<a href="#" class="button">Submit</a>
		</div>
	</div>

	<!-- Top Arrow -->

	<div class="top-arrow">
		<i class="fa fa-chevron-circle-up fa-2x"></i>
	</div>

	<?php include 'foot.php'; ?>
</div>
</body>
</html>