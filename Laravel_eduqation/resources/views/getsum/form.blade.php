<x-layout>
    <x-slot:title>
        title
        </x-slot:title>

    <form action="/show/user" method="POST">
        @csrf
        <input name="name"><br>
        <input name="age"><br>
        <input name="salary"><br>
        <input type="submit"><br>
    </form>


</x-layout>



