<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Loan Emi Processing </title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />
  
  <style>
    .error {
      color: red
    }
	.container {
      margin-top:100px;
    }
  </style>
</head>
<body class="antialiased">
  <div class="container">
    <div class="readersack">
      <div class="container">
        <div class="row">
          <div class="col-md-5 offset-md-3">
            <h3>Login</h3>
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" id="handleAjax" action="{{url('do-login')}}" name="postform">
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="username" value="{{old('username')}}"  class="form-control" />

                
                @csrf
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password"   class="form-control" />
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">LOGIN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   
   
  </div>
    
</body>

</html>