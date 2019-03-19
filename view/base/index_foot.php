<!-- index-fromt-footer begin -->
<footer class="web-footer" role="copyright-footer">
    <div class="container">
        <div class="row">
            <!-- nav-bottom-product -->
            <div class="col-xs-12 col-sm-5 col-md-3 footer-item">
                <div class="nav-bottom">
                    <div class="footer-bottom-head footer-bottom-head-product"></div>
                    <?php
                    $sql = "select * from ".$tb['ftclass']." order by class_order DESC";
                    $query = $db->query($sql);
                    while($re = $db->fetch_assoc($query)){
                        echo '<a class="btn btn-link nav-bottom-link" href="/'.$re['class_url'].'">'.$re['class_name'].'</a>';
                    }
                    ?>
                </div>
            </div>

            <!-- nav-bottom-main -->
            <div class="col-xs-12 col-sm-5 col-md-3 footer-item">
                <div class="nav-bottom">
                    <div class="footer-bottom-head footer-bottom-head-index"></div>
                    <a class="btn btn-link nav-bottom-link" href="/">赛乐首页</a>
                    <a class="btn btn-link nav-bottom-link" href="/company.php">关于我们</a>
                    <br/>
                    <a class="btn btn-link nav-bottom-link" href="/news.php">新闻资讯</a>
                    <a class="btn btn-link nav-bottom-link" href="/video.php">视频展示</a>
                    <br/>
                    <a class="btn btn-link nav-bottom-link" href="/contact.php">联系方式</a>
                </div>
            </div>

            <!-- nav-bottom-product -->
            <div class="col-xs-12 col-sm-5 col-md-3 footer-item">
                <div class="nav-bottom">
                    <div class="footer-bottom-head footer-bottom-head-photo"></div>
                    <a class="btn btn-link nav-bottom-link" href="/gallery/hezuohuoban.php">合作客户</a>
                    <a class="btn btn-link nav-bottom-link" href="/gallery/zhanhui.php">展会照片</a>
                    <br/>
                    <a class="btn btn-link nav-bottom-link" href="/gallery/yangben.php">样本画册</a>
                    <a class="btn btn-link nav-bottom-link" href="/news/">新闻博客</a>
                </div>
            </div>

            <!-- friendly link -->
            <div class="col-xs-10 col-sm-10 col-md-3 footer-item">
                <div class="nav-bottom">
                    <div class="footer-bottom-head footer-bottom-head-friend"></div>
                    <a class="btn btn-link nav-bottom-link">友情合作：</a><br/>
                    <?php
                    $sql = "select * from ".$tb['ftlink']." order by link_order DESC";
                    $query = $db->query($sql);
                    while($re = $db->fetch_assoc($query)){
                        echo '<a class="right-img" target="_blank" href="'.$re['link_url'].'">';
                        echo '<img src="/images/'.$re['link_icon'].'" width="38"/>';
                        echo '</a>';
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid copyright text-center">
        <p><span class="icon1"></span>Copyright 湖北赛乐科技有限公司 © 2013~<?=date("Y");?>. All Rights Reserved 鄂ICP备13014244号 Technical Support：<strong>Sahinler China</strong></p>
    </div>

    <div class="text-center footer-logo">
        <?php
        $sql = "select icon_img from ".$tb['fticon']." order by icon_order ASC";
        $query = $db->query($sql);
        while($re = $db->fetch_assoc($query)){
            echo '<img src="/images/footer/'.$re['icon_img'].'"/>';
        }
        ?>
    </div>
    <div class="gotop">
        <a id="blog" href="/news/">
            <img src="/images/footer/blog.png" title="官方新闻源" />
        </a>
        <a id="search" href="javascript:;" class="hidden-xs">
            <img src="/images/footer/search.png" title="SAHINLER赛乐站内搜索" />
        </a>
        <a id="gotop" href="javascript:;" class="hidden-xs">
            <img src="/images/footer/top-tp.png" title="返回顶部" />
        </a>
    </div>
</footer>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- 站内搜索 -->
<script type="text/javascript">(function(){document.write(unescape('%3Cdiv id="bdcs"%3E%3C/div%3E'));var bdcs = document.createElement('script');bdcs.type = 'text/javascript';bdcs.async = true;bdcs.src = 'http://znsv.baidu.com/customer_search/api/js?sid=3868681054124547821' + '&plate_url=' + encodeURIComponent(window.location.href) + '&t=' + Math.ceil(new Date()/3600000);var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(bdcs, s);})();</script>
<!-- 站内搜索 over -->
<!-- scroll nice -->
<script type="text/javascript" src="/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript">

    $("html").niceScroll({
        cursorcolor: "#F099C4",//#CC0071 光标颜色
        cursoropacitymax: 0.8, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0

        cursorwidth: "8px", //像素光标的宽度
        cursorborder: "none", // 	游标边框css定义
        cursorborderradius: "5px",//以像素为光标边界半径
        autohidemode: false //是否隐藏滚动条

        ,scrollspeed: "60" //滚动速度
        //,mousescrollstep : "120"  // 每次滚动距离px

        //,boxzoom : true  // 双击变焦
        //,dblclickzoom : true

        ,touchbehavior: false //使光标拖动滚动像在台式电脑触摸设备
        ,grabcursorenabled : false  //显示拖拽式鼠标
    });
</script>