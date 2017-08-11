@extends('admin.layout.content')

@section('content')
    <div class="warpper">
        <div class="title">课程推荐</div>
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
                                    <th width="5%"><div class="tDiv">顺序号</div></th>
                                    <th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('title');">课程名称</a></div></th>
                                    <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('cat_id');">课程分类</a></div></th>
                                    <th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('add_time');">创建时间</a></div></th>
                                    <th width="20%" class="handle">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($curriculums as $curriculum)
                                    <tr class="">
                                        <td><div class="tDiv">{{$curriculum->list_order}}</div></td>
                                        <td><div class="tDiv">{{$curriculum->name}}</div></td>
                                        <td><div class="tDiv">{{$curriculum->category_id}}</div></td>
                                        <td><div class="tDiv">{{$curriculum->created_at}}</div></td>
                                        <td class="handle">
                                            <div class="tDiv a3">
                                                <a href="javascript:void(0);" class="btn_edit" ><i class="icon icon-edit"></i>修改排序</a>
                                                <input type="hidden" class="list_order" value="{{$curriculum->id}}">
                                                <a href="/admin/isRecommend/{{$curriculum->id}}" class="btn_trash"><i class="icon icon-trash"></i>取消推荐</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                <!--商品分类列表end-->
            </div>
        </div>
    </div>
    <style>
        .clear:after{content: '.';height: 0;visibility: hidden;display: block;clear: both;}
        .alert_form{width: 100%; height: 100%; position: fixed; top: 0; left: 0; background: rgba(0,0,0,0.5); z-index: 999;}
        .order{width: 50%; position: fixed; top: 200px; left: 300px; background: white; z-index: 9999; border-radius:20px; padding-bottom: 3%;}
        .button_group{ width: 100%;}
        .button_group input{  font-size: 16px;padding:0 5%;
            border-radius:5px; background: none;
            border:none;
            float: right;}
    </style>
    <div class="alert_form" style="display: none;">
        <div class="order">
<p style="font-size: 24px;margin: 20px;">设置推荐课程</p>
            <hr>
            <div style="">
                <form action="/admin/changeOrder" method="post">
                    {{csrf_field()}}
                    <div style="width: 100%;" class="clear">
                    <div style="width:6%;font-size: 18px; margin: 30px; float: left;">序号</div>
                        <input type="hidden" name="id" value="" id="curriculum_id">
                    <div style="width:62%;font-size: 18px; margin: 30px; float: left;"><input type="text" name="list_order"  style="width: 80%; height: 25px;"></div>
                    </div>
                    <div class="button_group clear">
                        <hr>
                        @include('admin.layout.error')
                        <input type="submit" value="确定"style="background:#428bca;color: #fff; margin-right: 3%">
                        <input type="button" value="取消" class="orderHidden">
                    </div>

                </form>
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
                url: '/admin/recommend',
                data: { 'category_id':search_category, 'status':search_status, 'name':search_name, "_token":"{{csrf_token()}}"},
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                success: function(data){
                    var str = '';
                    $("#removeInfo").nextAll().remove();
                    $.each(data.data, function (i,e) {
                        str += "<tr class=''>";
                        str += "<td><div class='tDiv'>"+e.list_order+"</div></td>";
                        str += "<td><div class='tDiv'>"+e.name+"</div></td>";
                        str += "<td><div class='tDiv'>"+e.category_id+"</div></td>";
                        str += "<td><div class='tDiv'>"+e.created_at+"</div></td>";
                        str += "<td class='handle'> <div class='tDiv a3'><a href='javascript:void(0);' class='btn_edit' ><i class='icon icon-edit'></i>修改排序</a> <input type='hidden' class='list_order' value='"+e.id+"'> <a href='/admin/isRecommend/"+e.id+"' class='btn_trash'><i class='icon icon-trash'></i>取消推荐</a></div> </td></tr>";
                    });
                    $("#removeInfo").after(str);
                    $('.btn_edit').each(function(a) {
                        $(this).click(function () {
                            var id = $(this).next('input').val();
                            $('#curriculum_id').val(id);
                            $('.alert_form').show();
                        });
                    });

                    $('.orderHidden').click(function () {
                        $('.alert_form').hide();
                    });

                    $('.btn_trash').click(function () {
                        return confirm('确定要移除推荐吗？');
                    })

                },
                error: function(xhr, type){
                    alert('Ajax error!')
                }
            });
        }
//        $(function () {

        $('.btn_edit').each(function(a) {
            $(this).click(function () {
                var id = $(this).next('input').val();
                $('#curriculum_id').val(id);
                $('.alert_form').show();
            });
        });

            $('.orderHidden').click(function () {
                $('.alert_form').hide();
            });

            $('.btn_trash').click(function () {
                return confirm('确定要移除推荐吗？');
            })
//        });
    </script>
@endsection