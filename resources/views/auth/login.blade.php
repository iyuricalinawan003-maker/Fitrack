<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitrack - Log In</title>
    <style>
        /* Match your dashboard styling theme */
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
        .login-card {
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
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #4b5563;
            font-weight: bold;
            font-size: 14px;
        }

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

        /* Log In Button */
        .btn-login {
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

        .btn-login:hover {
            background-color: #059669;
        }

        /* Register Button Link */
        .btn-register-link {
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

        .btn-register-link:hover {
            background-color: #e5e7eb;
            color: #111827;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2>Fitrack Log In</h2>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="error-box">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="email@example.com" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="••••••••" required>
        </div>

        <div class="btn-container">
            <!-- Register Button -->
            <a href="{{ route('register') }}" class="btn-register-link">Register</a>

            <!-- Log In Button -->
            <button type="submit" class="btn-login">Log In</button>
        </div>
    </form>
</div>

</body>
</html>