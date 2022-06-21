 <div class="form-group text-center mx-2">
    <label for="username">USUARIO</label>
    <input  <?=!$created ? "readonly":"" ?> class="form-control" type="text" id="username" name="username" value="<?= old('title',$user->username )?>" /><br />
    <?php if ($error=$validation->getError('username')): ?>
    <div class="alert alert-danger alert-dismissible fade show " role="alert">
    <?=$error =$validation->getError('username');?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
</div>

<div class="form-group text-center mx-2">
    <label for="email">EMAIL</label>
    <input <?=!$created ? "readonly":"" ?> class="form-control" type="text" id="email" name="email" value="<?= old('title',$user->email )?>" /><br />
    <?php if ($error=$validation->getError('email')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?=$error =$validation->getError('email');?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
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
    <?php if ($error=$validation->getError('password')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?=$error =$validation->getError('password');?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
</div>

<?php if ($_SESSION['type']=='regular'): ?> <!--ejemplo de como mostrar una seccion dependiendo de un if CON CONDICIONAL SESSION-->
<button>boton de prueba</button>
<?php endif; ?>


<div class="text-center">
<button class="btn btn-success" type="submit"><i class="fa fa-save mr-2"></i><?=$textButton ?></button>
</div>

