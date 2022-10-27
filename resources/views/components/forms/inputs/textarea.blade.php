<!-- Name, Label, Value, Edit (optional), Mask (optional), Required(optional) -->
<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
        <textarea class="form-control" name="{{$name}}" id="{{$name}}" cols="30" rows="10" required="{{$required ?? 'false'}}">{{ isset($value) ? old($value) ?? $value : '' }}</textarea>
</div>
