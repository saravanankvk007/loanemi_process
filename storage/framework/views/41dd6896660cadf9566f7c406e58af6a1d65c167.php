<!DOCTYPE html>
<html >

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
            <h3>Loan Details</h3>
			<div class="container">
			<p>
			<?php if(\Auth::check()): ?>
              You are logged in as  : <?php echo e(\Auth::user()->username); ?> ,  <a href="<?php echo e(url('logout')); ?>"> Logout</a>
            <?php endif; ?>
			</p>
			
		  </div>
		  <div class="button-container mt-5">
			
				<a href="<?php echo e(url('/process-emi')); ?>" class="btn btn-primary"> Loan Details</a>
			 
			
		  </div>
		
               <!-- Show any success message -->
            <?php if(\Session::has('success')): ?>
                <div class="alert alert-success">
                    <ul>
                        <li><?php echo \Session::get('success'); ?></li>
                    </ul>
                </div>
            <?php endif; ?>
			<div class="container mt-5">
				<div class="table-responsive">
				  <table class="table table-striped table-hover table-bordered">
					<thead class="table-dark">
						<tr>
							<th>Client ID</th>
							<th>Number of Payments</th>
							<th>First Payment Date</th>
							<th>Last Payment Date</th>
							<th>Loan Amount</th>
						</tr>
					</thead>
				<tbody>
					<?php $__currentLoopData = $loanDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($loan->clientid); ?></td>
						<td><?php echo e($loan->num_of_payment); ?></td>
						<td><?php echo e($loan->first_payment_date); ?></td>
						<td><?php echo e($loan->last_payment_date); ?></td>
						<td><?php echo e($loan->loan_amount); ?></td>
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
    
</body>
</html><?php /**PATH D:\xampp\htdocs\Laravel-MyTesting-Learn\Emi_processing\resources\views/loan-details.blade.php ENDPATH**/ ?>