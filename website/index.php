<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Home</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="form">
        <p>Welcome <?php echo $_SESSION['Username']; ?>!</p>
    </div>
    <div>
    <h1 align="center" style="color:orange;">Welcome To Railway Reservation System</h1>
    </div>
    <table>
        <tr><div class="main-wallpaper">
            <header>
                <b>
                    <nav class="nav">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="bookticket.php">Book Ticket</a></li>
                            <li><a href="contact1.php">Contact Us</a></li>
                            <li><a href="dashboard.php">Train details</a></li>
                        </ul>
                    </nav>
                </b>
            </header>
        </div></tr>
        <tr>
            <td>
                <div class="krutika"></div>
            </td>
        </tr>
    </table>
</body>
</html>