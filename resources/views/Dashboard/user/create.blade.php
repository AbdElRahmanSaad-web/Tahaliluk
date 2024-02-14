<x-Admin.template>
    <x-Admin.form title="create User" action="{{ route('admin.users.store') }}">
        <x-input-label value="Name"/>
        <x-text-input class="form-control"  name='name'/>
        <x-input-label value="email" />
        <x-text-input class="form-control" name='email'/>
        <x-input-label value="phone" />
        <x-text-input class="form-control" name='phone'/>
        <x-input-label value="password" />
        <x-text-input class="form-control" name='password'/>
        <x-primary-button class="form-control btn btn-primary">
            create User
        </x-primary-button>
    </x-Admin.form>
</x-Admin.template>
