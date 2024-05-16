

<body>    
	
	<div class="signin-section auth-section">
		<div class="curve-container">
			<div class="curve-top"></div>
			<div class="curve-bottom"></div>
		</div><!--//curve-container--> 
		<div class="container">
			<div class="auth-option over-curve text-center text-lg-end pt-4 mb-5">
				Don't have an account?<a class="ms-2 text-link" href="<?php echo base_url()?>signup">Sign up now <strong>&rarr;</strong></a>              
			</div>
			<div class="single-col-max mx-auto over-curve px-5">  
				
				<div class="site-logo mb-4 text-center"><a class="navbar-brand" href="<?php echo base_url()?>Welcome"><img class="logo-icon me-2" src="<?php echo base_url()?>assets/images/site-logo.svg" alt="logo"></a></div>   

				<div class="auth-wrapper mx-auto">
					<h2 class="auth-heading text-center mb-4">Sign in to your account</h2>

					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form signup-form">         
							<div class="email mb-3">
								<label class="sr-only" for="signin-email">Email</label>
								<input id="signin-email" name="signin-email" type="email" class="form-control signin-email" placeholder="Email" required="required">
							</div><!--//email-->
							<div class="password mb-3">
								<label class="sr-only" for="signin-password">Password</label>
								<input id="signin-password" name="signin-password" type="password" class="form-control signin-password" placeholder="Password" required="required">
								<div class="extra mt-2 position-relative">
									<div class="form-check mb-0">
										<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
										<label class="form-check-label" for="RememberPassword">
										Remember me
										</label>
									</div>
									<div class="forgotten-password">
										<a class="theme-link" href="<?php echo base_url()?>password">Forgotten password?</a>
									</div>
								</div><!--//extra-->
							</div><!--//password-->
							<div class="text-center">
								<button type="submit" class="btn btn-primary btn-submit theme-btn mx-auto">Sign in</button>
							</div>
						</form>
					</div><!--//auth-form-container-->
					
					<div class="divider my-5">
						<span class="or-text">OR</span>
					</div><!--//divider-->
					
					<div class="social-auth text-center mx-auto">                        
						<ul class="social-buttons list-unstyled">
							<li class="mb-3">
								<a href="<?php echo base_url()?>#" class="btn btn-social btn-block">
									<span class="icon-holder"><img src="<?php echo base_url()?>assets/images/social/google-logo.svg" alt=""></span>
									<span class="btn-text">Sign in with Google</span>
								</a>
							</li>
							<li class="mb-3"><a href="<?php echo base_url()?>#" class="btn btn-social btn-block"><span class="icon-holder"><span class="icon-holder"><img src="<?php echo base_url()?>assets/images/social/twitter-logo.svg" alt=""></span></span><span class="btn-text">Sign in with Twitter</span></a></li>
							<li class="mb-3"><a href="<?php echo base_url()?>#" class="btn btn-social btn-block"><span class="icon-holder"><span class="icon-holder"><img src="<?php echo base_url()?>assets/images/social/github-logo.svg" alt=""></span></span><span class="btn-text">Sign in with Github</span></a></li>
						</ul>
					</div><!--//social-auth-->
					
					<div class="auth-footer py-5 mt-5 text-center">
						<div class="copyright mb-2">
						Copyright &copy; <a class="theme-link" href="<?php echo base_url()?>https://Sheria360.com/" target="_blank">Sheria360</a>
						</div>
						<div class="legal">
							<ul class="list-inline">
								<li class="list-inline-item"><a class="theme-link" href="<?php echo base_url()?>#">Privacy Policy</a></li>
								<li class="list-inline-item">|</li>
								<li class="list-inline-item"><a class="theme-link" href="<?php echo base_url()?>#">Terms of Services</a></li>
							</ul>
						</div>
					</div><!--//auth-footer-->
					
				</div><!--//auth-wrapper-->
			</div><!--//single-col-max-->
		</div><!--//container-->
	</div><!--//signin-section-->
	
	<!-- Javascript -->          
	<script src="<?php echo base_url()?>assets/plugins/popper.min.js"></script>
	<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

</body>
</html> 

