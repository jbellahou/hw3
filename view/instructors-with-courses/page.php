<div class="row">
  <div class="col">
<h1>Instructors with courses</h1>
  </div>
  <div class="col-auto">
<?php
include "new-form.php";
?>
  </div>
</div>
<div class="card-group">
<?php
while ($instructor = $instructors->fetch_assoc()) {
  include "instructor.php";
}
?>
</div>
