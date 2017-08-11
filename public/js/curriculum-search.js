// 课程搜索功能
$(function() {
    function searchInfo() {
        var search_category = $('#category_id').val();
        var search_status = $('#curriculum_status').val();
        var search_name = $('#curriculum_name').val();
        $.ajax({
            type: 'POST',
            url: '/admin/curriculums',
            data: {
                'category_id': search_category,
                'status': search_status,
                'name': search_name,
                "_token": "{{csrf_token()}}"
            },
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function (data) {
                var str = '';
                $("#removeInfo").nextAll().remove();
                $.each(data.data, function (i, e) {
                    str += "<tr class=''><td class='sign'><div class='tDiv'><input type='checkbox' name='checkboxes[]' value='64' class='checkbox' id='checkbox_64'><label for='checkbox_64' class='checkbox_stars'></label></div></td>";
                    str += "<td><div class='tDiv'>" + e.id + "</div></td>";
                    str += "<td><div class='tDiv'>" + e.name + "</div></td>";
                    str += "<td><div class='tDiv'>" + e.category_id + "</div></td>";
                    str += "<td><div class='tDiv'>" + e.price + "</div></td>";
                    str += "<td><div class='tDiv'>"
                    if ("+e.serialise+" == 0) {
                        str += "非连载课程"
                    } else if ("+e.serialise+" == 1) {
                        str += "更新中"
                    } else {
                        str += "已完结"
                    }
                    str += "</div></td> <td><div class='tDiv'>2</div></td> <td><div class='tDiv'>"
                    if (e.status == 0) {
                        str += "已发布"
                    } else if (e.status == '-1') {
                        str += "已删除"
                    }
                    str += "</div></td>";
                    str += "<td><div class='tDiv'>" + e.created_at + "</div></td>";
                    str += "<td class='handle'> <div class='tDiv a3'>{{--查看功能暂留，到时候跳转前台--}}<a href='javascript:void()' target='_blank' title='查看' class='btn_see'><i class='sc_icon sc_icon_see'></i>查看</a> <a href='curriculums/" + e.id + "/edit' title='编辑' class='btn_edit'><i class='icon icon-edit'></i>编辑</a><a href='javascript:;' onclick='listTable.remove(64, '您确认要删除这篇文章吗？')' title='移除' class='btn_trash'><i class='icon icon-trash'></i>移除</a> </div> </td></tr>";
                });
                $("#removeInfo").after(str);
            },
            error: function (xhr, type) {
                alert('Ajax error!')
            }
        });
    }
})
