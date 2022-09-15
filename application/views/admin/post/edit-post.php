<div class="container">

      <a href="<?php echo  base_url(); ?>manage-post" class="btn w3-black">Back</a>
	<h2>Update Post</h2>
	<form role="form" method="post" action="<?php echo  base_url()?>edit-post-post" enctype="multipart/form-data">

		<input type="hidden" value="<?php echo $post[0]->id ?>" name="post_id">


		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" value="<?php echo $post[0]->title ?>" class="form-control" id="title" name="title">
		</div>
		<div class="form-group">
			<label for="body">Body:</label>
			<textarea class="form-control" id="body" name="body">     <?php echo $post[0]->body ?>       </textarea>
		</div>
		<div class="form-group">
			<label for="image">Image:</label>
			<input type="file" class="btn w3-light-grey" id="image" name="image">
		</div>
		<div class="form-group">
			<label for="type">Type:</label>
			<select class="form-control" id="type" name="type">
				<option value="page" <?php if($post[0]->type == "page"){ echo "selected"; } ?>>page</option>
				<option value="post" <?php if($post[0]->type == "post"){ echo "selected"; } ?>>post</option>
			</select>
		</div>
		<div class="form-group">
			<label for="is_visible">Is_visible:</label>

			<input type="radio" name="is_visible" value="1" <?php if($post[0]->is_visible == "1"){ echo "checked"; } ?>>
		</div>
		<button type="submit" class="btn w3-green">Submit</button>
	</form>
</div>
