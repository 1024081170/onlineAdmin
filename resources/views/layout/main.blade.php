<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/index.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">

</head>
<body>
<div class="container-fluid col-md-6 col-md-offset-2">
    <div class="row">
        <nv class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{url('cate')}}">后台管理系统</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="">内容中心</a></li>
                            <li><a href="">用户中心</a></li>
                            <li><a href="">安全中心</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">设置<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">修改密码</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">退出</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </div>
        </nv>

    </div>
    <div class="row">
        <div class="list-group content col-md-2 col-md-offset-1">

            <a href="{{url('cate')}}" class="list-group-item "> <!--active-->
                <i class="fa fa-bars" aria-hidden="true"></i>分类管理
            </a>
            <a href="" class="list-group-item">
                <i class="fa fa-book" aria-hidden="true"></i>某某管理
            </a>
            <a href="" class="list-group-item">
                <i class="fa fa-book" aria-hidden="true"></i>
                某某管理
            </a>
            <a href="" class="list-group-item">
                <i class="fa fa-picture-o" aria-hidden="true"></i>
                某某管理
            </a>
            <button id="history" class="btn btn-default">返回</button>

        </div>
        <div class="container">
            {{--导航条--}}
            <div class="content row">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="{{url('js/jq.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script>
    $(function () {
        $("#history").click(function () {
            history.go(-1);
        })
    })
</script>