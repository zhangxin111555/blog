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
    <!-- @if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif -->
    <form action="{{url('/Brand/store')}}" method="post" enctype="multipart/form-data">
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css"> 
    @csrf
    <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">商品名称</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="goods_name" id="firstname" placeholder="请输入品牌">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">品牌分类</label>
    <div class="col-sm-10">
      <select class="form-control" name="cate_id">
      <option value="0">请选择品牌分类</option>
      @foreach($brand as $v)
        <option value="{{$v->brand_id}}">{{$v->brand_name}}</option>
      @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">商品分类</label>
    <div class="col-sm-10">
      <select class="form-control" name="brand_id">
        <option value="0">请选择商品分类</option>
        @foreach($Category as $v)
        <option value="{{$v->cata_id}}">@php echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;",$v->level);@endphp {{$v->cata_name}}</option>
      @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputfile">单文件上传</label>
    <input type="file" name="goods_img" id="inputfile">
    <p class="help-block">这里是块级帮助文本的实例。</p>
  </div>
  <div class="form-group">
    <label for="inputfile">多文件上传</label>
    <input type="file" multiple="multiple" name="goods_imgs" id="inputfile">
    <p class="help-block">这里是块级帮助文本的实例。</p>
  </div>
  <label for="name">品牌描述</label>
    <textarea class="form-control" name="goods_ms" rows="3"></textarea>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">提交</button>
    </div>
  </div>
    </form>
    </table>
</body>
</html>