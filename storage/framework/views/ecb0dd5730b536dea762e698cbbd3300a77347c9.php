<?php $__env->startSection('content'); ?>


  <div class="container">
    <!-- main app container -->
    <div class="readersack">
       
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <h3>Loan Details</h3>
			
		  <div class="button-container mt-5">
			
				<a href="<?php echo e(url('/process-emi')); ?>" class="btn btn-secondary"> Emi(Process Data)</a>
			 
			
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
    <!-- credits -->
    
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel-MyTesting-Learn\Emi_processing\resources\views/loan/loan-details.blade.php ENDPATH**/ ?>