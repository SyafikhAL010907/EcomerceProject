<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style>
        /* CSS di atas ditempatkan di sini */
    </style>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #e6e6fa, #d8bfd8, #9370db);
        backdrop-filter: blur(10px);
        /* Efek blur pada background */
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    .container {
        background: rgba(255, 255, 255, 0.8);
        /* Latar belakang semi-transparan */
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 800px;
        /* Lebar container diperbesar */
        backdrop-filter: blur(5px);
        /* Efek blur pada container */
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    h2 {
        color: #6a0dad;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        text-align: center;
    }

    .form-group label {
        color: #6a0dad;
        font-weight: bold;
    }

    .form-control {
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(0, 0, 0, 0.1);
        color: #333;
        transition: all 0.3s ease;
        padding: 10px;
        border-radius: 5px;
    }

    .form-control:focus {
        background-color: rgba(255, 255, 255, 1);
        border-color: #6a0dad;
        box-shadow: 0 0 10px rgba(106, 13, 173, 0.3);
    }

    .btn-primary {
        background: linear-gradient(135deg, #9370db, #6a0dad);
        border: none;
        color: #fff;
        font-weight: bold;
        padding: 12px 24px;
        border-radius: 5px;
        transition: background 0.3s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #6a0dad, #4b0082);
    }

    .alert-success {
        background-color: rgba(76, 175, 80, 0.9);
        border-color: #4caf50;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
        text-align: center;
    }

    a {
        color: #6a0dad;
        text-decoration: none;
        font-weight: bold;
    }

    a:hover {
        color: #4b0082;
        text-decoration: underline;
    }

    hr {
        border-color: rgba(106, 13, 173, 0.3);
        margin: 20px 0;
    }

    .text-center {
        text-align: center;
    }

    .btn-block {
        width: 100%;
    }

    .fa {
        margin-right: 10px;
    }
</style>

<body>
    <div class="container"><br>
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center">FORM REGISTER USER</h3>
                <hr>
                @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <form action="{{route('actionregister')}}"
                    method="post">
                    @csrf
                    <div class="form-group">
                        <label><i class="fa fa-envelope"></i>
                            Email</label>
                        <input type="email" name="email"
                            class="form-control" placeholder="Email"

                            required="">
                    </div>
                    <div class="form-group"> <label><i class="fa
fa-user"></i> Username</label>
                        <input type="text" name="username"
                            class="form-control" placeholder="Username"
                            required="">
                    </div>
                    <div class="form-group"> <label><i class="fa
fa-key"></i> Password</label>
                        <input type="password" name="password"
                            class="form-control" placeholder="Password"
                            required="">
                    </div>
                    <div class="form-group"> <label><i class="fa
fa-address-book"></i> Role</label>
                        <input type="text" name="role"
                            class="form-control" value="Guest" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary
btn-block">
                        <i class="fa fa-user"></i>
                        Register</button>
                    <hr>
                    <p class="text-center">Sudah punya akun
                        silahkan <a href="/admin">Login Disini!</a></p>
                </form>
        </div>
    </div>
</body>

</html>