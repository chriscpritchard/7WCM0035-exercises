<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap-reboot.css">
    <script src="../lib/bootstrap/js/bootstrap.js"></script>
    <script src="../lib/jquery/jquery-3.3.1.js"></script>
    <meta charset="UTF-8">
    <title>A Simple Calculator</title>
</head>
<body>
<?php
    $firstNumber = $secondNumber = "";
    $firstNumberErrText = $secondNumberErrText = "";
    $firstNumberErr = $secondNumberErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST[$firstNumber])){
            $firstNumberErrText = "First number is required";
        }
        elseif (!is_numeric($_POST[$firstNumber])){
            $firstNumberErrText = "First number must be a number";
        }
        if(empty($_POST[$secondNumber])){
            $secondNumberErrText = "Second number is required";
        }
        elseif (!is_numeric($_POST[$secondNumber])){
            $secondNumberErrText = "Second number must be a number";
        }
    }
    if ($firstNumberErrText !=""){
        $firstNumberErr="<div class=\"alert alert-warning\"><strong>Warning!</strong> ".$firstNumberErrText;
    }

    if ($secondNumberErrText !=""){
        $secondNumberErr="<div class=\"alert alert-warning\"><strong>Warning!</strong> ".$secondNumberErrText;
    }
?>
<div class="container">
    <h1>A Simple Calculator</h1>
</div>
<div class="container">
    <form>
        <div class="form-group">
            <label for="firstnumber">First Number:</label>
            <input type="text" class="form-control" id="firstnumber" placeholder="Enter first number" value="<?php echo $firstNumber;?>">
            <?php echo $firstNumberErr?>
        </div>
        <div class="form-group">
            <label for="secondnumber">Second Number:</label>
            <input type="text" class=form-control id="secondnumber" placeholder="Enter second number"  value="<?php echo $secondNumber;?>">
            <?php echo $secondNumberErr?>
        </div>
        <!--<input type="button" name="submit" onclick="serverAdd()" class="btn btn-primary text-center" value="Add">-->
        <div class="form-row text-center">
            <div class="col-12">
                <button type="submit" class="btn btn-primary" value="Submit">Add</button>
            </div>
        </div>
    </form>
    <form>
        <div class="form-group">
            <label for="result">Result:</label>
            <input readonly type="text" class="form-control" id="result" placeholder="Result" value="<?php echo $result;?>">
        </div>
    </form>
</div>
</body>
</html>