<?php

if (pathinfo($_SERVER['HTTP_HOST'], PATHINFO_EXTENSION) == 'com') {
  include 'index.html';
} else {
  include 'index_zh_CN.html';
}
