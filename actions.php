<?php
include_once('connection.php');
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
}

$user_Email = $_SESSION['user_email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operation = $_POST['operation'];
    $num1 = $_POST['ramosNum1'];
    $num2 = $_POST['ramosNum2'];

    switch ($operation) {
        case 'addition':
            $result = $num1 + $num2;
            break;
        case 'subtraction':
            $result = $num1 - $num2;
            break;
        case 'multiplication':
            $result = $num1 * $num2;
            break;
        case 'division':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Undefined (Division by zero)";
            }
            break;
        default:
            $result = "Invalid operation";
            break;
    }

    // Insert the data into the database
    $sql = "INSERT INTO calculate (user_email, first_number, operator, second_number, answer) VALUES ('$user_Email', '$num1', '$operation', '$num2', '$result')";
    if ($connectionString->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
