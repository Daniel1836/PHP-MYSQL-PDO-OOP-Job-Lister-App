<?php include 'inc/header.php';?>

<div class="jumbotron">
	<h1>Find a Job</h1>
	    <form method="GET" action="index.php">
	     	<select name="category" class="form-control">
	 	    	<option value="0">Choose Category</option>
		    	<?php foreach($categories as $category):?>
			    	<option value="<?php echo $category->id; ?>"><?php echo $category->name;?></option>
                <?php endforeach; ?>
		    </select>
		    <br>
		<input type="submit" class="btn btn-lg btn-success" style="background-color: #8EC5FC;" value="FIND">
	    </form>
</div>
   <h3 style="color:grey;"><?php echo $title; ?> </h3>
<?php foreach($jobs as $job):?>

<div class="row marketing">
	<div class="col-md-10">
		<h4 style="color:grey;"><?php echo $job->job_title;?></h4>
		<p style="color:grey;"><?php echo $job->description;?></p>
	</div>
    <div class="col-md-2">
	<a class="btn btn-default" style="background-color: #acafb3;" href="job.php?id=<?php echo $job->id;?>">View</a>
    </div>
</div>
<?php endforeach;?>

<?php include 'inc/footer.php'; ?>