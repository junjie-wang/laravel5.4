<div class="admin-header clearfix">
    <!-- 颜色选择层 bylu -->
    <div class="bgSelector"></div>
    <div class="admin-logo">
        <a href="javascript:void(0);" data-url="index.php?act=main" data-param="index|main" target="workspace"><img src="images/admin-logo.png" tppabs="http://dsc.com/admin/images/admin-logo.png" /></a>
        <div class="foldsider"><i class="icon icon-indent-left"></i></div>
    </div>
    <div class="module-menu">
        <ul>
            <li data-param="menuplatform"><a href="javascript:void(0);">平台</a></li>                            					<li data-param="menushopping"><a href="javascript:void(0);">课程</a></li>                            					<li data-param="finance"><a href="javascript:void(0);">运营</a></li>                            					<li data-param="ectouch"><a href="javascript:void(0);">订单</a></li>                            					<li data-param="menuinformation"><a href="javascript:void(0);">用户</a></li>                    		</ul>
    </div>
    <div class="admin-header-right">
        <div class="manager">
            <dl>
                <dt class="name">{{\Auth::guard('admin')->user()->name}}</dt>
                <dd class="group">超级管理员</dd>
            </dl>
			<span class="avatar">
				<form  action="http://dsc.com/admin/index.php" id="fileForm" method="post"  enctype="multipart/form-data"  runat="server" >
                    <input name="img" type="file" class="admin-avatar-file" id="_pic" title="设置管理员头像">
                </form>
				<img nctype="admin_avatar" src="images/admin.png" tppabs="http://dsc.com/admin/images/admin.png" />
			</span>
            <div id="admin-manager-btn" class="admin-manager-btn"><i class="arrow"></i></div>
            <div class="manager-menu">
                <div class="title">
                    <h4>最后登录</h4>
                    <a>修改密码</a>
                </div>
                <div class="login-date">
                    <strong>2017-07-27 09:19:01</strong>
                    <span>(IP:127.0.0.1)</span>
                </div>
                <div class="title mt10">
                    <h4>常用操作</h4>
                    <a href="javascript:;" class="add_nav">添加菜单</a>
                </div>
                <div class="quick_link">
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
        <div class="operate">
            <li style="position: relative;">
                <a href="admin/show" class="msg" title="查看消息" target="workspace">>&nbsp;</a>
            {{--<li class="curr"><s></s><a href="admin/notices" data-param="finance|exchange_count" 通知列表</a></li>--}}
            </li>
            <i></i>
            <li><a href="" class="home" title="新窗口打开商城首页">&nbsp;</a></li>
            <li><a href="/admin/logout" class="prompt" title="安全退出管理中心">&nbsp;</a></li>
        </div>
    </div>
</div>