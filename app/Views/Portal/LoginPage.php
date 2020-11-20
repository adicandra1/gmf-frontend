<?php

namespace App\Views\Portal;

use App\Views\ViewHelper;
use Config\RoutesConstant;

class LoginPage extends HtmlSkeleton
{

    public function __construct()
    {
        parent::__construct("Login");
    }

    function bodySection(): string
    {
        $this->startHtmlParsing(); ?>

        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                    <div class="row flex-grow">
                        <div class="col-lg-6 d-flex align-items-center justify-content-center">
                            <div class="auth-form-transparent text-left p-3">
                                <div class="brand-logo">
                                    <img src="<?= base_url(ViewHelper::PORTAL_ASSETS_RELATIVE_PATH . 'images/logo_gdps.svg') ?>" alt="logo">
                                </div>
                                <h4>Welcome back!</h4>
                                <h6 class="font-weight-light">Happy to see you again!</h6>

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form class="pt-3" action="<?= route_to(RoutesConstant::LOGIN) ?>" method="POST">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-account-outline text-primary"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control form-control-lg border-left-0 <?= (session('errors.login')) ? 'is-invalid' : '' ?>" id="exampleInputEmail" placeholder="Username" name="login">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-lock-outline text-primary"></i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control form-control-lg border-left-0 <?= (session('errors.password')) ? 'is-invalid' : '' ?>" id="exampleInputPassword" placeholder="Password" name="password">
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-2 d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <label class="form-check-label text-muted">
                                                <input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
                                                Keep me signed in
                                            </label>
                                        </div>
                                        <a href="<?= route_to(RoutesConstant::FORGOT_PASS) ?>" class="auth-link text-black">Forgot password?</a>
                                    </div>
                                    <div class="my-3">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"><?= lang('Auth.loginAction') ?></a>
                                    </div>
                                    
                                    <div class="text-center mt-4 font-weight-light">
                                        Don't have an account? <a href="<?= route_to(RoutesConstant::REGISTER) ?>" class="text-primary">Create</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 login-half-bg d-flex flex-row">
                            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018 All rights reserved.</p>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

<?php return $this->endParsingAndGetHtml();
    }
}
