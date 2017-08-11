@extends('admin.layout.content')

@section('content')
<div class="warpper">
    <div class="title">权限 - 角色列表</div>
    <div class="content">
        <div class="explanation" id="explanation">
            <div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4><span id="explanationZoom" title="收起提示"></span></div>
            <ul>
                <li>该页面展示了所有角色信息列表。</li>
                <li>角色为管理员下级的管理角色统称。</li>
                <li>角可以输入用户名名称关键字进行搜索，侧边栏可进行高级搜索。</li>
            </ul>
        </div>
        <div class="flexilist">
            <!--商品分类列表-->
            <div class="common-head">
                <div class="fl">
                    <a href="{{url('/admin/roles/create')}}"><div class="fbutton"><div class="add" title="添加角色"><span><i class="icon icon-plus"></i>添加角色</span></div></div></a>
                </div>
            </div>
            <div class="common-content">
                <div class="list-div" id="listDiv">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr>
                            <th width="30%"><div class="tDiv">ID</div></th>
                            <th width="30%"><div class="tDiv">角色名</div></th>
                            <th width="40%"><div class="tDiv">角色描述</div></th>
                            <th width="30%" class="handle">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr class="">
                                <td><div class="tDiv">{{$role->id}}</div></td>
                                <td><div class="tDiv">{{$role->name}}</div></td>
                                <td><div class="tDiv">{{$role->description}}</div></td>
                                <td class="handle">
                                    <div class="tDiv a3">
                                        <a href="{{url('/admin/roles/'.$role->id.'/permission')}}" class="btn_see"><i class="sc_icon sc_icon_see"></i>权限管理</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$roles->links()}}
            </div>
            <!--商品分类列表end-->
        </div>
    </div>
</div>
@endsection