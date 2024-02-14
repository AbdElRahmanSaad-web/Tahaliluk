<x-Admin.template>
    <x-Admin.form title="Update Ad" action="{{ route('admin.ads.update', $ad->id) }}" method="POST">
        @method('PUT') <!-- Use PUT method for update -->
        @csrf <!-- Include CSRF token -->

        <x-input-label value="Title" class="m-2"/>
        <div class="row d-flex justify-content-center">
            <x-text-input class="form-control" name='title' value="{{ $ad->title }}"/>
    
            <x-toggle-switch 
                :isChecked="$ad->status === 'active' ? 1 : 0"
                :id="'status'"
                :label="'Status'"
                name="status"
            />
        </div>

        <x-input-label value="Image URL" />
        <x-text-input class="form-control" name='image_url'/>

        <x-input-label value="Description" />
        <x-text-area class="form-control" name="description" rows="4" cols="50" placeholder="Description">{{ $ad->description }}</x-text-area>

        <x-primary-button class="form-control btn btn-primary">
            Update Ad
        </x-primary-button>
    </x-Admin.form>
</x-Admin.template>
