<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--Favicon inicio-->
    <link rel="shortcut icon" href="/public/calendar.png">
<!--Favicon fin-->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Guardia')); ?></title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>
<script type="text/javascript">
    var baseURL= <?php echo json_encode(url('/')); ?>

</script>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
    <?php if(Auth::check()): ?>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
             <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Guardia')); ?>

                </a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>
                    <!--Menu-->
                    
                        
                        <li class="nav-item list-unstyled navbar-brand ">
                                    <a class="nav-link" href="<?php echo e(route('consultor.index')); ?>"><?php echo e(__('Consultor')); ?></a>
                                </li>

                        <li class="nav-item list-unstyled navbar-brand">
                                    <a class="nav-link" href="<?php echo e(route('tiempo.index')); ?>"><?php echo e(__('Tiempo')); ?></a>
                                </li>

                        <li class="nav-item list-unstyled navbar-brand">
                                    <a class="nav-link" href="<?php echo e(route('role.index')); ?>"><?php echo e(__('Roles')); ?></a>
                                </li>

                        <li class="nav-item list-unstyled navbar-brand">
                                    <a class="nav-link" href="<?php echo e(route('user.index')); ?>"><?php echo e(__('Usuarios')); ?></a>
                                </li>

                    <?php endif; ?>
                    <!--Fin Menu-->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <!-- <?php if(auth()->guard()->guest()): ?>
                             <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                             <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Crear usuario')); ?></a>
                                </li>
                            <?php endif; ?> 
                        <?php else: ?>-->
                            <li class="nav-item dropdown"> 
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?> 
                    </ul>                               
                </div>
            </div>
        </nav>
        <!--Para llamar js de fullcalendar-->
        <script src="<?php echo e(asset('js/agenda.js')); ?>" defer></script>
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH /srv/http/agenda/resources/views/layouts/app.blade.php ENDPATH**/ ?>