<?php 
include('header.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="Css/index.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/convert.js"></script>
<title>converter</title>
</head>

<body>
    <section id="main-section">
        <div class ="shadow-lg p-3 mb-5 bg-white rounded container">
            <div class="row">
                <div class="col col-sm-6 col-xs-6 right" style="background-color:none";>
                    <nav class="navbar navbar-expand-lg navbar-light bg-none">
                        <a class="navbar-brand"  href="#"> <strong>  CushEx </strong></a>
                    </nav>
                    <h4>Easily convert your currencies<br>
                        to any currency in the world!</h4>
                    <p>Are you going to travel and need to know how<br>
                        much your money is worth in other currencies?<br>
                        Convert with CushExchange quickly and easily <br> 
                    by converting your money to Naira, Dollar,<br> 
                    Pounds or any other currency in the world! </p>
                </div>
                <div class="col col-sm-6 col-xs-6 left"style="background-color:white">
                <h4 class="left-header" style="color:green">Simulate Conversion</h4>
                <form method ="post" id="currency-convert-form">
                    <div class="form-group">
                        <label for="from_curr">From Currency</label>
                        <select class="form-control" name="currency_from" >
                            <option value="NGN">Nigerian Naira</option>
                            <option value="USD" selected="1">US Dollar</option>
                            <option value="GBP">British Pound</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                    <label for="to_curr">To currency</label>
                    <select class="form-control" name="currency_to">
                        <option value="Naira" selected="1">Nigerian Naira</option>
                        <option value="USD">US Dollar</option>
                        <option value="GBP">British Pound</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input class="form-control" type="number"  id="amount" name="amount" placeholder="Insert a value to convert. Ex.10">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block" name="convert_currency" id="convert_currency">Convert</button>
                    </div>
                    <br>
                    <div class="form-group">
                        <div id="currency_conversion_rate"></div><br><br>
                        <div id="converted_currency_amount"></div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </section>
<?php include('footer.php');?>   