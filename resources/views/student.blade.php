<form method="POST" action="{{ route('student.store') }}">
    @csrf

    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name') }}">
    <br><br>

    <label>Age:</label>
    <input type="number" name="age" value="{{ old('age') }}">
    <br><br>

    <label>Licence Number:</label>
    <input type="text" name="licence_number" value="{{ old('licence_number') }}">
    <br><br>

    <button type="submit">Submit</button>
</form>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
