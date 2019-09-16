<?php
require_once('api.php');

$params['user']		='user@xabber.org';
$params['password']	='12345';
$params['kepada']	='user-tujuan@xabber.org';
$params['pesan']	='Test API XMPP Jabber dengan PHP';
$params['mod']		='xmppsender';
$jsonp=new jsonp();
$respon=$jsonp->connectApi($params);
echo '<pre>'.print_r($respon,true).'</pre>';
