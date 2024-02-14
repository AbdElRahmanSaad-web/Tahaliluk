<x-Admin.template>
    <x-Admin.form title="create Ad" action="{{ route('admin.ads.store') }}">
        <x-input-label value="Title" class="m-2"/>
        <div class="row d-flex justify-content-center">
            <x-text-input class="form-control" name='title'/>
    
            <x-toggle-switch 
                :isChecked="1"
                :id="'status'"
                :label="'Status'"
                name="status"
            />
        </div>


        <x-input-label value="image url" />
        <x-text-input class="form-control" name='image_url'/>

        <x-input-label value="Description" />
        <x-text-area class="form-control" name="description" rows="4" cols="50" placeholder="Description"></x-text-area>

        <x-primary-button class="form-control btn btn-primary">
            create Ad
        </x-primary-button>
    </x-Admin.form>
</x-Admin.template>
