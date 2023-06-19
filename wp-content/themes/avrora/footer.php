<footer class="footer">
	<div class="container">
		<div class="wrapper flex">
			<div class="column flex">
				<h6>BoonJobs</h6>
				<h2>Test tasks for the WordPress developer</h2>
			</div>
			<div class="column flex">
				<h6>Employer</h6>
				<ul>
					<li><a href="#">Post a Job</a></li>
					<li><a href="#">Search Resumes</a></li>
					<li><a href="#">Sign in</a></li>
				</ul>
			</div>
			<div class="column flex">
				<h6>Job Seeker</h6>
				<ul>
					<li><a href="#">Find Jobs</a></li>
					<li><a href="#">Create Resume</a></li>
					<li><a href="#">Sign in</a></li>
				</ul>
			</div>
			<div class="column flex">
				<h6>Get in Touch</h6>
				<ul>
					<li><a href="#">Linkedin</a></li>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Instagram</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
</main>
<div style="display: none;">
	<div class="popup popup-form" id="applyPopup">
		<div class="wrapper">
			<h2>Apply now!</h2>
			<p>Elementum magna ac tempor, facilisis tristique mauris. Et penatibus sit sed in ante in ultrices.
				Senectus aliquam dictum eleifend mi pharetra morbi.</p>

			<form action="" class="typical-form flex">
				<fieldset class="row flex">
					<input type="text" name="firstName" placeholder="First Name">
					<input type="text" name="lastName" placeholder="Last Name">
				</fieldset>

				<input type="tel" name="phone" placeholder="Phone Number">

				<input type="email" name="email" placeholder="Email (e.g example@gmail.com)">

				<select name="country" id="countrySelect">
					<option data-display="Country (e.g USA)"></option>
					<option value="value1">value1</option>
					<option value="value2">value2</option>
					<option value="value3">value3</option>
				</select>

				<select name="state" id="stateSelect">
					<option data-display="State (e.g Alaska)"></option>
					<option value="value1">value1</option>
					<option value="value2">value2</option>
					<option value="value3">value3</option>
				</select>

				<input type="url" name="linkedin" placeholder="LinkedIn profile link">
				<button type="submit" class="button button-primary button-icon">
					Send
					<svg class="icon icon-arrow">
						<use xlink:href="assets/images/svg/sprite.svg#rightArrow"></use>
					</svg>
				</button>
			</form>

			<p><small>We will only use your contact details for the purposes outlined above. By submitting your
					details, you are consenting to our <a href="#" target="_blank">privacy policy.</a></small></p>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>

</html>