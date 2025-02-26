<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-section">
            <div class="form-header">
                <h1>Mortgage Calculator</h1>
                <div class="clear">Clear All</div>
            </div>
            <div class="form-group">
                <label for="mortgage-amount">Mortgage Amount</label>
                <div class="input-container">
                    <span class="currency-symbol">€</span>
                    <input type="text" id="mortgage-amount" name="mortgage-amount">
                </div>
            </div>
            <div class="form-group-inline">
                <div class="form-group">
                    <label for="mortgage-term">Mortgage Term</label>
                    <div class="input-container">
                        <input type="text" id="mortgage-term" name="mortgage-term">
                        <span class="term-symbol">years</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="interest-rate">Interest Rate</label>
                    <div class="input-container">
                        <input type="text" id="interest-rate" name="interest-rate">
                        <span class="rate-symbol">%</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Mortgage Type</label>
                <div class="input-container">
                    <input type="radio" id="repayment-radio" name="mortgage-type" value="repayment">
                    <input type="text" id="repayment" name="repayment" value="Repayment">
                </div>
                <div class="input-container">
                    <input type="radio" id="interest-only-radio" name="mortgage-type" value="interest-only">
                    <input type="text" id="interest-only" name="interest-only" value="Interest Only">
                </div>
            </div>
            <button class="calculate-button">
                <img src="calculator-icon.png" alt="calculator" class="button-icon">
                Calculate Repayments
            </button>
        </div>
        <div class="image-section">
            <img src="picture.jpg" alt="picture">
        </div>
    </div>
</body>
</html>