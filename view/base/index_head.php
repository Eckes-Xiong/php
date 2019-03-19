<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-COMPATIBLE" CONTENT="IE=edge"/>
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1, maximum-scale=1,minimum-scale=1.0,user-scalable=no">
    <link rel="icon" href="/images/favicon1.png"/>

    <!-- base style -->
    <link rel="stylesheet" href="/application/common/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/application/common/fontAwesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/application/common/css/front/style.index.css"/>

    <!--[if IE 7]>
    <link rel="stylesheet" href="/application/common/fontAwesome/css/font-awesome-ie7.min.css"/>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="/application/common/js/html5shiv.min.js"/>
    <script src="/application/common/js/respond.min.js"/>
    <![endif]-->

    <title><?=$this->html['i_title'];?></title>

    <?php if($this->html['h_css']):?>
    <!-- private style -->
    <link rel="stylesheet" href="/application/common/css/<?=PLATEFORM."/".$this->html['h_css'];?>"/>
    <?php endif;?>

    <meta name="description" content="<?=$this->html['i_desc'];?>"/>
    <meta name="keywords" content="<?=$this->html['i_keyword'];?>"/>
    <meta name="generator" content="Notepad++"/>
    <!-- 制作软件 -->
    <meta name="author" content="ECKES.cn">
    <!-- 作者 -->
    <META NAME="COPYRIGHT" CONTENT="ECKES.cn">
    <!-- 版权信息 -->
    <meta name="Robots" CONTENT="all">

    <!-- jQuery -->
    <script src="/application/common/js/jquery-1.9.1.min.js"></script>
</head>
<body>