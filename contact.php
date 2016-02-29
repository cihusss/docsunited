<!DOCTYPE html>
<html>
<head data-page-name="contact">
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
			<h2>Contact Us</h2>
			<p>Docs United, LLC<br>
			P.O. Box 460786,<br>
			Houston, TX 77056</p>
			<p>Phone: 1-844-DOCS-UTD (362-7883)<br>
			Fax: 713-485-4785<br>
			Email: <a href="mailto:info@docsunited.net" class="link">info@docsunited.net</a></p>
		</div>
		<div class="col-1-2 min-height bg-grey-md pad-lg bb-bg bb-contact01 mob-order1 bb-short"></div>
	</div>

	<!-- For Your Convenience -->

	<div class="row">
		<div class="col-1-1 center-block-sm bg-blue-vivid-lt pad-md col-flex-row">
			<p>For your convenience, you can also contact us through the form below</p>
		</div>
	</div>

	<!-- Content Section -->

	<div class="row">
		<div class="col-1-2 min-height bg-grey-md pad-lg bb-bg bb-contact02"></div>
		<div class="col-1-2 min-height pad-lg col-flex-column bb-bg bb-logo-right">
			<form action="" id="form">
				<input type="text" name="name" id="name" placeholder="Your Name" required>
				<input type="text" name="email" id="email" placeholder="Your E-mail Address" required>
				<input type="text" name="phone" id="phone" placeholder="Phone Number">
				<input type="text" name="subject" id="subject" placeholder="Subject" required>
				<textarea name="message" id="message" placeholder="Message"></textarea>
				<div class="form-disc">Please fill out all mandatory fields.</div>
				<button class="button" id="submit">Submit</button>
			</form>
			<div class="thanks">
				<h2>Thank you for submiting your message</h2>
				<p>We appreciate your interest and will reach out with a response as soon as possible.</p>
			</div>
			<div class="spinner">
				<img src="img/spinner.gif">
			</div>
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