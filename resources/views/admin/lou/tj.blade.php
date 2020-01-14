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
        <form action="{{url('/Lou/tjyi')}}" method="post" enctype="multipart/form-data">
        @csrf
            <tr>
                <td>小区名</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>地理位置</td>
                <td><input type="text" name="wz" id=""></td>
            </tr>
            <tr>
                <td>面积</td>
                <td><input type="text" name="mj" id=""></td>
            </tr>
            <tr>
                <td>导购员</td>
                <td><input type="text" name="gwy" id=""></td>
            </tr>
            <tr>
                <td>库存</td>
                <td><input type="text" name="kc" id=""></td>
            </tr>
            <tr>
                <td>联系方法</td>
                <td><input type="text" name="dh" id=""></td>
            </tr>
            <tr>
                <td>楼盘主图</td>
                <td><input type="file" name="img" id=""></td>
            </tr>
            <tr>
                <td>楼盘相册</td>
                <td><input type="file" multiple="multiple" name="imgs[]" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="提交"></td>
            </tr>
        </form>
    </table>
</body>
</html>