<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
    <div class="login-page">
        <div class="container col-6">
            <h2 class="login-title">Login</h2>
            <div class="login-card">
                <?= view('Myth\Auth\Views\_message_block') ?>
                <form action="<?= url_to('login') ?>" method="post">
                    <?= csrf_field() ?>

                    <?php if ($config->validFields === ['email']): ?>
                        <div class="form-group">
                            <label for="login">Email</label>
                            <input type="email" class="login_email form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.email')?>">
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                    <?php else: ?>
						<div class="form-group">
							<label for="login"><?=lang('Auth.emailOrUsername')?></label>
							<input type="text" class="login_email form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="password"><?=lang('Auth.password')?></label>
                        <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                    </div>

                    <?php if ($config->allowRemembering): ?>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
							</label>
						</div>
                    <?php endif; ?>
                    
                    <button type="submit">Sign In</button>
                    <a href="/register">Create Account</a>
                    <?php if ($config->activeResetter): ?>
                        <a href="/forgot"><?=lang('Auth.forgotYourPassword')?></a>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>