<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title><?php echo $__env->yieldContent('title', 'Loan/Emi Processing'); ?></title>
	
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  
  <style>
    .error {
      color: red !important
    }
    .dash{
      
      justify-content: center;
      font-size: 20px;
      font-weight: bold;
      display: flex;
      color:green;
	  align-items: center;
	  gap: 5px;

    }
	.button-container-main {
      display: flex; 
      align-items: center; 
      justify-content: space-between; 
	  margin-top:5px;
	  padding-left: 175px;
	  width:80%;
    }
	.button-container {
      display: flex; 
      align-items: center; 
      justify-content: space-between; 
	  margin-top:5px;
	  
    }

    .dash a {
      text-decoration: none; 
      color: blue; 
	  padding-left: 30px;
    }
	
  </style>
  
</head>
<body>
<div class="button-container-main">
    
        <h2>Loan/Emi Processing</h2>
    
		<div class="dash">

			<?php if(\Auth::check()): ?>
              You are logged in as  : <?php echo e(\Auth::user()->username); ?> ,  <a href="<?php echo e(url('logout')); ?>"> Logout</a>
            <?php endif; ?>
		  </div>
  </div>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
	
        
    </footer>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\Laravel-MyTesting-Learn\Emi_processing\resources\views/layouts/app.blade.php ENDPATH**/ ?>