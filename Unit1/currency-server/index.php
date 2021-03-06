<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap-reboot.css">
    <script src="../../lib/bootstrap/js/bootstrap.js"></script>
    <script src="../../lib/jquery/jquery-3.3.1.js"></script>
    <meta charset="UTF-8">
    <title>A Currency Converter</title>
</head>
<body>
<?php
    require '../../vendor/autoload.php';
    include_once 'currencies.php';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    }
?>

<div class="container">
    <h1>A Currency Converter</h1>
</div>
<div class="container">
    <form method="post" action="index.php">
        <div class="form-group">
            <label for="firstNumber">Cost (£):</label>
            <input type="number" min="0" step="0.01" class="form-control" id="firstNumber" name="firstNumber" placeholder="Enter cost of item (£)" value="<?php echo $firstNumber;?>">
            <?php echo $firstNumberErr;?>
        </div>
        <div class="form-group">
            <label for="secondNumber">VAT Rate (%):</label>
            <input type="number" min="0" max="100" step="0.5" class=form-control id="secondNumber" name="secondNumber" aria-describedby="vatRates" placeholder="Enter VAT rate (%)" list="suggestedVAT" value="<?php echo $secondNumber;?>">
            <datalist id="suggestedVAT">
                <option value="5">
                <option value="20">
            </datalist>
            <small id="vatRates" class="form-text text-muted">The standard rate of VAT in the UK is 20%, <a href="https://www.gov.uk/guidance/rates-of-vat-on-different-goods-and-services" target="_blank">some items</a> may be charged at a reduced rate of 5%</small>
            <?php echo $secondNumberErr;?>
        </div>
        <div class="form-group">
            <label for="operation">Operation:</label>
            <select class="form-control" id="operation" name="operation">
                <option <?php echo $addSelected;?>>Add VAT</option>
                <option <?php echo $subtractSelected;?>>Remove VAT</option>
            </select>
        </div>
        <div class="form-row text-center">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Convert</button>
            </div>
        </div>
    </form>
    <form>
        <div class="form-group">
            <label for="result">Result:</label>
            <input type="text" class="form-control" id="result" name="result" placeholder="Result" value="<?php echo $result;?>" readonly>
        </div>
    </form>

    <?php print_r($symbols)?>
</div>
</body>
</html>