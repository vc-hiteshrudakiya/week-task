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
<button type="button" onclick="sendData()">Send Data</button>


</form>

</body>
</html>
 <script>
function sendData() {
    fetch('/employee/store', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            name: 'hitesh',
            age: 25,
            salary: 100,
            experience: '5'
        })
    })
    .then(async res => {
        const data = await res.json();

        if (!res.ok) {
            console.error('Validation Errors:', data.errors);
        } else {
            console.log('Success:', data.message);
        }
    });
}
</script>