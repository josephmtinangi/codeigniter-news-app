<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2><?=$title?></h2>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-paperclip"></span></h3>
				</div>
				<div class="panel-body">

					<?=validation_errors()?>

					<?=form_open('news/create')?>
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" id="title" class="form-control" value="" title="Title">
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea name="content" id="content" class="form-control" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Publish</button>
					<?=form_close()?>
				</div>
			</div>
		</div>
	</div>
</div>