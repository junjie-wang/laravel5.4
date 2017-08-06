@extends('admin.layout.content')

@section('content')
    <div class="warpper">
        <div class="title">
            通知列表        </div>
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
                <!--商品分类列表-->
                <div class="common-head">
                    <div class="fl">
                        <a href="{{url('admin/notices/create')}}" tppabs=""><div class="fbutton"><div class="add" title="添加分类"><span><i class="icon icon-plus"></i>添加通知</span></div></div></a>
                    </div>
                </div>
                <div class="common-content">
                    <div class="list-div">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                            <tr>
                                <th width="5%"><div class="tDiv">ID</div></th>
                                <th width="20%"><div class="tDiv">通知名称</div></th>
                                <th width="20%" class="handle">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notices as $notice)
                                <tr>
                                    <td><div class="tDiv">{{$notice->id}}</div></td>
                                    <td><div class="tDiv">{{$notice->title}}</div></td>
                                    <td class="handle">
                                        <div class="tDiv a2">
                                            <a href="/admin/teachers/{{$notice->id}}/update" class="btn_edit"><i class="icon icon-edit"></i>编辑</a>
                                            <a href="javascript:if(confirm('确实要删除吗?'))location='/admin/teachers/{{$notice->id}}/delete'" class="btn_trash"><i class="icon icon-trash"></i>删除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{$notices->links()}}
                    </div>
                </div>
                <!--商品分类列表end-->
            </div>
        </div>
    </div>
@endsection