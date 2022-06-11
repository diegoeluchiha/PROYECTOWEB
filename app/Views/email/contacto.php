
  
  <!-- formulario de contacto en html y css -->  


    <div class="card text-center mt-5 w-50 mx-auto">   
          <form  class="row g-3 needs-validation mx-3 mt-3" action="<?=base_url()?>/email/enviar" method="post"  novalidate>       

              
              <div class="mb-3 ">
                    <input type="email" class="form-control" name="email" id="email" required placeholder="Escribe tu Email">
                    <div class="invalid-feedback">
                        Ingrese un email valido.
                    </div>
                </div>
        
                
                <div class="mb-3">
                    <input type="text" class="form-control" name="asunto" id="assunto" required placeholder="Escribe un asunto">
                    <div class="invalid-feedback">
                        Ingrese el asunto.
                    </div>
                </div>
              
                <div class="form-floating">
                    <textarea class="form-control" name="mensaje"   required></textarea>
                    <label for="floatingTextarea">Mensaje</label>

                    <div class="invalid-feedback">
                        Ingrese el mensaje.
                    </div>
                </div>

                <button type="submit" class="btn btn-dark mt-3 mb-3  " ><p>Enviar</p></button>

              
          </form>
    </div>  

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


    
  


