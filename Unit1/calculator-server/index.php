<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap-reboot.css">
    <script src="../../lib/bootstrap/js/bootstrap.js"></script>
    <script src="../../lib/jquery/jquery-3.3.1.js"></script>
    <meta charset="UTF-8">
    <title>A Simple Calculator</title>
</head>
<body>
<?php
    $firstNumber = $secondNumber = $result = "";
    $firstNumberErrText = $secondNumberErrText = "";
    $firstNumberErr = $secondNumberErr = "";
    $addSelected = $subtractSelected = $multiplySelected = $divideSelected ="";
    $err = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (is_numeric($_POST[firstNumber])) {
            $firstNumber = $_POST[firstNumber];
        } elseif (empty($_POST[firstNumber])) {
            $firstNumberErrText = "First number is required";
            $err = true;
        } else {
            $firstNumberErrText = "First number must be a number";
            $err = true;
        }
        if (is_numeric($_POST[secondNumber])) {
            $secondNumber = $_POST[secondNumber];
        } elseif (empty($_POST[secondNumber])) {
            $secondNumberErrText = "Second number is required";
            $err = true;
        } else {
            $secondNumberErrText = "Second number must be a number";
            $err = true;
        }
        if ($firstNumberErrText != "") {
            $firstNumberErr = "<div class=\"alert alert-danger\"><strong>Error!</strong> " . $firstNumberErrText;
        }

        if ($secondNumberErrText != "") {
            $secondNumberErr = "<div class=\"alert alert-danger\"><strong>Error!</strong> " . $secondNumberErrText;
        }
        if ($err == false) {
            switch ($_POST[operation]) {
                case "Add":
                    $result = $firstNumber + $secondNumber;
                    $addSelected = "selected";
                    break;
                case "Subtract":
                    $result = $firstNumber - $secondNumber;
                    $subtractSelected = "selected";
                    break;
                case "Multiply":
                    $result = $firstNumber * $secondNumber;
                    $multiplySelected = "selected";
                    break;
                case "Divide":
                    $result = $firstNumber / $secondNumber;
                    $divideSelected = "selected";
                    break;
            }
        }
    }
?>
<div class="container">
    <h1>A Simple Calculator</h1>
</div>
<div class="container">
    <form method="post" action="index.php">
        <div class="form-group">
            <label for="firstNumber">First Number:</label>
            <input type="text" class="form-control" id="firstNumber" name="firstNumber" placeholder="Enter first number" value="<?php echo $firstNumber;?>">
            <?php echo $firstNumberErr;?>
        </div>
        <div class="form-group">
            <label for="secondNumber">Second Number:</label>
            <input type="text" class=form-control id="secondNumber" name="secondNumber" placeholder="Enter second number"  value="<?php echo $secondNumber;?>">
            <?php echo $secondNumberErr;?>
        </div>
        <div class="form-group">
            <label for="operation">Operation:</label>
            <select class="form-control" id="operation" name="operation">
                <option <?php echo $addSelected;?>>Add</option>
                <option <?php echo $subtractSelected;?>>Subtract</option>
                <option <?php echo $multiplySelected;?>>Multiply</option>
                <option <?php echo $divideSelected;?>>Divide</option>
            </select>
        </div>
        <div class="form-row text-center">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Calculate</button>
            </div>
        </div>
    </form>
    <form>
        <div class="form-group">
            <label for="result">Result:</label>
            <input type="text" class="form-control" id="result" name="result" placeholder="Result" value="<?php echo $result;?>" readonly>
        </div>
    </form>
</div>
</body>
</html>