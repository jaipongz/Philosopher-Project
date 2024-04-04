<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href={{ asset('venstaff/bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('venstaff/bootstrap-icons/bootstrap-icons.css') }}>
    <link rel="stylesheet" href={{ asset('venstaff/boxicons/css/boxicons.min.css') }}>
    {{-- <link rel="stylesheet" href={{ asset('venstaff/quill/quill.snow.css') }}> 
  <link rel="stylesheet" href={{ asset('venstaff/quill/quill.bubble.css') }}> 
  <link rel="stylesheet" href={{ asset('venstaff/remixicon/remixicon.css') }}> 
  <link rel="stylesheet" href={{ asset('venstaff/simple-datatables/style.css') }}>  --}}

    <!-- Template Main CSS File -->
    <link href={{ asset('css/staff.css') }} rel="stylesheet">


</head>

<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color:red;">{{ $error }}</p>
        @endforeach
    @endif

    @if (Session::has('error'))
        <p style="color:red;">{{ Session::get('error') }}</p>
    @endif
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Login</span>
                                </a>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your email & password to login</p>
                                    </div>
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="email" name="email" placeholder="Enter Email"
                                                    class="form-control">
                                                <div class="invalid-feedback">Please enter your email.</div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        {{-- <br><br>
                                        <input type="password" name="password" placeholder="Enter Password">
                                        <br><br>
                                        --}}
                                        <div class="col-12">
                                            <input class="btn btn-primary w-100" type="submit" value="Login">
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </section>
        </div>

    </main>





</body>

</html>
