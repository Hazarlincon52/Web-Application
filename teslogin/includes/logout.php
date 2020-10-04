<?php


session_start();
session_unset();
session_destroy();
header("Location: ../Website/Main_Menu.php");