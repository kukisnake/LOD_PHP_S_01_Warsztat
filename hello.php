<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['name'])) {
        echo 'Witaj '.$_POST['name'].'!';
    }
}

