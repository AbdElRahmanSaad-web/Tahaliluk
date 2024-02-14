<!--begin::Input group-->
<div class="fv-row col-12">
    <!--begin::Label-->
    <label class="required fs-6 mb-2 text-capitalize">{{$label}}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <select class="form-select form-select-solid mb-3 mb-lg-0 "  name="{{$name}}" aria-label="" required>
        @if(isset($old) && $old)
            @foreach($options as $option=>$key)
                <option value="{{$key}}" {{$old==$key?'selected':''}} >{{$option}}</option>
            @endforeach
        @else
            <option value="" ></option>
        @foreach($options as $option=>$key)
                <option value="{{$key}}" >{{$option}}</option>
            @endforeach
        @endif
    </select>
    <!--end::Input-->
</div>
<!--end::Input group-->

