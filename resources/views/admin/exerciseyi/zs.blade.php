<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{url('Exerciseyi/tj')}}">添加</a>
</hr>
    <table border="1">
    <form action="" method="get">
        <input type="text" name="name" value="{{$query['name']??''}}">
        <button>搜索</button>
    </form>
        <tr>
            <td>id</td>
            <td>文章标题</td>
            <td>分类</td>
            <td>文章重要性</td>
            <td>是否显示</td>
            <td>作者</td>
            <td>上传文件</td>
            <td>操作</td>
        </tr>
        @foreach ($data as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->bm}}</td>
            <td>{{$v->zyx}}</td>
            <td>@if($v->xs==1) √ @else × @endif</td>
            <td>{{$v->gh}}</td>
            
            <td><img src="{{env('UPLOAD_URL')}}{{$v->logo}}" width="35"/></td>
            <td>
                <a href="{{url('/Exerciseyi/destroy/' . $v->id)}}">删除</a>|<a href="{{url('/Exerciseyi/edit/' . $v->id)}}">修改</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{$data->appends($query??'')->links()}}

</body>
</html>