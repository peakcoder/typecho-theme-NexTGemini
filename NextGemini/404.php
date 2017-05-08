<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php $this->options->charset(); ?>" />
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <?php if ($this->is('index')): ?><title><?php $this->options->title(); ?></title>
    <?php else: ?>
        <title><?php $this->archiveTitle('.', '', ' - '); ?><?php $this->options->title(); ?></title>
    <?php endif; ?>
    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <![endif]-->
    <?php $this->header("generator=&template=&"); ?>
</head>
<body>
    <script type="text/javascript" src="//qzonestyle.gtimg.cn/qzone/hybrid/app/404/search_children.js?edition=small" charset="utf-8" homePageUrl="<?php $this->options->siteUrl(); ?>" homePageName="返回首页"></script>
</body>
</html>