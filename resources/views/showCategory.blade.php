<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>التصنيف الرئيسي حسب السنوات</h1><br>

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">الرقم التسلسلي</th>
            <th scope="col">النوع </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($item as $i)
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->name}}</td>
                    <td>
                        <a href="{{Route('editCategory',$i->id)}}">تعديل</a>
                        <form action="{{route('deleteCategory', $i->id)}}"method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="حذف">
                        </form>
                    </td>
                </tr> 
            @endforeach
            <a href="{{Route('createCategory')}}">أضف إلى القائمة</a>
        </tbody>
        </table>
</body>
</html>