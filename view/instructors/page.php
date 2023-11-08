<h1>Instructors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Office</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($instructor = $instructors->fetch_assoc()) {
  include "instructor.php";
}
?>
    </tbody>
  </table>
</div>
