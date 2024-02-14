<x-Admin.template>
    <x-Admin.form title="Update User" action="{{ route('admin.users.update', $user->id)}}" method="post">
        @method('put')
        @csrf
        <x-input-label value="Name"/>
        <x-text-input class="form-control"  name='name' value="{{$user->name}}"/>
        <x-input-label value="email" />
        <x-text-input class="form-control" name='email' value="{{$user->email}}"/>
        <x-input-label value="phone" />
        <x-text-input class="form-control" name='phone' value="{{$user->phone}}"/>
        {{-- <x-input-label value="password" />
        <x-text-input class="form-control" name='password'/> --}}
        <x-primary-button class="form-control btn btn-primary">
            Update User
        </x-primary-button>
    </x-Admin.form>
</x-Admin.template>
