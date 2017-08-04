@include('admin.layout.css')
<body style="background-color: #31b4e1; overflow:hidden;">
<script type="text/javascript" src="js/adminIndex.js" tppabs="http://dsc.com/admin/js/adminIndex.js"></script>

@include('admin.layout.header');

<div class="admin-main start_home">
    <div class="top-border"></div>

    @include('admin.layout.sidebar')

    <div class="admin-main-right">
        @yield('content')
        <iframe src="{{url('')}}" tppabs="http://dsc.com/admin/index.php?act=main" id="workspace" name="workspace" frameborder="0" width="100%" height="95%" scrolling="yes"></iframe>
    </div>
</div>
{{--<script type="text/javascript" src="js/jquery.purebox.js" tppabs="http://dsc.com/admin/js/jquery.purebox.js"></script>--}}

</body>
</html>
