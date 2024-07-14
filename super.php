<!-- ///task1 -->
<!DOCTYPE html>
<html>
<head>
    <title>Email and Password Form</title>
</head>
<body>
    <h2>Email and Password Form</h2>
    <form method="post" action="handle.php">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Submit">
    </form>
<!-- ///task2 -->

    <h2>URL Redirection Search Engine</h2>
    <form method="post" action="handle.php">
        <label for="url">Enter URL:</label>
        <input type="text" id="url" name="url" required><br><br>
        <input type="submit" value="GO">
    </form>
</body>
</html>
<!-- ///task3 -->
<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
</head>
<body>
    <h2>Basic Calculator</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" step="any" required><br><br>
        
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" step="any" required><br><br>
        
        <label for="operation">Operation:</label>
        <select id="operation" name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Error: Division by zero";
                    }
                    break;
                default:
                    $result = "Invalid operation selected.";
            }
        } else {
            $result = "Invalid input. Please enter numeric values.";
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
<!-- ///task4 -->
<?php
session_start();

if (!isset($_SESSION['todo_list'])) {
    $_SESSION['todo_list'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['task'])) {
    $task = htmlspecialchars($_POST['task']);
    if (!empty($task)) {
        $_SESSION['todo_list'][] = $task;
    }
}

if (isset($_GET['delete'])) {
    $deleteIndex = intval($_GET['delete']);
    if (isset($_SESSION['todo_list'][$deleteIndex])) {
        unset($_SESSION['todo_list'][$deleteIndex]);
        $_SESSION['todo_list'] = array_values($_SESSION['todo_list']); // Reindex the array
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h2>To-Do List</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="task">New Task:</label>
        <input type="text" id="task" name="task" required>
        <input type="submit" value="Add Task">
    </form>

    <h3>Tasks:</h3>
    <ul>
        <?php foreach ($_SESSION['todo_list'] as $index => $task): ?>
            <li>
                <?php echo htmlspecialchars($task); ?>
                <a href="?delete=<?php echo $index; ?>" style="color: red;">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

<!-- ///task4 -->
<!DOCTYPE html>
<html>
<head>
    <title>Project and Script Name</title>
</head>
<body>
    <h2>Project and Script Information</h2>
    <?php
    $scriptName = basename($_SERVER['PHP_SELF']);

    $projectName = basename(dirname(__FILE__));

    echo "<p><strong>Project Name:</strong> $projectName</p>";
    echo "<p><strong>Script Name:</strong> $scriptName</p>";
    ?>
</body>
</html>