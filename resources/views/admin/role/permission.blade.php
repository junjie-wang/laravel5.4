@extends('admin.layout.content')

@section('content')
    <div class="warpper">
        <div class="title">角色 - 分派权限  </div>
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
                {{--<div class="common-head">--}}
                    {{--<div class="fl">--}}
                        {{--<a href="/admin/permissions/create"><div class="fbutton"><div class="add" title="添加角色"><span><i class="icon icon-plus"></i>添加权限</span></div></div></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="common-content">
                    <div class="mian-info">
                        <form method="POST" action="{{url('/admin/roles/'.$role->id.'/permission')}}" name="theFrom" id="privilege_frm">
                            {{csrf_field()}}
                            <div class="switch_info business_info" style="background:none;">
                                @foreach($trees as $item)
                                    <div class="step">
                                        <div class="tit">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                    <input type="checkbox" tag="chkGroup" name="permissions[]"
                                                           @if(in_array($item['id'], $myPer))
                                                           checked
                                                           @endif
                                                           value="{{$item['id']}}" class="ui-checkbox" id="{{$item['id']}}">
                                                    <label for="{{$item['id']}}" class="ui-label blod">{{$item['description']}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="qx_items">
                                            <div class="qx_item">
                                                <div class="checkbox_items">
                                                    @foreach($item['son'] as $val)
                                                        <div class="checkbox_item">
                                                            <input type="checkbox"
                                                                   @if(in_array($val['id'], $myPer))
                                                                   checked
                                                                   @endif
                                                                   value="{{$val['id']}}" name="permissions[]" class="ui-checkbox" id="{{$val['id']}}" date="cms_manage" title="">
                                                            <label for="{{$val['id']}}" class="ui-label">{{$val['description']}}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="steplast">
                                    <div class="checkbox_items">
                                        <div class="checkbox_item">
                                            <input type="checkbox" name="checkall" value="checkbox" class="ui-checkbox" id="checkall">
                                            <label for="checkall" class="ui-label">全选</label>
                                        </div>
                                    </div>
                                    @include('admin.layout.error')
                                    <div class="info_btn">
                                        <input type="submit" value=" 保存 " class="button">
                                        <input type="hidden" name="id" value="58">
                                        <input type="hidden" name="act" value="update_allot">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script language="javascript">
        $("#checkall").click(function(){
            var checkbox = $(this).parents(".switch_info").find('input:checkbox[type="checkbox"]');
            if($(this).prop("checked") == true){
                checkbox.prop("checked",true);
            }else{
                checkbox.prop("checked",false);
            }
        });

        $("input[tag='chkGroup']").click(function(){
            var checkbox = $(this).parents(".tit").next(".qx_items").find('input:checkbox[type="checkbox"]');
            if($(this).prop("checked") == true){
                checkbox.prop("checked",true);
            }else{
                checkbox.prop("checked",false);
            }
        });

        $("input[name='permissions[]']").click(function(){
            var qx_items = $(this).parents(".qx_items");
            var length = qx_items.find("input[name='permissions[]']").length;
            var length2 =  qx_items.find("input[name='permissions[]']:checked").length;
            if(length == length2){
                qx_items.prev().find("input[tag='chkGroup']").prop("checked",true);
            }else{
//                qx_items.prev().find("input[tag='chkGroup']").prop("checked",false);
            }
        });

        $(".qx_items").each(function(index, element) {
            var length = $(this).find("input[name='permissions[]']").length;
            var length2 = $(this).find("input[name='permissions[]']:checked").length;

            if(length == length2){
                $(this).prev().find("input[tag='chkGroup']").prop("checked",true);
            }else{
                $(this).prev().find("input[tag='chkGroup']").prop("checked",false);
            }
        });
    </script>
@endsection