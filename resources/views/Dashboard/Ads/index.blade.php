<x-Admin.template>
    <x-table title="admins" createRoute="{{ route('admin.ads.create') }}">
        {{-- <div class="card">
            <div class="card-body"> --}}
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered w-100">
                        <thead>
                            <tr>
                                <th>title</th>
                                <th>status</th>
                                <th>image</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ads as $ad)
                                <tr>
                                    <td>{{ $ad->title }}</td>
                                    <td>{{ $ad->status }}</td>
                                    <td>
                                        <img class="rounded-circle " style="width: 100px; height:100px; object-fit:cover;" alt="no Image"  src="{{ $ad->image_url }}">
                                    </td>

                                    <td>
                                        <a href="{{ route('admin.ads.show', $ad->id) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                                    
                                        <a href="{{ route('admin.ads.edit', $ad->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    
                                        <form action='{{ route('admin.ads.destroy', $ad->id) }}' class='d-inline' method="post">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            {{-- </div>
        </div> --}}

    </x-table>
</x-Admin.template>
