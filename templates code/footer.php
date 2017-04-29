<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
	</div>
</div>

<footer>
Powered by <a href="http://www.emlog.net" title="采用emlog系统">emlog</a> 
                <a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a> <?php echo $footer_info; ?>
                <?php doAction('index_footer'); ?></footer>     

<script>
$(document).ready(function(){
	dropdownOpen();//鼠标划过就展开子菜单，免得需要点击才能展开
    prettyPrint();
});
function dropdownOpen() {
	var $dropdownLi = $('li.dropdown');
	$dropdownLi.mouseover(function() {
		$(this).addClass('open');
	}).mouseout(function() {
		$(this).removeClass('open');
	});
}
</script>
</body>
</html>