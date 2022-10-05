<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: loginUser.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <style>
        
        body{
            background: hsl(170, 33%, 79%);
            display: flex;
            align-items: center;
            justify-items: center;
            margin: auto;
            flex-direction: column;
        }
    </style>
</head>
<body>
        <h1>Welcome Homepage User</h1>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="KP.RESIDENT"
  agent-id="a0540f60-3127-4bef-808a-3229b279865c"
  language-code="th"
></df-messenger>
</body>
</html>