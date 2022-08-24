<?php

require_once __DIR__ . '/app/EmailHelper.php';
if (!empty($_POST)) {
    $emailHelper = new EmailHelper();
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($emailHelper->subscribe());die;
}