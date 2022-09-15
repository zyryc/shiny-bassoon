<div>
    <h1><?= $title ?></h1>
	<form action="<?= base_url(); ?>order-update/<?= $order['slug'] ?>" method="post" enctype='multipart/form-data'>

			<div class="form-group">
				<label for="subject">subject</label>
				<input type="text" class="form-control" name="subject" id="subject" value="<?= $order['subject'] ?>"
					placeholder="subject">

				<div class="form-group">
					<label for="description">description</label>
					<textarea class="form-control" name="description" id="description">
                        <?= $order['details'] ?>
                    </textarea>
				</div>
			</div>
		<div class="form-group">
			<label for="file_link">File link</label>
			<input type="text" class="form-control" name="file_link" id="file_link" value="<?= $order['file_link'] ?>"
				placeholder="file_link">
		</div>
		<div class="form-group">
			<label for="budget">budget</label>
			<input type="number" class="form-control" name="budget" id="budget" value="<?= $order['budget'] ?>"
				placeholder="budget">
		</div>
		<div class="row">
			<label for="deadline">deadline</label>

			<div class="col">
				<input type="date" class="form-control" name="date" id="date" value="<?= $date ?>"
					placeholder="daye">
			</div>
			<div class="col">
				<input type="time" class="form-control" name="time" id="time" value="<?= $time ?>"
					placeholder="time">
			</div>
		</div>
        <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
