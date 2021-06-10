<?php
include('config/sessions.php');
unset($_SESSION);
session_destroy();
session_write_close();
header('Location: index')


?>
