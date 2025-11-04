<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bill Payment - Easypaisa Clone</title>
<style>
body{font-family:'Segoe UI';background:#f4f7fc;margin:0;}
.container{display:flex;}
.sidebar{width:250px;background:linear-gradient(180deg,#00b0ff,#0081ff);color:white;min-height:100vh;padding:20px;}
.main-content{flex-grow:1;padding:40px;}
.form-box{background:#fff;padding:40px;border-radius:12px;max-width:600px;box-shadow:0 8px 16px rgba(0,0,0,0.05);}
.submit-btn{width:100%;padding:15px;background:linear-gradient(90deg,#00b0ff,#0081ff);color:white;border:none;border-radius:8px;font-size:1.1rem;cursor:pointer;}
</style>
</head>
<body>
<div class="container">
<div class="sidebar">
    <div class="logo">Easypaisa</div>
    <nav>
        <a href="dashboard.php">🏠 Dashboard</a>
        <a href="transfer.php">💸 Transfer</a>
        <a href="bill_payment.php" class="active">💡 Pay Bills</a>
        <a href="history.php">📜 History</a>
        <a href="account.php">⚙️ Account</a>
    </nav>
</div>
<div class="main-content">
    <h1>Pay Utility Bills</h1>
    <div class="form-box">
        <p>Your available balance: <strong>Rs. 5,000.00</strong></p>
        <form>
            <label>Biller</label>
            <select><option>--Select--</option><option>K-Electric</option><option>SSGC</option><option>PTCL</option></select><br><br>
            <label>Consumer ID</label>
            <input type="text" placeholder="123456"><br><br>
            <label>Amount</label>
            <input type="number" placeholder="0.00"><br><br>
            <label>Wallet PIN</label>
            <input type="password" maxlength="4" placeholder="****"><br><br>
            <button class="submit-btn">Pay Bill</button>
        </form>
    </div>
</div>
</div>
<script>function navigateTo(p){window.location.href=p;}</script>
</body>
</html>
