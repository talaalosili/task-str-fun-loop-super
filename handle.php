<!-- ///task1 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $method = "POST";
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = $_GET['email'];
    $password = $_GET['password'];
    $method = "GET";
} else {
    $email = '';
    $password = '';
    $method = "UNKNOWN";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
</head>
<body>
    <h2>Form Submission Result</h2>
    <p>Method used: <?php echo htmlspecialchars($method); ?></p>
    <p>Email: <?php echo htmlspecialchars($email); ?></p>
    <p>Password: <?php echo htmlspecialchars($password); ?></p>
</body>
</html>
<!-- ///task2 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST['url'];

    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: $url");
        exit();
    } else {
        $error = "Invalid URL.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>URL Redirection Result</title>
</head>
<body>
    <h2>URL Redirection Result</h2>
    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <p><a href="super.php">Go back</a></p>
</body>
</html>
