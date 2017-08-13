<?php
$suffix = pathinfo($_SERVER['HTTP_HOST'], PATHINFO_EXTENSION);
echo $suffix;
if ($suffix == 'com') {
  include 'index_en_US.html';
} else {
  include 'index_zh_CN.html';
}
