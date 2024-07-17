<?php

$con = mysqli_connect("localhost", "root", "", "miit-portal");

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}
