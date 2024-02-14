<x-Admin.template>
    <x-table title="admins" createRoute="{{ route('admin.admins.create') }}">
        {{-- <div class="card">
            <div class="card-body"> --}}
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered w-100">
                <tr>
                    <th>name</th>
                    <td>{{ $admin->name }}</td>
                </tr>
                <tr>
                    <th>email</th>
                    <td>{{ $admin->email }}</td>
                </tr>
                <tr>
                    <th>phone</th>
                    <td>{{ $admin->phone }}</td>
                </tr>
            </table>
        </div>
        {{-- </div>
        </div> --}}

    </x-table>
</x-Admin.template>
