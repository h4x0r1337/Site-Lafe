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
$pub_rsa_key = 'ab05e47f381612ef36576c81dfeded7a05a7276e7e1ecee4a8c93d5713d2fa28ebc288a5ec5030b0dcdb572f403401a90ed4f20349e6c8fb491ae6864ab6a2a7aeed6a47d2116f8309c57a882446d8ee49a727b4a6ba00ef1a527b94a641b22caa0a5022439a659e838a014e854a47e4b7c5ad6e721b344d19e669ba31077e21';

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