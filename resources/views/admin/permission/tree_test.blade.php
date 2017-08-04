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
                                @foreach($items as $item)
                                    <div class="step">
                                        <div class="tit">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                    <input type="checkbox" name="chkGroup" value="" class="ui-checkbox" id="">
                                                    <label for="" class="ui-label blod">{{$item['CateName']}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="qx_items">
                                            <div class="qx_item">
                                                <div class="checkbox_items">
                                                    @if(isset($item['son']))
                                                    @foreach($item['son'] as $val)
                                                        <div class="checkbox_item">
                                                            <input type="checkbox" value="" name="action_code[]" class="ui-checkbox" id="" date="cms_manage" title="">
                                                            <label for="" class="ui-label">
                                                                @if(isset($val['CateName']))
                                                                {{$val['CateName']}}
                                                                    @endif
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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