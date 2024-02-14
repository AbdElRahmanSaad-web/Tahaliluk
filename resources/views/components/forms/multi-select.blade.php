<div class="mb-3">
{{--    {{print_r($options,true)}}--}}
    <label class="form-label text-capitalize">{{$label}}</label>
    <select class="multiple-select" data-placeholder="Choose anything" multiple="multiple" name="{{$name}}" required>
        @if(isset($old) && $old)
            @foreach($options as $key=>$value)
                <option value="{{$key}}" {{in_array($key, $old, true)?'selected':''}} >{{$value}}</option>
            @endforeach
        @else
            @foreach($options as $key=>$value)
                <option value="{{$key}}">{{$value}}</option>
            @endforeach
        @endif
    </select>

</div>
