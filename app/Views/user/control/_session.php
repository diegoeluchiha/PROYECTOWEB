<?php if (session('message')):  ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?=session('message') ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif ?>