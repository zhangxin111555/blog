<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <script src="/static/admin/js/jquery.js"></script>
</head>
<body>
<table class="table">
	<h2>展示</h2>
	<!-- <h2>欢迎【{{session('logo')->usrname??''}}】登录，<a href="{{url('/Logo/tc')}}">退出</a></h2> -->
    
    <!-- <a href="{{url('/Brand/create')}}">添加</a> -->
    </hr>
   <thead>
   <form action="" method="get">
   <input type="text" name="name" value="{{$query['name']??''}}">
   <button>搜索</button>
   </form>
      <tr>
         <th>id</th>
         <th>品牌名称</th>
         <th>品牌网址</th>
         <th>品牌描述</th>
         <!-- <th>新闻名称</th>
         <th>新闻事件</th>
         <th>新闻描述</th> -->
         <th>操作</th>
      </tr>
   </thead>
   <tbody>
   @foreach ($data as $v)
      <tr>
         <td>{{$v->brand_id}}</td>
         <td><img src="{{env('UPLOAD_URL')}}{{$v->brand_logo}}" width="20"/>{{$v->brand_name}}</td>
         <td>{{$v->brand_url}}</td>
         <td>{{$v->brand_desc}}</td>
         <td><a href="{{url('/brand/edit/' . $v->brand_id)}}" class="btn btn-primary">编辑</a>|<a href="{{url('/brand/destroy/' . $v->brand_id)}}" class="btn btn-danger">删除</a></td>
      </tr>
      @endforeach
      <tr>
        <td colspan="4">{{$data->appends($query??'')->links()}}</td>
      </tr>
   </tbody>
</table>
</body>
</html>
<script>
   //ajax分页
   // $('.pagination a').click(function(){
   $(document).on('click','.pagination a',function(){
      var url = $(this).attr('href');
      $.get(url,function(res){
         $('tbody').html(res);
      });
      return false;
   });
</script>