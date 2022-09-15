<div class="container">
  <h2>Manage Post</h2>
  <?php if($this->session->flashdata('success')){ ?>
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
                </div>
  <?php } ?>
  <a href="<?php echo  base_url(); ?>add-post" class="button w3-green" >Add Post</a>
<?php if(!empty($posts)) {?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>title</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($posts as $post) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo  base_url()?>view-post/<?php echo $post->id?>" > <?php echo $post->title ?> </a> </td>

        <td>
        <a href="<?php echo  base_url()?>change-status-post/<?php echo $post->id ?>" class="button <?php if($post->status==0){ echo "w3-green"; } else { echo "w3-grey"; } ?>" > <?php if($post->status==0){ echo "Activate"; } else { echo "Deactivate"; } ?></a>
        <a href="<?php echo  base_url()?>edit-post/<?php echo $post->id?>" class="button w3-orange" >Edit</a>
        <a href="<?php echo  base_url()?>delete-post/<?php echo $post->id?>" class="button w3-red" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
                    <strong>No Posts Found!</strong>
                </div>
  <?php } ?>
</div>
