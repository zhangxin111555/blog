<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/login')}}" method="post">
        <table>
            @csrf
            <input type="text" name="name" id="">
            <input type="password" name="pwd" id="">
            <button>提交</button>
        </table>
    </form>
</body>
</html>