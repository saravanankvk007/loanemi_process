@extends('layouts.app')

@section('content')


  <div class="container">
    <!-- main app container -->
    <div class="readersack">
       
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <h3>Loan Details</h3>
			
		  <div class="button-container mt-5">
			
				<a href="{{url('/process-emi')}}" class="btn btn-secondary"> Emi(Process Data)</a>
			 
			
		  </div>
		
               <!-- Show any success message -->
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
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
					@foreach($loanDetails as $loan)
					<tr>
						<td>{{ $loan->clientid }}</td>
						<td>{{ $loan->num_of_payment }}</td>
						<td>{{ $loan->first_payment_date }}</td>
						<td>{{ $loan->last_payment_date }}</td>
						<td>{{ $loan->loan_amount }}</td>
					</tr>
					@endforeach
				</tbody>
			  </table>
			</div>
		</div>

          
          </div>
        </div>
      
    </div>
    <!-- credits -->
    
  </div>

@endsection