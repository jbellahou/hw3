<div class="row">
  <div class="col">
<h1>Instructors with courses</h1>
  </div>
  <div class="col-auto">
<?php
include "view-instructors-with-courses-newform.php";
?>
  </div>
</div>
<div class="card-group">
<?php
while ($instructor = $instructors->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $instructor['instructor_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $courses = selectCoursesByInstructor($instructor['instructor_id']);
  while ($course = $courses->fetch_assoc()) {
?>
    <div class="row">
      <div class="col">
        <li class="list-group-item"><?php echo $course['course_number']; ?> - <?php echo $course['semester']; ?> - <?php echo $course['room']; ?> - <?php echo $course['day_time']; ?></li>
      </div>
      <div class="col-auto">
<?php
include "view-instructors-with-courses-editform.php";
?>
      </div>
    </div>
<?php
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Office: <?php echo $instructor['office_number']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
