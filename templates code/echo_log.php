<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
	<div class="container">
		<div class="col-md-12 article">
				<div><h3 style="text-align:center;display: block;"><?php topflg($top); ?><?php echo $log_title; ?></h3></div>
				<hr>
					<div class="text">
						<?php echo $log_content; ?>
					</div>
				<p class="tag"><?php blog_tag($logid); ?></p>
		</div>
		</div>
	</div>
	<div style="clear:both;"></div>
<?php
 include View::getView('footer');
?>