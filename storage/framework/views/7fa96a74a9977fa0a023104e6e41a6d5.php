<?php $__env->startSection('content'); ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>
<?php if(session('message')): ?>
    <div class="alert alert-success">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>

<div class="container main d-flex justify-container-center align-items-center min-vh-100">
    <div class="row mx-auto img-area">
        <div class="col-md-6 col-lg-8 col-xl-12 d-block p-3 mx-auto justify-content-center">
            <img src="<?php echo e(asset('img/logo_ic/logo11.PNG')); ?>" class="img-fluid">
            <p class="display-4 fw-bold text-center text-uppercase text-welcome">Welcome to pinoy specials!</h1>
        </div>
    </div>
    <div class="row border rounded-5 px-5 mx-auto shadow text-center bg-white">
        <div class="col-md-6 col-lg-8 col-xl-12 p-4 my-4 d-flex justify-content-center flex-column right-box">
            <div class="row align-items-center">
                <div class="header mb-3 mx-auto">
                    <h1>Welcome back!</h1>
                    <small class="h5 pb-3">Are you ready to cook?</small>
                    <p class="h2 text-uppercase fw-bold mt-3">Log in</p>
                </div>
                <form action="<?php echo e(route('authenticate')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

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

                    <div class="input-group mt-1 justify-content-start">
                        <p class="fs-6">Don't have an account? <a href="<?php echo e(route('register')); ?>" class="text-secondary fw-bold link <?php echo e((request()->is('login')) ? 'active' : ''); ?>">Reigster</a></p>
                    </div>

                    <div class="input-group my-1">
                        <button class="btn btn-lg w-100 fs-5 reg-btn" type="submit">Log in</button>
                    </div>

                    <div class="input-group my-2 justify-content-start">
                        <p class="fs-6"><a href="<?php echo e(route('password.request')); ?>" class="text-secondary fw-bold link">Forgot Password?</a></p>
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

<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MARKBEL\OneDrive\Nitro 5\Nitro 5 My Documents\ASUNCION_GROUPACT\Project Web\Final-PS\resources\views/auth/login.blade.php ENDPATH**/ ?>