<?php
/**
 * Hexo主题NexT.Gemini移植版
 *
 * @package NexT.Gemini
 * @author peakcoder
 * @version 0.9
 * @link https://github.com/peakcoder/typecho-theme-NexTGemini
 */
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
$this->need('header.php');
?>
<main id="main" class="main">
    <div class="main-inner">
        <div class="content-wrap">
            <div id="content" class="content">
                <section id="posts" class="posts-expand">
                    <?php while ($this->next()): ?>
                        <article class="post post-type-normal " itemscope itemtype="http://schema.org/Article">
                            <header class="post-header">
                                <h1 class="post-title" itemprop="name headline">
                                    <a class="post-title-link" href="<?php $this->permalink() ?>" itemprop="url">
                                        <?php $this->title() ?>
                                    </a>
                                </h1>
                                <div class="post-meta">
                <span class="post-time">
                <span class="post-meta-item-icon">
                  <i class="fa fa-calendar-o"></i>
                </span>
                <span class="post-meta-item-text">发表于</span>
                  <time itemprop="dateCreated" datetime="<?php $this->date('c'); ?>" content="<?php $this->date('yy-m-d'); ?>">
                      <?php $this->date('Y-m-d'); ?>
                  </time>
                </span>
                <span class="post-category">
                  &nbsp; | &nbsp;
                  <span class="post-meta-item-icon">
                    <i class="fa fa-folder-o"></i>
                  </span>
                  <span class="post-meta-item-text">分类于</span>
                    <span itemprop="about" itemscope itemtype="https://schema.org/Thing">
                      <a href=""><?php $this->category(' , '); ?></a>
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
              <span><?php get_post_view($this) ?></span>
             </span>
                                </div>
                            </header>
                            <div class="post-body" itemprop="articleBody">
                                <?php $this->excerpt(500, '...'); ?>
                                <p class="more"><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>">阅读全文 »</a></p>
                            </div>
                            <footer class="post-footer">
                                <div class="post-eof"></div>
                            </footer>
                        </article>
                    <?php endwhile; ?>
                </section>
            </div>
            <?php $this->pageNav('<i class="fa fa-angle-left"></i>', ' <i class="fa fa-angle-right"></i>', 5, '...', array('wrapTag' => 'nav', 'wrapClass' => 'pagination', 'itemTag' => '', 'prevClass' => 'extend prev', 'nextClass' => 'extend next', 'currentClass' => 'page-number current')); ?>
        </div>
        <?php $this->need('sidebar.php'); ?>
    </div>
</main>

<?php $this->need('footer.php'); ?>
