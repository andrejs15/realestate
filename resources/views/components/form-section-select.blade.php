<div class="form-section flex form-section-select">
    <div class="titles">
        <h3>{{$titleLeft}}</h3>
        <h3>{{$titleRight}}</h3>
    </div>

    <div class="selects">
        <select>
            @foreach($select1Options as $value)
                <option value="{{$value}}">{{$value}}</option>
            @endforeach
        </select>

        <select>
            @foreach($select2Options as $value)
                <option value="{{$value}}">{{$value}}</option>
            @endforeach
        </select>
    </div>

</div>
