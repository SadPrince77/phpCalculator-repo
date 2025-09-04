<?php
$result = "";

if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    function calculate($num1, $num2, $operation) {
        if ($operation == "add") {
            return $num1 + $num2;
        } elseif ($operation == "subtract") {
            return $num1 - $num2;
        } elseif ($operation == "multiply") {
            return $num1 * $num2;
        } elseif ($operation == "divide") {
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Cannot divide by zero!";
            }
        }
    }

    $result = calculate($num1, $num2, $operation);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calculator {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }
        .calculator h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .calculator input, .calculator select {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .calculator button {
            width: 95%;
            padding: 10px;
            border: none;
            background: #4CAF50;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .calculator button:hover {
            background: #45a049;
        }
        .result {
            margin-top: 15px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Simple Calculator</h2>
        <form method="post">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>

            <select name="operation" required>
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>

            <button type="submit" name="calculate">Calculate</button>
        </form>

        <?php if ($result !== ""): ?>
            <div class="result"><strong>Result:</strong> <?php echo $result; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
