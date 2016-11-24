<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel panel-body">
					<h2><?=$title?></h2>

					<?php foreach($news as $news_item): ?>
						<h3><?=$news_item['title']?></h3>
						<div class="news-content">
							<?=$news_item['content']?>
						</div>
						<p>
							<a href="<?=site_url('news/'.$news_item['slug'])?>">View article</a>
						</p>
					<?php endforeach ?>
				</div>					
			</div>			
		</div>		
	</div>	
</div>