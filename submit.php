<?php include("header.php"); ?>

  <div class="row main_banner top_space full_width">
  <div class="large-12 columns">
    <h1 class="text-center">Submit Items</h1>
  </div>
</div>
	<section id="contact_form" class="content_area flap">
		<div class="row">
			<div class="large-3 columns  submit_copy text-left">
				<h4>Plain Backdrops</h4>
				<p>Use a plain uncluttered backdrop to draw attention to your item</p>
			</div>
			<div class="large-3  columns  submit_copy text-left ">
				<h4>Turn Flash Off</h4>
				<p>Use diffused lighting (Sunlight)to prevent shadows and reflections</p>
			</div>
			<div class="large-3  columns  submit_copy text-left">
				<h4>High Resolution</h4>
				<p>Capture high-resolution pictures. Make sure buyers can use zoom and enlarge capabilities on your pictures</p>
			</div>
			<div class="large-3 columns submit_copy text-left">
				<h4>Fill the Frame</h4>
				<p>Make it easy for buyers to see every detail by filling the frame with the item</p>
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
