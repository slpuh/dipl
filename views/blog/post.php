<?php include ROOT . '/views/layouts/header.php'; ?>

	
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<?php foreach ($blogList as $blogItem):?>
					<div class="post">
						<h2 class="title"><a href='/blog/<?php echo $blogItem['id'] ;?>'><?php echo $blogItem['title'].' # '.$blogItem['id'];?></a></h2>
						<p class="meta">Автор <a href="#"><?php echo $blogItem['author_name'];?></a> Дата <?php echo $blogItem['date'];?>
							&nbsp;&bull;&nbsp; <a href='/blog/<?php echo $blogItem['id'] ;?>' class="permalink"> Читать полностью</a></p>
						<div class="entry">
                                                    <p><img src="/template/<?php echo $blogItem['preview'] ;?>" width="300px" height="200px" alt="<?php echo $blogItem['title'] ?>" /></p>
							<p><?php echo $blogItem['short_content'];?></p>
						</div>
					</div>
				<?php endforeach;?>
					<div style="clear: both;">&nbsp;</div>
				</div>
                            </div>
                    <?php echo $pagination->get(); ?>
                    </div
</wrapper>
<?php include ROOT . '/views/layouts/footer.php'; ?>

