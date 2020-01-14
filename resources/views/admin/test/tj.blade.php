<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/static/admin/js/jquery.js"></script>
</head>
<body>
    <table border="1">
        <form action="{{url('Test/tjyi')}}" method="post" enctype="multipart/form-data">
        @csrf
            <tr>
                <td>管理员姓名</td>
                <td>
                <input type="text" name="name" id="">
                <b style="color:red"></b>
                </td>
            </tr>
            <tr>
                <td>管理员头像</td>
                <td><input type="file" name="logo" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="button" value="提交">
                </td>
            </tr>
        </form>
    </table>
</body>
</html>
<script>
    $('input[ name="name"]').blur(function(){
        // alert(111);return;
        $(this).next().text('');
        var name = $(this).val();
            // alert(name);return;
            checkname(name);
    });


        //方法
        function checkname(name){
            var falg = true;
            var reg = /^[\u4e00-\u9fa5\w.\-]{1,16}$/;
        if(!reg.test(name)){
            $('input[ name="name"]').next().text('品牌名称必须是中文，数字，下划线，点和数组长度1—16！');
            return false; 
        }

            $.ajax({
                method:"get",
                url: "/Test/wyx",
                data:{name:name},
                async:false,
            }).done(function(res){
                if(res!=0){
                $('input[ name="name"]').next().text('品牌已存在');
                falg = false;
            }
            });
            return falg;
            // return true;
        }

      //提交验证
      $('input[ type="button"]').click(function(){
            // alert(111);
            //验证品牌
            $('input[ name="name"]').next().text('');
        var name =  $('input[ name="name"]').val();
            // alert(name);return;
            var nameflag = checkname(name);
            // alert(nameflag);
            
            if(nameflag==true){
                $('form').submit();
            }

            
        });
</script>