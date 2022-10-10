<div class="container">
  <div class="row">
    <div class="col-sm-6 offset-sm-3">

      <form action="" method="post">
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuário:</label>
          <input type="text" name="usuario" id="usuario" class="form-control">
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha:</label>
          <input type="password" name="senha" id="senha" class="form-control">
        </div>
        <?php if(isset($erro)):?>
          <p class="alert alert-danger text-center p-2"><?= $erro ?></p>
        <?php endif;?>
        <div class="mb-3 text-center">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>

    </div>
  </div>
</div>
