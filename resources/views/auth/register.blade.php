<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitrack - Register</title>
    <style>
        /* Match your dashboard and login theme */
        body {
            background-color: #f4f7f6;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Clean Card Container */
        .register-card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px rgba(0,0,0,0.04);
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
        }

        h2 {
            color: #10b981;
            margin-top: 0;
            margin-bottom: 24px;
            text-align: center;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #4b5563;
            font-weight: bold;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
            outline: none;
            transition: border-color 0.2s;
        }

        input:focus {
            border-color: #10b981;
        }

        /* Error Box */
        .error-box {
            background-color: #fee2e2;
            color: #dc2626;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        /* Button Container */
        .btn-container {
            display: flex;
            gap: 10px;
            align-items: center;
            justify-content: space-between;
            margin-top: 25px;
        }

        /* Register Button */
        .btn-register {
            background-color: #10b981;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn-register:hover {
            background-color: #059669;
        }

        /* Log In Link Button */
        .btn-login-link {
            background-color: #f3f4f6;
            color: #4b5563;
            border: 1px solid #e5e7eb;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.2s;
        }

        .btn-login-link:hover {
            background-color: #e5e7eb;
            color: #111827;
        }
    </style>
</head>
<body>

<div class="register-card">
    <h2>Create Account</h2>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="error-box">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" required autofocus>
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="email@example.com" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="At least 8 characters" required>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Repeat password" required>
        </div>

        <div class="btn-container">
            <!-- Link back to Log In -->
            <a href="{{ route('login') }}" class="btn-login-link">Log In</a>

            <!-- Register Button -->
            <button type="submit" class="btn-register">Register</button>
        </div>
    </form>
</div>

</body>
</html>