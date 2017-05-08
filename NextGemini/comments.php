<div class="comments" id="comments">
    <?php $this->comments()->to($comments);?>
    <?php if ($comments->have()): ?>
        <span class="widget-title"><?php $this->commentsNum(_t('暂无评论'), _t('仅有 1 条评论'), _t('已有 %d 条评论'));?></span>
        <?php $comments->listComments();?>
        <?php $comments->pageNav('&laquo; ', ' &raquo;', 5, '...', array('wrapTag' => 'nav', 'wrapClass' => 'pagination', 'itemTag' => '', 'prevClass' => 'extend prev', 'nextClass' => 'extend next', 'currentClass' => 'page-number current'));?>
        <script type="text/javascript">
            //每个回复中，添加@功能
            $('.comment-child').each(function(index){
                var $pCom = $(this).parent().parent().parent(".comment-body");//获得第一个直接父节点
                var pComId = $pCom.attr("id");////获得第一个直接父节点评论的id
                var pComName = $pCom.children(".comment-author:eq(0)").find("cite").text();////获得父节点的名字，及被回复的人的名字
                //将@信息追加的评论中
                $(this).children(".comment-content:eq(0)").prepend("<p class='comment-at-author'><a href='#"+pComId+"'>@"+pComName+"</a></p>");
            });
            //为评论人网站添加blank新窗口弹出
            $(".comment-author cite a").each(function(index){
                if($(this).text()!="PeakCoder"){
                    $(this).attr("target","_blank");
                }
            });
        </script>
    <?php endif;?>
    <?php if ($this->allow('comment')): ?>
        <div id="<?php $this->respondId();?>" class="respond">
            <div class="cancel-comment-reply">
                <?php $comments->cancelReply();?>
            </div>
            <span id="response" class="widget-title"><?php _e('添加新评论');?></span>
            <form method="post" action="<?php $this->commentUrl()?>" id="comment-form">
                <div class="comment-user-info-input">
                    <?php if ($this->user->hasLogin()): ?>
                        <div><?php _e('登录身份：');?><a href="<?php $this->options->profileUrl();?>"><?php $this->user->screenName();?></a>. <a href="<?php $this->options->logoutUrl();?>" title="Logout"><?php _e('退出');?> &raquo;</a></div>
                    <?php else: ?>
                        <div class="comment-about comment-about-author">
                            <label for="author" class="required"><?php _e('称呼');?></label>
                            <input type="text" placeholder="必填" name="author" id="author" class="text" value="<?php $this->remember('author');?>"/>
                        </div>
                        <div class="comment-about comment-about-email">
                            <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif;?>><?php _e('邮箱');?></label>
                            <input type="email" placeholder="必填，不会被公开" name="mail" id="mail" class="text" value="<?php $this->remember('mail');?>"/>
                        </div>
                        <div class="comment-about comment-about-url">
                            <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif;?>><?php _e('网站');?></label>
                            <input type="url" name="url" id="url" class="text" placeholder="<?php _e('选填，如www.abc.com');?>" value="<?php $this->remember('url');?>"/>
                        </div>
                    <?php endif;?>
                        <div class="clear"></div>
                </div>
                <div class="comment-content">
                    <textarea rows="8" cols="50" name="text" id="textarea" class="text-area" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};"><?php $this->remember('text');?></textarea>
                </div>
                <div class="col2 comment-submit">
                    <p>
                        <button type="submit" class="submit" id="submit"><?php _e('提交评论');?></button>
                    </p>
                </div>
                <div class="clear"></div>
            </form>
        </div>
    <?php else: ?>
    <?php endif;?>
</div>
