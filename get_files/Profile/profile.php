<div class="content" class="col-md-12" style="font-family:Open sans;">
	<div class="col-md-12">
		<div class="col-md-12 " style="margin-top:20px;padding-top:20px;background-color:#E6EFF3;">
			<div class="col-md-3">
				<center><img src="../get_files/Profile/Profile_Pic/face.jpg" id="imgProfile" style="width: 160px; height: 200px; margin-top:30px;" class="img-thumbnail"/><br/><br/>
				<input type="button" class="btn btn-primary btn-block" style="width: 160px;" id="btnChangePicture" onclick="choosefile();" value="Change Profile"/></center>
				<input type="file" style="display: none;" id="profilePicture" name="file" />
			</div>
			<div class="col-md-8" style="background-color:white;">
				<h2 style="font-weight:bold;">Akash Vichare</h2>
				<h4 style="font-weight:bold;">Rs. 2022</h4>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<td><b> Account Number </b></td>
						<td><u> XXXXX-23433-XXX </u></td>
					</tr>
					<tr>
						<td><b> Account Branch </b> </td>
						<td><u> Mulund East </u></td>
					</tr>
					<tr>
						<td><b> Branch Code</b> </td>
						<td><u> 150 </u></td>
					</tr>
					<tr>
						<td><b> Account Type</b> </td>
						<td><u> Savings </u></td>
					</tr>
					<tr>
						<td><b> ISBN Number </b> </td>
						<td><u> BKDN150 </u></td>
					</tr>
				</table>
			</div>
			<div class="col-md-1" ></div>
		</div>
		<br/>
		<br/>
		<div class="col-md-12 tabs-area">
			<ul id="tabs-profile" class="nav nav-tabs nav-tabs-v2" role="tablist">
				<li role="presentation" class="active">
					<a id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-selected="true">Basic Info</a>
				</li>
				<li class="nav-item">
					<a id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-selected="true">Change Info</a>
				</li>
			</ul>
			<div id="tabsBranchContent" class="tab-content tabs-content-v2">				
				<div role="tabpanel" class="tab-pane fade active in"  style="min-height:550px;padding-top:30px;"  id="basicInfo" aria-labelledby="tabs-branch-area2">
					<div class="col-md-12">
						<br/>
						<table class="table table-hover table-striped">
							<tr height="50">
								<td><b> Full Name </b></td>
								<td> Akash Ravindra Vichare </td>
							</tr>
							<tr height="50">
								<td><b> Address </b></td>
								<td> B/203,Dnyaneshwar Darshan,G.V.Scheme Road,Mulund East,Mumbai </td>
							</tr>
							<tr height="50">
								<td><b> Birth Date</b> </td>
								<td> Feb 17, 1994. </td>
							</tr>
							<tr height="50">
								<td><b> Adhar Card Number</b></td>
								<td> XXXX263647XXX </td>
							</tr>
							<tr height="50">
								<td><b> Pan Card Number </b></td>
								<td> 44HHXX </td>
							</tr>
						</table>
						
					</div>
				</div>
				<div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
					Facebook, Google, Twitter Account that are connected to this account
				</div>
			</div>
		</div>
	</div>
</div>
<script>
function choosefile(){
		document.getElementById('profilePicture').click();
	}                       
</script>