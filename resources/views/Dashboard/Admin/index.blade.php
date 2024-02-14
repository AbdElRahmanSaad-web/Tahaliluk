<x-Admin.template>
    <x-table title="admins" createRoute="{{ route('admin.admins.create') }}">
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
                            @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->phone }}</td>
                                    <td>
                                        <a href="{{ route('admin.admins.show', $admin->id) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                                    
                                        <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    
                                        <form action='{{ route('admin.admins.destroy', $admin->id) }}' class='d-inline' method="post">
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
