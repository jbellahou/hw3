<?php
require_once("model/connection.php");
require_once("model/instructors-chart-db.php");

$pageTitle = "Instructors Chart";
include "view/header.php";
$instructors = selectInstructors();
include "view/instructors-chart/page.php";
include "view/footer.php";
?>
