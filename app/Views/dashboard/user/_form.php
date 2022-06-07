 <div class="form-group text-center mx-2">
    <label for="username">USUARIO</label>
    <input  <?=!$created ? "readonly":"" ?> class="form-control" type="text" id="username" name="username" value="<?= old('title',$user->username )?>" /><br />
</div>

<div class="form-group text-center mx-2">
    <label for="email">EMAIL</label>
    <input <?=!$created ? "readonly":"" ?> class="form-control" type="text" id="email" name="email" value="<?= old('title',$user->email )?>" /><br />
</div>

<?php if ($created): ?> 
<div class="form-group text-center mx-2">
    <select name="rol" class="form-select" >                              
    <option value="admin" selected>Administrador</option>
    <option value="regular" > Regular</option>
    </select>
</div> 
<?php endif; ?>

<?php if (!$created): ?> 
    <div class="form-group text-center mx-2">
    <label for="rol">ROL</label>
    <input  <?=!$created ? "readonly":"" ?> class="form-control" type="text" id="rol" name="rol" value="<?= old('title',$user->type )?>" /><br />
    </div> 
<?php endif; ?>

<div class="form-group text-center mx-2">
    <label for="password">CONTRASEÑA</label>
    <input class="form-control" type="password" id="password" name="password" value="" /><br />
</div>

<?php if ($_SESSION['type']=='regular'): ?> <!--ejemplo de como mostrar una seccion dependiendo de un if CON CONDICIONAL SESSION-->
<button>boton de prueba</button>
<?php endif; ?>


<div class="text-center mb-2">
<button class="btn btn-success" type="submit"><i class="fa fa-save mr-2"></i><?=$textButton ?></button>
</div>

