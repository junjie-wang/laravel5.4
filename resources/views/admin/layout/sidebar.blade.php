<div class="admin-main-left">
    <div class="admincj_nav">
        <div class="navLeftTab" id="adminNavTabs_index">
            <div class="item current" data-type="home">
                <div class="tit"><a href="{{url('') }}" target="workspace"><i class="nav_icon i_home"></i><h4>首页</h4></a></div>
            </div>
        </div>
        <div class="navLeftTab" id="adminNavTabs_menuplatform" style="display:none;">
            @can('system_setting')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_01_system"></i><h4>站点设置</h4></a></div>
                <div class="sub-menu">
                    <ul>
                        <li class="curr"><s></s><a href="javascript:void(0);" data-url="shop_config.php?act=list_edit" data-param="menuplatform|01_shop_config" target="workspace">商店设置</a></li>

                    </ul>
                </div>
            </div>
            @endcan
            @can('users_setting')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_05_banner"></i><h4>用户设置</h4></a></div>
                <div class="sub-menu">
                    <ul>
                        <li ><s></s><a href="{{url('/admin/users')}}" data-param="menuplatform|ad_position" target="workspace">管理员列表</a></li>
                    </ul>
                </div>
            </div>
            @endcan
            @can('roles_setting')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_07_content"></i><h4>角色设置</h4></a></div>
                <div class="sub-menu">
                    <ul>
                        <li class="curr"><a href="/admin/permissions"data-param="menuplatform|02_articlecat_list" target="workspace">权限管理</a></li>
                        <li ><s></s><a href="/admin/users" data-param="menuplatform|03_article_list" target="workspace">管理员列表</a></li>
                        <li ><s></s><a href="/admin/roles"data-param="menuplatform|04_article_list" target="workspace">角色管理</a></li>
                    </ul>
                </div>
            </div>
            @endcan
            @can('classes_setting')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_08_members"></i><h4>课程设置</h4></a></div>
                <div class="sub-menu">
                    <ul>
                        <li class="curr"><s></s><a href="javascript:void(0);" data-param="menuplatform|03_users_list" target="workspace">课程设置</a></li>
                    </ul>
                </div>
            </div>
            @endcan
        </div>
        <div class="navLeftTab" id="adminNavTabs_menushopping" style="display:none;">
            @can('curriculum_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_02_cat_and_goods"></i><h4>课程管理</h4></a></div>
                <div class="sub-menu">
                    <ul>
                        <li class="curr"><s></s><a href="admin/curriculums" data-url="admin/curriculums" data-param="menushopping|01_goods_list" target="workspace">课程管理</a></li>
                        <li ><s></s><a href="admin/recommend" data-url="category.php?act=list" data-param="menushopping|03_category_manage" target="workspace">课程推荐</a></li>
                        <li ><s></s><a href="javascript:void(0);" data-url="comment_manage.php?act=list" data-param="menushopping|05_comment_manage" target="workspace">课程统计</a></li>
                    </ul>
                </div>
            </div>
            @endcan
            @can('open_class_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_02_goods_storage"></i><h4>公开课管理</h4></a></div>
                <div class="sub-menu">
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="goods_inventory_logs.php?act=list&step=put" data-param="menushopping|01_goods_storage_put" target="workspace">库存入库</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="goods_inventory_logs.php?act=list&step=out" data-param="menushopping|02_goods_storage_out" target="workspace">库存出库</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
            @endcan
            @can('live_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_03_promotion"></i><h4>直播管理</h4></a></div>
                <div class="sub-menu">
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="snatch.php?act=list" data-param="menushopping|02_snatch_list" target="workspace">夺宝奇兵</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
            @endcan
            @can('class_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_04_order"></i><h4>班级管理</h4></a></div>
                <div class="sub-menu">
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="order_list.php" data-param="menushopping|02_order_list" target="workspace">订单列表</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
            @endcan
            @can('theme_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_09_crowdfunding"></i><h4>话题管理</h4></a></div>
                <div class="sub-menu">
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="zc_project.php?act=list" data-param="menushopping|01_crowdfunding_list" target="workspace">众筹项目列表</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
            @endcan
            {{--@can('tuijian_manager')--}}
            {{--<div class="item">--}}
                {{--<div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_15_rec"></i><h4>推荐管理</h4></a></div>--}}
                {{--<div class="sub-menu">--}}
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="affiliate.php?act=list" data-param="menushopping|affiliate" target="workspace">推荐设置</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="affiliate_ck.php?act=list" data-param="menushopping|affiliate_ck" target="workspace">分成管理</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--@endcan--}}
            @can('qanda_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_17_merchants"></i><h4>问答管理</h4></a></div>
                <div class="sub-menu">
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="merchants_steps.php?act=step_up" data-param="menushopping|01_seller_stepup" target="workspace">店铺设置</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
            @endcan
            @can('note_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_17_merchants"></i><h4>笔记管理</h4></a></div>
                <div class="sub-menu">

                </div>
            </div>
            @endcan
            @can('evaluate_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_17_merchants"></i><h4>评价管理</h4></a></div>
                <div class="sub-menu">

                </div>
            </div>
            @endcan
            @can('classify_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_17_merchants"></i><h4>分类管理</h4></a></div>
                <div class="sub-menu">
                    <ul>
                    <li class="curr"><s></s><a href="/admin/categories"data-param="menushopping|affiliate" target="workspace">课程分类</a></li>
                    <li ><s></s><a href="javascript:void(0);" data-url="affiliate_ck.php?act=list" data-param="menushopping|affiliate_ck" target="workspace">班级分类</a></li>
                    </ul>
                </div>
            </div>
            @endcan
            @can('questions_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_17_merchants"></i><h4>题库管理</h4></a></div>
                <div class="sub-menu">

                </div>
            </div>
            @endcan
            @can('paper_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_17_merchants"></i><h4>试卷管理</h4></a></div>
                <div class="sub-menu">

                </div>
            </div>
            @endcan
            @can('label_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_17_merchants"></i><h4>标签管理</h4></a></div>
                <div class="sub-menu">

                </div>
            </div>
            @endcan
        </div>
        <div class="navLeftTab" id="adminNavTabs_finance" style="display:none;">
            @can('consult_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_06_stats"></i><h4>咨询管理</h4></a></div>
                <div class="sub-menu">
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="exchange_detail.php?act=detail" data-param="finance|exchange_count" target="workspace">积分明细</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
            @endcan
            @can('website_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_06_stats"></i><h4>网站公告管理</h4></a></div>
                <div class="sub-menu">

                </div>
            </div>
            @endcan
            @can('instation_notice')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_06_stats"></i><h4>全站站内通知</h4></a></div>
                <div class="sub-menu">
                    <ul>
                    <li class="curr"><s></s><a href="admin/notices" data-param="finance|exchange_count" target="workspace">通知列表</a></li>
                    </ul>
                </div>
            </div>
            @endcan
            @can('editarea_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_06_stats"></i><h4>编辑区管理</h4></a></div>
                <div class="sub-menu">

                </div>
            </div>
            @endcan
            @can('page_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_06_stats"></i><h4>页面管理</h4></a></div>
                <div class="sub-menu">

                </div>
            </div>
            @endcan
        </div>
        <div class="navLeftTab" id="adminNavTabs_ectouch" style="display:none;">
            @can('curriculum_order')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_20_ectouch"></i><h4>课程订单</h4></a></div>
                <div class="sub-menu">
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=oauth/admin" data-param="ectouch|01_oauth_admin" target="workspace">授权登录</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
            @endcan
            @can('classes_order')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_22_wechat"></i><h4>班级订单</h4></a></div>
                <div class="sub-menu">
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=wechat/admin/modify" data-param="ectouch|01_wechat_admin" target="workspace">公众号设置</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
            @endcan
            @can('books_order')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_23_drp"></i><h4>图书订单</h4></a></div>
                <div class="sub-menu">
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=drp/admin/config" data-param="ectouch|01_drp_config" target="workspace">店铺设置</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
            @endcan
        </div>
        <div class="navLeftTab" id="adminNavTabs_menuinformation" style="display:none;">
            @can('user_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_21_cloud"></i><h4>用户管理</h4></a></div>
                <div class="sub-menu">
                    <ul>
                        <li class="curr"><s></s><a href="javascript:void(0);" data-param="teacher|01_cloud_services" target="workspace">用户别表</a></li>
                    </ul>
                </div>
            </div>
            @endcan
            @can('teacher_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_21_cloud"></i><h4>教师管理</h4></a></div>
                <div class="sub-menu">
                    <ul>
                        <li class="curr"><s></s><a href="/admin/teachers" data-param="menuinformation|01_cloud_services" target="workspace">教师别表</a></li>
                    </ul>
                </div>
            </div>
            @endcan
            @can('letter_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_21_cloud"></i><h4>私信管理</h4></a></div>
                <div class="sub-menu">

                </div>
            </div>
            @endcan
        </div>
    </div>
</div>