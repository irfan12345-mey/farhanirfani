<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create New Post</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <!-- Form untuk membuat post -->
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content">{{ old('content') }}</textarea>
            @error('content')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Create Post</button>
    </form>
</body>
</html>