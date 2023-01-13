<x-layout>
    <x-slot:title>
        title
        </x-slot:title>




    <form action="" method="POST">
        @csrf

        <p> Имя </p>
        <input name="name"><br>
        <input type="submit"><br>
    </form>

</x-layout>



