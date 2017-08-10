@extends('admin.layout.content')

@section('content')
    <div class="warpper">
        <div class="title">课程列表</div>
        <div class="content">
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4><span id="explanationZoom" title="收起提示"></span></div>
                <ul>
                    <li>该页面展示所有分类下的文章。</li>
                    <li>可通过搜索文章标题进行搜索，侧边栏可进行高级搜索。</li>
                </ul>
            </div>
            <div class="flexilist">
                <!--商品分类列表-->
                <div class="common-head">
                    <div class="fl">
                        <a href="{{url('admin/curriculums/create')}}"><div class="fbutton"><div class="add" title="添加新课程"><span><i class="icon icon-plus"></i>添加新课程</span></div></div></a>
                    </div>
                    {{--<form action="" name="searchForm" method="post">--}}
                        {{csrf_field()}}
                        <div class="search">
                            <div class="select_w120 imitate_select">
                                <select name="category" id="category_id" style="width: 122px;height: 30px;border:1px solid #fff">
                                    <option value="0">全部分类</option>
                                    @foreach($items as $item)
                                    <option value="{{$item->id}}">{{$item->pre.$item->catName}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="select_w120 imitate_select">
                                <select name="status" id="curriculum_status" style="width: 122px;height: 30px;border:1px solid #fff">
                                    <option value="">课程状态</option>
                                    <option value="0">已发布</option>
                                    <option value="-1">已删除</option>
                                </select>
                            </div>

                            <div class="input">
                                <input type="text" name="keyword" class="text nofocus" placeholder="课程名称" autocomplete="off" id="curriculum_name"><input type="submit" value="" class="not_btn" onclick="searchInfo()">
                            </div>
                        </div>
                    {{--</form>--}}
                </div>
                <div class="common-content">
                    <form method="POST" action="article.php?act=batch_remove" name="listForm">
                        <div class="list-div" id="listDiv">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <thead id="removeInfo">
                                <tr>
                                    <th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list"><label for="all_list" class="checkbox_stars"></label></div></th>
                                    <th width="5%"><div class="tDiv">编号</div></th>
                                    <th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('title');">课程名称</a></div></th>
                                    <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('cat_id');">课程分类</a></div></th>
                                    <th width="8%"><div class="tDiv"><a href="javascript:listTable.sort('article_type');">课程价格</a></div></th>
                                    <th width="8%"><div class="tDiv"><a href="javascript:listTable.sort('article_type');">连载状态</a></div></th>
                                    <th width="8%"><div class="tDiv"><a href="javascript:listTable.sort('is_open');">学员数</a></div></th>
                                    <th width="8%"><div class="tDiv"><a href="javascript:listTable.sort('is_open');">状态</a></div></th>
                                    <th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('add_time');">创建时间</a></div></th>
                                    <th width="20%" class="handle">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($curriculums as $curriculum)
                                <tr class="">
                                    <td class="sign"><div class="tDiv"><input type="checkbox" name="checkboxes[]" value="64" class="checkbox" id="checkbox_64"><label for="checkbox_64" class="checkbox_stars"></label></div></td>
                                    <td><div class="tDiv">{{$curriculum->id}}</div></td>
                                    <td><div class="tDiv">{{$curriculum->name}}</div></td>
                                    <td><div class="tDiv">{{$curriculum->category_id}}</div></td>
                                    <td><div class="tDiv">{{$curriculum->price}}</div></td>
                                    <td><div class="tDiv">
                                            @if($curriculum->serialise == 0)
                                                非连载课程
                                            @elseif($curriculum->serialise == 1)
                                                更新中
                                            @else
                                                已完结
                                            @endif
                                        </div></td>
                                    <td><div class="tDiv">2</div></td>
                                    <td><div class="tDiv">
                                            @if($curriculum->status == 0)
                                                已发布
                                            @elseif($curriculum->status == -1)
                                                已删除
                                            @else
                                            @endif
                                        </div></td>
                                    <td><div class="tDiv">{{$curriculum->created_at}}</div></td>
                                    <td class="handle">
                                        <div class="tDiv a3">
                                            {{--查看功能暂留，到时候跳转前台--}}
                                            <a href="javascript:void()" target="_blank" title="查看" class="btn_see"><i class="sc_icon sc_icon_see"></i>查看</a>
                                            <a href="curriculums/{{$curriculum->id}}/edit" title="编辑" class="btn_edit"><i class="icon icon-edit"></i>编辑</a>
                                            <!--  --><a href="javascript:;" onclick="listTable.remove(64, '您确认要删除这篇文章吗？')" title="移除" class="btn_trash"><i class="icon icon-trash"></i>移除</a><!---->
                                        </div>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="12">
                                        <div class="tDiv">
                                            <div class="tfoot_btninfo">
                                                <input type="hidden" name="act" value="batch">
                                                <div class="item">
                                                    <div class="label_value">
                                                        <div id="type_select" class="imitate_select select_w120">
                                                            <div class="cite">请选择...</div>
                                                            <ul>
                                                                <li><a href="javascript:;" data-value="" class="ftx-01">请选择...</a></li>
                                                                <li><a href="javascript:;" data-value="button_remove" class="ftx-01">批量删除</a></li>
                                                                <li><a href="javascript:;" data-value="button_hide" class="ftx-01">批量隐藏</a></li>
                                                                <li><a href="javascript:;" data-value="button_show" class="ftx-01">批量显示</a></li>
                                                                <li><a href="javascript:;" data-value="move_to" class="ftx-01">转移到分类</a></li>
                                                            </ul>
                                                            <input name="type" type="hidden" value="" id="type_val">
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="submit" value="确定" id="btnSubmit" name="btnSubmit" ectype="btnSubmit" class="btn btn_disabled" disabled="">
                                            </div>
                                            <div class="list-page">
                                                <div id="turn-page">

                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </form>
                </div>
                <!--商品分类列表end-->
            </div>
        </div>
    </div>
    <script>
        function searchInfo() {
            var search_category = $('#category_id').val();
            var search_status = $('#curriculum_status').val();
            var search_name = $('#curriculum_name').val();
            $.ajax({
                type: 'POST',
                url: '/admin/curriculums',
                data: { 'category_id':search_category, 'status':search_status, 'name':search_name, "_token":"{{csrf_token()}}"},
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                success: function(data){
                    var str = '';
                    $("#removeInfo").nextAll().remove();
                    console.log(data.data);
                    $.each(data.data, function (i,e) {
                        str += "<tr class=''><td class='sign'><div class='tDiv'><input type='checkbox' name='checkboxes[]' value='64' class='checkbox' id='checkbox_64'><label for='checkbox_64' class='checkbox_stars'></label></div></td>";
                        str += "<td><div class='tDiv'>"+e.id+"</div></td>";
                        str += "<td><div class='tDiv'>"+e.name+"</div></td>";
                        str += "<td><div class='tDiv'>"+e.category_id+"</div></td>";
                        str += "<td><div class='tDiv'>"+e.price+"</div></td>";
                        str += "<td><div class='tDiv'>"
                        if("+e.serialise+" == 0){
                            str += "非连载课程"
                        }else if("+e.serialise+" == 1){
                            str += "更新中"
                        }else{
                            str += "已完结"
                        }
                        str += "</div></td> <td><div class='tDiv'>2</div></td> <td><div class='tDiv'>"
                        if(e.status == 0){
                            str += "已发布"
                        }else if(e.status == '-1'){
                            str += "已删除"
                        }
                        str += "</div></td>";
                        str += "<td><div class='tDiv'>"+e.created_at+"</div></td>";
                        str += "<td class='handle'> <div class='tDiv a3'>{{--查看功能暂留，到时候跳转前台--}}<a href='javascript:void()' target='_blank' title='查看' class='btn_see'><i class='sc_icon sc_icon_see'></i>查看</a> <a href='curriculums/"+e.id+"/edit' title='编辑' class='btn_edit'><i class='icon icon-edit'></i>编辑</a><a href='javascript:;' onclick='listTable.remove(64, '您确认要删除这篇文章吗？')' title='移除' class='btn_trash'><i class='icon icon-trash'></i>移除</a> </div> </td></tr>";
                    });
                    $("#removeInfo").after(str);
                },
            error: function(xhr, type){
                alert('Ajax error!')
                }
            });
        }
    </script>
@endsection