<?php
// Typically you would just pass the item ID
// via the URL and in the process-order.php
// page you would extract the item name and
// the item price from a database using that ID.
// But for this example we'll just do it this way.

require_once(dirname(__FILE__).'/sci/config.php');
require_once(dirname(__FILE__).'/lib/common.lib.php');

if (!empty($_POST['coin_amount'])) {

  $coin_amount = $_POST['coin_amount'];
  $coin_type = $_POST['coin_type'];
  $client_type = $_POST['client_type'];
  $item = htmlentities(urlencode('user donation'));
  
  redirect("sci/process-order.php?donate=$coin_amount&item=$item&c=$coin_type&client=$client_type");
  exit;
  
} else {
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Make a donation</title>
</head>
<body>
<?php
  if (empty($_GET['result'])) {
    if (!empty($_COOKIE['tcode'])) {
?>
<div style="margin-top:10px;padding:5px;background-color:yellow;border:1px solid red;">
  It appears that you did not complete your last order properly. <a href="<?php echo $site_url.$bitsci_url.'payment.php?t='.safe_str($_COOKIE['tcode']).'&amp;c='.safe_str($_COOKIE['tcurr']); ?>" target="_self">Click here</a> to complete the transaction.
</div>
<?php } ?>

<h1>Donation Page</h1>
<p>Have we helped you? Feeling generous? Then how about a small donation?</p>

<form name="donate_form" method="post" action="">
  <p>
	<label style="font-weight:bold;">How much do you want to donate?</label><br />
	<input type="text" name="coin_amount" id="amount_input" maxlength="30" />
  </p>
  <p>
	<label style="font-weight:bold;">What coin are you donating?</label><br />
	Bitcoin: <input type="radio" name="coin_type" value="btc" checked="checked" />
	&nbsp;&nbsp;
	Litecoin: <input type="radio" name="coin_type" value="ltc" />
  </p>
  <p>
	<label style="font-weight:bold;">Select your connection type:</label><br />
	Normal Client: <input type="radio" name="client_type" value="ncon" checked="checked" />
	&nbsp;&nbsp;
	Tor Client: <input type="radio" name="client_type" value="tcon" />
  </p>
  <p><b>Important:</b> If you are connected through the Tor network or any other service which causes your IP to rapidly change then select the 2nd option. However, if you are not connected to this website via the https protocol then choosing the 2nd option will increase the risk of a session hijacking attack occurring. JavaScript must still be enabled for Tor clients.</p>
  <button type="submit">Checkout</button>
</form>

<?php
  } elseif ($_GET['result'] == 'success') {
    echo "<h1>Transaction Successful!</h1>\n";
    echo "<p>Your payment was was successful! Thank you for your kind donation friend!</p>";
  } elseif ($_GET['result'] == 'cancel') {
    echo "<h1>Transaction Failed!</h1>\n";
    echo "<p>The transaction was cancelled. Let the admin know if you had a problem.</p>";
  }
  echo "</body>\n</html>";
}
?>
