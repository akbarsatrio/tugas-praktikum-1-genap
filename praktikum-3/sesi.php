<?php

session_start();
if($_SESSION['result'] == null) {
  $_SESSION = ['result'];
}
$_SESSION['result'][] = [
  'ya' => 'yoyo',
  'tai' => 'anjing'
];
// unset($_SESSION['result']);
echo json_encode($_SESSION['result']);