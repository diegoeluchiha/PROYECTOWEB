
  <!--  -->
  <div class="d-flex justify-content-center h-100">
		<div class="card mt-5 ">
			<div class="card-header bg-dark">
				<h3 class="text-center text-white">Iniciar sesión</h3>
			</div>
			<div class="card-body">
      <?=view('user/control/_session')?>
				<form action="<?=base_url()?>/login_post" method="post">
					<div class=" form-group">
						<input type="text" id="email" name="email" class="form-control" placeholder="email">
						
					</div>
					<div class="form-group mt-2">
						
						<input type="password"  id="password" name="password"  class="form-control" placeholder="password">
					</div>
					<div class="form-group text-center mt-2">
						<input type="submit" value="Login" class="btn  btn-dark">
					</div>
				</form>
			</div>
		</div>
	</div>

  <!-- <style>
    .card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color:black !important;
}
h3 {
  color:white;
}

    input[type=password] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
}
 </style> -->
