<?php
require_once("model/connection.php");
require_once("model/instructors-db.php");

$pageTitle = "Instructors";
include "view/header.php";
$instructors = selectInstructors();
include "view/instructors/page.php";
include "view/footer.php";
?>
