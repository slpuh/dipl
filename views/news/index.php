<?php include ROOT . '/views/layouts/header.php'; ?>
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<?php foreach ($newsList as $newsItem):?>
					<div class="post">
						<h2 class="title"><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h2>
						<p class="meta">Автор <a href="#"><?php echo $newsItem['author_name'];?></a> Дата <?php echo $newsItem['date'];?>
							&nbsp;&bull;&nbsp; <a href='/news/<?php echo $newsItem['id'] ;?>' class="permalink"> Читать полностью</a></p>
						<div class="entry">
                                                    <p><img src="/template/<?php echo $newsItem['preview'] ;?>" width="300px" height="200px" alt="" /></p>
							<p><?php echo $newsItem['short_content_big'];?></p>
						</div>
					</div>
				<?php endforeach;?>
					<div style="clear: both;">&nbsp;</div>
				</div>
                            </div>
                     <?php echo $pagination->get(); ?>
                      </div>

</wrapper>
<?php include ROOT . '/views/layouts/footer.php'; ?>
