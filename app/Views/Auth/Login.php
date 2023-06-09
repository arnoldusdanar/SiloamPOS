<?= $this->extend('Auth/template/index'); ?>

<?= $this->Section('konten'); ?>
<div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="card o-hidden border-0 shadow-lg my-3">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg">
                  <div class="p-4">
                    <div class="row justify-content-center">
                    <img src="<?= base_url(); ?>/img/Logo.jpeg" alt="middle"/>
                    </div>
                    <div class="text-center">
                      <h1 class="h2 text-gray-900 mb-2"><?=lang('Auth.loginTitle')?></h1>
                    </div>
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <form action="<?= url_to('login') ?>" method="post" class="user">
                    <?= csrf_field() ?>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" aria-describedby="emailHelp" placeholder="<?=lang('Auth.emailOrUsername')?>" />
                          <div class="invalid-feedback">
								            <?= session('errors.login') ?>
							            </div>                      
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?=lang('Auth.password')?>" />
                      </div>
                      <?php if ($config->allowRemembering): ?>
                      <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
                          <label class="custom-control-label" for="customCheck">Remember Me</label>
                        </div>
                      </div>
                      <?php endif; ?>
                      <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
                      <hr />
                    </form>
                    <?php if ($config->activeResetter): ?>
                    <div class="text-center">
                      <a class="small" href="forgot">Lupa Password?</a>
                    </div>
                    <?php endif; ?>
                    <?php if ($config->allowRegistration) : ?>
                    <div class="text-center">
                      <a class="small" href="register">Buat Akun!</a>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?= $this->endSection(); ?>