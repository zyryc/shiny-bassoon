<div class="container">

      <!-- back   -->
      <a href="<?php echo  base_url(); ?>manage-post" class="btn w3-black">Back</a>
  <h2>Add Post</h2>  
    <form role="form" method="post" action="<?php echo  base_url()?>/add-post-post"  enctype="multipart/form-data" >
              <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
            <div class="form-group">
      <label for="body">Body:</label>
    <textarea  class="form-control" id="body" name="body"></textarea>
      </div>
            <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="btn w3-light-grey" id="image" name="image">
      </div>
          <div class="form-group">
    <label for="type">Type:</label>
    <select class="form-control" id="type" name="type">
        <option value="page">Page</option>
        <option value="post">Post</option>
        </select>
    </div>
          <div class="form-group">
    <label for="is_visible">Is_visible:</label>
    
    <input type="radio" name="is_visible" value="1">         </div>
            <button type="submit" class="btn w3-green">Submit</button>
    </form>
</div>