<x-layout>
    <x-slot:title>
        title
        </x-slot:title>


    <table border="2" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Role</th>
            <th>Name</th>
        </tr>
            @foreach($roles as $role)
                <tr>
                    <td> {{ $role->id }} </td>
                    <td> {{ $role->name }} </td>
                    <td>
                    @foreach($role->users as $user)
                     {{ $user->name }} <br>
                    @endforeach
                    </td>
                </tr>
            @endforeach
    </table>
</x-layout>



