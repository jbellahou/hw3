<h1>Courses by instructor</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th>
      <th>Semester</th>
      <th>Room</th>
      <th>Day/ Time</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($course = $courses->fetch_assoc()) {
  include "course.php";
}
?>
    </tbody>
  </table>
</div>
