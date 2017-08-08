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
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="integrate.php?act=list" data-param="menuplatform|06_list_integrate" target="workspace">会员整合</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="user_msg.php?act=list_all" data-param="menuplatform|08_unreply_msg" target="workspace">会员留言</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="user_account.php?act=list" data-param="menuplatform|09_user_account" target="workspace">充值和提现申请</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="user_account_manage.php?act=list" data-param="menuplatform|10_user_account_manage" target="workspace">资金管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="user_address_log.php?act=list" data-param="menuplatform|12_user_address_list" target="workspace">收货地址列表</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="user_baitiao_log.php?act=list" data-param="menuplatform|13_user_baitiao_info" target="workspace">会员白条</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="user_vat.php?act=list" data-param="menuplatform|15_user_vat_info" target="workspace">会员增票资质</a></li>--}}
                    </ul>
                </div>
            </div>
            @endcan
            {{--<div class="item">--}}
                {{--<div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_10_priv_admin"></i><h4>权限管理</h4></a></div>--}}
                {{--<div class="sub-menu">--}}
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="privilege.php?act=list" data-param="menuplatform|01_admin_list" target="workspace">管理员列表</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="privilege_seller.php?act=list" data-param="menuplatform|02_admin_seller" target="workspace">下级管理员列表</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="admin_logs.php?act=list" data-param="menuplatform|admin_logs" target="workspace">管理员日志</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="message.php?act=list" data-param="menuplatform|admin_message" target="workspace">管理员留言</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="role.php?act=list" data-param="menuplatform|admin_role" target="workspace">角色管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="agency.php?act=list" data-param="menuplatform|agency_list" target="workspace">办事处列表</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="services.php?act=list" data-param="menuplatform|services_list" target="workspace">客服管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="suppliers.php?act=list" data-param="menuplatform|suppliers_list" target="workspace">供货商列表</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item">--}}
                {{--<div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_12_template"></i><h4>模板管理</h4></a></div>--}}
                {{--<div class="sub-menu">--}}
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="visualhome.php?act=list" data-param="menuplatform|01_visualhome" target="workspace">首页可视化</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="template.php?act=list" data-param="menuplatform|02_template_select" target="workspace">模板选择</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="template.php?act=library" data-param="menuplatform|04_template_library" target="workspace">库项目管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="edit_languages.php?act=list" data-param="menuplatform|05_edit_languages" target="workspace">语言项编辑</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="template.php?act=backup_setting" data-param="menuplatform|06_template_backup" target="workspace">模板设置备份</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="mail_template.php?act=list" data-param="menuplatform|mail_template_manage" target="workspace">邮件模板</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item">--}}
                {{--<div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_13_backup"></i><h4>数据库管理</h4></a></div>--}}
                {{--<div class="sub-menu">--}}
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="database.php?act=backup" data-param="menuplatform|02_db_manage" target="workspace">数据备份</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="database.php?act=optimize" data-param="menuplatform|03_db_optimize" target="workspace">数据表优化</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="sql.php?act=main" data-param="menuplatform|04_sql_query" target="workspace">SQL查询</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="table_prefix.php?act=edit" data-param="menuplatform|05_table_prefix" target="workspace">修改表前缀</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="transfer_manage.php" data-param="menuplatform|06_transfer_config" target="workspace">源站点信息设置</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="transfer_manage.php?act=choose" data-param="menuplatform|07_transfer_choose" target="workspace">迁移数据</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?m=admin" data-param="menuplatform|08_db_fields" target="workspace">更新字段</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="index.php?act=clear_cache" data-param="menuplatform|09_clear_cache" target="workspace">清除缓存</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="convert.php?act=main" data-param="menuplatform|convert" target="workspace">转换数据</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item">--}}
                {{--<div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_16_email_manage"></i><h4>邮件群发管理</h4></a></div>--}}
                {{--<div class="sub-menu">--}}
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="attention_list.php?act=list" data-param="menuplatform|attention_list" target="workspace">关注管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="email_list.php?act=list" data-param="menuplatform|email_list" target="workspace">邮件订阅管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="magazine_list.php?act=list" data-param="menuplatform|magazine_list" target="workspace">杂志管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="view_sendlist.php?act=list" data-param="menuplatform|view_sendlist" target="workspace">邮件队列管理</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item">--}}
                {{--<div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_19_self_support"></i><h4>自营</h4></a></div>--}}
                {{--<div class="sub-menu">--}}
                    {{--<ul>--}}
                        {{--<li class="curr"><s></s><a href="javascript:void(0);" data-url="offline_store.php?act=list" data-param="menuplatform|01_self_offline_store" target="workspace">自营门店</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="offline_store.php?act=order_stats" data-param="menuplatform|02_self_order_stats" target="workspace">门店订单统计</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="index.php?act=merchants_first" data-param="menuplatform|03_self_support_info" target="workspace">自营设置</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="navLeftTab" id="adminNavTabs_menushopping" style="display:none;">
            @can('curriculum_manager')
            <div class="item">
                <div class="tit"><a href="javascript:void(0)"><i class="nav_icon icon_02_cat_and_goods"></i><h4>课程管理</h4></a></div>
                <div class="sub-menu">
                    <ul>
                        <li class="curr"><s></s><a href="admin/curriculums" data-url="admin/curriculums" data-param="menushopping|01_goods_list" target="workspace">课程列表</a></li>
                        <li ><s></s><a href="javascript:void(0);" data-url="category.php?act=list" data-param="menushopping|03_category_manage" target="workspace">课程分类</a></li>
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="comment_manage.php?act=list" data-param="menushopping|05_comment_manage" target="workspace">用户评论</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="brand.php?act=list" data-param="menushopping|06_goods_brand" target="workspace">品牌管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="goods_type.php?act=manage" data-param="menushopping|08_goods_type" target="workspace">商品类型</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="goods_batch.php?act=select" data-param="menushopping|15_batch_edit" target="workspace">商品批量修改</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="discuss_circle.php?act=list" data-param="menushopping|discuss_circle" target="workspace">网友讨论圈</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="gallery_album.php?act=list" data-param="menushopping|gallery_album" target="workspace">图片库管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="goods_report.php?act=list" data-param="menushopping|goods_report" target="workspace">举报管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="sale_notice.php?act=list" data-param="menushopping|sale_notice" target="workspace">商品降价通知</a></li>--}}
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
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="seckill.php?act=list" data-param="menushopping|03_seckill_list" target="workspace">秒杀活动</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="bonus.php?act=list" data-param="menushopping|04_bonustype_list" target="workspace">红包类型</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="group_buy.php?act=list" data-param="menushopping|08_group_buy" target="workspace">团购活动</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="topic.php?act=list" data-param="menushopping|09_topic" target="workspace">专题管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="auction.php?act=list" data-param="menushopping|10_auction" target="workspace">拍卖活动</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="favourable.php?act=list" data-param="menushopping|12_favourable" target="workspace">优惠活动</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="wholesale.php?act=list" data-param="menushopping|13_wholesale" target="workspace">批发管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="package.php?act=list" data-param="menushopping|14_package_list" target="workspace">超值礼包</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="exchange_goods.php?act=list" data-param="menushopping|15_exchange_goods" target="workspace">积分商城商品</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="presale.php?act=list" data-param="menushopping|16_presale" target="workspace">预售活动</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="coupons.php?act=list" data-param="menushopping|17_coupons" target="workspace">优惠券</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=team/admin/index" data-param="menushopping|18_team" target="workspace">拼团活动</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="value_card.php?act=list" data-param="menushopping|18_value_card" target="workspace">储值卡</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="gift_gard.php?act=list" data-param="menushopping|gift_gard_list" target="workspace">礼品卡列表</a></li>--}}
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
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="order.php?act=templates" data-param="menushopping|05_edit_order_print" target="workspace">订单打印</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="goods_booking.php?act=list_all" data-param="menushopping|06_undispose_booking" target="workspace">缺货登记</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="order.php?act=add" data-param="menushopping|08_add_order" target="workspace">添加订单</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="order.php?act=delivery_list" data-param="menushopping|09_delivery_order" target="workspace">发货单列表</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="order.php?act=back_list" data-param="menushopping|10_back_order" target="workspace">退货单列表</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="mc_order.php" data-param="menushopping|11_add_order" target="workspace">批量添加订单</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="order.php?act=back_cause_list" data-param="menushopping|11_back_cause" target="workspace">退货原因列表</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="order.php?act=order_detection" data-param="menushopping|11_order_detection" target="workspace">检测已发货订单</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="order.php?act=return_list" data-param="menushopping|12_back_apply" target="workspace">退换货申请列表</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="complaint.php?act=list" data-param="menushopping|13_complaint" target="workspace">投诉管理</a></li>--}}
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
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="zc_category.php?act=list" data-param="menushopping|02_crowdfunding_cat" target="workspace">众筹分类</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="zc_initiator.php?act=list" data-param="menushopping|03_project_initiator" target="workspace">发起人管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="zc_topic.php?act=list" data-param="menushopping|04_topic_list" target="workspace">话题管理</a></li>--}}
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
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="merchants_users_list.php?act=list" data-param="menushopping|02_merchants_users_list" target="workspace">店铺列表</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="merchants_commission.php?act=list" data-param="menushopping|03_merchants_commission" target="workspace">店铺佣金</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="seller_domain.php?act=list" data-param="menushopping|09_seller_domain" target="workspace">店铺域名</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="merchants_account.php?act=list&act_type=merchants_seller_account" data-param="menushopping|12_seller_account" target="workspace">店铺账户</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="offline_store.php?act=list&type=1" data-param="menushopping|12_seller_store" target="workspace">店铺门店</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="comment_seller.php?act=list" data-param="menushopping|13_comment_seller_rank" target="workspace">店铺满意度</a></li>--}}
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
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="guest_stats.php?act=list" data-param="finance|report_guest" target="workspace">客户统计</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="order_stats.php?act=list" data-param="finance|report_order" target="workspace">订单统计</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="users_order.php?act=order_num" data-param="finance|report_users" target="workspace">会员排行</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="sale_list.php?act=list" data-param="finance|sale_list" target="workspace">销售明细</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="visit_sold.php?act=list" data-param="finance|visit_buy_per" target="workspace">访问购买率</a></li>--}}
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
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="touch_navigator.php?act=list" data-param="ectouch|02_touch_nav_admin" target="workspace">导航管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="touch_ads.php?act=list" data-param="ectouch|03_touch_ads" target="workspace">广告管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="touch_ad_position.php?act=list" data-param="ectouch|04_touch_ad_position" target="workspace">广告位管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=admin/editor" data-param="ectouch|05_touch_dashboard" target="workspace">可视化装修</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="touch_topic.php?act=list" data-param="ectouch|09_topic" target="workspace">专题管理</a></li>--}}
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
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=wechat/admin/mass_message" data-param="ectouch|02_mass_message" target="workspace">群发消息</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=wechat/admin/reply_subscribe" data-param="ectouch|03_auto_reply" target="workspace">自动回复</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=wechat/admin/menu_list" data-param="ectouch|04_menu" target="workspace">自定义菜单</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=wechat/admin/subscribe_list" data-param="ectouch|05_fans" target="workspace">粉丝管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=wechat/admin/article" data-param="ectouch|06_media" target="workspace">素材管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=wechat/admin/qrcode_list" data-param="ectouch|07_qrcode" target="workspace">二维码管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=wechat/extend" data-param="ectouch|09_extend" target="workspace">功能扩展</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=wechat/admin/template" data-param="ectouch|11_template" target="workspace">消息提醒</a></li>--}}
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
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=drp/admin/shop" data-param="ectouch|02_drp_shop" target="workspace">分销商管理</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=drp/admin/drplist" data-param="ectouch|03_drp_list" target="workspace">分销排行</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=drp/admin/drporderlist" data-param="ectouch|04_drp_order_list" target="workspace">分销订单操作</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="../mobile/index.php?r=drp/admin/drpsetconfig" data-param="ectouch|05_drp_set_config" target="workspace">分销比例设置</a></li>--}}
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
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="index.php?act=platform_recommend" data-param="menuinformation|02_platform_recommend" target="workspace">平台推荐</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="index.php?act=best_recommend" data-param="menuinformation|03_best_recommend" target="workspace">好货推荐</a></li>--}}
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
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="index.php?act=platform_recommend" data-param="menuinformation|02_platform_recommend" target="workspace">平台推荐</a></li>--}}
                        {{--<li ><s></s><a href="javascript:void(0);" data-url="index.php?act=best_recommend" data-param="menuinformation|03_best_recommend" target="workspace">好货推荐</a></li>--}}
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