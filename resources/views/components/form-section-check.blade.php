<div class="form-section flex">
    <h3>{{$title}} </h3>
    @foreach($options as $value => $label)
        @php
        $isChecked = isset($checked) && in_array($value, $checked)
        @endphp
<label>
    <input type="checkbox" name="{{$name}}" value="{{$value}}"  @if($isChecked) checked @endif>
    {{$label}}
</label>
    @endforeach
</div>
