<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Biz bilan harqanday vaqtda bog'lanishingiz mumkin</h1>
    <form action="{{route('contact.store')}}" method="post">
       @csrf
       @method('post')
       <input type="text" name="title" id="" placeholder="title">
       <textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea>
       <button type="submit">submit</button>
    </form>
</body>
</html>
