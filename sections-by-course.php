<?php
require_once("model/connection.php");
require_once("model/sections-by-course-db.php");

$pageTitle = "Sections by Course";
include "view/header.php";
$sections = selectSectionsByCourse($_POST['cid']);
include "view/sections-by-course/page.php";
include "view/footer.php";
?>
