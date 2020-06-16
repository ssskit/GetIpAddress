<?php
require_once('vendor/autoload.php');

use GetIpAddress\IpOperationClass\GetIpHandle;

echo GetIpHandle::getAddress('171.12.10.156');