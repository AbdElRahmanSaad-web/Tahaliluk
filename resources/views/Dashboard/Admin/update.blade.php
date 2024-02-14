<x-Admin.template>
    <x-Admin.form title="Update Admin" action="{{ route('admin.admins.update', $admin->id) }}" method='post'>
        @method('put')
        @csrf
        <x-input-label value="Name"/>
        <x-text-input class="form-control"  name='name' value="{{$admin->name}}"/>
        <x-input-label value="email" />
        <x-text-input class="form-control" name='email' value="{{$admin->email}}"/>
        <x-input-label value="phone" />
        <x-text-input class="form-control" name='phone' value="{{$admin->phone}}"/>
        <x-primary-button class="form-control btn btn-primary">
            Update Admin
        </x-primary-button>
    </x-Admin.form>
</x-Admin.template>
