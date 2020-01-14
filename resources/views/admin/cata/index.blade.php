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
	<h2>分类展示</h2>
    
    <a href="{{url('/CategoryController/create')}}">添加</a>
    </hr>
   <thead>

      <tr>
         <th>id</th>
         <th>名称</th>
         <th>是否显示</th>
         <th>是否导航栏显示</th>
         <th>操作</th>
      </tr>
   </thead>
   <tbody>
   @foreach ($data as $v)
      <tr>
         <td>{{$v->cata_id}}</td>
         <td>@php echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;",$v->level);@endphp {{$v->cata_name}}</td>
         <td>@if($v->is_shwo==1) √ @else × @endif</td>
        
         <td>@if($v->is_nav_show==1)√ @else × @endif</td>
         <td><a href="{{url('/CategoryController/edit/' . $v->cata_id)}}" class="btn btn-primary">编辑</a>|<a href="{{url('/CategoryController/destroy/' . $v->cata_id)}}" class="btn btn-danger">删除</a></td>
      </tr>
      @endforeach
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