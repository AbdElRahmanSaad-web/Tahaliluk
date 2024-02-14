<x-Admin.template>
    <x-table title="users" createRoute="{{ route('admin.users.create') }}">
        {{-- <div class="card">
            <div class="card-body"> --}}
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered w-100">
                <tr>
                    <th>name</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>phone</th>
                    <td>{{ $user->phone }}</td>
                </tr>
            </table>
        </div>
        {{-- </div>
        </div> --}}

    </x-table>
</x-Admin.template>
