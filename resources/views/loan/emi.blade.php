@extends('layouts.app')

@section('content')


<div class="container">
<!-- main app container -->
<div class="readersack">
 
	<div class="row">
	  <div class="col-md-9 offset-md-1">
		<h3>EMI  Details</h3>
		
		<div class="button-container mt-5">
		
			<a href="{{url('/loan-details')}}" class="btn btn-primary"> Loan Details</a>
		 
		<button type='button' class="btn btn-secondary" onclick="submitForm()">Process Data</button>
	  </div>
		 
		
		 </p>
		 
		<div class="container mt-5"> 
		<form method="POST" id='myForm' action="/process-emi">
			@csrf
			
		</form>
		</div>

		<div class="container mt-5">
			<div class="table-responsive">
			  <table class="table table-striped table-hover table-bordered">
				<thead class="table-dark">
				  <tr>
					<th>Client ID</th>
					@foreach($emiDetails[0] ?? [] as $column => $value)
						@if($column != 'clientid')
							<th>{{ $column }}</th>
						@endif
					@endforeach
				</tr>
				</thead>
				<tbody>
					@foreach($emiDetails as $row)
					<tr>
						<td>{{ $row->clientid }}</td>
						@foreach($row as $column => $value)
							@if($column != 'clientid')
								<td>{{ $value }}</td>
							@endif
						@endforeach
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
    <script>
    function submitForm() {
      document.getElementById('myForm').submit();
    }
  </script>

@endsection