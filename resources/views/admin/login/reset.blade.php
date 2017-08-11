@extends('admin.layout.content')

@section('content')
    <div class="warpper">
        <div class="title"><a href="privilege.php?act=list" class="s-back">返回</a>修改密码</div>
        <div class="content">
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4><span id="explanationZoom" title="收起提示"></span></div>
                <ul>
                    <li>可从管理平台手动添加一名新管理员，并填写相关信息。</li>
                    <li>标识“<em>*</em>”的选项为必填项，其余为选填项。</li>
                    <li>新增管理员后可从管理员列表中找到该条数据，并再次进行编辑操作。</li>
                </ul>
            </div>
            <div class="flexilist">

                <div class="common-content">
                    <div class="mian-info">
                        <form method="POST" action="{{url('/admin/reset')}}" name="theFrom" id="role_form">
                            {{csrf_field()}}
                            <div class="switch_info">
                                <div class="item">
                                    <div class="label"><span class="require-field">*</span>用户名：</div>
                                    <div class="label_value">
                                        <input type="text" id="user_name" name="user_name" class="text" disabled="disabled" value="{{$userInfo->name}}" autocomplete="off">
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><span class="require-field">*</span>Email地址：</div>
                                    <div class="label_value">
                                        <input type="text" name="email" class="text" disabled="disabled"  id="email" value="{{$userInfo->email}}" autocomplete="off">
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="label"><span class="require-field">*</span>旧密码：</div>
                                    <div class="label_value">
                                        <input type="password" style="display:none"><input type="password" name="old_password" class="text" id="old_password">
                                        <div class="form_prompt"></div>
                                        <div class="notic m20">如果要修改密码,请先填写旧密码,如留空,密码保持不变</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><span class="require-field">*</span>新密码：</div>
                                    <div class="label_value">
                                        <input type="password" style="display:none"><input type="password" name="password" class="text" id="new_password">
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
                                <div class="steplast">
                                    <div class="info_btn">
                                        <input type="submit" name="submit" value=" 确定 " class="button" id="submitBtn">
                                        <input type="hidden" name="id" value="">
                                        <input type="hidden" name="act" value="insert">
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