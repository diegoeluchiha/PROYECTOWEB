
  
  <!-- formulario de contacto en html y css -->  


    <div class="formulario text-center mt-5 w-50 mx-auto">      
          <form action="<?=base_url()?>/email/enviar" method="post">       

              
              <div class="mb-3">
                    <input type="text" class="form-control" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                </div>
        
                
                <div class="mb-3">
                    <input type="text" class="form-control" name="asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
                    </div>
              
                    <div class="form-floating">
                    <textarea class="form-control" name="mensaje" id="floatingTextarea"></textarea>
            
                    </div>

                <button type="submit" class="btn btn-dark mt-3 px-4 pt-3" ><p>Enviar</p></button>

              
          </form>
    </div>  


    
  


