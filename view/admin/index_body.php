
<!-- 顶部固定导航 -->
<aside class="aside-nav">
    <div class="wrapper aside-nav-container">

        <div class="aside-nav-left fl">
            <ul class="aside-nav-ul">
                <li class="aside-nav-li"><a class="aside-nav-btn" href="javascript:;"><span class="icon-home"></span> 主站</a></li>
                <li class="aside-nav-li"><a class="aside-nav-btn" href="javascript:;">图表中心</a></li>
                <li class="aside-nav-li"><a class="aside-nav-btn" href="javascript:;">视频</a></li>
                <li class="aside-nav-li"><a class="aside-nav-btn" href="javascript:;">工作记录</a></li>
                <li class="aside-nav-li"><a class="aside-nav-btn" href="javascript:;">待办笔记</a></li>
                <li class="aside-nav-li"><a class="aside-nav-btn" href="javascript:;">资源</a></li>
                <li class="aside-nav-li">
                    <a class="aside-nav-btn" href="javascript:;">
                        <?=$_GET['mm']?$_GET['mm']:'mm';?>
                    </a></li>
            </ul>
        </div>

        <div class="aside-nav-right fr">
            <ul class="aside-nav-ul">
                <li class="aside-nav-li"><a class="aside-nav-btn" href="javascript:;">个人中心</a></li>
                <li class="aside-nav-li"><a class="aside-nav-btn" href="javascript:;">动态</a></li>
                <li class="aside-nav-li"><a class="aside-nav-btn" href="javascript:;">历史</a></li>
            </ul>
        </div>

    </div>
</aside>

<!-- body顶部banner -->
<section class="body-banner">
    <!-- banner main -->
    <div class="wrapper body-b-container">
        <div class="body-b-top">
            <div class="b-info clearfix">
                <div class="fl b-info-avatar">
                    <img class="avatar" src="/application/common/static/image/icon/avatar-195.png"/>
                    <a class="avatar-btn" href="">更换头像</a>
                </div>
                <div class="fl b-info-main">
                    <div class="b-info-name">
                        这是用户名 <span class="icon-heart-empty"></span>
                    </div>
                    <div class="b-info-sign">
                        <div class="sr-only">..</div>
                        <input class="sign" type="text" placeholder="请输入个性签名" maxlength="60"/>
                    </div>
                </div>
            </div><!--b-info-->
        </div><!--body-b-top-->

        <div class="body-b-nav">
            <ul class="fl b-nav-ul">
                <li class="b-nav-li active" data-page="general">总揽</li>
                <?php foreach($navlist as $n):?>
                    <li class="b-nav-li" data-page="<?=$n['n_name_en'];?>"><?=$n['n_name'];?></li>
                <? endforeach;?>
            </ul>
            <ul class="fr">
                <li class="b-nav-li">收藏</li>
                <li class="b-nav-li">设置</li>
            </ul>
            <div class="active-line"></div>
        </div><!--body-b-nav-->

    </div><!--body-b-container-->
</section>

<section class="body-space">
    <div class="wrapper space space-index">
        <!-- col-890px general space -->
        <div class="col col-890" id="general-space">
            <?php include VIEW_PATH.'/admin/index_space_general.php';?>
        </div><!-- col-890px -->

        <!-- col-380px -->
        <div class="col fr col-380">
            <div class="space-bg b-im text-center">
                <div>
                    <a class="im-title" href="#">创作中心 ></a>
                </div>
                <div class="im-title-btn">
                    <a href="#">文章投稿</a>|<a href="#">投稿管理</a>
                </div>
            </div><!-- b-im 创作中心 -->

            <div class="space-bg b-notice">
                <h4 class="space-title">公告</h4>
                <textarea class="hoverTransition b-n-textarea" maxlength="150"></textarea>
                <div class="b-n-t-length"><span>0</span>/150</div>
            </div><!-- b-notice 公告 -->

            <div class="space-bg b-infomation">
                个人信息
            </div><!-- b-infomation 个人信息 -->

            <div class="space-bg b-hot">
                <a href="#" class="b-hot-btn">
                    <img src="/application/common/static/image/uploads/admin/example.jpg" alt="" class="img-responsive"/>
                    <p>一起来感受吧</p>
                </a>
            </div><!-- b-hot 热点 -->

            <div class="space-bg b-lately">
                <h4 class="space-title">最近关注的信息</h4>
                <div class="b-l-list">
                    <ul class="b-l-ul">
                        <li>
                            <a href="#" class="b-l-btn">
                                <img src="/application/common/static/image/uploads/admin/icon.jpg" alt=""/>
                                <span>神代梦华谭</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!-- b-lately 最近的动态 -->

        </div><!-- col-380px -->
    </div>
</section>