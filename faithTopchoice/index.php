
<?php include ('header.php'); ?>


<?php include ('db_connect.php'); ?>


<?php
	if(isset($_POST['send'])){
		$contact_name = $_POST['contact_name'];
		$contact_email = $_POST['contact_email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

$sql = "INSERT INTO contact(contact_name, contact_email, subject, message) VALUES('".$contact_name."', '".$contact_email."', '".$subject."', '".$message."')";

$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$_SESSION['message'] = "message sent, thank you for reaching us.";
$_SESSION['msg_type'] = "success";
	}


 ?>

	<!-- Recipes section -->
	<section class="recipes-section spad pt-0">
		<div class="container">
			<div class="section-title" style="text-align: center;">
				<h2>Latest Recipes</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="img/recipes/1.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Traditional Pizza</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-md-6">
					<div class="recipe">
						<img src="img/recipes/jollofRice.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Jollof Rice</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="img/recipes/9.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Rosted Corn</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="img/recipes/4.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Spaghetti</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="img/recipes/friedRice.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Fried Rice, Chicken and Plantain</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="img/recipes/Agidi(MoiMoi).jpg" alt="">
						<div class="recipe-info-warp">
								<div class="recipe-info">
								<h3>Agidi (Moi Moi)</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Recipes section end -->


	<!-- Footer widgets section -->
	<section class="bottom-widgets-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 ftw-warp">
					<div class="section-title">
						<h3>Top rated Soups</h3>
					</div>
					<ul class="sp-recipes-list">
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/1.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Italian pasta</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/2.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>French Onion Soup</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/3.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Homemade  pasta</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/4.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Onion Soup Gratinee</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/4.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Feta Cheese Burgers</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 ftw-warp">
					<div class="section-title">
						<h3>Top Rated Rice</h3>
					</div>
					<ul class="sp-recipes-list">
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/6.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Traditional Food</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/7.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Baked Salmon</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/8.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Deep Fried Fish</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/9.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Raw Tomato Soup</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/10.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Vegan Food</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
					</ul>
				</div>

				<div class="col-lg-4 col-md-6 ftw-warp">
					<div class="section-title">
						<h3>Top Rated Swallow</h3>
					</div>
					<ul class="sp-recipes-list">
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/6.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Traditional Food</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/7.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Baked Salmon</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/8.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Deep Fried Fish</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/9.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Raw Tomato Soup</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/10.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Vegan Food</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer widgets section end -->

<section class="recipes-section spad pt-0">
		<div class="container">
			<div class="section-title" style="text-align: center;">
				<h2>Our Staff</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="img/staff/images2.jpeg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Mr. Ben</h3>
								<div class="rating">
									<b>Head Chef</b>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-md-6">
					<div class="recipe">
						<img src="img/staff/images2.jpeg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Mr. Louis</h3>
								<div class="rating">
									<b>Assistant to Head Chef</b>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="img/staff/images3.jpeg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Miss. Kate Aron</h3>
								<div class="rating">
									<b>Pastry Chef</b>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Recipes section end -->

<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<h4>Leave a comment</h4>
			<?php
                 if (isset($_SESSION['message'])): 
            ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
                    </div>

             <?php endif ?>
						<form class="contact-form" method="POST">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Name" name="contact_name">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="E-mail" name="contact_email">
								</div>
								<div class="col-md-12">
									<input type="text" placeholder="Subject" name="subject">
									<textarea placeholder="Message" name="message"></textarea>
									<button class="btn btn-warning" name="send">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-logo">
						<h4 style="color: orange; font-weight: bold;">FAITH TOPCHOICE</h4>
					</div>
					<div class="contact-info">
						<ul class="ct-list">
							<li>
								<h6>Address:</h6>
								<p>RSQ 109 Dogo Gbagyi Street Kaduna</p>
								<p>Karji New Extension, 90038</p>
							</li>
							<li>
								<h6>Phone:</h6>
								<p>+234 813 795 0284</p>
								<p>+234 901 747 7098</p>
							</li>
							<li>
								<h6>Email:</h6>
								<p>faithnjowusi@gmail.com</p>
							</li>
						</ul>
						<div class="contact-social">
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</section>


<?php include ('footer.php'); ?>