<body>
    <table border="1">
    <a href="{{url('/Test/tj')}}">添加</a>

        <tr>
            <td>id</td>
            <td>管理员姓名</td>
            <td>管理员头像</td>
            <td>操作</td>
        </tr>
        @foreach ($data as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td><img src="{{env('UPLOAD_URL')}}{{$v->logo}}" width="20"/></td>
            <td>
            <a href="{{url('/Test/destroy/' . $v->id)}}" class="btn btn-danger">删除</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{$data->appends($query??'')->links()}}
</body>