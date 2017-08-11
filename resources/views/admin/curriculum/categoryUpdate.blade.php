@extends('admin.layout.content')

@section('content')
    <div class="warpper">
        <div class="title"><a href="role.php?act=list" class="s-back"></a>分类 - 添加课程分类</div>
        <div class="content">
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4><span id="explanationZoom" title="收起提示"></span></div>
                <ul>
                    <li>该页面展示商城所有功能权限。</li>
                    <li>打钩即是分配权限，请谨慎操作。</li>
                    <li>标识“<em>*</em>”的选项为必填项，其余为选填项。</li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form method="POST" action="{{url('/admin/categories/'.$parentCat->id.'/update')}}" name="theFrom" id="role_form">
                            {{csrf_field()}}
                            <div class="switch_info business_info" style="background:none;">
                                <div class="step">
                                    <div class="items">
                                        <div class="item">
                                            <div class="label"><span class="require-field">*</span>&nbsp;分类名：</div>
                                            <div class="value">
                                                <input type="text" class="text" name="catName" value="{{$parentCat->catName}}" id="user_name" autocomplete="off">
                                                <input type="hidden" class="text" name="catId" value="{{$parentCat->id}}" id="user_name" autocomplete="off">
                                                <div class="form_prompt"></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="label"><span class="require-field">*</span>&nbsp;英文名：</div>
                                            <div class="value">
                                                <input type="text" class="text" name="enName" value="{{$parentCat->enName}}" id="user_name" autocomplete="off">
                                                <div class="form_prompt"></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="label"><span class="require-field">*</span>&nbsp;上级分类：</div>
                                            <div class="value" id="selectid">
                                                <select name="pid" id="">
                                                    <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;顶级分类</option>
                                                    @foreach($items as $item)
                                                        <option value="{{$item->id}}"
                                                            @if($parentCat->pid == $item->id)
                                                                selected
                                                                @endif
                                                        >{{$item->pre.$item->catName}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
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