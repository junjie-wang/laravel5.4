@extends('admin.layout.content')

@section('content')
    <div class="warpper">
        <div class="title"><a href="javascript" ectype="goback" class="s-back"></a>角色列表 </div>
        <div class="content">
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4><span id="explanationZoom" title="收起提示"></span></div>
                <ul>
                    <li>该页面展示商城所有功能权限。</li>
                    <li>打钩即是分配权限，请谨慎操作。</li>
                    <li>初始化是基本功能权限。</li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form method="POST" action="{{url('/admin/users/'.$user->id.'/role')}}" name="theFrom" id="privilege_frm">
                            <div class="switch_info business_info" style="background:none;">
                                {{csrf_field()}}
                                <div class="step">

                                    <div class="qx_items">
                                        <div class="qx_item">
                                            @foreach($roles as $role)
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                    <input type="checkbox" name="roles[]"
                                                           @if($myRoles->contains($role))
                                                           checked
                                                            @endif
                                                    value="{{$role->id}}">
                                                    <label>{{$role->description}}</label>
                                                </div>
                                            </div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="steplast">
                                    <div class="info_btn">
                                        <input type="submit" value=" 保存 " class="button">
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