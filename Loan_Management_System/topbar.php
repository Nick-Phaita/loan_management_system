<style>

.increase:hover{
    font-size: 20px;
}
.logo2{
    height:40px;
    width: 40px;
    background: url("assets/img/homepic3.PNG");
    background-repeat: no-repeat;
    background-size: cover;
}

 .grow { transition: all .2s ease-in-out; }
.grow:hover { transform: scale(1.1);

</style>

<nav class="navbar navbar-light fixed-top bg-primary" style="padding:0;background-color: #05fde9!important;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo2">
            </div>
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b style="font-size: 1.5em;color: black">FEDHA FINANCIERS</b></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white increase grow" style="color: black !important;"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>