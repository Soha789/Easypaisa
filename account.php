<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Account Management - Easypaisa Clone</title>
<style>
body{font-family:'Segoe UI';background:#f4f7fc;margin:0;}
.container{display:flex;}
.sidebar{width:250px;background:linear-gradient(180deg,#00b0ff,#0081ff);color:white;min-height:100vh;padding:20px;}
.main-content{flex-grow:1;padding:40px;}
.form-box{background:#fff;padding:30px;border-radius:12px;box-shadow:0 8px 16px rgba(0,0,0,0.05);}
</style>
</head>
<body>
<div class="container">
<div class="sidebar">
    <div class="logo">Easypaisa</div>
    <nav>
        <a href="dashboard.php">🏠 Dashboard</a>
        <a href="transfer.php">💸 Transfer</a>
        <a href="bill_payment.php">💡 Pay Bills</a>
        <a href="history.php">📜 History</a>
        <a href="account.php" class="active">⚙️ Account</a>
    </nav>
</div>

<div class="main-content">
    <h1>Account Management</h1>
    <div class="form-box">
        <h2>Your Details</h2>
        <p><strong>Name:</strong> John Doe</p>
        <p><strong>Email:</strong> john@example.com</p>
        <p><strong>Phone:</strong> 0300-1234567</p>
    </div><br>
    <div class="form-box">
        <h2>Change Password</h2>
        <form>
            <input type="password" placeholder="Old Password"><br><br>
            <input type="password" placeholder="New Password"><br><br>
            <input type="password" placeholder="Confirm New Password"><br><br>
            <button>Update Password</button>
        </form>
    </div><br>
    <div class="form-box">
        <h2>Change Wallet PIN</h2>
        <form>
            <input type="password" placeholder="Old PIN" maxlength="4"><br><br>
            <input type="password" placeholder="New PIN" maxlength="4"><br><br>
            <input type="password" placeholder="Confirm PIN" maxlength="4"><br><br>
            <button>Update PIN</button>
        </form>
    </div>
</div>
</div>
</body>
</html>
