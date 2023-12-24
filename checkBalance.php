<?php

include 'coinAPI.php';


$btc_rate = new coinAPI('btc');
$ltc_rate = new coinAPI('ltc');
$dog_rate = new coinAPI('dog');


if(isset($_POST['type'])){
	$type = $_POST['type'];
    $wallet = $_POST['wallet'];
    $rbalance = "No wallet selected";

	switch($type){
		case 'btc' :
		$get_balance = $block_io_btc->get_address_balance(array('addresses' => $wallet));
		$balance = $get_balance->data->available_balance;
		$rbalance = $balance * ($btc_rate->get_rate());
		break;
		case 'ltc' :
		$get_balance = $block_io_ltc->get_address_balance(array('addresses' => $wallet));
		$balance = $get_balance->data->available_balance;
		$rbalance = $balance * ($ltc_rate->get_rate());
		break;
		case 'dog' :
		$get_balance = $block_io_dog->get_address_balance(array('addresses' => $wallet));
		$balance = $get_balance->data->available_balance;
		$rbalance = $balance * ($dog_rate->get_rate());
		break;
	}
	echo json_encode(array('response'=> true, 'balance' => $rbalance));
	
}

?>