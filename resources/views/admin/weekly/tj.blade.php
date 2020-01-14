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
        <form action="{{url('/Weekly/tjyi')}}" method="post">
        @csrf
            <tr>
                <td>文章标题</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>文章分类</td>
                <td>
                <select name="fl">
                <option value="手机促销" selected>手机促销
                    <option value="3G咨询">3G咨询
                    <option value="诺基亚">诺基亚
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
                    <input type="radio" name="xs" id="" value="显示">显示
                    <input type="radio" name="xs" id="" value="不显示">不显示
                </td>
            </tr>
            <tr>
                <td>作者</td>
                <td><input type="text" name="zz" id=""></td>
            </tr>
            <tr>
                <td>描述</td>
                <td><input type="text" name="ms" id=""></td>
            </tr>
            <tr>
                <td>上传文件</td>
                <td><input type="file" name="logo" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="添加"></td>
            </tr>
        </form>
    </table>
</body>
</html>