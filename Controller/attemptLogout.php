<?php
/*
    Description: action to logout the user.
    used to destroy all sessions.

    Author: David McRae
*/
include '../Model/JustWatchMethods.php';

session_start();
AttemptLogOut();
?>
