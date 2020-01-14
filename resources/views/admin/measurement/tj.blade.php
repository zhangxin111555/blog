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
        <form action="{{url('MeasurementControllers/tjyi')}}" method="post">
        @csrf
            <tr>
                <td>新闻标题</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>新闻分类</td>
                <td><select name="fl" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select></td>
            </tr>
            <tr>
                <td>新闻作者</td>
                <td><input type="text" name="zz" id=""></td>
            </tr>
            <tr>
                <td>发布时间</td>
                <td><input type="text" name="sj" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="添加"></td>
                <td></td>
            </tr>
        </form>
    </table>
</body>
</html>