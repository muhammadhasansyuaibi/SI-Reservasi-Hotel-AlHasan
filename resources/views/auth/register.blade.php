<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{ asset('/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST" action="{{ url('/registrasi') }}">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                    @csrf

                    <div class="form-group">
                        <input id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required placeholder="Name" autocomplete="name" autofocus>
                        
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required placeholder="E-mail" autocomplete="email" autofocus>
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" required placeholder="Password" autocomplete="new-password">
                    
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required placeholder="Confirm" autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <label for="gender">Jabatan :</label>
                            <div class="form-check">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="position" id="administrator" value="Administrator" {{ old('position') == 'Administrator' ? 'checked' : '' }} class="custom-control-input @error('position') is-invalid @enderror">
                                    <span class="custom-control-label">Administrator</span> 
                                    @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="position" id="reservationsupervisor" value="Reservation Supervisor" {{ old('position') == 'Reservation Supervisor' ? 'checked' : '' }} class="custom-control-input @error('position') is-invalid @enderror">
                                    <span class="custom-control-label">Reservation Supervisor</span>
                                    @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="position" id="accountingdepartment" value="Accounting Department" {{ old('position') == 'Accounting Department' ? 'checked' : '' }} class="custom-control-input @error('position') is-invalid @enderror">
                                    <span class="custom-control-label">Accounting Department</span>
                                    @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </label>
                            </div>
                    </div>
                    <div class="form-group pt-2">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="{{ url('/') }}" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>
