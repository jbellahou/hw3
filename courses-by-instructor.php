<?php
require_once("model/connection.php");
require_once("model/courses-by-instructor-db.php");

$pageTitle = "Courses by Instructor";
include "view/header.php";
$courses = selectCoursesByInstructor($_GET['id']);
include "view/courses-by-instructor/page.php";
include "view/footer.php";
?>
