<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to FitTracker</title>
    <style>
        body { 
            background-color: #f4f7f6; 
            font-family: Arial, sans-serif; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
        }
        .welcome-box { 
            text-align: center; 
            background: white; 
            padding: 40px; 
            border-radius: 12px; 
            border: 1px solid #e5e7eb; 
            box-shadow: 0 4px 6px rgba(0,0,0,0.05); 
            max-width: 400px;
            width: 100%;
        }
        h1 { color: #10b981; margin-bottom: 10px; }
        p { color: #6b7280; margin-bottom: 30px; }
        .btn-group { display: flex; gap: 15px; justify-content: center; }
        .btn { 
            text-decoration: none; 
            padding: 12px 24px; 
            border-radius: 8px; 
            font-weight: bold; 
            font-size: 15px; 
            display: inline-block; 
        }
        .btn-login { background-color: #10b981; color: white; }
        .btn-login:hover { background-color: #059669; }
        .btn-register { background-color: #f3f4f6; color: #4b5563; border: 1px solid #e5e7eb; }
        .btn-register:hover { background-color: #e5e7eb; }
        .btn-dashboard { background-color: #2563eb; color: white; width: 100%; }
        .btn-dashboard:hover { background-color: #1d4ed8; }
    </style>
</head>
<body>

<div class="welcome-box">
    <h1>Fitrack</h1>
    <p>Track your workouts, water intake, and daily health goals in one simple panel.</p>

    <div class="btn-group">
        @auth
            <!-- Shows this button if you are already signed in -->
            <a href="{{ url('/dashboard') }}" class="btn btn-dashboard">Go to Dashboard</a>
        @else
            <!-- Shows these buttons if you are signed out -->
            <a href="{{ route('login') }}" class="btn btn-login">Log In</a>
            <a href="{{ route('register') }}" class="btn btn-register">Register</a>
        @endauth
    </div>
</div>

</body>
</html>
