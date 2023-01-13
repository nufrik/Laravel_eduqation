<x-layout>
    <x-slot:title>
        title
        </x-slot:title>


    <div class="container">

        <table border="1" cellspacing="0">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td><a href="user-delete/{{ $user->id }}">Удалить</a></td>
                <td><a href="user-update/{{ $user->id }}">Редактировать</a></td>
            </tr>
        @endforeach
        </table>
        {{ $users->links() }}
    </div>


</x-layout>



