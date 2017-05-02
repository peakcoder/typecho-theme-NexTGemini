<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="theme-next use-motion sun" lang="zh-cmn-Hans">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="/usr/themes/codertheme/static/css/all.min.css">
    <link rel="stylesheet" href="/usr/themes/codertheme/static/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/usr/themes/codertheme/static/vendor/prettify/prettify.css">
    <link rel="stylesheet" href="/usr/themes/codertheme/static/vendor/fancybox/jquery.fancybox.css">
    <link rel="shortcut icon" href="/usr/themes/codertheme/static/images/favicon.ico">
    <link rel="apple-touch-icon" href="/usr/themes/codertheme/static/images/favicon.png">
    <script src="/usr/themes/codertheme/static/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" id="hexo.configuration">
        var NexT = window.NexT || {};
        var CONFIG = {
            scheme:'Sun',
            sidebar: '[object Object]',
            fancybox: true,
            motion:true
        };
    </script>
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header('template=&generator='); ?>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div class="container one-column sidebar-position-left page-home">
    <!--page home-->
    <div class="headband"></div>
    <header id="header" class="header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="header-inner">
            <div class="site-meta">
                <div class="custom-logo-site-title">
                    <a href="/" class="brand" rel="start" title="<?php $this->options->title() ?>">
                        <span class="logo-line-before"><i></i><img src="<?php $this->options->logoUrl() ?>"/></span>
                        <span class="site-title"><?php $this->options->title() ?></span>
                        <span class="logo-line-after"><i></i></span>
                    </a>
                </div>
            </div>
            <div class="site-nav-toggle">
                <button>
                    <span class="btn-bar"></span>
                    <span class="btn-bar"></span>
                    <span class="btn-bar"></span>
                </button>
            </div>
            <nav class="site-nav">
                <ul id="menu" class="menu">
                    <li class="menu-item menu-item-home">
                        <a href="http://www.yovisun.com/" rel="section">
                            <i class="menu-item-icon fa fa-home fa-fw"></i>
                            <br/>
                            首页
                        </a>
                    </i>
                    <li class="menu-item menu-item-archives">
                        <a href="http://www.yovisun.com/archives/" rel="section">
                            <i class="menu-item-icon fa fa-fw fa-archive"></i>
                            归档
                        </a>
                    </li>
                    <li class="menu-item menu-item-about">
                        <a href="http://www.yovisun.com/about/" rel="section">
                            <i class="menu-item-icon fa fa-fw fa-user"></i>
                            关于
                        </a>
                    </li>
                    <li class="menu-item menu-item-guestbook">
                        <a href="http://www.yovisun.com/guestbook/" rel="section">
                            <i class="menu-item-icon fa fa-fw fa-commenting"></li>
                            留言
                        </a>
                    </li>
                </ul>
                <div class="site-search">
                    <form class="site-search-form">
                        <input type="text" id="st-search-input" name="s" class="st-search-input st-default-search-input" autocomplete="off" autocorrect="off" autocapitalize="off" placeholder="" value=""/>
                    </form>
                </div>
            </nav>
        </div>
    </header>
</div>

<!--<header id="header" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="site-name col-mb-12 col-9">
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <?php if ($this->options->logoUrl): ?>
                    <img src="" alt="<?php $this->options->title() ?>" />
                    <?php endif; ?>
                    
                </a>
        	    <p class="description"><?php $this->options->description() ?></p>
            </div>
            <div class="site-search col-3 kit-hidden-tb">
                <form id="search" method="post" action="./" role="search">
                    <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                    <input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                    <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                </form>
            </div>
            <div class="col-mb-12">
                <nav id="nav-menu" class="clearfix" role="navigation">
                    <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                </nav>
            </div>
        </div><--><!-- end .row -->
    <!--</div>-->
<!--</header><--><!-- end #header -->
<div id="body">
    <div class="container">
        <div class="row">

    
    
