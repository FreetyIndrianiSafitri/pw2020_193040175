<?php
session_start();
session_destroy();
header("Location: ../indexx.php");
die;
