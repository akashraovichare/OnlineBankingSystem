<noscript> 
	Your browser does not support JavaScript!! 
	To continue using our services please upgrade your browser or give us a call at 7738778067.
</noscript>

<div class="top-navbar collapse navbar-collapse">
	<ul class="nav navbar-nav top-list pull-right" style="letter-spacing:1px;">
		<li onclick="toggleFullScreen()">full screen&nbsp;<i class="fa fa-window-maximize " title="go full screen"></i></li>
	</ul>
</div>

<div class="shadow-box" >
    <nav class="navbar navbar-default navigation-clean-button">
        <div class="container" style="width:100%;">
			<div class="opener-left-menu is-open hidden-xs">
				<span class="top"></span>
				<span class="middle"></span>
				<span class="bottom"></span>
			</div>
            <div class="navbar-header"><a class=" col-sm-6 navbar-brand" href="dashboard.php" title="home">
                <?php
                    echo '<img id="logo" src="../assets/images/untitled.png" style="height:3em;width:6em;margin-top:-18px;" alt="logo" ></a>';
                ?>
             	<button id="mobile-menu-here" class="navbar-toggle collapsed col-sm-6" style="margin-right:10%;" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
			<div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right" id="menu-right" style="letter-spacing:0.8px;width:28%;margin-right:2%;">
				<?php
					if(@$_SESSION['login'] == "1"){
						echo"<li style='float:right;border-radius:100px;max-width:120px' class='dropdown navbar-right hidden-xs'><a class='dropdown-toggle action-button' title='this is the title' style='border:1px solid #ddd;background-color:#fff;padding:10px;box-shadow:0 2px 4px rgba(0,0,0,.1);' data-toggle='dropdown' aria-expanded='false' href='#'>Logged In <span class='caret'></span></a>
								<ul class='dropdown-menu user-dropdown'>
									<li><a href=''><span class='fa fa-user'></span> My Profile</a></li>
									<li><a href='signout.php'><span class='fa fa-power-off'></span> Log Out</a></li>	
								</ul>
							</li>";
					}
				?>
			</div>
        </div>
     </nav>
</div>
	
<script type="text/javascript">
 	$('.opener-left-menu').on('click', function(){
	if( $('#left-menu .sub-left-menu').is(':visible') ) {
                $('.content').animate({ 'padding-left': '0px'}, 'slow');
                $('#left-menu .sub-left-menu').animate({ 'width': '0px' }, 'slow', function(){
                    $('.overlay').show();
                      $('.opener-left-menu').removeClass('is-open');
                      $('.opener-left-menu').addClass('is-closed');
                    $('#left-menu .sub-left-menu').hide();
                });
        }
		else {
                $('#left-menu .sub-left-menu').show();
                $('#left-menu .sub-left-menu').animate({ 'width': '260px' }, 'slow');
                $('.content').animate({ 'padding-left': '260px','padding-right':'0px'}, 'slow');
                $('.overlay').hide();
                      $('.opener-left-menu').removeClass('is-closed');
                      $('.opener-left-menu').addClass('is-open');
            }
	});
</script>