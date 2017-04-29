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
                        <a class="btn btn-default" href="http://blog.masdum.cn/?post=4" role="button">
                            详细介绍
                        </a>
                        <br />
                        全栈工程师 &amp; 产品经理
                        <br />
                        <br />
                        没听说过我？没有？好吧！如果你使用百度的网页搜索功能然后打“ Masdum ”，你就可以看到我长什么样子。很酷吧？我曾经是一名平面设计师，一名前端工程师，一名SEO工程师，一名独立研发团队创始人，现在致力于成为一名全栈工程师和产品经理。我喜欢音乐，喜欢心理学，喜欢经济学，喜欢做饭，喜欢高学历嫩白白的妹子 ...
                    </div>
                </div>
            </div>
        </div>
<?php
/**
 * 站点首页模板
 */
if (!defined('EMLOG_ROOT')) {
    exit('error!');
}
?>
        <!-- article --> 
    <?php
    if (!empty($logs)):
        foreach ($logs as $value):
            ?>
     <div class="container">
            <div class="col-md-12 article">
           <a href="<?php echo $value['log_url']; ?>">
                <div>
                     <h3>
<?php echo $value['log_title']; ?>
                    </h3>
                    <span class="time visible-lg-block">
                        <?php echo gmdate('Y-n-j', $value['date']); ?>
                    </span>
                </div></a>
                <hr />
                <p>
                     <?php echo $value['log_description']; ?>
                </p>
            </div>
        </div>
            <div style="clear:both;"></div>
            <?php
        endforeach;
    else:
        ?>
        <h2>未找到</h2>
        <p>抱歉，没有符合您查询条件的结果。</p>
        <?php endif; ?>
 <!-- page -->
        <div class="page">
            <ul class="pager">
               <?php $page_loglist = my_page($lognum, $index_lognum, $page, $pageurl); echo $page_loglist; ?>

            </ul>
        </div>
</div>
<?php
include View::getView('footer');
?>