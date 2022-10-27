<!-- Name, Label, Value, Edit (optional), Mask (optional), Required(optional) -->
<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
        <input type="color" class="form-control" name="{{$name}}" id="{{$name}}" @isset($mask) data-mask="{{$mask}}" @endisset value="{{ isset($value) ? old($value) ?? $value : '' }}" required="{{$required ?? 'false'}}">
</div>
