<link href="/application/common/css/admin/style.manager.css?v=<?=mt_rand(0,9999);?>" rel="stylesheet">
<div class="space-bg manager">
    <h4 class="space-title"><span class="icon-list-alt"></span> 信息分类管理  (  注: 移出光标=确定。【留空=删除分类；必须包含中文，且长度>2】)</h4>
    <ul class="b-ar-ul">
        <!-- list -->
        <li class="b-ar-li">
            <input class="b-ar-a js-input" type="text" value="新闻" placeholder="新闻" maxlength="10"/>
        </li><!-- b-ar-li --><li class="b-ar-li">
            <input class="b-ar-a js-input" type="text" value="展会" placeholder="展会" maxlength="10"/>
        </li><!-- b-ar-li --><li class="b-ar-li">
            <input class="b-ar-a js-input" type="text" value="博客" placeholder="博客" maxlength="10"/>
        </li><!-- b-ar-li --><li class="b-ar-li js-plus">
            <a href="javascript:;" class="b-ar-a" title="添加分类"><span class="icon-plus"></span></a>
        </li>
    </ul>
</div><!-- b-area-infomation -->

<!-- js -->
<script src="/application/common/js/admin/manager/manager.js?v=<?=mt_rand(0,999999);?>"></script>