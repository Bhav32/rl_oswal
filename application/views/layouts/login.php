<?php $this->load->view('partials/view_header'); ?>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="#">
							<input type="email" name="email" placeholder="Email Address" />
							<input type="password" name="password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="">
						<?php echo validation_errors(); ?>  
         					<?php echo form_open('form'); ?>
							<input type="text" name="firstName" value="<?php echo set_value('firstName'); ?>" placeholder="First Name"/>
							<input type="text" name="lastName" value="<?php echo set_value('lastName'); ?>" placeholder="Last Name"/>
							<input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email Address"/>
							<input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password"/>
							<input type="password" name="confirmPassword" value="<?php echo set_value('confirmPassword'); ?>" placeholder="Confirm Password"/>
							<input type="text" name="contactNo" value="<?php echo set_value('contactNo'); ?>" placeholder="Contact No."/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php $this->load->view('partials/view_footer'); ?>
	
	
	