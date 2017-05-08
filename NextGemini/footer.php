<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
<footer id="footer" class="footer">
    <div class="footer-inner">
        <div class="footer-inner-left">
            <div class="footer-info">
                <div class="footer-info-pannel">
                    <dl>
                        <dt>关于本站</dt> 
                        <dd><a href="/about/" title="博主小传">个人小传</a></dd>
                        <dd><a href="/blog-history/" title="博客历史">博客历史</a></dd> 
                        <dd><a href="/blog-copyright/" title="版权声明">版权声明</a></dd>                    
                        <dd><a href="/donate/" title="捐赠本站">捐赠本站</a></dd>
                    </dl>
                </div>
                <div class="footer-info-pannel">
                    <dl> 
                        <dt>子网通道</dt> 
                        <dd><a href="http://tool.yovisun.com/" target="_blank" title="YoviSun的个人工具集">Tool工具集</a></dd>
                        <dd><a href="http://app.yovisun.com/" target="_blank" title="我的App应用系列">App应用系列</a></dd>
                        <dd><a href="http://site.yovisun.com/" target="_blank" title="YoviSun个人网址导航">个人网址导航</a></dd>  
                        <dd><a href="http://www.yovisun.com/feed/" title="订阅本站"><i class="fa fa-rss"></i> RSS订阅</a></dd>
                    </dl>
                </div>
                <div class="footer-info-pannel">
                    <dl> 
                        <dt>主题页面</dt> 
                        <dd><a href="http://page.yovisun.com/cloud/" target="_blank" title="YoviSun Cloud Center">Cloud Center</a></dd> 
                        <dd><a href="http://page.yovisun.com/home/" target="_blank" title="YoviSun Home Center">Home Center</a></dd> 
                        <dd><a href="http://page.yovisun.com/about/" target="_blank" title="伯乐子期">About Me</a></dd> 
                        <dd>注意：需h5支持</dd> 
                    </dl> 
                </div>
                <div class="footer-info-pannel footer-info-pannel-contact">
                    <dl> 
                        <dt>联系反馈</dt>                    
                        <dd>admin(At)yovisun.com</dd> 
                        <dd><a href="/guestbook/" title="在线给我留言">在线留言</a></dd>                     
                    </dl>                     
                </div>
            </div>
            <div class="footer-copyright">
                <div class="footer-copyright-info">
                    Copyright &copy;
                    <span itemprop="copyrightYear"><?php echo date('Y'); ?></span>
                    <br/>
                    Powered by <a class="theme-link" href="http://www.typecho.org" target="_blank">Typecho</a> & 
                    <a class="theme-link" href="http://www.peakcoder.net" target="_blank">PeakCoder.net</a>保留一切权利.
                </div>
            </div>
        </div>
        <div class="footer-inner-right">
            <div class="footer-right-pannel">
                <div class="right-pannel-weixin-img"><img src="" /></div>
                <div class="right-pannel-weixin-text"><i class="fa fa-weixin"></i> 关注微信公众号</div>
                <!--
                <div class="pannel-img-weixin-text" style="width:200px;text-align:left;line-height:1.2em;">您可以直接通过电脑、手机直接访问本站，或关注本站微信公众号，获取更多信息。</div> 
                -->
                <div class="right-pannel-site-logo"><img src="" /></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</footer>
</div>
<script src="<?php $this->options->themeUrl('/res/vendor/fastclick/fastclick.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('/res/vendor/jquery_lazyload/jquery.lazyload.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('/res/vendor/velocity/velocity.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('/res/vendor/velocity/velocity.ui.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('/res/vendor/fancybox/jquery.fancybox.pack.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('/res/vendor/prettify/prettify.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('/res/js/main.js'); ?>"></script>

<script>
    $('.post-body a').attr('target','_blank');
</script>
<script>
    $(window).load(function(){
        // 只对代码块进行渲染，嵌入式 code tag 不渲染
	    // 没有指定语言不显示行号，指定语言才显示行号
        $("pre code").addClass("prettyprint");
        $("pre code[class*=lang-]").addClass("linenums");
        prettyPrint();
    })
</script>
<script>
    $(function(){
        $('.sidebar').velocity('transition.slideLeftIn');
        $('#posts').velocity('transition.slideDownIn');
        $("#posts").find('img').lazyload({
            placeholder:"/res/images/loading.gif",
            effect:"fadeIn"
        });
    });
</script>
<?php $this->footer(); ?>
</body>
</html>
