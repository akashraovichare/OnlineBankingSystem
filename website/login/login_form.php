<!--Modal for Login-->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog" style="max-width:450px;">
		<!-- Modal content-->
		<div class="modal-content">     
			<div class="modal-header" style="background-color:#1289A7; padding:16px 16px; color:#FFF;">
				<center><h2 class="modal-title" id="l5">Login</h2></center>
			</div>
			<div class="modal-body">
				<div class="fadeIn first">
					<center><img src="assets/images/login.png" height="100px" width="100px" alt="User Icon" /></center><br/>
				</div>
				<div id="logFormDiv">
					<form method="post" action="<?php echo htmlspecialchars("index.php");?>" id="logForm">
						<div class="form-group" id="l1">							
							<label for="username">Please Enter Your User Name / Email:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<input class="form-control" type="text" name="username" id="username" required placeholder="Enter Username / Email Id" />
							</div>
						</div>
						<div class="form-group" id="l2">
							<label for="password">Please Enter Your Password:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input class="form-control" type="password" name="password" id="password" placeholder=" Enter Password " required /><br/>
							</div>
						</div><br/>
						<div class="form-group text-right" id="l3">
							<button type="submit" class="btn btn-success" name="submit" > Login <span class="glyphicon glyphicon-log-in"></span> </button>
						</div>
						<div class="text-center">
							<a class="text-danger" id="forgot" onclick="for_module();"><b id="l4">Forgot Password?</b></a>
						</div>
						<div id="login_info"></div>
					</form>
				</div>
				<div id="forFormDiv">
					<form id="forForm">
						<div class="form-group">							
							<label for="forEmail">Please Enter Your Email:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fas fa-at" aria-hidden="true"></i></span>
								<input class="form-control" type="text" name="forEmail" id="forEmail" placeholder=" Enter Registered Email Id " />
								<span class="input-group-btn">
									<button type="submit" class="btn btn-primary pull-right" id="otp2"> Send OTP </button>
								</span>
							</div>
							<div class="errorTxt"></div>
						</div>
						<div class="form-group">							
							<label for="forOtp">Please Enter Received OTP:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fas fa-keyboard" aria-hidden="true"></i></span>
								<input class="form-control" type="text" id="forOtp" placeholder="Enter Received OTP" disabled />
							</div>
						</div><br/>
						<div class="form-group text-right">
							<button type="button" class="btn btn-info" disabled> Next <span class="glyphicon glyphicon-circle-arrow-right"></span> </button>
						</div>
						<div class="text-center">
							<a class="text-danger" id="forgot" onclick="log_module2();"><b id="l4"> Login Module </b></a>
						</div>
					</form>
				</div>
				<div id="regFormDiv">
					<!--Form for User Registration-->
					<form id="regForm">
						<div class="form-group">							
							<label for="userEmail">Please Enter Your Email:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fas fa-at" aria-hidden="true"></i></span>
								<input class="form-control" type="text" name="userEmail" id="userEmail" placeholder=" Enter Registered Email Id " />
								<span class="input-group-btn">
									<button type="submit" class="btn btn-primary pull-right" id="otp"> Send OTP </button>
								</span>
							</div>
							<div class="errorTxt"></div>
						</div>
						<div class="form-group">							
							<label for="regOtp">Please Enter Received OTP:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fas fa-keyboard" aria-hidden="true"></i></span>
								<input class="form-control" type="text" placeholder="Enter Received OTP" disabled />
							</div>
						</div><br/>
						<div class="form-group text-right">
							<button type="button" class="btn btn-info" disabled> Next <span class="glyphicon glyphicon-circle-arrow-right"></span> </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
			
		$("#forForm").validate({
			rules:{
				forEmail:{
					required:true,
					email:true
				}
			},
			messages:{
				forEmail:{
					required:"Please enter an email address",
					email:"Please eneter valid email"
				}
			},
			errorElement : 'div',
			errorLabelContainer: '.errorTxt',
			submitHandler: function(form){
				ontp2();
			}
		});
	});
</script>