<form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="file" name="file" required>
    <br><br>

    <button type="submit">Upload File</button>
</form>
