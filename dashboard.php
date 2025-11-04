<?php
// Static placeholder data
$full_name = "John Doe";
$balance = "5,000.00";
$member_since = "January 2024";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Easypaisa Clone</title>
<style>
body { font-family: 'Segoe UI', sans-serif; margin:0; background:#f4f7fc; color:#333; }
.container { display:flex; }
.sidebar { width:250px; background:linear-gradient(180deg,#00b0ff,#0081ff); color:white; min-height:100vh; padding:20px; }
.sidebar .logo { font-size:1.8rem; font-weight:bold; text-align:center; margin-bottom:40px; }
.sidebar nav a { display:block; color:white; text-decoration:none; padding:15px 20px; margin-bottom:10px; border-radius:8px; }
.sidebar nav a.active { background-color:rgba(255,255,255,0.3); }
.main-content { flex-grow:1; padding:40px; }
.wallet-card { background:linear-gradient(90deg,#00b0ff,#0081ff); color:white; padding:40px; border-radius:12px; margin-bottom:40px; }
.wallet-card .balance { font-size:3.5rem; font-weight:bold; }
.card { background:#fff; padding:30px; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.05); text-align:center; cursor:pointer; }
.action-cards { display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:30px; }
</style>
</head>
<body>
<div class="container">
    <div class="sidebar">
        <div class="logo">Easypaisa</div>
        <nav>
            <a href="dashboard.php" class="active">🏠 Dashboard</a>
            <a href="transfer.php">💸 Transfer</a>
            <a href="bill_payment.php">💡 Pay Bills</a>
            <a href="history.php">📜 History</a>
            <a href="account.php">⚙️ Account</a>
        </nav>
    </div>

    <div class="main-content">
        <header>
            <h1>My Dashboard</h1>
            <div class="user-info">
                <span><?php echo $full_name; ?></span><br>
                <small>Member Since <?php echo $member_since; ?></small>
            </div>
        </header>

        <div class="wallet-card">
            <h2>Your Current Balance</h2>
            <div class="balance">Rs. <?php echo $balance; ?></div>
        </div>

        <div class="action-cards">
            <div class="card" onclick="navigateTo('transfer.php')">💸 Send Money</div>
            <div class="card" onclick="navigateTo('bill_payment.php')">💡 Pay Bill</div>
            <div class="card" onclick="navigateTo('history.php')">📜 View History</div>
            <div class="card" onclick="navigateTo('account.php')">⚙️ Manage Account</div>
        </div>
    </div>
</div>
<script>
function navigateTo(page){ window.location.href=page; }
</script>
</body>
</html>
