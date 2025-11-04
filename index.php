<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easypaisa Clone - Digital Payments</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background: linear-gradient(90deg, #00b0ff, #0081ff);
            color: white;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        header .logo { font-size: 1.8rem; font-weight: bold; }
        nav a {
            color: white; text-decoration: none; margin-left: 20px;
            font-size: 1rem; padding: 8px 15px; border-radius: 20px;
            transition: background-color 0.3s, color 0.3s;
        }
        nav a:hover, nav a.active { background-color: white; color: #0081ff; }
        main { flex-grow: 1; padding: 0 5%; }
        .hero {
            text-align: center; padding: 80px 20px;
            background: url('https://images.unsplash.com/photo-1579621970795-87f54d5b5b5b?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;
            border-radius: 12px; margin-top: 2rem;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }
        .hero h1 { font-size: 3rem; color: #fff; margin-bottom: 20px; }
        .hero p { font-size: 1.2rem; color: #eee; margin-bottom: 30px; }
        .hero .cta-buttons a {
            text-decoration: none; color: white; padding: 15px 30px;
            border-radius: 30px; font-size: 1.1rem; font-weight: bold;
            margin: 0 10px; background-color: #00b0ff;
        }
        .hero .cta-buttons a.signup { background-color: #ff4081; }
        footer {
            background-color: #333; color: white; text-align: center;
            padding: 1.5rem 5%; margin-top: auto;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">Easypaisa</div>
    <nav>
        <a href="javascript:void(0);" onclick="navigateTo('login.php')" class="active">Login</a>
        <a href="javascript:void(0);" onclick="navigateTo('signup.php')">Sign Up</a>
    </nav>
</header>

<main>
    <section class="hero">
        <h1>Your Digital Wallet for Everything</h1>
        <p>Send money, pay bills, and manage your finances with ease and security.</p>
        <div class="cta-buttons">
            <a href="javascript:void(0);" onclick="navigateTo('signup.php')" class="signup">Create an Account</a>
            <a href="javascript:void(0);" onclick="navigateTo('login.php')" class="login">Access Your Wallet</a>
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2025 Easypaisa Clone. All Rights Reserved.</p>
</footer>

<script>
function navigateTo(page){ window.location.href = page; }
</script>
</body>
</html>
