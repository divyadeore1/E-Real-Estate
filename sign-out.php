<?php
session_start();
session_destroy();
header("Location: http://localhost/real_estate/index.php");
?>