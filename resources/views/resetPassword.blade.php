<!DOCTYPE html>
<html lang="en">
    
<head>
    @extends('styling')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
  <form action="{{ route('password.update') }} " method="post">
    @csrf
    
    <input value="{{ request()->query('email') }}" type="hidden" class="form-control" name="email" id="email">
    <input value="{{ request()->route('token') }}" type="hidden" class="form-control" name="token" id="token">
    
    <label for="password" class="form-label">Kata Sandi</label>
    <input type="password" class="form-control" name="password" id="password">
    
    <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
    
    <input type="submit" value="Update Password" class="btn btn-primary mt-3">
  </form>
            
</body>
</html>