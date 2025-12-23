<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>
    <h2>User Form</h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('user.store') }}">
        @csrf

        <label>Username:</label>
        <input type="text" name="username" value="{{ old('username') }}"><br><br>

        <label>Are you admin? (1 = Yes, 0 = No):</label>
        <input type="number" name="is_admin" value="{{ old('is_admin') }}"><br><br>

        <label>Admin Code (only for admins):</label>
        <input type="text" name="admin_code" value="{{ old('admin_code') }}"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
