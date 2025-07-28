
<div class="image-box-wrapper flex">
    @foreach($houses as $house)
    <div class="main-image-box">
        <img src="{{ asset($house['imagePath']) }}" alt="" width="376" height="auto">
        <p>{{$house['price']}}</p>
        <span>{{$house['address']}}</span>
        <div class="rooms">
            <i class="fa-solid fa-bath"></i> <span>{{$house['baths']}}</span>
            <i class="fa-solid fa-bed"></i> <span>{{$house['rooms']}}</span>
            <i class="fa-solid fa-arrows-alt"></i> <span>{{$house['size']}}.ft²</span>
        </div>
    </div>
    @endforeach
</div>
