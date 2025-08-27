<?php

// 1. Connect to Local MySQL Server (using XAMPP or MAMPP)
$username = "root";
$conn = new mysqli("localhost", $username, "", "course_calendar");
$conn->set_charset("utf8mb4");
