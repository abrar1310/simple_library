<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>
    <h1>عدّل على القائمة</h1>
    <form action="{{Route('updateCategory',$new->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input value=" {{$new->name}}   "type="text"  name="name"  id="" placeholder="السنة الدراسية المعدلة"><br><br>
        
        <input type="submit" value="تأكيد">
    </form>
    <ul class="error"> 
        @foreach($errors->all() as $error) 
        <li>{{ $error }}</li> 
        @endforeach 
    </ul> 
</body>
</html>