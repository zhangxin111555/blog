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
    <form action="{{url('/CategoryController/store')}}" method="post" enctype="multipart/form-data">
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css"> 
    @csrf
    <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">分类名称</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cata_name" id="firstname" placeholder="请输入品牌">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">父级名称</label>
    <div class="col-sm-10">
      <select class="form-control" name="parent_id">
      <option value="0">请选择商品分类</option>
      @foreach($data as $v)
        <option value="{{$v->cata_id}}">@php echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;",$v->level);@endphp {{$v->cata_name}}</option>
      @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputfile">是否显示</label>
                <input type="radio" name="is_shwo" id=""checked="checked" value="1">是
                <input type="radio" name="is_shwo" id="" value="2">否
  </div>
  <label for="name">是否导航栏显示</label>
                  <input type="radio" name="is_nav_show" id="" value="1">是
                  <input type="radio" name="is_nav_show" id="" checked="checked" value="2" >否
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">登录</button>
    </div>
  </div>
    </form>
    </table>
</body>
</html>