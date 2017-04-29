<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
 <!-- me -->
        <div class="container">
            <div class="col-md-12 me visible-lg-block">
                <div class="col-md-2">
                    <img src="<?php echo TEMPLATE_URL; ?>/img/me.png" class="img-responsive" alt="" />
                </div>
                <div class="col-md-10">
                    <div>
                        <b>
                            艾赛提 / Asad
                        </b>
                       
                        <br />
                        全栈工程师 &amp; 产品经理
                        <br />
                        <br />
                        没听说过我？没有？好吧！如果你使用百度的网页搜索功能然后打“ Masdum ”，你就可以看到我长什么样子。很酷吧？我曾经是一名平面设计师，一名前端工程师，一名SEO工程师，一名独立研发团队创始人，现专注于全栈工程师和产品经理领域。我喜欢音乐，喜欢心理学，喜欢经济学，喜欢做饭，喜欢高学历，嫩白白的妹子 ...
                    </div>
                </div>
            </div>
        </div>

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