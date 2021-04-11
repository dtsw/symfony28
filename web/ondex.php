<?php

system("tar czf ../vendor.tgz ../vendor/");

header("Content-Type: application/octet-stream");
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename="'.basename("../vendor.tgz").'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize("../vendor.tgz"));
readfile("../vendor.tgz");
