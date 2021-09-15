
<style>
    .grow { transition: all .2s ease-in-out; }
    .grow:hover { transform: scale(1.1);}
    .nav-item:active,{
        width: 100%;
    }
    .nav-item{
        width: 95%;
        text-align: center;
    }


</style>
<nav id="sidebar" class='mx-lt-5 bg-dark' style="background-color: #05fde9 !important;" >
		
		<div class="sidebar-list" >

				<a href="index.php?page=home" class="nav-item nav-home grow"><span class='icon-field'><i class="fa fa-home" style="color: white"></i></span> Home</a>
				<a href="index.php?page=loans" class="nav-item nav-loans grow"><span class='icon-field'><i class="fa fa-file-invoice-dollar" style="color: white"></i></span> Loans</a>
				<a href="index.php?page=payments" class="nav-item nav-payments grow"><span class='icon-field'><i class="fa fa-money-bill" style="color: white"></i></span> Payments</a>
				<a href="index.php?page=borrowers" class="nav-item nav-borrowers grow"><span class='icon-field'><i class="fa fa-user-friends" style="color: white"></i></span> Borrowers</a>
				<a href="index.php?page=plan" class="nav-item nav-plan grow"><span class='icon-field'><i class="fa fa-list-alt" style="color: white"></i></span> Loan Plans</a>
				<a href="index.php?page=loan_type" class="nav-item nav-loan_type grow"><span class='icon-field'><i class="fa fa-th-list" style="color: white"></i></span> Loan Types</a>
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users grow"><span class='icon-field'><i class="fa fa-users" style="color: white"></i></span> Users</a>
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
