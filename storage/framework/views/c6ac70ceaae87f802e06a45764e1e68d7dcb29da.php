<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Loan Emi Processing </title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />
  <script type="text/javascript" src="index.js"></script>
  <style>
    .error {
      color: red !important
    }
    .dash{
      height: 400px;
      justify-content: center;
      align-items: center;
      font-size: 20px;
      font-weight: bold;
      display: flex;
      color:green;
      flex-direction: column;

    }
  </style>
</head>

<body class="antialiased">
  <div class="container">
    <!-- main app container -->
    <div class="readersack">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h3>laravel 8 Custom Login and Registration Dashboard after login   - Readerstacks</h3>
               <!-- Show any success message -->
            <?php if(\Session::has('success')): ?>
                <div class="alert alert-success">
                    <ul>
                        <li><?php echo \Session::get('success'); ?></li>
                    </ul>
                </div>
            <?php endif; ?>
          <!-- Show any success message -->

            <!-- Check user is logged in -->
            <?php if(\Auth::check()): ?>
              <div class='dash'>You are logged in as  : <?php echo e(\Auth::user()->email); ?> ,  <a href="<?php echo e(url('logout')); ?>"> Logout</a></div> 
            <?php else: ?>
            <div class='dash '>
              <div class='error'> You are not logged in  </div>
              <div>  <a href="<?php echo e(url('login')); ?>">Login</a> | <a href="<?php echo e(url('register')); ?>">Register</a> </div>
            </div>
             
            <?php endif; ?>
           <!-- Check user is logged in --> 
          </div>
        </div>
      </div>
    </div>
    <!-- credits -->
    <div class="text-center">
      <p>
        <a href="#" target="_top">laravel 8 Custom login and registration  </a>
      </p>
      <p>
        <a href="https://readerstacks.com" target="_top">readerstacks.com</a>
      </p>
    </div>
  </div>
    
</body>
</html><?php /**PATH D:\xampp\htdocs\Laravel-MyTesting-Learn\Emi_processing\resources\views/dashboard.blade.php ENDPATH**/ ?>