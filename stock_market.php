<?php
require_once ("class.stockMarketAPI.php");
include ("db_connect.php");
?>
<?php
$symbols=array('BAC','CHK', 'SDRL','AAPL');
$StockMarketAPI = new StockMarketAPI;
$StockMarketAPI->symbol = $symbols;
$symbol_array = $StockMarketAPI->getData();
foreach($symbol_array as $symbol_name=>$symbol_data) {
    $price = $symbol_data['price'];
    $result = mysqli_query($borsa_db, "update shares set price=$price where symbol='" . $symbol_name . "'");
}
?>

