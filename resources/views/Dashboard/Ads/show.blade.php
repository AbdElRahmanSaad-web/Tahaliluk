<x-Admin.template>
    <x-table title="users" createRoute="{{ route('admin.users.create') }}">
        {{-- <div class="card">
            <div class="card-body"> --}}
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered w-100">
                <tr>
                    <th>Title</th>
                    <td>{{ $ad->title }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $ad->description }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $ad->status }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><img src="{{ $ad->image_url }}" /></td>
                </tr>
            </table>
        </div>
        {{-- </div>
        </div> --}}

    </x-table>
</x-Admin.template>
