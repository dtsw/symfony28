<?php

system("tar czf ../vendor.tgz ../vendor/");

header("Content-Type: application/octet-stream");
readfile("../vendor.tgz");
