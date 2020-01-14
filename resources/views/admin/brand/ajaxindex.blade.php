<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach ($data as $v)
      <tr>
         <td>{{$v->brand_id}}</td>
         <td><img src="{{env('UPLOAD_URL')}}{{$v->brand_logo}}" width="20"/>{{$v->brand_name}}</td>
         <td>{{$v->brand_url}}</td>
         <td>{{$v->brand_desc}}</td>
         <td><a href="{{url('/brand/edit/' . $v->brand_id)}}" class="btn btn-primary">编辑</a>|<a href="{{url('/brand/destroy/' . $v->brand_id)}}" class="btn btn-danger">删除</a></td>
      </tr>
      @endforeach
      <tr>
        <td colspan="4">{{$data->appends($query??'')->links()}}</td>
      </tr>
</body>
</html>