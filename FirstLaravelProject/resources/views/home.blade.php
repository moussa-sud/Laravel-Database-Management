<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @auth 
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>



    <form action="/create-post" method="POST">
        @csrf
        <input type="text" placeholder="post title" name="title"><br>
        <textarea name="body" placeholder="body content .. "></textarea>
        <button>Add Post</button>
    </form>

    <div style="border: 3px solid black">

        <h2>All Post</h2>

        @foreach ($posts as $post)
            <div style="background-color: antiquewhite; padding: 10px ; margin: 10px">
                <h3>{{$post['title']}}</h3>
                {{$post['body']}}

                <p> <a href="/edit-post/{{$post->id}}">Edit</a></p>

                <form action="/delete-post/{{$post->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>delete</button>
                </form>

            </div>
        @endforeach

    </div>



    @else
    <div style="border: 3px solid black ">
        <h2>Registration</h2>
        <form action="/register" method="POST">
            @csrf
            <input  name="name" type="text"  placeholder="name"> <br>
            <input  name="email" type="email" placeholder="Email"> <br>
            <input  name="password" type="password" placeholder="Password">
            <button>Register</button>
        </form>
    </div>
    <div style="border: 3px solid black ">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name"> <br>
            <input name="loginpassword" type="password" placeholder="Password">
            <button>Login</button>
        </form>
    </div>
    @endauth

</body>
</html>
