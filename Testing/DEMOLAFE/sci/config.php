<?php
// business name
$seller = 'El H4XXX0R y el Lafe';

// full website url (with slash on end)
$site_url = 'http://conbitcoins.com/codigo/DEMOLAFE/';

// location of bitcoin sci folder from root
$bitsci_url = 'sci/';

// number of confirmations needed (can't be 0)
$confirm_num = 1;

// amount of time between each refresh (in seconds)
$refresh_time = 15;

// amount the progress bar increases with each refresh
$prog_inc = 5;

// payment precision (allow a bit of wiggle room)
$p_variance = 0.0000001;

// bitcoin price thousands separator
$t_separator = ',';

// should you receive an email upon confirmation?
$send_email = true;

// email for receiving confirmation notices
$contact_email = 'zeky.laf@gmail.com';

// admin control panel password
$admin_pass = 'wolframalphacon7';

// security string used for encryption (16 chars)
$sec_str = 'wolframalphacon7';

// public RSA key used to encrypt private keys
$pub_rsa_key = '66a1e97521e657128c81abdc612f35478adb6c9c62355c8196e06830981e85fb2efc9679c806af818fca1d6d7bfc646d232f8184140f1d129533ae5727117a713782cb5472588aa30be0201a731e2caab5b61291e9333d736fdfb5d93dc420177a6685cd54242ea2981b130b4177849b23108a5879943755e453cd5d52984153';

/////////////////////////////////////
/* IGNORE ANYTHING UNDER THIS LINE */
/////////////////////////////////////
define('CONF_NUM', $confirm_num);
define('SEC_STR', $sec_str);
define('SEP_STR', $t_separator);

// turn on/off error reporting
ini_set('display_errors', 1); 
error_reporting(0);

$app_version = '0.5.4';
?>