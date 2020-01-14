<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    @if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
    <form action="{{url('/Brand/store')}}" method="post" enctype="multipart/form-data">
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css"> 
    @csrf
    <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">品牌名称</label>
    <!-- <label for="firstname" class="col-sm-2 control-label">新闻名称</label> -->
    <div class="col-sm-10">
      <input type="text" class="form-control" name="brand_name" id="firstname" placeholder="请输入品牌">
      <b style="color:red">{{$errors->first('brand_name')}}</b>
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">品牌网址</label>
    <!-- <label for="lastname" class="col-sm-2 control-label">新闻事件</label> -->
    <div class="col-sm-10">
      <input type="text" class="form-control" name="brand_url" id="lastname" placeholder="请输品牌网址">
      <b style="color:red">{{$errors->first('brand_url')}}</b>
    </div>
  </div>
  <div class="form-group">
    <label for="inputfile">品牌logo</label>
    <input type="file" name="brand_logo" id="inputfile">
    <p class="help-block">这里是块级帮助文本的实例。</p>
  </div>
  <label for="name">品牌描述</label>
  <!-- <label for="name">新闻描述</label> -->
    <textarea class="form-control" name="brand_desc" rows="3"></textarea>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">登录</button>
    </div>
  </div>
    </form>
    </table>
</body>
</html>