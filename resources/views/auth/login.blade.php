<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sintuaradjawane Payroll</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('{{ asset("storage/bacground.jpg") }}');
            background-size: cover;
            background-position: center;
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 50%; /* Lebih besar dari sebelumnya */
            max-width: 400px; /* Lebih besar dari sebelumnya */
            margin: 0 auto;
        }

        .form {
            padding: 25px; /* Lebih besar dari sebelumnya */
        }

        .form h1 {

            font-weight: bold;
            margin-bottom: 20px;
            color: rgb(123, 58, 197);
            text-align: center;
        }

        .form label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        .form input[type="text"],
        .form input[type="password"],
        .form input[type="email"] {
            width: 100%;
            padding: 15px; /* Lebih besar dari sebelumnya */
            margin-bottom: 20px; /* Lebih besar dari sebelumnya */
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 15px 25px; /* Lebih besar dari sebelumnya */
            border-radius: 4px;
            cursor: pointer;

        }

        .form button:hover {
            background-color: #0056b3;
        }

        .remember-checkbox {
            margin-bottom: 20px; /* Lebih besar dari sebelumnya */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="form">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus autocomplete="username">

                <!-- Password -->
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" id="password" required autocomplete="current-password">

                <div class="remember-checkbox">
                    <input type="checkbox" name="remember" id="remember">Ingatkan saya
                </div>
                <button type="submit">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>
