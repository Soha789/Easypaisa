<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Transaction History - Easypaisa Clone</title>
<style>
body{font-family:'Segoe UI';background:#f4f7fc;margin:0;}
.container{display:flex;}
.sidebar{width:250px;background:linear-gradient(180deg,#00b0ff,#0081ff);color:white;min-height:100vh;padding:20px;}
.main-content{flex-grow:1;padding:40px;}
.history-box{background:#fff;padding:30px;border-radius:12px;box-shadow:0 8px 16px rgba(0,0,0,0.05);}
table{width:100%;border-collapse:collapse;}
th,td{padding:10px;border-bottom:1px solid #eee;}
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
        <a href="history.php" class="active">📜 History</a>
        <a href="account.php">⚙️ Account</a>
    </nav>
</div>

<div class="main-content">
    <h1>Transaction History</h1>
    <div class="history-box">
        <table>
            <tr><th>Date</th><th>Description</th><th>Amount</th></tr>
            <tr><td>01 Nov 2025</td><td>Sent to Ali Khan</td><td>- Rs. 500.00</td></tr>
            <tr><td>02 Nov 2025</td><td>Bill Paid to K-Electric</td><td>- Rs. 1500.00</td></tr>
            <tr><td>03 Nov 2025</td><td>Received from Sara</td><td>+ Rs. 800.00</td></tr>
        </table>
    </div>
</div>
</div>
</body>
</html>
