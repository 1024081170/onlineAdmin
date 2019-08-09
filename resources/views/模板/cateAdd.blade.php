@extends('admin/public')
@section('title','分类添加')
@section('link')

@endsection
@section('content')

<div class="container">
    {{--导航条--}}

    <div class="content row">

        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">添加分类页面</div>
                <div class="panel-body">
                    <div class="row">
                        <form action="{{url('cateAdd')}}" method="post" class="article-table table table-hover">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-2 control-label">分类名称</label>
                                <div class="col-sm-10">
                                    <input type="text" name="catename" class="form-control" placeholder="分类名称">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">分类等级</label>
                                <div class="col-sm-10">
                                    <select id="cate" name="cate" class="form-control" >
                                        <option value="1" selected>一级分类</option>
                                        <option value="2">二级分类</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="_parent" style="display: none;">
                                <label class="col-sm-2 control-label">父分类</label>
                                <div class="col-sm-10">
                                    <select name="pid" class="form-control" >
                                        @foreach($cateInfo as $k=>$v)
                                            <option value="{{$v['cateid']}}">{{$v['catename']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">是否展示</label>
                                <div class="col-sm-10">
                                    <input type="radio" name="status" class="" value="1" checked>是
                                    <input type="radio" name="status" class="" value="2">否
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><input class="btn btn-primary" type="submit" value="点击添加"></label>
                                <div class="col-sm-10"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--底部--}}
    
</div>


@endsection
@section('my-js')
    <script>

        $(function () {
            $("#cate").change(function () {
                var _val = $("#cate").val();
                if(_val == 2){
                    $("#_parent").show();
                }else{
                    $("#_parent").hide();
                }
            });

        })
    </script>
@endsection
