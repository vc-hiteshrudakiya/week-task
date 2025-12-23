<x-layout title="Create Student">

    <h2>Create Student</h2>

    <form method="POST">
        @csrf

        <x-input label="Name" name="name" />
        <x-input label="Age" name="age" type="number" />
        <x-input label="City" name="city" />

        <button class="btn btn-primary">Save</button>
    </form>

</x-layout>
