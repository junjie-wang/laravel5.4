@extends('admin.layout.content');

@section('content')
<div class="warpper">
    <div class="title">通知列表</div>
    <div class="content">
        <div class="flexilist">
            <div class="common-content">
                <form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
                    <div class="list-div" id="listDiv">
                        <div class="flexigrid ht_goods_list">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <thead>
                                <tr>
                                    <th width="5%" class="sky_id"><div class="tDiv">标题</div></th>
                                    <th width="20%"><div class="tDiv"><a href="javascript:listTable.sort('goods_name');">通知内容</a></div></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($notices as $notice)
                                <tr class="">
                                    <td class="sky_id"><div class="tDiv">{{$notice->title}}</div></td>
                                    <td>
                                        <div class="tDiv goods_list_info">
                                            {{$notice->content}}
                                        </div>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <!--商品列表end-->
        </div>
    </div>
</div>
    @endsection