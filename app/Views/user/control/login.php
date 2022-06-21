
  <!--  -->
		<div class="card mt-5 w-50 mx-auto">
			<div class="card-header bg-dark ">
				<h3 class="text-center text-white">Iniciar sesión</h3>
			</div>
			<div class="card-body">
      <?=view('user/control/_session')?>
				<form class="row g-3 needs-validation " action="<?=base_url()?>/login_post" method="post" novalidate>
				
        <div class="col-md-6 input-group">
						<input type="text" id="email" name="email" class="form-control py-2" placeholder="Nombre de usuario" value="<?= old('email') ?>" required>
            <div class="invalid-feedback">
           Complete el campo nombre de usuario.
          </div>
          </div>
         
        
          <div class="col-md-6 input-group">
          <!-- <span class="input-group-text"> -->
        
						<input type="password"  id="password" name="password"  class="form-control py-2" placeholder="Contraseña" required>
            <span class="input-group-text"> 
            <button class="btn btn-dark btn-sm" type="button" onclick="mostrarContrasena()"><i class="bi bi-eye"></i></button>
             </span>
             <div class="invalid-feedback">
            Complete el campo contraseña.
            </div>

            </div>


        

					<div class="text-center mt-2">
						<input type="submit" value="Login" class="btn  btn-dark">
					</div>
				</form>
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
 <script>
   // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
 </script>


<!-- mostrar contraseña -->
<script>
  function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>
