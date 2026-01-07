<?php 

function to($url) {
        header('Location: ' . $url);
        exit;
    }