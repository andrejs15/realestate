<section class="main-section">
    <div class="main-header flex">
        <h3>Showing xxx search results</h3>

        <div class="sort-container flex">
            <span class="sort-label">Sort by:</span>
            <select id="sort-select">
                <option value="newest">Newest</option>
                <option value="oldest">Oldest</option>
                <option value="popular">Popular</option>

            </select>
        </div>
    </div>

    <div class="main-image-section flex">
        <x-main-image-box
            :houses="[
                      ['imagePath' => 'img/house1.png', 'price' => '$2,000,000', 'address' => '100 East, 21th Street, San Francisco',
                      'baths' => '2', 'rooms' => '4', 'size' => '3000'],
                      ['imagePath' => 'img/house2.png', 'price' => '$1,000,000', 'address' => '100 North, 15th Street, San Francisco',
                      'baths' => '2', 'rooms' => '2', 'size' => '1500'],
                         ]"
        />
    </div>

    <div class="main-image-section flex">
        <x-main-image-box
            :houses="[
                      ['imagePath' => 'img/house3.png', 'price' => '$1,500,000', 'address' => '100 West, 15th Street, San Francisco',
                      'baths' => '2', 'rooms' => '2', 'size' => '2500'],
                      ['imagePath' => 'img/house4.png', 'price' => '$1,200,000', 'address' => '100 West, 15th Street, San Francisco',
                      'baths' => '2', 'rooms' => '2', 'size' => '2500'],
                         ]"
        />
    </div>
</section>

