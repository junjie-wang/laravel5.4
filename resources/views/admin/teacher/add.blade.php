<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>教师管理 - 添加教师 </title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="../favicon.ico" tppabs="http://dsc.com/favicon.ico" />
    <link rel="icon" href="../animated_favicon.gif" tppabs="http://dsc.com/animated_favicon.gif" type="image/gif" />
    <link href="/css/main.css" tppabs="http://dsc.com/admin/css/main.css" rel="stylesheet" type="text/css" />
    <link href="/css/iconfont.css" tppabs="http://dsc.com/admin/css/iconfont.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-awesome.min.css" tppabs="http://dsc.com/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/perfect-scrollbar.min.css" tppabs="http://dsc.com/admin/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="/css/purebox.css" tppabs="http://dsc.com/admin/css/purebox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/js/spectrum-master/spectrum.css" tppabs="http://dsc.com/admin/js/spectrum-master/spectrum.css">
    <script src="/js/css3-mediaqueries.js" tppabs="http://dsc.com/admin/js/css3-mediaqueries.js"></script>
</head>

<body class="iframe_body">
<div class="warpper">
    <div class="title">
        添加管理员       </div>
    <div class="content">
        <div class="tabs_info">
            <ul>
                <li class="curr"><a href="category.php-act=list.htm" tppabs="http://dsc.com/admin/category.php?act=list">平台商品分类</a></li>
                <li ><a href="javascript:" tppabs="http://dsc.com/admin/category_store.php?act=list">店铺商品分类</a></li>
            </ul>
        </div>
        <div class="explanation" id="explanation">
            <div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4><span id="explanationZoom" title="收起提示"></span></div>
            <ul>
                <li>展示了平台所有的商品分类。</li>
                <li>可在列表直接增加下一级分类。</li>
                <li>可在商品分类列表进行转移分类下的商品。</li>
                <li>鼠标移动“设置”位置，可新增下一级分类、查看下一级分类、转移商品等操作</li>
            </ul>
        </div>
        <div class="flexilist">

            <div class="common-content">
                <div class="mian-info">
                    <form name="theForm" method="post" id="user_form" action="/admin/teachers/create">
                        {{csrf_field()}}
                        <div class="switch_info">
                            <div class="item">
                                <div class="label"><span class="require-field">*</span>用户名：</div>
                                <div class="label_value">
                                    <input type="text" id="user_name" name="name" class="text" value="" autocomplete="off">
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><span class="require-field">*</span>性别：</div>
                                <div class="label_value">
                                    <label><input name="sex" type="radio" value="3" checked/>未知 </label>
                                    <label><input name="sex" type="radio" value="1" />男 </label>
                                    <label><input name="sex" type="radio" value="2" />女 </label>
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><span class="require-field">*</span>手机号：</div>
                                <div class="label_value">
                                    <input type="text" id="mobile" name="mobile" class="text" value="" autocomplete="off">
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><span class="require-field">*</span>Email地址：</div>
                                <div class="label_value">
                                    <input type="text" name="email" class="text" id="email" value="" autocomplete="off">
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><span class="require-field">*</span>专业：</div>
                                <div class="label_value">
                                    <input type="text" name="subject" class="text" id="subject" value="" autocomplete="off">
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><span class="require-field">*</span>密  码：</div>
                                <div class="label_value">
                                    <input type="password" style="display:none"><input type="password" name="password" class="text" id="password">
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><span class="require-field">*</span>确认密码：</div>
                                <div class="label_value">
                                    <input type="password" style="display:none"><input type="password" name="password_confirmation" class="text" id="pwd_confirm">
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            @include('admin.layout.error')


                            <div class="item">
                                <div class="label">&nbsp;</div>
                                <div class="label_value info_btn">
                                    {{--<a href="javascript:;" class="button" id="submitBtn"> 确定 </a>--}}
                                    <input type="submit" value="提交">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
<div id="footer">
    <p>版权所有 &copy; 2005-2017 上海商创网络科技有限公司，并保留所有权利。</p>
</div>

</body>
</html>
