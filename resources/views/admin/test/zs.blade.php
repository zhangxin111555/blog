<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/static/admin/js/jquery.js"></script>
</head>
@php 
$mem = new Memcache;
// 测试链接是否成功
$mem->connect('127.0.0.1',11211) or die('memcache connect fail');
$mem->add('nianling',0);
$aa = $mem ->increment('nianling',1); //
$bb = $mem->get('nianling'); // 执行
echo "浏览次数 $bb 次";
@endphp

<body>
    <table border="1">
    <a href="{{url('/Test/tj')}}">添加</a>

        <tr>
            <td>id</td>
            <td>管理员姓名</td>
            <td>管理员头像</td>
            <td>操作</td>
        </tr>
        @foreach ($data as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td><img src="{{env('UPLOAD_URL')}}{{$v->logo}}" width="20"/></td>
            <td>
            <a href="{{url('/Test/destroy/' . $v->id)}}" class="btn btn-danger">删除</a>|
            <a href="{{url('/Test/show/' . $v->id)}}">详情</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{$data->appends($query??'')->links()}}
</body>
</html>
<script>
   //ajax分页
   // $('.pagination a').click(function(){
   $(document).on('click','.pagination a',function(){
      var url = $(this).attr('href');
 
      $.get(url,function(res){
         $('body').html(res);
      });
      return false;
   });
</script>
