<div class="form-check form-switch">
    <input 
        class="form-check-input active toggle-class" 
        type="checkbox"
        {{ $isChecked ? 'checked' : '' }}
        id="{{ $id }}"
        name="{{$name}}"
    >
    <label class="form-check-label" for="{{ $id }}">{{ $label }}</label>
</div>
