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
    <h1>Welcome To Our Company</h1>

    <form action="{{Route('search')}}"  method="GET">
        @csrf
        <input type="text" name="q" id="">
        <input type="submit" value="search">
    </form>

    <a href="{{Route('books')}}">عرض الكتب</a><br><br>
    <a href="{{Route('summaries')}}">عرض الملخصات فقط</a><br><br>
    <a href="{{Route('questions')}}">عرض اسئلة الدورات</a><br><br>
    <a href="{{Route('all')}}">عرض الكل</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">الرقم التسلسلي</th>
            <th scope="col">الاسم</th>
            <th scope="col">النوع</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($item as $i)
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->name}}</td>
                    <td>{{$i->type}}</td>
                    <td>
                        <a href="{{Route('edit',$i->id)}}">تعديل</a>
                        <form action="{{route('delete', $i->id)}}"method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="حذف">
                        </form>
                    </td>
                </tr> 
            @endforeach
            <a href="{{Route('create')}}">أضف إلى القائمة</a>
        </tbody>
        </table>
</body>
</html>