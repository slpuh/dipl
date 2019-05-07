<?php include ROOT . '/views/layouts/header.php'; ?>
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href='/blog/<?php echo $blogItem['id'] ;?>'><?php echo $blogItem['title'].' # '.$blogItem['id'];?></a></h2>
						<p class="meta">Posted by <a href="#"><?php echo $blogItem['author_name'];?></a> on <?php echo $blogItem['date'];?>
							&nbsp;&bull;&nbsp; <a href='/blog' class="permalink"> Back to HomePage</a></p>
						<div class="entry">
							<p><img src="/template/<?php echo $blogItem['preview'];?>"></p>
							<p><?php echo $blogItem['content'];?></p>
						</div>
					</div>
					<p><a href='/blog' class="permalink"> Back to HomePage</a></p>
					<div style="clear: both;">&nbsp;</div>
				</div>
                            </div>
                    </div>
</wrapper>
<?php include ROOT . '/views/layouts/footer.php'; ?>
