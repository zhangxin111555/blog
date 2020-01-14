<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
    @if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
        <form action="{{url('Exerciser/tjyi')}}" method="post"  enctype="multipart/form-data">
        @csrf
            <tr>
                <td>书名</td>
                <td><input type="text" name="name" id=""></td>
                <b style="color:red">{{$errors->first('name')}}</b>
            </tr>
            <tr>
                <td>作者</td>
                <td><input type="text" name="zz" id=""></td>
                <b style="color:red">{{$errors->first('zz')}}</b>
            </tr>
            <tr>
                <td>价格</td>
                <td><input type="text" name="jg" id=""></td>
            </tr>
            <tr>
                <td>图书封面</td>
                <td><input type="file" name="logo" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="添加"></td>
                <td></td>
            </tr>
        </form>
    </table>
</body>
</html>