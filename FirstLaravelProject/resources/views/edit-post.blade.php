<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Edit Post</h1>

    <form action="/edit-post/{{$post->id}}" method="post">
        @csrf
        @method('PUT')
        @csrf

        <input type="text" value="{{$post->title}}" name="title"><br>
        <textarea name="body" >{{$post->body}}</textarea>


        <button>Save Changes</button>
    </form>
    
</body>
</html>