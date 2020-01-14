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
        <form action="{{url('Exerciser/updates'.$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
            <tr>
                <td>书名</td>
                <td><input type="text" name="name" value="{{$data->name}}" id=""></td>
            </tr>
            <tr>
                <td>作者</td>
                <td><input type="text" name="zz"  value="{{$data->zz}}" id=""></td>
            </tr>
            <tr>
                <td>价格</td>
                <td>
                <input type="text" name="jg" value="{{$data->jg}}" id="">
                </td>
            </tr>
            <tr>
                <td>图书封面</td>
                <td>
                    <input type="file" name="logo" id="">
                    <img src="{{env('UPLOAD_URL')}}{{$data->logo}}" width="50"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="修改"></td>
            </tr>
        </form>
    </table>
</body>
</html>