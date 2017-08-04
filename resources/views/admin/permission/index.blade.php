@extends('admin.layout.content')

@section('content')
    <div class="warpper">
        <div class="title">权限 - 权限列表 </div>
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
                <div class="common-head">
                    <div class="fl">
                        <a href="/admin/permissions/create"><div class="fbutton"><div class="add" title="添加角色"><span><i class="icon icon-plus"></i>添加权限</span></div></div></a>
                    </div>
                </div>
                <div class="common-content">
                    <div class="mian-info">
                        <form method="POST" action="privilege.php" name="theFrom" id="privilege_frm">
                            <div class="switch_info business_info" style="background:none;">
                                @foreach($trees as $item)
                                    <div class="step">
                                        <div class="tit">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                    <input type="checkbox" name="chkGroup" value="{{$item['name']}}" class="ui-checkbox" id="{{$item['name']}}">
                                                    <label for="{{$item['name']}}" class="ui-label blod">{{$item['description']}}({{$item['name']}})</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="qx_items">
                                            <div class="qx_item">
                                                <div class="checkbox_items">
                                                    @if(isset($item['son']))
                                                        @foreach($item['son'] as $val)
                                                            <div class="checkbox_item">
                                                                <input type="checkbox" value="{{$val['name']}}" name="action_code[]" class="ui-checkbox" id="{{$val['name']}}" date="cms_manage" title="">
                                                                <label for="{{$val['name']}}" class="ui-label">{{$val['description']}}({{$val['name']}})</label>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{--<div class="steplast">--}}
                                    {{--<div class="checkbox_items">--}}
                                        {{--<div class="checkbox_item">--}}
                                            {{--<input type="checkbox" name="checkall" value="checkbox" class="ui-checkbox" id="checkall">--}}
                                            {{--<label for="checkall" class="ui-label">全选</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="info_btn">--}}
                                        {{--<input type="submit" value=" 保存 " class="button">--}}
                                        {{--<input type="hidden" name="id" value="58">--}}
                                        {{--<input type="hidden" name="token" value="c49edab224d09de5d24e1bcdf9a18508322868ca44f62506af25f77b45af4e5b">--}}
                                        {{--<input type="hidden" name="act" value="update_allot">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
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

        $("input[name='chkGroup']").click(function(){
            var checkbox = $(this).parents(".tit").next(".qx_items").find('input:checkbox[type="checkbox"]');
            if($(this).prop("checked") == true){
                checkbox.prop("checked",true);
            }else{
                checkbox.prop("checked",false);
            }
        });

        $("input[name='action_code[]']").click(function(){
            var qx_items = $(this).parents(".qx_items");
            var length = qx_items.find("input[name='action_code[]']").length;
            var length2 =  qx_items.find("input[name='action_code[]']:checked").length;
            if(length == length2){
                qx_items.prev().find("input[name='chkGroup']").prop("checked",true);
            }else{
                qx_items.prev().find("input[name='chkGroup']").prop("checked",false);
            }
        });

        $(".qx_items").each(function(index, element) {
            var length = $(this).find("input[name='action_code[]']").length;
            var length2 = $(this).find("input[name='action_code[]']:checked").length;

            if(length == length2){
                $(this).prev().find("input[name='chkGroup']").prop("checked",true);
            }else{
                $(this).prev().find("input[name='chkGroup']").prop("checked",false);
            }
        });
    </script>
@endsection