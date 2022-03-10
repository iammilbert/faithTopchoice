
<?php include ('header2.php'); ?>


<?php 
//include ('db_connect.php'); ?>


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

	
	<!-- Hero section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<h2>Contact us</h2>
		</div>
	</section>
	<!-- Hero section end -->
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
						<form class="contact-form" method="POST" role="form">
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