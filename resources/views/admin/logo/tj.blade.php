<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css"> 
<body>
    <table border="1">
    <h1 align="center">登录</h1>
    <d style="color:red">{{session('msg')}}</d>
        <form action="{{url('Logo/tjyi')}}" method="post">
        @csrf
    <div class="col-sm-10">
      <input type="text" class="form-control" name="usrname" id="firstname" placeholder="用户名">
      <b style="color:red">{{$errors->first('brand_name')}}</b>
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="pwd" id="lastname" placeholder="密码">
      <b style="color:red">{{$errors->first('brand_url')}}</b>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">登录</button>
    </div>
        </form>
    </table>
</body>
</html>