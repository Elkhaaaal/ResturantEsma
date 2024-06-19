<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Restro POS System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
            font-family: 'Nunito', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .title {
            font-size: 64px;
            margin-bottom: 30px;
        }

        .links>a {
            color: #ffffff;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: inline-block;
            margin: 10px;
        }

        .links>a:hover {
            background-color: rgba(255, 255, 255, 0.4);
            transform: scale(1.05);
        }

        @media (max-width: 600px) {
            .title {
                font-size: 48px;
            }

            .links>a {
                font-size: 16px;
                padding: 12px 24px;
                margin: 5px;
                display: block;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            Restaurant POS
        </div>

        <div class="links">
            <a href="Restro/admin/">Admin Log In</a>
            <a href="Restro/cashier/">Cashier Log In</a>
            <a href="Restro/customer">Customer Log In</a>
        </div>
    </div>
</body>
</html>
