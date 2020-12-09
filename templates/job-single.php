<?php include 'inc/header.php'; ?>
<h2 class="page-header" style="color:grey;"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>
<small style="color:grey;">Posted By <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?> </small>
<hr>
<p class="lead" style="color:grey;"><?php echo $job->description; ?></p>
<ul class="list-group">
	<li class="list-group-item"><strong>Company:</strong> <?php echo $job->company; ?> </li>
	<li class="list-group-item"><strong>Salary:</strong> <?php echo $job->salary; ?> </li>
	<li class="list-group-item"><strong>Contact Email:</strong> <?php echo $job->contact_email; ?> </li>
</ul>
<br><br>
<a href="index.php">Go Back</a>
<br><br>
<div class="well">
	<a href="edit.php?id=<?php echo $job->id; ?>" style="background-color: #acafb3;" class="btn btn-default">Edit</a>
	<form style="display:inline;" method="post" action="job.php">
		<input type="hidden" name="del_id" value="<?php echo $job->id;?>">
		<input type="submit" class="btn btn-danger" value="delete">
	</form>
</div>
<?php include 'inc/footer.php'; ?>
