<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/static/admin/js/jquery.js"></script>
</head>
<body>
    <a href="{{url('Exerciser/tj')}}">添加</a>
</hr>
    <table border="1">
    <form action="" method="get">
        <input type="text" name="name" value="{{$query['name']??''}}">
        <button>搜索</button>
    </form>
        <tr>
            <td>id</td>
            <td>书名</td>
            <td>作者</td>
            <td>价格</td>
            <td>图书封面</td>
            <td>操作</td>
        </tr>
        @foreach ($data as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->zz}}</td>
            <td>{{$v->jg}}</td>
            <td><img src="{{env('UPLOAD_URL')}}{{$v->logo}}" width="35"/></td>
            <td>
                <a href="javascript:void(0)"  onclick="ajaxdel({{$v->id}})" class="bth bth-danger" >删除</a>|<a href="{{url('/Exerciser/edit/' . $v->id)}}">修改</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{$data->appends($query??'')->links()}}

</body>
</html>
<script>
    function ajaxdel(id){
        $.ajaxSetup({{headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}}});
        $.ajax({
            method:"POST",
            url:"/Exerciseyi/destroy/"+id,
            data:'',
            dataType:'json',
        }).done(function(res){
            if(res.code=='00000'){
                alert(res.msg);
                location.reloadd();
            }
        });
    }
</script>