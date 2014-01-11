<?php include("header.php"); ?>

  <div class="row main_banner top_space full_width">
  <div class="large-12 columns">
    <h1 class="text-center">Submit Items</h1>
  </div>
</div>
	<section id="contact_form" class="content_area flap">
		<div class="row">
			<div class="large-10 large-centered columns submit_copy">
				<p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.  </p>
			</div>
		</div>
		<form>
			<div class="row">
				<div class="large-6 columns">
					<input type="text" placeholder="Your First Name" name="firstname" />
					<input type="text" placeholder="Your Last Name" name="lastname" />
					<input type="text" placeholder="Your Email" name="email"/>
					<input type="file" name="myfiles" multiple="multiple" placeholder="Upload Images" class="select_files">
					<input type="text" placeholder="1+2=?" name="question"/>
				</div>
				<div class="large-6 columns">
					<input type="text" placeholder="Product Name Brand/Model" name="productname"/>
					<textarea placeholder="Product Description" name="description"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="large-2 large-centered columns">
					<div class="button_wrapper">
					<div type="submit" class="submit_button">Submit Item</div>
					</div>
				</div>
			</div>

		</form>

	</section>

	<?php include("footer.php"); ?>
