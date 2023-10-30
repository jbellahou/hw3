  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $instructor['instructor_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $courses = selectCoursesByInstructor($instructor['instructor_id']);
  while ($course = $courses->fetch_assoc()) {
    include "course.php";
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Office: <?php echo $instructor['office_number']; ?></small></p>
    </div>
  </div>
