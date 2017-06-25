<?php
$tag = $_POST['tag'];


if (isset($tag) && $tag !== '') {
    if ($tag == 'login') {
        if ($_POST['username'] === 'a' && $_POST['password'] === 'a') {
            echo true;
        } else {
            echo false;
        }
    }
}
