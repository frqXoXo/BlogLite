<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="page">
        <div class="card">
            <h1>Edit Post</h1>
            <form action="/edit-post/{{ $post->id }}" method="POST" class="stack">
                @csrf
                @method('PUT')
                <div class="stack">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" value="{{ $post->title }}">
                </div>
                <div class="stack">
                    <label for="body">Body</label>
                    <textarea id="body" name="body">{{ $post->body }}</textarea>
                </div>
                <div class="actions">
                    <a class="btn btn-ghost" href="/">Back</a>
                    <button class="btn" type="submit">Update Post</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
