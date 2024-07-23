<?php include"config.php";?>
<!DOCTYPE html>
<html lang="en">
<?php include"head.php";?>
<body>

<?php
	 include"top_nav.php";
?>
	
    <!-- Page Content -->
    <div class="container" style="margin-top:70px;">

			<div class="row">
				<div class="col-md-8">
				<?php
					if(isset($_POST["submit"]))
					{
					 $sql="INSERT INTO messages (NAME, CONTACT, EMAIL, MESSAGE, STATUS,LOGS) VALUES ('{$_POST["name"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '{$_POST["message"]}', 1,NOW());";
						if($con->query($sql))
				{
					echo '
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> Your message has been Successfully sent.
					</div>
					
					
					';
				}
					}
				?>
		
				<h3 class='text-primary'>Send us a Message</h3>
                <form method="post" action="contact.php" role="form" id="myform" >
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="number" class="form-control" id="phone" name="phone" onkeyup="checkMobile()" required>
                            <p id="error" style="color:red"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email"  >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" name="submit" id="submitBtn"><i class='fa fa-send'></i> Send Message</button>
                </form>
				
			</div>
			
            <div class="col-md-4">
                <h3 class='text-primary'>Contact Details</h3>
                <p>
                    Blood Bank &amp; <br>Centurion University, <br>
					CUTM,Paralakhemundi<br>
					ODISHA-761211.<br>
			
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: 9999999999</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="#" >bloodbankin@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: 24*7</p>
				<p><i class="fa fa-globe"></i> 
                    <abbr title="Website">W</abbr>: <a href="index.php">www.bloodbank.org</a></p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>


        <hr>
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        function checkMobile(){
            const mobileInput = document.getElementById('phone');
            const mobileNumber = mobileInput.value.toString();
            const numberOfDigits = mobileNumber.length;
            if (numberOfDigits === 10) {
                document.getElementById('error').innerHTML="";
                document.getElementById('submitBtn').style.display = 'block';
                // You can perform further actions here if the number is valid
            } else {
                document.getElementById('error').innerHTML = "Please enter a 10-digit number";
                document.getElementById('submitBtn').style.display = 'none';
                // You can display an error message or take other actions if the number is invalid
            }
        }
    </script>

</body>

</html>
