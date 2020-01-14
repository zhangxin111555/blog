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
    <table border="1">
    <h2>欢迎普通用户【{{session('logo')->usrname??''}}】登录，<a href="{{url('/Logo/tc')}}">退出</a></h2>
    <a href="{{url('/Lou/tj')}}">添加</a>
        <tr>
            <td>id</td>
            <td>小区名</td>
            <td>地理位置</td>
            <td>面积</td>
            <td>导购员</td>
            <td>联系电话</td>
            <td>楼盘主图</td>
            <td>楼盘相册</td>
        </tr>
        @foreach ($data as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->wz}}</td>
            <td>{{$v->mj}}</td>
            <td>{{$v->gwy}}</td>
            <td>{{$v->dh}}</td>
            <td><img src="{{env('UPLOAD_URL')}}{{$v->img}}" width="35"/></td>

            <td>
            @if($v->imgs)
            @foreach($v->imgs as $vv)
              <img src="{{env('UPLOAD_URL')}}{{$vv}}" width="35"/>
            @endforeach
            @endif
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
<script>
    function ajaxdel(id){
        $.ajaxSetup({headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
            method:"GET",
            url:"/Lou/destroy/"+id,
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