<!-- pluginStyles -->
<link href="/application/common/css/style.animate.css" rel="stylesheet">
<link href="/application/common/js/admin/release/highlight.css" rel="stylesheet">
<link href="/application/common/js/admin/release/quill.snow.css?v=<?=mt_rand(0,9999);?>" rel="stylesheet">
<link href="/application/common/css/admin/style.release.css?v=<?=mt_rand(0,9999);?>" rel="stylesheet">

<div class="space-bg release js-box-info" data-quill="info" data-coverqueueid="js-cover-info" data-imgqueueid='js-upimg-info'>
    <h4 class="space-title"><span class="icon-list-alt"></span> 信息发布</h4>
    <ul class="b-ar-ul js-list">
        <!-- list -->
        <li class="b-ar-li">
            <a href="javascript:;" class="b-ar-a">新闻</a>
        </li><!-- b-ar-li --><li class="b-ar-li">
            <a href="javascript:;" class="b-ar-a">展会</a>
        </li><!-- b-ar-li --><li class="b-ar-li">
            <a href="javascript:;" class="b-ar-a" data-classify="博客">博客</a>
        </li><!-- b-ar-li -->
    </ul>

    <!-- quill -->
    <div class="out release-space js-release-space">
        <hr/>

        <div class="out br release__bg release-blog-classify js-classify">
            <span class="br quill-label">博客分类</span>
            <div>
                <ul>
                    <li><input type="radio" name="classify" value="型材弯曲机" data-sid="1"/> 型材弯曲机</li>
                    <li><input type="radio" name="classify" value="四辊卷板机" data-sid="2" /> 四辊卷板机</li>
                    <li><input type="radio" name="classify" value="封头旋压机" data-sid="3" /> 封头旋压机</li>
                    <li><input type="radio" name="classify" value="联合冲剪机" data-sid="4" /> 联合冲剪机</li>
                    <li><input type="radio" name="classify" value="其他资讯" data-sid="5" /> 其他资讯</li>
                </ul>
            </div>
        </div>

        <div class="br release__bg">
            <span class="br quill-label">封面</span>
            <input class="js-quill-cover" name="js-quill-cover" type="file" multiple="true">
            <div id="js-cover-info"></div>
            <div class="js-return-cover"></div>
        </div>

        <?php include VIEW_PATH.'/plugin/quill_head.php';?>

        <div class="br release__bg">
            <span class="br quill-label">正文</span>
            <!-- quill content -->
            <div class="quill-content">
                <div class="toolbar-container js-toolbar-info">
                    <?php include VIEW_PATH.'/plugin/quill_toolbar.php';?>
                    <span class="ql-formats">
                        <input class="quill_img_upload" name="quill_img_upload" type="file" multiple="true">
                    </span>
                </div>
                <div id="js-upimg-info"></div>
                <div class="quill-editor js-editor-info"></div>
            </div>
        </div>

        <div class="br release__bg">
            <a class="release__submit js-submit" data-type="insert" href="javascript:;">提交文章</a>
        </div>
        <div class="br release__bg">
            <a class="release__submit js-autosave" href="javascript:;">导入自动保存的草稿(未上线)</a>
        </div>
    </div><!-- quill -->
</div><!-- release-infomation -->

<div class="space-bg release js-box-product" data-quill="product" data-coverqueueid="js-cover-product" data-imgqueueid='js-upimg-product'>
    <h4 class="space-title"><span class="icon-list-alt"></span> 产品发布</h4>
    <ul class="b-ar-ul js-list">
        <!-- list -->
        <li class="b-ar-li">
            <a href="javascript:;" class="b-ar-a" data-classify="型材弯曲机">型材弯曲机</a>
        </li><!-- b-ar-li --><li class="b-ar-li">
            <a href="javascript:;" class="b-ar-a" data-classify="全自动卷板机">全自动卷板机</a>
        </li><!-- b-ar-li --><li class="b-ar-li">
            <a href="javascript:;" class="b-ar-a" data-classify="封头旋压机">封头旋压机</a>
        </li><!-- b-ar-li --><li class="b-ar-li">
            <a href="javascript:;" class="b-ar-a mr0" data-classify="封头压鼓机">封头压鼓机</a>
        </li><!-- b-ar-li --><li class="b-ar-li">
            <a href="javascript:;" class="b-ar-a" data-classify="液压机">液压机</a>
        </li><!-- b-ar-li --><li class="b-ar-li">
            <a href="javascript:;" class="b-ar-a" data-classify="联合冲剪机">联合冲剪机</a>
        </li><!-- b-ar-li -->
    </ul><!--b-ar-ul-->

    <!-- quill -->
    <div class="out release-space js-release-space">
        <hr/>

        <div class="out br release__bg release-blog-classify js-classify">
            <span class="br quill-label"><span>产品</span>分类</span>
            <div>
                <ul>
                    <li><input type="radio" name="classify" value="型材弯曲机" /> 型材弯曲机</li>
                    <li><input type="radio" name="classify" value="四辊卷板机" /> 四辊卷板机</li>
                    <li><input type="radio" name="classify" value="封头旋压机" /> 封头旋压机</li>
                    <li><input type="radio" name="classify" value="联合冲剪机" /> 联合冲剪机</li>
                    <li><input type="radio" name="classify" value="其他资讯" /> 其他资讯</li>
                </ul>
            </div>
        </div>

        <div class="br release__bg">
            <span class="br quill-label">封面</span>
            <input class="js-quill-cover" name="js-quill-cover" type="file" multiple="true">
            <div id="js-cover-product"></div>
            <div class="js-return-cover"></div>
        </div>

        <?php include VIEW_PATH.'/plugin/quill_head.php';?>

        <div class="br release__bg">
            <span class="br quill-label">正文</span>
            <!-- quill content -->
            <div class="quill-content">
                <div class="toolbar-container js-toolbar-product">
                    <?php include VIEW_PATH.'/plugin/quill_toolbar.php';?>
                    <span class="ql-formats">
                        <input class="quill_img_upload" name="quill_img_upload" type="file" multiple="true">
                    </span>
                </div>
                <div id="js-upimg-product"></div>
                <div class="quill-editor js-editor-product"></div>
            </div>
        </div>

        <div class="br release__bg">
            <a class="release__submit js-submit" data-type="insert" href="javascript:;">提交文章</a>
        </div>
        <div class="br release__bg">
            <a class="release__submit js-autosave" href="javascript:;">导入自动保存的草稿(未上线)</a>
        </div>
    </div><!-- quill -->
</div><!-- release-product -->

<!-- js -->
<script src="/application/common/js/admin/release/highlight.min.js"></script>
<script src="/application/common/js/admin/release/uploadifive/jquery.uploadifive.min.js"></script>
<script src="/application/common/js/admin/release/quill.min.js"></script>
<script src="/application/common/js/admin/release/jquery.release.js?v=<?=mt_rand(0,999999);?>"></script>
<script src="/application/common/js/admin/release/release.js?v=<?=mt_rand(0,999999);?>"></script>