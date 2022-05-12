<x-layout>
    <x-slot name="title">
        Todos
    </x-slot>

    <table class="table">
        <thead>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>created_at</th>
            <th>updated_at</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $todo->id }}</td>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->description }}</td>
                <td>{{ $todo->created_at }}</td>
                <td>{{ $todo->updated_at ?? '-' }}</td>
            </tr>
        </tbody>
    </table>

</x-layout>
