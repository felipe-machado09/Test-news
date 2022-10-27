<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <select class="form-control" id="{{$name}}" name="{{$name}}" {{isset($required) ? 'required' : ''}} multiple>
        <option disabled {{isset($value) ?: 'selected'}}>Selecione...</option>

        @forelse($options as $id => $option)
            <option
                value="{{$id}}"
                @if(isset($value))
                    {{$id == $value ? 'selected' : ''}}
                @endif
            >
                {{$option}}
            </option>
        @empty
            <option disabled>Sem {{$label}} cadastrados (as)</option>
        @endforelse
    </select>
</div>

