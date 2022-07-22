<div class="topnav" id="myTopnav">
	<div class="container">
		<a href="index.php">ABC Bank Ltd.</a>
		<a onclick="get_data_home();"><span class="fa-home fa"></span> Home </a>
		<a onclick="get_loan_services();"><i class="fas fa-money-bill-wave"></i> Loan </a>
		<a onclick="get_card_services();"><span class="fa-credit-card fa"></span> Card </a>
		<a onclick="get_other_services();"><i class="fas fa-magic"></i> Other Services</a>
		<a onclick="get_data_career();"><i class="fas fa-briefcase"></i> Career </a>
		<a class="active" onclick="get_help();"><i class="fas fa-headphones"></i> Help</a>
		<a onclick="reg_module();"><span class="glyphicon glyphicon-user"></span> Register </a>
		<a onclick="log_module();"><span class="glyphicon glyphicon-log-in"></span> Login </a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
	</div>
</div>
<div class="container" style="font-weight:bold;font-size:12px;padding:8px;">
	Home >> Help
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="assets/images/help.jpg" alt="New York" style="width:100%;min-height:200px;"/>
		</div>
		<div class="item">
			<img src="assets/images/cont.jpg" alt="New York" style="width:100%;min-height:200px;"/>
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