<x-Admin.template>
    <x-table title="users" createRoute="{{ route('admin.users.create') }}">
        {{-- <div class="card">
            <div class="card-body"> --}}
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered w-100">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                                    
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    
                                        <form action='{{ route('admin.users.destroy', $user->id) }}' class='d-inline' method="post">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    
                                    </td>                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            {{-- </div>
        </div> --}}

    </x-table>
</x-Admin.template>
