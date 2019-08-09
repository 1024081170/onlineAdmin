@extends('admin/public')
@section('title','分类详情')
@section('link')

@endsection
@section('content')

<div class="container">
    {{--导航条--}}

    <div class="content row">

        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">分类详情页面</div>
                <div class="panel-body">
                    <div class="row">
                        <table class="table table-hover">

                            <tr>
                                <td>分类名称</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>该分类下的课程数量</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>创建时间</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>更新时间</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>状态</td>
                                <td></td>
                            </tr>

                            {{--@foreach($data as $v)--}}
                            {{--<tr>--}}
                                {{--<td>分类名称</td>--}}
                                {{--<td>{{$v['catename']}}</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>该分类下的课程数量</td>--}}
                                {{--<td>{{$v['courses']}}</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>创建时间</td>--}}
                                {{--<td>{{$v['ctime']}}</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>更新时间</td>--}}
                                {{--<td>{{$v['utime']}}</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>状态</td>--}}
                                {{--<td>{{$v['status']}}</td>--}}
                            {{--</tr>--}}
                                {{--@endforeach--}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--底部--}}
    
</div>


@endsection
@section('my-js')

@endsection
