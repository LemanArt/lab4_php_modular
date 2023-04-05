<?php
$mod = $_REQUEST['mod'];
switch ($mod) {
    case "home":
        require("home.php");
        break;
    case "about":
        require("about");
        break;
    case "kontak":
        require("kontak");
        break;
}