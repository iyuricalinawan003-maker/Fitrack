<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitTracker - Dashboard</title>
    
    <style>
        /* General Page Styles */
        body {
            background-color: #f4f7f6;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Top Header Styling */
        header {
            background-color: #ffffff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }

        h1 {
            color: #10b981;
            margin: 0;
            font-size: 24px;
        }

        /* Navigation Menu */
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 10px;
            align-items: center;
        }

        nav a {
            text-decoration: none;
            color: #4b5563;
            font-weight: bold;
            font-size: 14px;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        nav a:hover {
            color: #10b981;
            background-color: #f3f4f6;
        }

        /* Log Out Button Styling */
        .btn-logout {
            background-color: #fee2e2;
            color: #dc2626;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn-logout:hover {
            background-color: #fecaca;
        }

        /* Main Content Layout */
        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        h2 {
            color: #1f2937;
            margin-bottom: 20px;
            margin-top: 30px;
        }

        /* Dashboard Cards Grid */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        article {
            background: white;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px rgba(0,0,0,0.04);
        }

        article h3 {
            margin-top: 0;
            color: #4b5563;
            font-size: 16px;
        }

        article p {
            margin: 8px 0;
            color: #6b7280;
            font-size: 14px;
        }

        article p strong {
            color: #111827;
            font-size: 20px;
        }

        /* Progress Bar Styling */
        progress {
            width: 100%;
            height: 10px;
            border-radius: 5px;
            overflow: hidden;
            margin-top: 10px;
        }

        progress::-webkit-progress-bar {
            background-color: #e5e7eb;
            border-radius: 5px;
        }

        progress::-webkit-progress-value {
            background-color: #10b981;
            border-radius: 5px;
        }

        /* Recent Activities List Style */
        .activity-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px rgba(0,0,0,0.04);
        }

        .activity-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .activity-list li {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #f3f4f6;
            font-size: 14px;
            color: #4b5563;
        }

        .activity-list li:last-child {
            border-bottom: none;
        }

        .activity-list span.time {
            color: #9ca3af;
            font-size: 13px;
        }
    </style>
</head>
<body>
    
<header>
    <h1>Fitrack</h1>
    
    <nav>
        <ul>
            <li><a href="nutrition">Nutrition</a></li>
            <li><a href="workouts">Workouts</a></li>
            <li><a href="reports">Progress</a></li>
        </ul>
    </nav>

    <!-- Logout Form -->
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn-logout">
            Log Out
        </button>
    </form>
</header>

<main>
    <section id="dashboard">
        <h2>Daily Summary</h2>

        <div class="dashboard-grid">
            <article>
                <h3>Calories Consumed</h3>
                <p><strong>1,450 kcal</strong></p>
                <p>Daily Goal: 2,200 kcal</p>
                <progress value="1450" max="2200"></progress>
            </article>

            <article>
                <h3>Water Intake</h3>
                <p><strong>1.8 L</strong></p>
                <p>Daily Goal: 3.0 L</p>
                <progress value="1.8" max="3.0"></progress>
            </article>

            <article>
                <h3>Active Workout</h3>
                <p><strong>45 mins</strong></p>
                <p>Daily Goal: 60 mins</p>
                <progress value="45" max="60"></progress>   
            </article>
        </div>

        <h2>Recent Activities</h2>
        <div class="activity-card">
            <ul class="activity-list">
                <li>
                    <span>🏃‍♂️ Morning Jog (30 mins)</span>
                    <span class="time">Today, 7:30 AM</span>
                </li>
                <li>
                    <span>💧 Drank 500ml Water</span>
                    <span class="time">Today, 10:15 AM</span>
                </li>
                <li>
                    <span>🥗 Logged Lunch (Chicken Salad)</span>
                    <span class="time">Today, 12:30 PM</span>
                </li>
            </ul>
        </div>
    </section>
</main>

</body>
</html>