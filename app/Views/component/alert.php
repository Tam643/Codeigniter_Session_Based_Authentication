<?php 
  if( session()->get("error") ) : 
  $errors = session()->get("error");  
?>
  <div class="position-absolute w-25 end-0 top-0 p-3">

    <?php foreach ($errors as $key => $value) : ?>

      <div class="alert alert-warning alert-dismissible p-4 position-relative text-center fade show"
      role="alert">
        <?=$value;?>
      </div>

    <?php endforeach; ?>
    
  </div>
<?php endif; ?>