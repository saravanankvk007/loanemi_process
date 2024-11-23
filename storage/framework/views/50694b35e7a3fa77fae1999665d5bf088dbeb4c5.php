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
          <div class="col-md-9 offset-md-1">
            <h3>EMI  Details</h3>
            
		 <div class="container">
			<p>
			<?php if(\Auth::check()): ?>
              You are logged in as  : <?php echo e(\Auth::user()->username); ?> ,  <a href="<?php echo e(url('logout')); ?>"> Logout</a>
            <?php endif; ?>
			</p>
			
		  </div>
            <div class="button-container mt-5">
			
				<a href="<?php echo e(url('/loan-details')); ?>" class="btn btn-primary"> Loan Details</a>
			 
			<button type='button' class="btn btn-secondary" onclick="submitForm()">Process Data</button>
		  </div>
             
            
			 </p>
			 
			<div class="container mt-5"> 
			<form method="POST" id='myForm' action="/process-emi">
				<?php echo csrf_field(); ?>
				
			</form>
			</div>

			<div class="container mt-5">
				<div class="table-responsive">
				  <table class="table table-striped table-hover table-bordered">
					<thead class="table-dark">
					  <tr>
						<th>Client ID</th>
						<?php $__currentLoopData = $emiDetails[0] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($column != 'clientid'): ?>
								<th><?php echo e($column); ?></th>
							<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $emiDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($row->clientid); ?></td>
							<?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($column != 'clientid'): ?>
									<td><?php echo e($value); ?></td>
								<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				  </table>
				</div>
			</div>
          </div>
        </div>
      </div>
    </div>
    <!-- credits -->
    
  </div>
    <script>
    function submitForm() {
      document.getElementById('myForm').submit();
    }
  </script>
</body>
</html><?php /**PATH D:\xampp\htdocs\Laravel-MyTesting-Learn\Emi_processing\resources\views/emi.blade.php ENDPATH**/ ?>