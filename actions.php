<?php
include_once('connection.php');
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
}

$user_Email = $_SESSION['user_email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$operation = $_POST['operation'];  
	$num1; $num2;
	
    switch ($operation) {
        case 'addition':
	        $num1 = $_POST['ramosAddNum1'];
		    $num2 = $_POST['ramosAddNum2'];
            $result = $num1 + $num2;
            break;
        case 'subtraction':
        	$num1 = $_POST['ramosSubNum1'];
		    $num2 = $_POST['ramosSubNum2'];
            $result = $num1 - $num2;
            break;
        case 'multiplication':
        	$num1 = $_POST['ramosProdNum1'];
		    $num2 = $_POST['ramosProdNum2'];
            $result = $num1 * $num2;
            break;
        case 'division':
            if ($num2 != 0) {
            	$num1 = $_POST['ramosDivNum1'];
		    	$num2 = $_POST['ramosDivNum2'];
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

        $result = "Data processed successfully.";

		// Return a JSON response
		header('Content-Type: application/json');
		echo json_encode(['message' => $result]);

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
?>
