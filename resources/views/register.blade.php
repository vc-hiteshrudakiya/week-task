<form method="POST" action="{{ route('register.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <br>

    <input type="email" name="email" placeholder="Email">
    <br>

    <input type="password" name="password" placeholder="Password">
    <br>

    {{-- ❌ Do NOT add role field here --}}
    {{-- <input type="text" name="role"> --}}

    <button type="submit">Register</button>
</form>

{{-- Error display --}}
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
