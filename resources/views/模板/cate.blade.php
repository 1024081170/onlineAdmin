@extends('admin/public')
@section('title','分类管理')
@section('link')
    <link rel="stylesheet" href="{{url('css/jquery.treeview.css')}}">
    <link rel="stylesheet" href="{{url('css/screen.css')}}">
@endsection
@section('content')

<div class="container" >
    {{--导航条--}}

    <div class="content row">
        {{--左侧选择栏--}}
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">分类管理</div>
                <div class="panel-body">
                    <div class="row">
                        <ul id="browser" class="filetree treeview-famfamfam">
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-7">

                            <a href=""><button type="button" class="btn btn-primary">添加</button></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--底部--}}
</div>

@endsection

@section('my-js')
    <script src="{{url('js/jquery.cookie.js')}}"></script>
    <script src="{{url('js/jquery.treeview.js')}}"></script>
    <script>
        $(document).ready(function(){
            $("#browser").treeview({
                toggle: function() {
                    console.log("%s was toggled.", $(this).find(">span").text());
                }
            });

        });
    </script>
    <script>
        $(function () {
            //单删
            $(".del").click(function () {
                var _this = $(this);
                var _val = _this.attr('cateid');
                var _token = $("input[type='hidden']").val();
                $.ajax({
                    type:'post',
                    url:"{{url('del')}}",
                    data:{cateid:_val,_token:_token},
                    success:function (res) {
                        if(res ==1){
                            alert('删除成功',history.go(0));
                        }else{
                            alert('删除失败',history.go(0));
                        }
                    }
                })
            });
            //全选
            $("#checkAll").click(function () {
                $(".checkbox").prop('checked',true);
            });
            //反选
            $("#checkR").click(function () {
                var _check = $(".checkbox");
                _check.each(function (i) {
                    var _checked = _check[i].checked;
                    if(_checked == true){
                        _check[i].checked = false;
                    }else{
                        _check[i].checked = true;
                    }
                });
            });
            //批删
            $("#del").click(function () {
                var _check = $(".checkbox");
                var _val = '';
                var _token = $("input[type='hidden']").val();
                _check.each(function (i) {
                    var _checked = _check[i].checked;
                   if(_checked == true){
                        _val+= $(this).attr('cateid')+',';
                   }
                });

                $.ajax({
                    type:'post',
                    url:"{{url('del')}}",
                    data:{cateid:_val,_token:_token},
                    success:function (res) {
                        if(res ==1){
                            alert('删除成功',history.go(0));
                        }else{
                            alert('删除失败',history.go(0));
                        }
                    }
                })
            })

        })
    </script>
@endsection