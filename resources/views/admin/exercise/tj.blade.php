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
        <form action="{{url('Exercise/tjyi')}}" method="post">
        @csrf
            <tr>
                <td>学生姓名</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>学生年龄</td>
                <td><input type="text" name="nl" id=""></td>
            </tr>
            <tr>
                <td>学生性别</td>
                <td>
                    <input type="radio" name="xb" id="" value="男">男
                    <input type="radio" name="xb" id="" value="女">女
                </td>
            </tr>
            <tr>
                <td>学生班级</td>
                <td>
                <select name="bj">
                    <option value="1907a" selected>1907a
                    <option value="1907b">1907b
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="提交"></td>
            </tr>
        </form>
    </table>
</body>
</html>