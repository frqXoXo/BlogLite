<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bl#gLite</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="page">
        <section class="hero">
            <h1>Bl#g Lite</h1>
            <p>Mini blog sederhana. Tulis cepat, edit mudah, rapi.</p>
        </section>

        @auth
            <div class="layout">
                <div class="stack">
                    <div class="card">
                        <div class="toolbar">
                            <div>
                                <strong>Welcome back, {{ auth()->user()->name }}!</strong>
                                <div class="muted">You are logged in.</div>
                            </div>
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="btn btn-ghost" type="submit">Logout</button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <h2>Create a new post</h2>
                        <form action="/create-post" method="POST" class="stack">
                            @csrf
                            <input type="text" name="title" placeholder="Post title">
                            <textarea name="body" placeholder="Write your content..."></textarea>
                            <button class="btn" type="submit">Publish</button>
                        </form>
                    </div>
                </div>

                <div class="stack">
                    <div class="card">
                        <div class="toolbar">
                            <h2>All posts</h2>
                            <form action="/" method="GET" class="search">
                                <input type="text" name="q" placeholder="Search title" value="{{ request('q') }}">
                                <button class="btn btn-ghost" type="submit">Search</button>
                            </form>
                        </div>

                        <div class="stack">
                            @forelse ($posts as $post)
                                <div class="post-card">
                                    <h3>{{ $post->title }}</h3>
                                    <div class="post-meta">
                                        <span>Author: {{ $post->user->name ?? 'Unknown' }}</span>
                                        <span>{{ $post->created_at?->format('d M Y') }}</span>
                                    </div>
                                    <p>{{ $post->body }}</p>

                                    @if ($post->user_id === auth()->id())
                                        <div class="post-actions">
                                            <a class="btn btn-ghost" href="/edit-post/{{ $post->id }}">Edit</a>
                                            <form action="/delete-post/{{ $post->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            @empty
                                <div class="post-card">
                                    <strong>No posts yet.</strong>
                                    <div class="muted">Create your first post on the left.</div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="layout">
                <div class="card">
                    <h2>Create account</h2>
                    <form action="/register" method="POST" class="stack">
                        @csrf
                        <input name="name" type="text" placeholder="Name">
                        <input name="email" type="text" placeholder="Email">
                        <input name="password" type="password" placeholder="Password">
                        <button class="btn" type="submit">Register</button>
                    </form>
                </div>

                <div class="card">
                    <h2>Login</h2>
                    <form action="/login" method="POST" class="stack">
                        @csrf
                        <input name="loginemail" type="text" placeholder="Email">
                        <input name="loginpassword" type="password" placeholder="Password">
                        <button class="btn" type="submit">Login</button>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</body>

</html>
