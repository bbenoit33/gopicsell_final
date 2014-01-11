<?php include("header.php"); ?>

  <div class="row contact_banner top_space full_width">
  <div class="large-10 columns large-centered">
    <div class="row">
        <div class="large-5 columns home_top">
          <h1 class="tk-museo-sans">Sell your stuff in a snap</h1>
          <p>Send us three pics of the item you want to see - we'll handle the rest</p>
        </div>
        <div class="large-5 columns large-offset-2 home_desc">
          <div class="desc_row"><div class="left stepbox_1"></div><p class="tk-museo-sans">Enter your item info below</p></div>
          <div class="desc_row"><div class="left stepbox_2"></div><p class="tk-museo-sans">We'll offer you a price</p></div>
          <div class="desc_row"><div class="left stepbox_3"></div><p class="tk-museo-sans">When the item sells, we send you the shipping label. Send the item out and get paid</p></div>
        </div>
    </div>
    <div class="row homebanner_bottom">
      <div class="large-6 columns large-centered text-center">
          <span>What are you waiting for?</span><br />
            <img src="images/backArrow.png" class="center">
      </div>
    </div>
  </div>
</div>
	<section id="contact_form">
		<div class="row">
			<div class="large-10 large-centered columns submit_copy">
				<h2 class="text-center">Enter the information for the product you want to sell below  </h2>
			</div>
		</div>
		<form>
			<div class="row">
				<div class="large-6 columns">
					<input type="text" placeholder="Your Full Name" name="firstname" />
					<input type="text" placeholder="Your Email" name="email"/>
					<input type="file" name="myfiles" multiple="multiple" placeholder="Upload Images" class="select_files">
					
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

   <section id="customers">
                <div class="max_width_wrapper">
                        <h1> What our customers are saying. </h1>
                        <ul id="quotes">
                                <li class="first">
                                        <div class="quote_wrapper">
                                                <p> I got $400 for my computer and $220 for my old phone. I was amazed </p>
                                                <div class="arrow-down"></div>
                                        </div>
                                        <div class="circular_wrapper first_wrap"></div>
                                        <h3> Gidon C. </h3>
                                </li>
                                <li>
                                        <div class="quote_wrapper">
                                                <p>I had tons of stuff lying around that I did not have time to throw out or sell online, so picSell was a no brainer.</p>
                                                <div class="arrow-down"></div>
                                        </div>
                                        <div class="circular_wrapper second_wrap"></div>
                                        <h3> Anne Sachs </h3>
                                </li>
                                <li>
                                        <div class="quote_wrapper">
                                                <p> After renovating our kitchen, I was left with an expensive faucet I could not return. I emailed picSell and after 10 days it sold for $700.</p>
                                                <div class="arrow-down"></div>
                                        </div>
                                        <div class="circular_wrapper third_wrap"></div>
                                        <h3> Avi C.</h3>
                                </li>                                                                
                        </ul>
                </div>
        </section>
	 
<?php include("footer.php"); ?>

