<?php
	@session_start();
	
	error_reporting(E_ALL ^ E_DEPRECATED);
	$user_type = $_SESSION["user_type"];
	
echo'
<div class="sub-left-menu scroll hidden-xs">
    <ul class="nav nav-list" style="margin-bottom:80px;">
        <li class="time">
            <h1 class="animated fadeInLeft">21:00</h1>
            <p class="animated fadeInRight">Sat,October 1st 2029</p>
        </li>
		<li class="active ripple">
			<a href="#home" data-toggle="tab"><span class="fa-home fa" style="color:#A3CB38;"></span> Home </a>
		</li>
		<li>
			<a class="tree-toggle  nav-header"><span class="fa fa-user" style="color:#474787;"></span> My Profile <span class="change fa-angle-right fa right-arrow text-right"></span></a>
			<ul class="nav nav-list tree">
				<li class="ripple"><a href="#profile" onclick="gen_profile();" data-toggle="tab"> My Profile </a></li>
		    </ul>
        </li>';
		if($user_type == "superuser" && $_SESSION['login'] == "1"){
			echo'
			<li>
				<a class="tree-toggle nav-header"><span class="fa fa-building" style="color:#f6b93b;"></span> Bank Organization <span class="change fa-angle-right fa right-arrow text-right"></span></a>
				<ul class="nav nav-list tree">
					<li class="ripple"><a href="#office" onclick="add_branch();" data-toggle="tab"> Manage Branch </a></li>
					<li class="ripple"><a href="#employee" onclick="add_employee();" data-toggle="tab"> Manage Staff </a></li>													
					<li class="ripple"><a href="#department" onclick="add_department();" data-toggle="tab"> Manage Department </a></li>													
					<li class="ripple"><a href="#emp_cat" onclick="add_emp_cat();" data-toggle="tab"> Manage Designation </a></li>													
					<li class="ripple"><a href="#degree" onclick="add_degree();" data-toggle="tab"> Manage Qualifications </a></li>													
				</ul>
			</li>';
		}
		else if($user_type == "manager" && $_SESSION['login'] == "1"){
			echo'<li>
					<a class="tree-toggle nav-header"><span class="fa fa-building" style="color:#f6b93b;"></span> Branch Organization <span class="change fa-angle-right fa right-arrow text-right"></span></a>
					<ul class="nav nav-list tree">
						<li class="ripple"><a href="#employee" onclick="add_employee();" data-toggle="tab"> Manage Staff </a></li>													
					</ul>
				</li>';
		}
		if(($user_type == "superuser" || $user_type == "manager") && $_SESSION['login'] == "1"){
			echo'
			<li>
				<a class="tree-toggle  nav-header"><span class="fa fa-user" style="color:#7f8fa6;"></span> Customer Accounts <span class="change fa-angle-right fa right-arrow text-right"></span></a>
				<ul class="nav nav-list tree">
					<li class="ripple"><a href="#saving_account" data-toggle="tab" onclick="add_saving();"> Saving Accounts </a></li>
					<li class="ripple"><a href="#current_account" data-toggle="tab" onclick="add_current();"> Current Accounts </a></li>
					<li class="ripple"><a href="#fd_account" data-toggle="tab" onclick="add_fd();"> F.D. Accounts </a></li>
					<li class="ripple"><a href="#rd_account" data-toggle="tab" onclick="add_rd();"> R.D. Accounts </a></li>
				</ul>
			</li>';
		}
		else if($user_type == "employee" && $_SESSION['login'] == "1"){
			echo'
			<li>
				<a class="tree-toggle  nav-header"><span class="fa fa-user" style="color:#7f8fa6;"></span> Saving Accounts <span class="change fa-angle-right fa right-arrow text-right"></span></a>
				<ul class="nav nav-list tree">
					<li class="ripple"><a href="#saving_account" data-toggle="tab" onclick="add_saving();"> Saving Accounts </a></li>
				</ul>
			</li>
			<li>
				<a class="tree-toggle  nav-header"><span class="fa fa-user" style="color:#7f8fa6;"></span> Current Accounts <span class="change fa-angle-right fa right-arrow text-right"></span></a>
				<ul class="nav nav-list tree">
					<li class="ripple"><a href="#current_account" data-toggle="tab" onclick="add_current();"> Current Accounts </a></li>
				</ul>
			</li>
			<li>
				<a class="tree-toggle  nav-header"><span class="fa fa-user" style="color:#7f8fa6;"></span> F.D. Accounts <span class="change fa-angle-right fa right-arrow text-right"></span></a>
				<ul class="nav nav-list tree">
					<li class="ripple"><a href="#current_account" data-toggle="tab" onclick="add_current();"> F.D. Accounts </a></li>
				</ul>
			</li>
			<li>
				<a class="tree-toggle  nav-header"><span class="fa fa-user" style="color:#7f8fa6;"></span> R.D. Accounts <span class="change fa-angle-right fa right-arrow text-right"></span></a>
				<ul class="nav nav-list tree">
					<li class="ripple"><a href="#current_account" data-toggle="tab" onclick="add_current();"> R.D. Accounts </a></li>
				</ul>
			</li>';
		}
		if(($user_type == "superuser" || $user_type =="manager" || $user_type == "employee") && $_SESSION['login'] == "1"){
			echo'
			<li>
				<a class="tree-toggle  nav-header"><span class="fa fa-money" style="color:#FFA500;"></span> Online Transactions <span class="change fa-angle-right fa right-arrow text-right"></span></a>
				<ul class="nav nav-list tree">
					<li class="ripple"><a href="#billing" data-toggle="tab" onclick="all_billing();">Credit Transactions </a></li>
					<li class="ripple"><a href="#ftl_billing" data-toggle="tab" onclick="all_ftl_billing();"> Debit Transactions </a></li>
				</ul>
			</li>';
		}
		if($user_type == "superuser" && $_SESSION['login'] == "1"){	
			echo'
			<li>
				<a class="tree-toggle  nav-header"><span class="fa fa-map-marker" style="color:red;"></span> Place Master <span class="change fa-angle-right fa right-arrow text-right"></span></a>
				<ul class="nav nav-list tree">
					<li class="ripple"><a href="#state" onclick="add_state();" data-toggle="tab"> State Master </a></li>
					<li class="ripple"><a href="#dist" onclick="add_dist();" data-toggle="tab"> District Master </a></li>
					<li class="ripple"><a href="#tehsil" onclick="add_tehsil();" data-toggle="tab"> Taluka/Tehsil Master </a></li>
					<li class="ripple"><a href="#city" onclick="add_city();" data-toggle="tab"> City Master </a></li>
				</ul>
			</li>';
		}
		if($user_type == "customer" && $_SESSION['login'] == "1"){
			echo'<li>
					<a class="tree-toggle nav-header"><span class="fa fa-line-chart" style="color:red;"></span> Send Money <span class="change fa-angle-right fa right-arrow text-right"></span></a>
					<ul class="nav nav-list tree">
						<li class="ripple"><a href="#fin_year" onclick="generatefinyear();" data-toggle="tab"> Add Payee Account </a></li>
						<li class="ripple"><a href="#fin_year" onclick="generatefinyear();" data-toggle="tab"> Send Money </a></li>
					</ul>
				</li>
				<li>
					<a class="tree-toggle  nav-header"><span class="fa fa-exchange" style="color:#FFA500;"></span> My Transactions <span class="change fa-angle-right fa right-arrow text-right"></span></a>
					<ul class="nav nav-list tree">
						<li class="ripple"><a href="#billing" data-toggle="tab" onclick="all_billing();">All Transactions </a></li>
						<li class="ripple"><a href="#billing" data-toggle="tab" onclick="all_billing();">Credit Transactions </a></li>
						<li class="ripple"><a href="#ftl_billing" data-toggle="tab" onclick="all_ftl_billing();"> Debit Transactions </a></li>
					</ul>
				</li>
				<li>
					<a class="tree-toggle  nav-header"><span class="fa fa-vcard" style="color:blue;"></span> Other Services <span class="change fa-angle-right fa right-arrow text-right"></span></a>
					<ul class="nav nav-list tree">
						<li class="ripple"><a href="#billing" data-toggle="tab" onclick="all_billing();"> Loan Services </a></li>
						<li class="ripple"><a href="#billing" data-toggle="tab" onclick="all_billing();"> Cheque Book Services </a></li>
						<li class="ripple"><a href="#billing" data-toggle="tab" onclick="all_billing();"> ATM Card Services </a></li>
						<li class="ripple"><a href="#billing" data-toggle="tab" onclick="all_billing();"> Credit Card Services </a></li>
					</ul>
				</li>';
		}
		echo'
	</ul>
</div>
<script>
	var datetime = null, date = null;
	var update = function () {
		date = moment(new Date());
		datetime.html(date.format("HH:mm"));
		datetime2.html(date.format("dddd, MMMM Do YYYY"));
	};
	
	$(document).ready(function() {	
		$(".tree").hide();
			$(".tree-toggle").click(
			function () {
				var $slid = $(this).next(".tree").slideToggle();
				$(".tree").not($slid).slideUp();
			});
			
			datetime = $(".time h1");
			datetime2 = $(".time p");
			update();
			setInterval(update, 1000);
			
			$("#left-menu .sub-left-menu").niceScroll();
	});
	
	$(".ripple").click(function() { 
	  $(".ripple").not($(this)).removeClass("active");
	});
</script>';
?>