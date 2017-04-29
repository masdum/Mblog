<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div class="container">
	<div class="col-md-12 article">
		<div><h3 style="text-align:center;display: block;"><?php echo $log_title; ?></h3></div>
		<hr>
		<p class="text">
				<?php echo $log_content; ?>
		</p>
	</div>

	</div>
</div>

	<div style="clear:both;"></div>

<?php
 include View::getView('footer');
?>