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
    <form action="{{url('Exerciseyi/updates'.$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
            <tr>
                <td>文章标题</td>
                <td><input type="text" name="name" value="{{$data->name}}" id=""></td>
            </tr>
            <tr>
                <td>分类</td>
                <td>
                <select name="bm">
                    <option value="部门1" selected>部门1
                    <option value="部门2">部门2
                </select>
                </td>
            </tr>
            <tr>
                <td>文章重要性</td>
                <td>
                    <input type="radio" name="zyx" id="" value="重要">重要
                    <input type="radio" name="zyx" id="" value="普通">普通
                </td>
            </tr>
            <tr>
                <td>是否展示</td>
                <td>
                    <input type="radio" name="xs" id="" value="1">显示
                    <input type="radio" name="xs" id="" value="2">不显示
                </td>
            </tr>
            <tr>
                <td>作者</td>
                <td><input type="text" name="gh" value="{{$data->gh}}" id=""></td>
            </tr>
            <tr>
                <td>描述</td>
                <td><input type="text" name="ms" value="{{$data->ms}}" id=""></td>
            </tr>
            <tr>
                <td>上传文件</td>
                <td>
                    <input type="file" name="logo">
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