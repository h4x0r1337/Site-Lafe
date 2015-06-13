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
$pub_rsa_key = '6fa29fe8338723157c27573aba2dfd8a275ea505bde3cee16883cdf762050c95b364915a8f170ee80b2b200c2acc3bfac65a1531598cd998dd98ba340493bc3d19ba2dcbfb84abf299d48d95fb9790742e603d8f8c8b5dea17fef34f4bad0cd49d61607a0a5533518757fd10577eea2b87a927c3346cea96fa3ec7718499b26b';

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