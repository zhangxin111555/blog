<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{url('MeasurementControllers/tj')}}">添加</a>
</hr>
    <table border="1">
    <form action="" method="get">
        <input type="text" name="name" value="{{$query['name']??''}}">
        <button>搜索</button>
    </form>
        <tr>
            <td>id</td>
            <td>新闻标题</td>
            <td>新闻分类</td>
            <td>作者</td>
            <td>时间</td>
            <td>操作</td>
        </tr>
        @foreach ($data as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->fl}}</td>
            <td>{{$v->zz}}</td>
            <td>{{$v->sj}}</td>
            <td>
                <a href="">删除</a>|<a href="">修改</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{$data->->links()}}

</body>
</html>