<header class="web-header">
    <!--导航-->
    <nav class="navbar navbar-default nav-top">
        <?php if(preg_match('/index/',$_SERVER['PHP_SELF'])>0):?>
            <div class="new-top-infomation hidden-xs"><div class="nti-txt"><div class="media">
                        <div class="media-left"><a href="/info/2016071522.php"><img class="media-object" src="/uploads/20170627/1406498186152.jpg" /></a></div>
                        <div class="media-body"><a href="/info/2017062730.php" target="_blank"><h4 class="media-heading">2017第19届中国国际工业博览会(CIIF)</h4></a><p><span class="icon-spinner icon-spin"></span> 2017年11月7-11日, 国际会展中心（上海）</p><p>SAHINLER赛乐将会为中国观众带来数台数控全自动机器。</p><span class="icon-remove-sign"></span></div>
                    </div></div></div>
        <?php endif;?>
        <!-- 诚信认证 -->
        <div class="renzheng">
            <div class="renzheng-img">
                <img src="/application/common/static/image/old/renzheng/pinan.png"/>
                <div class="renzheng-content">
                    <img src="/application/common/static/image/old/renzheng/pinancontent.jpg" />
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pull-left top-logo">
                <a href="/">
                    <img src="/images/sahinler_2016.png" class="img-responsive" id="nav-top-left" />
                </a>
            </div>

            <div class="pull-right top-nav-item" id="offsetTop">
                <ul class="nav nav-pills" id="top-nav-ul">
                    <?php
                    $mNav = "";//mobile nav
                    $fNav = "";//fixed nav
                    $sql = "select * from ".$GLOBALS['config']['tb']['index_nav']." order by nav_order ASC";
                    echo $sql;
                    $rows_nav = $this->model->getSqlAll($sql);
                    foreach($rows_nav as $re){
                        $mNav .= '<li><a href="/'.$re['n_url'].'">'.$re['n_name'].' '.ucfirst($re['n_name_en']).'</a></li>';

                        if( (substr_count($_SERVER['PHP_SELF'],"info")!=0 || substr_count($_SERVER['PHP_SELF'],"gallery")!=0) && $re['n_class']=="news"){
                            echo '<li class="menu-nav nav-current">';
                            $fNav .= '<li><a href="/'.$re['n_url'].'" class="nav-active">';

                        }else if(substr_count($_SERVER['PHP_SELF'],$re['n_class'])!=0){
                            echo '<li class="menu-nav nav-current">';
                            $fNav .= '<li><a href="/'.$re['n_url'].'" class="nav-active">';

                        }else{
                            echo '<li class="menu-nav">';
                            $fNav .= '<li><a href="/'.$re['n_url'].'">';
                        }

                        echo '<a href="/'.$re['n_url'].'">';
                        echo '<div class="nav-1"><span class="'.$re['n_icon'].'"></span></div>';
                        echo $re['n_name'].'<p>'.ucfirst($re['n_name_en']).'</p></a></li>';

                        $fNav .='<div class="navbar-right-icon"><i class="'.$re['n_icon'].'"></i></div>';
                        $fNav .='<div class="navbar-right-txt">'.$re['n_name'].'<br/><span>'.ucfirst($re['n_name_en']).'</span></div>';
                        $fNav .='</a></li>';

                        if($re['nav_class'] == "product"){
                            $fNav .= '<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a><ul class="dropdown-menu" role="menu"><li><a href="/gwj.php"><i class="icon-angle-right"></i> 型材弯曲机</a></li><li><a href="/sgjbj.php"><i class="icon-angle-right"></i> 四辊卷板机</a></li><li><a href="/ftxyj.php"><i class="icon-angle-right"></i> 封头旋压机</a></li><li><a href="/ftygj.php"><i class="icon-angle-right"></i> 封头压鼓机</a></li><li><a href="/lhcjj.php"><i class="icon-angle-right"></i> 联合冲剪机</a></li><li class="divider"></li><li><a href="/gallery/yangben.php"><i class="icon-picture"></i> 样本图册</a></li><li><a href="/gallery/gongchang.php"><i class="icon-picture"></i> 工厂展示</a></li><li><a href="/gallery/zhanhui.php"><i class="icon-picture"></i> 展会一览</a></li><li><a href="/gallery/hezuohuoban.php"><i class="icon-picture"></i> 合作伙伴</a></li></ul></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- 手机导航 -->
<div class="mobile-top-nav">
    <span class="icon-list img-rounder"></span>
    <ul class="nav nav-tabs nav-justified mobile-top-nav-box">
        <?=$mNav;?>
    </ul>
</div>
<!-- nav fixed -->
<nav class="hidden-xs navbar navbar-fixed-top p-nav-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><img src="/images/sahinler_2016.png"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?=$fNav;?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>