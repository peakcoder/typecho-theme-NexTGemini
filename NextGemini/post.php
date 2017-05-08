<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
<?php $this->need('header.php'); ?>
<main id="main" class="main">
    <div class="main-inner">
        <div class="content-wrap">
            <div id="content" class="content">
                <div id="posts" class="posts-expand">
                    <article class="post post-type-normal " itemscope itemtype="http://schema.org/Article">
                        <header class="post-header">
                            <h1 class="post-title" itemprop="name headline">
                                <?php $this->title() ?>
                            </h1>
                            <div class="post-meta">
                     <span class="post-time">
                        <span class="post-meta-item-icon">
                            <i class="fa fa-calendar-o"></i>
                        </span>
                        <span class="post-meta-item-text">发表于</span>
                        <time datetime="<?php $this->date('c'); ?>" itemprop="dateCreated" content="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y-m-d'); ?></time>
                    </span>
                    <span class="post-category">
                      &nbsp; | &nbsp; 
                      <span class="post-meta-item-icon">
                        <i class="fa fa-folder-o"></i>
                      </span>
                      <span class="post-meta-item-text">分类于</span>
                      <span itemprop="about" itemscope itemtype="https://schema.org/Thing">
                       <?php $this->category(' , '); ?>
                   </span>
               </span>
              <span class="post-comments-count">
                &nbsp; | &nbsp;
                <span class="post-meta-item-icon">
                    <i class="fa fa-comment-o"></i>
                </span>
                <span class="post-meta-item-text">评论数：</span>
                <span><a rel="nofollow" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('暂无评论', '1 条评论', '%d 条评论'); ?></a></span>
               </span>
               <span class="post-views-count">
                &nbsp; | &nbsp;
                <span class="post-meta-item-icon">
                    <i class="fa fa-eye"></i>
                </span>
                <span class="post-meta-item-text">阅读数：</span>
                <span>100</span>
               </span>
                            </div>
                        </header>
                        <div class="post-body" itemprop="articleBody">
                            <?php $this->content(); ?>
                        </div>
                        <div style="display:none;">/usr/themes/NexTSun/static/images/yovisun-weixin-share.jpg<img src='/usr/themes/NexTSun/static/images/yovisun-weixin-share.jpg' ></div>
                        <!-- 文章交互：点赞，分享 -->
                        <div class="post-interactive" >
                            <span class="post-like">
                                <a class="btn s3 btn-like" data-cid="567" data-num="8" href="javascri:void(0);" title="为本文点赞"><i class="fa fa-thumbs-up"></i> 赞  (<span class="post-likes-num">8</span>)</a>
                            </span>
                            <span class="post-share">
                                <a class="btn s3 btn-share" data-dialog="#dialog-share" href="javascript:void(0);" title="分享到" onclick="$('.dialog-share').slideToggle();"><i class="fa fa-share-alt"></i> 分享</a>
                            </span> 
                        </div>
                        <div class="dialog-share">
                             <div class="bdsharebuttonbox">
                                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                                <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                                <a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a>
                                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                                <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                                <a href="#" class="bds_copy" data-cmd="copy" title="分享到复制网址"></a>
                                <a href="#" class="bds_mail" data-cmd="mail" title="分享到邮件分享"></a>
                                <a href="#" class="bds_more" data-cmd="more"></a>
                             </div>
                             <script>
                                window._bd_share_config={
                                    "common":{
                                        "bdSnsKey":{},
                                        "bdText":"",
                                        "bdMini":"2",
                                        "bdMiniList":false,
                                        "bdPic":"",
                                        "bdStyle":"1",
                                        "bdSize":"24"
                                    },
                                    "share":{}
                                };
                                with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                             </script>
                        </div>
                        <div class="post-donate">
                            <div class="donate-title">
                                如果您觉得本文对您的学习或工作有所帮助，不妨捐赠赞助一下，您的支持是对我的最大肯定。同时，也欢迎您同我交流。<a href="http://www.yovisun.com/donate/ " title="查看捐赠详情" target="_blank">捐赠详情</a>
                            </div>
                            <div class="donate-handle">
                                <a class="btn s3 donate-btn" href="javascipt:void(0);" onclick="$('.donate-pay').slideToggle();"                         onmouseover="$('.donate-pay').slideDown();" title="查看捐赠"><i class="fa fa-cny"></i> 捐赠支持</a>
                            </div>
                            <div class="donate-pay">
                                <div class="donate-pay-title">
                                    捐赠金额随意，多谢您的支持
                                </div>
                                <div class="donate-pay-btn">
                                    <img src="http://storage.yovisun.com/blog/image/donate-alipay.gif" title="支付宝扫一扫捐赠本站" alt="支付宝扫一扫捐赠本站" />
                                    <img src="http://storage.yovisun.com/blog/image/donate-weixin.gif" title="微信扫一扫捐赠本站" alt="微信扫一扫捐赠本站" />
                                </div>
                            </div>
                        </div>
                        <div class="post-copyright">
                            <div>
                                <span><b>声明：</b></span>
                                <span>原创文章，欢迎转载，请以 <b>超链接</b> 的形式注明 <b>作者</b>、<b>标题</b> 和 <b>原始出处</b>。</span>
                                <span><a href="/blog-copyright/" target="_blank">查看许可协议</a></span>
                            </div>
                            <div>
                                <span><b>标题</b>：</span><span>Typecho的一些好用插件</span> | <b>作者</b>：YoviSun
                            </div>
                            <div><b>地址</b>：<span>http://www.yovisun.com/archive/my-typecho-plugins.html<span></div>
                        </div>
                        <div class="post-tags">
                            <b>标签：</b>
                            <a href="xxx">xxx></a>
                            <a href="xxx">xxx0</a>
                        </div>
                        <div class="post-related">
                            <div><b>相关文章：</b></div>
                            <ul>
                                <li><a href="xxx" title="xxx">test</a></li>
                                <li><a href="xxx" title="xxx">test1</a></li>
                            </ul>
                        </div>
                        <footer class="post-footer">
                            <div class="post-nav">
                                <div class="post-nav-next post-nav-item">
                                    <?php $this->theNext('<i class="fa fa-chevron-left"></i>%s', ''); ?>
                                </div>
                                <div class="post-nav-prev post-nav-item">
                                    <?php $this->thePrev('%s<i class="fa fa-chevron-right"></i>', ''); ?>
                                </div>
                            </div>
                        </footer>
                    </article>

                </div>
            </div>
            <?php $this->need('comments.php'); ?>
        </div>
        <?php $this->need('sidebar.php'); ?>
    </div>
</main>

<?php $this->need('footer.php'); ?>
