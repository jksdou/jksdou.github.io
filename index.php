<?php
$suffix = pathinfo($_SERVER['HTTP_HOST'], PATHINFO_EXTENSION);
if ($suffix == 'com') {
  include 'index.html';
} else {
  include 'index_zh_CN.html';
}
