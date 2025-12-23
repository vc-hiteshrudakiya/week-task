<h3>Uploaded Image</h3>

<img src="{{ asset('storage/' . $path) }}" width="300">

<br><br>

<a href="{{ url('/image/download/' . basename($path)) }}">
    <button>Download Image</button>
</a>
