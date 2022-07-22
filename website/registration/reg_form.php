<!--Modal for Registration-->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog" style="max-width:450px;">
		<!-- Modal content-->
		<div class="modal-content">     
			<div class="modal-header" style="background-color:#1289A7; padding:16px 16px; color:#FFF;">
				<center><h2 class="modal-title" id="l5"> Registration </h2></center>
			</div>
			<div class="modal-body">
				<div class="fadeIn first">
					<center><img src="assets/images/login.png" height="100px" width="100px" alt="User Icon" /></center><br/>
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
	$("#regForm").validate({
		rules:{
			userEmail:{
				required:true,
				email:true
			}
		},
		messages:{
			userEmail:{
				required:"Please enter an email address",
				email:"Please eneter valid email"
			}
		},
		errorElement : 'div',
		errorLabelContainer: '.errorTxt',
		submitHandler: function(form){
			ontp();
		}
	});
</script>