<?php $__env->startSection('content'); ?>

<div class="container main d-flex justify-container-center align-items-center min-vh-100">
    <div class="row mx-auto img-area">
        <div class="col-md-6 col-lg-8 col-xl-12 d-block p-3 mx-auto justify-content-center">
            <img src="<?php echo e(asset('img/logo_ic/logo11.png')); ?>" class="img-fluid">
            <p class="display-4 fw-bold text-center text-uppercase text-welcome">Welcome to pinoy specials!</h1>
        </div>
    </div>
    <div class="row border rounded-5 px-5 mx-auto shadow text-center bg-white">
        <div class="col-md-6 col-lg-8 col-xl-12 p-4 my-4 d-flex justify-content-center flex-column right-box">
            <div class="row align-items-center">
                <div class="header mb-3 mx-auto">
                    <p class="h1 text-uppercase fw-bold">REGISTER</p>
                </div>
                <form action="<?php echo e(route('store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <!--username-->
                    <div class="input-group my-2">
                        <div class="form-floating">
                            <input type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control-lg bg-light fs-6"
                            name="username" id="username" placeholder="" style="background: transparent; border: none; box-shadow: none; border-bottom:1px solid gray; border-radius: 0;"
                            value="<?php echo e(old('username')); ?>" required>
                            <?php if($errors->has('username')): ?>
                                <span class="text-danger"><?php echo e($errors->first('username')); ?></span>
                            <?php endif; ?>
                            <label for="username" class="text-capitalize">Username</label>
                        </div>
                    </div>
                    <!--Email-->
                    <div class="input-group my-2 mt-3">
                        <div class="form-floating">
                            <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control-lg bg-light fs-6"
                            name="email" id="email" placeholder="" required style="background: transparent; border:none; box-shadow:none; border-bottom: 1px solid gray; border-radius:0;"
                            value="<?php echo e(old('email')); ?>">
                            <?php if($errors->has('email')): ?>
                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                            <label for="email" class="text-capitalize">Email</label>
                        </div>
                    </div>
                    <!--password-->
                    <div class="input-group my-2 mt-3">
                        <div class="form-floating">
                            <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control-lg bg-light fs-6"
                            name="password" id="password" placeholder="" required style="background: transparent; border:none; box-shadow:none; border-bottom: 1px solid gray; border-radius:0;"
                            value="<?php echo e(old('password')); ?>">
                            <?php if($errors->has('password')): ?>
                                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                            <?php endif; ?>
                            <label for="password" class="text-capitalize">Password</label>
                            <small id="passwordHelpInline_pw" class="justify-content-start fw-bold text-muted" style="margin-right: 145px; visibility:hidden;">Must be 8 to 12 characters long.</small>
                        </div>
                    </div>
                    <!--confirm pass-->
                    <div class="input-group my-1">
                        <div class="form-floating">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" name="password_confirmation" id="password_confirmation" placeholder="" required
                            style="background: transparent; border:none; box-shadow:none; border-bottom: 1px solid gray; border-radius:0;">
                            <label for="password_confirmation" class="text-capitalize">Confirm password</label>
                            <small id="passwordHelpInline_conpw" class="justify-content-start fw-bold text-muted" style="margin-right: 145px; visibility:hidden;">Must be 8 to 12 characters long.</small>
                        </div>
                    </div>

                    <div class="input-group my-1 justify-content-start">
                        <p class="fs-6">Already have an account? <a href="<?php echo e(route('login')); ?>" class="text-secondary fw-bold link <?php echo e((request()->is('login')) ? 'active' : ''); ?>">Log in</a></p>
                    </div>
                    <div class="input-group my-1">
                        <button class="btn btn-lg w-100 fs-5 reg-btn" type="submit">Register</button>
                    </div>

                    <div class="input-group mt-2">
                        <a class="btn btn-lg btn-outline-secondary w-100 fs-5" type="button" href="<?php echo e(route('guest-dashboard')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-person mx-2" viewBox="2 1 15 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                            </svg> Guest mode
                        </a>
                    </div>

                </form>
                <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MARKBEL\OneDrive\Nitro 5\Nitro 5 My Documents\ASUNCION_GROUPACT\Project Web\Final-PS\resources\views/auth/register.blade.php ENDPATH**/ ?>