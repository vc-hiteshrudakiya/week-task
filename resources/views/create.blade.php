<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>
</head>
<body>

<h2>Employee Details</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

@if($errors->any())
    <ul style="color:red">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="POST" action="{{ route('employee.store') }}">
    @csrf

    <label>Name:</label><br>
    <input type="text" name="name" value="{{ old('name') }}"><br><br>

    <label>Age:</label><br>
    <input type="number" name="age" value="{{ old('age') }}"><br><br>

    <label>Salary:</label><br>
    <input type="number" name="salary" value="{{ old('salary') }}"><br><br>

    <label>Experience (years):</label><br>
    <input type="number" name="experience" value="{{ old('experience') }}"><br><br>

    <label>Role:</label><br>
    <select name="role">
        <option value="">Select Role</option>
        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
    </select><br><br>

    <label>
        <input type="checkbox" name="terms" value="1" {{ old('terms') ? 'checked' : '' }}>
        Accept Terms & Conditions
    </label><br><br>

    <label>Start Date:</label><br>
    <input type="date" name="start_date" value="{{ old('start_date') }}"><br><br>

    <label>Finish Date:</label><br>
    <input type="date" name="finish_date" value="{{ old('finish_date') }}"><br><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br><br>

    <label>Confirm Password:</label><br>
    <input type="password" name="password_confirmation"><br><br>

    <label>Roles (multiple):</label><br>
    <select name="roles[]" multiple>
        <option value="user" {{ in_array('user', old('roles', [])) ? 'selected' : '' }}>User</option>
        <option value="admin" {{ in_array('admin', old('roles', [])) ? 'selected' : '' }}>Admin</option>
        <option value="editor" {{ in_array('editor', old('roles', [])) ? 'selected' : '' }}>Editor</option>
    </select><br><br>

    <!-- Conditional field example -->
    <label>Department:</label><br>
    <input type="text" name="department" value="{{ old('department') }}"><br><br>

    <!-- Optional debug field (excluded) -->
    <input type="hidden" name="debug_notes" value="{{ old('debug_notes') }}">

    <button type="submit">Submit</button>
</form>

</body>
</html>
