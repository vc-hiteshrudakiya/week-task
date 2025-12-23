<form action="{{ url('/image/upload') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="file" name="image" required>
    <br><br>

    <button type="submit">Upload Image</button>
</form>
