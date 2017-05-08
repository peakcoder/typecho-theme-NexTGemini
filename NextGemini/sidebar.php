<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

Typecho_Widget::widget('Widget_Stat')->to($stat);
?>
<div class="sidebar-toggle">
    <div class="sidebar-toggle-line-wrap">
        <span class="sidebar-toggle-line sidebar-toggle-line-first"></span>
        <span class="sidebar-toggle-line sidebar-toggle-line-middle"></span>
        <span class="sidebar-toggle-line sidebar-toggle-line-last"></span>
    </div>
</div>
<aside id="sidebar" class="sidebar" style="display:none;">
    <div class="sidebar-inner sidebar-inner-site">
        <div class="sidebar-inner-site-meta">
            <div class="site-author motion-element" itemprop="author" itemscope itemtype="http://schema.org/Person">
                <img class="site-author-image" src="<?php echo getGravatar($this->options->next_gravatar, 70); ?>" alt="<?php $this->options->next_name(); ?>" itemprop="image"/>
            </div>
            <div class="site-state motion-element">
                <div class="site-state-item site-state-posts">
                    <a href="<?php echo Typecho_Router::url('page', array('slug' => 'archive'), $this->options->index); ?>">
                        <span class="site-state-item-count"><?php echo $stat->publishedPostsNum; ?></span>
                        <span class="site-state-item-name">日志</span>
                    </a>
                </div>

                <div class="site-state-item site-state-categories">
                    <a href="<?php echo Typecho_Router::url('page', array('slug' => 'categories'), $this->options->index); ?>">
                        <span class="site-state-item-count"><?php echo $stat->categoriesNum; ?></span>
                        <span class="site-state-item-name">分类</span>
                    </a>
                </div>

                <div class="site-state-item site-state-tags">
                    <a href="<?php echo Typecho_Router::url('page', array('slug' => 'tags'), $this->options->index); ?>">
                        <span class="site-state-item-count"><?php echo getTagCount(); ?></span>
                        <span class="site-state-item-name">标签</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="site-description sidebar-inner-site-description motion-element" itemprop="description">
            <?php $this->options->next_tips(); ?>
        </div>
        <div class="site-donate motion-element">
            <a  href="/donate/ " class="site-donate-btn" title="支持我，捐赠本站">
                <img src="<?php $this->options->themeUrl('res/images/donate-btn.gif'); ?>" />
            </a>
        </div>
    </div>
    <div class="sidebar-inner sidebar-inner-links">
        <div class="sidebar-inner-title">
            常用链接
        </div>
        <div class="sidebar-inner-content">
            <span class="links-item">
                <a href="http://site.yovisun.com/" target="_blank" title="YoviSun个人网址导航">
                    <i class="fa fa-map"></i> 网址导航
                </a>
            </span>
            <span class="links-item">
                <a href="http://app.yovisun.com/" target="_blank" title="YoviSun应用系列">
                    <i class="fa fa-apple"></i> App应用
                </a>
            </span>
            <span class="links-item">
                <a href="http://tool.yovisun.com/" target="_blank" title="YoviSun工具箱">
                    <i class="fa fa-briefcase"></i> Tool工具箱
                </a>
            </span>
            <span class="links-item">
                <a href="http://page.yovisun.com/home/" target="_blank" title="YoviSun 云计算中心">
                    <i class="fa fa-cloud"></i> Cloud中心
                </a>
            </span>
            <span class="links-item">
                <a href="http://www.yovisun.com/feed/" target="_blank" title="RSS订阅本站">
                    <i class="fa fa-rss-square"></i> RSS订阅
                </a>
            </span>
            <span class="links-item">
                <a href="/links/" title="友情链接，左邻右舍">
                    <i class="fa fa-group"></i> 友情链接
                </a>
            </span>
        </div>
    </div>
    <div class="sidebar-inner sidebar-inner-hot">
        <div class="sidebar-inner-title">
            热门文章
        </div>
        <div class="sidebar-inner-content">
            <ul class="widget-list">
                <?php Views_Plugin::theMostViewed(); ?>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="sidebar-inner sidebar-inner-comment">
        <div class="sidebar-inner-title">
            最近评论
        </div>
        <div class="sidebar-inner-content">
            <ul>
                <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
                <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="sidebar-inner sidebar-inner-rerent">
        <div class="sidebar-inner-title">
            最近文章
        </div>
        <div class="sidebar-inner-content">
            <ul class="widget-list">
                <?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</aside>