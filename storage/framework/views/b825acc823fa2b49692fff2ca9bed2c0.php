<?php $__env->startSection('content'); ?>


<div class="container main d-flex justify-container-center align-items-center min-vh-100">
    <div class="row mx-auto img-area">
        <div class="col-md-6 col-lg-8 col-xl-12 d-block mx-auto justify-content-center">
            <img src="<?php echo e(asset('img/logo_ic/logo 1.png')); ?>" class="img-fluid">
            <p class="display-4 fw-bold text-center text-uppercase text-welcome">Welcome to pinoy specials!</h1>
        </div>
    </div>
    <div class="row border rounded-5 px-5 mx-auto shadow text-center bg-white">
        <div class="col-md-6 col-lg-8 col-xl-12 p-4 my-4 d-flex justify-content-center flex-column right-box">
            <div class="row align-items-center">
                <div class="header mb-3 mx-auto">
                    <h1>Reset your Password</h1>
                    <p class="h2 text-uppercase fw-bold mt-3">Enter a new password</p>
                </div>

                <form action="<?php echo e(route('password.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <!-- Include the username and token from the session -->
                    <input type="hidden" name="username" value="<?php echo e(session('reset_username')); ?>">
                    <input type="hidden" name="token" value="<?php echo e(session('reset_token')); ?>">


                    <!-- password -->
                    <div class="input-group my-2 mt-3">
                        <div class="form-floating">
                            <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control-lg bg-light fs-6" name="password" id="password" placeholder="" required style="background: transparent; border:none; box-shadow:none; border-bottom: 1px solid gray; border-radius:0;">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <label for="password" class="text-capitalize">New Password</label>
                            <small id="passwordHelpInline_pw" class="justify-content-start fw-bold text-muted">Must be 8 to 12 characters long.</small>
                        </div>
                    </div>

                    <!-- confirm password -->
                    <div class="input-group my-1">
                        <div class="form-floating">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" name="password_confirmation" id="password_confirmation" placeholder="" required style="background: transparent; border:none; box-shadow:none; border-bottom: 1px solid gray; border-radius:0;">
                            <label for="password_confirmation" class="text-capitalize">Confirm password</label>
                        </div>
                    </div>

                    <div class="input-group my-1">
                        <button class="btn btn-lg w-100 fs-5 reg-btn" type="submit">Reset Password</button>
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

<?php echo $__env->make('Auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MARKBEL\OneDrive\Nitro 5\Nitro 5 My Documents\ASUNCION_GROUPACT\Project Web\Final-PS\resources\views/Auth/reset-password.blade.php ENDPATH**/ ?>