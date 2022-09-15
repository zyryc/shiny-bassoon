<div class="container" id="make-order">
<div class="">
	<br>
	<br>
	<?php echo validation_errors(); ?>
	<form action="store-order" method="post" class="order-form" enctype='multipart/form-data'>

		<div class="form-group">
			<label for="subject">subject</label>
			<input type="text" class="form-control" name="subject" id="subject" aria-describedby="helpId"
				placeholder="subject">
		</div>
		<div class="form-group">
			<label for="description">description</label>
			<textarea class="form-control" name="description" id="description"></textarea>
		</div>
		<div class="form-group">
			<label for="files">files</label>
			<input type="file" class="form-control" name="files[]" multiple id="files" aria-describedby="helpId"
				placeholder="files">
		</div>
		<div class="form-group">
			<label for="file_link">File link</label>
			<input type="text" class="form-control" name="file_link" id="file_link" aria-describedby="helpId"
				placeholder="file_link">
		</div>
		<div class="form-group">
			<label for="budget">budget</label>
			<input type="number" class="form-control" name="budget" id="budget" aria-describedby="helpId"
				placeholder="budget">
		</div>
		<div class="form-group">
			<label for="deadline">deadline</label>
			<div class="rows">
			<div class="cols">
				<input type="date" class="form-control" name="date" id="date" aria-describedby="helpId"
					placeholder="daye">
			</div>
			<div class="cols">
				<input type="time" class="form-control" name="time" id="time" aria-describedby="helpId"
					placeholder="time">
			</div>
			</div>

			
		</div>
		<button type="submit" class="w3-btn w3-teal">Submit</button>
	</form>
</div>
</div>
<style>
	.rows {
    display: inline-grid;
    grid-template-columns: auto auto;
    padding: 10px;
  }
  
  .cols {
    background-color: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(0, 0, 0, 0.8);
    padding: 20px;
    font-size: 30px;
    text-align: center;
  }
  /* style the .order-form */
.order-form {
  width: 100%;
  height: 100%;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  max-width: 500px;
    margin: 0 auto;
    padding-top: 20px;

}
.order-form .form-group {
  margin-bottom: 20px;
}
.order-form .form-group label {
  font-size: 16px;
  font-weight: bold;
  color: #000;
}
.order-form .form-group input {
  width: 100%;
  height: 40px;
  border-radius: 5px;
  border: 1px solid #ccc;
  padding-left: 10px;
}
.order-form .form-group textarea {
  width: 100%;
  height: 100px;
  border-radius: 5px;
  border: 1px solid #ccc;
  padding-left: 10px;
}
.order-form .form-group .btn {
  width: 100%;
  height: 40px;
  border-radius: 5px;
  border: 1px solid #ccc;
  background-color: #000;
  color: #fff;
  font-weight: bold;
  font-size: 16px;
}
/* center ."order-form */
.order-form {
  margin: 0 auto;
}
</style>