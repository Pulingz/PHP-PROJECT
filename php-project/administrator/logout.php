<?php
session_start();

//melepas variable sesi
session_unset();

// MENGHANCURKAN sesi yang dipakai
session_destroy();

header("location: login.php");