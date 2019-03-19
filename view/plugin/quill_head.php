<div class="br release__bg">
    <span class="br quill-label">标题</span>
    <input class="quill-input js-form js-title" type="text" maxlength="64" placeholder="Click here to write something for News title" />
    <div class="quill-time">
        <span class="icon-time"></span>
        <span> Posted on </span>
        <time class="js-data-time"><?=date("Y-m-d H:m:s");?></time>
    </div>
</div>

<div class="br release__bg">
    <span class="br quill-label">关键词</span>
    <input class="quill-input js-form js-keyword" maxlength="80" type="text" placeholder="Keyword, Separate with a comma "/>
</div>

<div class="br release__bg">
    <span class="br quill-label">描述</span>
    <textarea class="quill-textarea js-form js-description" name="" maxlength="180" placeholder="Description, maxlength=180"></textarea>
</div>