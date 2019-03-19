<section class="table login">
    <div class="table-cell login-box">
        <div>
            <a href="javascript:;">
                <img src="/application/common/static/image/icon/avatar-195.png" alt="Logo" class="login-logo"/>
            </a>
        </div>

        <div class="login-item login-title">
            <p>Eckes系统后台登录</p>
        </div>

        <div class="login-item login-form">
            <div class="login-form-item login-border">
                <span class="icon-user"></span><input placeholder="用户名" maxlength="24" type="text" name="user"/><span class="icon-angle-left"></span>
            </div>
            <div class="login-form-item">
                <span class="icon-lock"></span><input placeholder="密码" maxlength="16" type="password" name="pass"/><span class="icon-angle-left"></span>
            </div>
        </div>

        <div class="login-item login-checkbox">
            <input type="checkbox" value="保存用户名和密码" name="save"/> 保存用户名和密码
        </div>

        <div class="login-item login-btn">
            <a href="javascript:;" class="login-btn-in">登录</a><span> or </span><a href="javascript:;" class="login-btn-register" data-target="#modal">注册</a>
        </div>
    </div>
</section>

<!--注册框-->
<div id="modal" class="animated modal">
    <div class="animated modal-box">
        <div class="modal-title">
            <h3>注册</h3>
        </div>
        <div class="modal-main">
            <div class="login-item login-form register-form">
                <div class="login-form-item login-border">
                    <span class="icon-user"></span><input maxlength="24" data-placeholder="用户名" type="text" data-check="user"/><span class="icon icon-ok-circle"></span>
                </div>
                <div class="login-form-item login-border placeholder-pass">
                    <span class="icon-lock"></span><input maxlength="16" data-placeholder="密码" type="password" data-check="password"/><span class="icon icon-ok-circle"></span>
                </div>
                <div class="login-form-item login-border">
                    <span class="icon-phone"></span><input maxlength="11" data-placeholder="手机号" type="text" data-check="phone"/><span class="icon icon-remove-circle"></span>
                </div>
                <div class="login-form-item">
                    <span class="icon-envelope"></span><input maxlength="24" data-placeholder="邮箱email" type="text" data-check="email"/><span class="icon icon-ok-circle"></span>
                </div>
            </div>
        </div>
        <div class="modal-foot">
            <span class="close-btn modal-close-x"><i class="icon-remove-sign icon-large"></i></span>
            <a href="javascript:;" class="modal-close-a" id="register">提交数据</a>
            <a href="javascript:;" class="close-btn modal-close-a">close</a>
        </div>
    </div>
</div>