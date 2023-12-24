<?php
include("coinAPI.php");

//Get new address and save it in new variable
$address = $block_io_btc->get_new_address();
$new_btc_wallet = $address->data->address;

$address = $block_io_ltc->get_new_address();
$new_ltc_wallet = $address->data->address;

$address = $block_io_dog->get_new_address();
$new_doge_wallet = $address->data->address;
/////////

//Get price
$btc_rate = new coinAPI('btc');
$ltc_rate = new coinAPI('ltc');
$dog_rate = new coinAPI('dog');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN DASHBOARD</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.118.2">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="style/style.css" rel="stylesheet">
        <link href="style/sidebars.css" rel="stylesheet">
        <link href="style/contentStyle.css" rel="stylesheet">
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
        <script src="js/balance.js"></script>

        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="row" style="margin-left: 40px;">
            <div class="col-md-4">
            <div class="row-lg-6" style="height: 250px;"></div>
                <div class="row-lg-6" style="text-align: center;">
                    
                    <div class="payment-box">
                        <div class="inner-box">
                            <div class="box-item">
                            <img src="images/btc.png" alt="" title="" id="coin-btc-img" class="coin-image">
                            </div>
                            <div class="box-item">
                            <h2>Bitcoin</h2>
                            <h2>$<?php echo $btc_rate->get_rate(); ?></h2>
                            </div>
                            <div class="box-item">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $new_btc_wallet;?>!" alt="" title="" id="wallet-img">
                            </div>
                            <div class="box-item">
                                <h4><?php echo $new_btc_wallet; ?></h4>
                            </div>
                            <div class="box-item">
                                <button class="btn btn-primary verify-btn" data-id="<?php echo $new_btc_wallet; ?>" id="btc">Verify</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-lg-6"></div>

            </div>
            <div class="col-md-4">
                <div class="row-lg-6" style="height: 250px;"></div>
                <div class="row-lg-6" style="text-align: center;">
                    <div class="payment-box">
                        <div class="inner-box">
                            <div class="box-item">
                            <img src="images/ltc.png" alt="" title="" id="coin-ltc-img" class="coin-image">
                            </div>
                            <div class="box-item">
                            <h2>Litecoin</h2>
                            <h2>$<?php echo $ltc_rate->get_rate(); ?></h2>
                            </div>
                            <div class="box-item">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $new_ltc_wallet;?>!" alt="" title="" id="wallet-img">
                            </div>
                            <div class="box-item">
                                <h4><?php echo $new_ltc_wallet; ?></h4>
                            </div>
                            <div class="box-item">
                                <button class="btn btn-primary verify-btn" data-id="<?php echo $new_ltc_wallet; ?>" id="ltc">Verify</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-lg-6"></div>
                
            </div>
            <div class="col-md-4">
            <div class="row-lg-6" style="height: 250px;"></div>
                <div class="row-lg-6" style="text-align: center;">
                    <div class="payment-box">
                        <div class="inner-box">
                            <div class="box-item">
                            <img src="images/doge.png" alt="" title="" id="coin-doge-img" class="coin-image">
                            </div>
                            <div class="box-item">
                            <h2>Dogecoin</h2>
                            <h2>$<?php echo $dog_rate->get_rate(); ?></h2>
                            </div>
                            <div class="box-item">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $new_doge_wallet;?>!" alt="" title="" id="wallet-img">
                            </div>
                            <div class="box-item">
                                <h4><?php echo $new_doge_wallet; ?></h4>
                            </div>
                            <div class="box-item">
                                <button class="btn btn-primary verify-btn" data-id="<?php echo $new_doge_wallet; ?>" id="dog">Verify</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-lg-6"></div>
            </div>
        </div>
    </body>
</html>