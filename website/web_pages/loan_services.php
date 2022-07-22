<div class="topnav" id="myTopnav">
	<div class="container">
		<a href="index.php">ABC Bank Ltd.</a>
		<a onclick="get_data_home();"><span class="fa-home fa"></span> Home </a>
		<a class="active" onclick="get_loan_services();"><i class="fas fa-money-bill-wave"></i> Loan </a>
		<a onclick="get_card_services();"><span class="fa-credit-card fa"></span> Card </a>
		<a onclick="get_other_services();"><i class="fas fa-magic"></i> Other Services</a>
		<a onclick="get_data_career();"><i class="fas fa-briefcase"></i> Career </a>
		<a onclick="get_help();"><i class="fas fa-headphones"></i> Help</a>
		<a onclick="reg_module();"><span class="glyphicon glyphicon-user"></span> Register </a>
		<a onclick="log_module();"><span class="glyphicon glyphicon-log-in"></span> Login </a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
	</div>
</div>
<div class="container" style="font-weight:bold;font-size:12px;padding:8px;">
	Home >> Loan
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="assets/images/PersonalLoan.jpg" alt="New York" style="width:100%;min-height:200px;"/>
		</div>
		<div class="item">
			<img src="assets/images/loans.jpg" alt="New York" style="width:100%;min-height:200px;"/>
		</div>
	</div>
</div>
<div class="container" style="padding:50px;">
	<div class="row">
		<div class="col-md-4 container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-11"style="border:1px groove;height:250px;padding:5px;">
					<div style="background-color:#ff9100;float:left;color:white;font-size:12px;padding:10px;">CAR LOAN</div>
					<div style="background-color:#dfdfdf;float:left;color:black;font-size:12px;padding:10px;">UPTO 3 YEARS</div><br/><br/>
					<h2 style="font-weight:bold;text-align:center;">9.00%*</h2>
					<p class="text-center">Own your dream car with the lowest car loan rates</p>
					<center>
						<a href="#" target="_blank" style="font-size:14px;color:#cf121c;">KNOW MORE</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-sm btn-danger">APPLY NOW</button>
					</center>
				</div>
			</div>
		</div>
		<div class="col-md-4 container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-11"style="border:1px groove;height:250px;padding:5px;">
					<div style="background-color:#ff9100;float:left;color:white;font-size:12px;padding:10px;">HOME LOAN</div>
					<div style="background-color:#dfdfdf;float:left;color:black;font-size:12px;padding:10px;">UPTO Rs.48 LACS</div><br/><br/>
					<h2 style="font-weight:bold;text-align:center;">8.65%*</h2>
					<p class="text-center">With the lowest home loan rates, own a house and make it your home.</p>
					<center>
						<a href="#" target="_blank" style="font-size:14px;color:#cf121c;">KNOW MORE</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-sm btn-danger">APPLY NOW</button>
					</center>
				</div>
			</div>
		</div>
		<div class="col-md-4 container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-11"style="border:1px groove;height:250px;padding:5px;">
					<div style="background-color:#ff9100;float:left;color:white;font-size:12px;padding:10px;">LOAN AGAINST PROPERTY</div>
					<div style="background-color:#dfdfdf;float:left;color:black;font-size:12px;padding:10px;">FLOATING RATE</div><br/><br/>
					<h2 style="font-weight:bold;text-align:center;">10.65%*</h2>
					<p class="text-center">Take benefits from your existing property and avail a multi-purpose loan against it.</p>
					<center>
						<a href="#" target="_blank" style="font-size:14px;color:#cf121c;">KNOW MORE</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-sm btn-danger">APPLY NOW</button>
					</center>
				</div>
			</div>
		</div>
	</div>	
</div>	
	
<script>
    $(document).ready(function() {
         $('.carousel').carousel({
             interval: 3000
         })
    });    
</script>