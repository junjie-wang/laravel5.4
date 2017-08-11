@extends('admin.layout.content')

@section('content')
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
                    <form name="theForm" method="post" id="user_form" action="{{url('/admin/users/store')}}">
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
                                <div class="label"><span class="require-field">*</span>Email地址：</div>
                                <div class="label_value">
                                    <input type="text" name="email" class="text" id="email" value="" autocomplete="off">
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
@endsection