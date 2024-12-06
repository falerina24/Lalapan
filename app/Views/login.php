<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* Reset Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* Body Background */
        body {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Login Container */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        /* Login Box */
        .login-box {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            padding: 40px 50px;
            text-align: center;
            width: 400px;
            transition: transform 0.3s ease;
        }

        .login-box:hover {
            transform: scale(1.02);
        }

        /* Login Title */
        .login-box h1 {
            font-size: 2.5rem;
            color: #ff6f91;
            margin-bottom: 10px;
        }

        .login-box p {
            color: #333;
            font-size: 1rem;
            margin-bottom: 25px;
        }

        /* Input Groups */
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            font-size: 0.9rem;
            color: #ff6f91;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px 15px;
            border: 2px solid #ffb3c1;
            border-radius: 8px;
            font-size: 1rem;
            color: #333;
            outline: none;
        }

        .input-group input:focus {
            border-color: #ff6f91;
            box-shadow: 0 0 8px rgba(255, 111, 145, 0.5);
        }

        /* Login Button */
        .login-btn {
            background: linear-gradient(135deg, #ff6f91, #ff3d6e);
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            width: 100%;
            font-weight: bold;
            box-shadow: 0 5px 15px rgba(255, 111, 145, 0.3);
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .login-btn:hover {
            background: linear-gradient(135deg, #ff3d6e, #ff6f91);
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .login-box {
                width: 90%;
                padding: 30px 20px;
            }

            .login-box h1 {
                font-size: 2rem;
            }
        }
    </style>

    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h1>Welcome Back!</h1>
            <p>Log in to your account</p>
            <form action="/" method="POST">
                <div class="input-group">
                    <label for="username">Usernane</label>
                    <input type="username" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <a href="/dashboard" class="btn btn-primary btn-user btn-block">
                    Login
                </a>
            </form>
        </div>
    </div>
</body>

</html>