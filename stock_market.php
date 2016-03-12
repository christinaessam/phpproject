<?php
require_once ("class.stockMarketAPI.php");
include("model/db_connect.php");
?>
<?php
$symbols=array('BAC','CHK', 'SDRL','AAPL','UWTI','VXX','PFE','SIRI','ETE','FCX','VALE','WLL','PBR','F','WMB','MSFT','TWTR','MRO','QQQ','TVIX');
$StockMarketAPI = new StockMarketAPI;
$StockMarketAPI->symbol = $symbols;
$symbol_array = $StockMarketAPI->getData();
foreach($symbol_array as $symbol_name=>$symbol_data) {
    $price = $symbol_data['share_price'];
    $result = mysqli_query($borsa_db, "update shares set share_price=$price where share_symbol='" . $symbol_name . "'");
}
include ("check_alarms.php"); //start checking alarms after updating the prices
?>

