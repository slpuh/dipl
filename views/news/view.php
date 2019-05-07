<?php include ROOT . '/views/layouts/header.php'; ?>
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h2>
						<p class="meta">Posted by <a href="#"><?php echo $newsItem['author_name'];?></a> on <?php echo $newsItem['date'];?>
							&nbsp;&bull;&nbsp; <a href='/news' class="permalink"> Back to HomePage</a></p>
						<div class="entry">
							<p><img src="/template/<?php echo $newsItem['preview'];?>"></p>
							<p><?php echo $newsItem['content'];?></p>
						</div>
					</div>
					<p><a href='/news' class="permalink"> Back to HomePage</a></p>
					<div style="clear: both;">&nbsp;</div>
				</div>
                            </div>
                    </div>
</wrapper>
<?php include ROOT . '/views/layouts/footer.php'; ?>
