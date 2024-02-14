@if ($show_route)
    <a href="{{ $show_route }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
@endif

@if ($edit_route)
    <a href="{{ $edit_route }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
@endif

@if ($delete_route)
    <form action='{{ $delete_route }}' class='d-inline' method="post">
        @csrf
        @method('delete')
        <button onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">
            <i class="fa-solid fa-trash-can"></i>
        </button>
    </form>
@endif
