<?php


namespace chillerlan\QRCodePublic;

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

require_once 'vendor/autoload.php';
$options = new QROptions(
    [
      'eccLevel' => QRCode::ECC_L,
      'outputType' => QRCode::OUTPUT_IMAGE_PNG,
      'version' => 5,
    ]
  );

$data = 'otpauth://totp/test?secret=B3JX4VCVJDVNXNZ5&issuer=chillerlan.net';

// quick and simple:
echo '<img src="'.(new QRCode($options))->render($data).'" alt="QR Code" />';

?>
