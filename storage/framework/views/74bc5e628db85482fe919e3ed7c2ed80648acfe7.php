<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">




        <script src="<?php echo e(asset('/js/phaser2.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/game/lib/utils.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/game/screens/menu.js')); ?>"></script>

        <script src="<?php echo e(asset('/js/game/screens/splash.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/game/boot.js')); ?>"></script>

        <script src="<?php echo e(asset('/js/game/screens/main.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/game/statemanager.js')); ?>"></script>


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="gameDiv">


            </div>
        </div>
    </body>
</html>
