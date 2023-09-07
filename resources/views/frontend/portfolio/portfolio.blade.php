@extends('frontend.main_master')
@section('title')
    Portfolio
@endsection
@section('portfolio')
active
@endsection
@section('content')



    <div class="portfolio-page">

        <div class="filter-menu">
            <div class="filter-container">
                <span>Category:</span>
                <select class="form-select filter-select" id="mainCategorySelect">
                    <option value="all">All</option>

                    @foreach ($category as $item )
                        <option value="{{ $item->category_slug }}">{{ $item->category_name }}</option>
                    @endforeach


                </select>
            </div>
            <!-- ... (existing HTML code) ... -->
            <div class="sub-filter-container" style="display: none;">
                <select class="form-select filter-select" id="subCategorySelect">
                    <option value="all">All</option>
                    <!-- Subcategory options will be populated dynamically -->
                </select>
            </div>
            <!-- ... (remaining HTML code) ... -->
        </div>

        <div class="gallery">
            @foreach ($portfolio as $item)
            <div class="item {{ $item->category->category_slug }} {{ $item->subcategory->subcategory_slug }}">
                <a href="{{ route('portfolio.post',$item->id) }}">
                    <img class="img-fluid" src="{{ url('uploads/portfolios/'.$item->photo) }}" alt="Nature Forest 1">
                </a>
            </div>
            @endforeach

            <script>

                // Sample subcategory data
                const subcategories = {
                    @foreach ($category as $item )

                    @php
                        $subcategories = \App\Models\PortfolioSubCategory::where('category_id',$item->id)->get();
                    @endphp

                    {{ $item->category_slug}}: [

                        @foreach($subcategories as $subcat)
                        '{{ $subcat->subcategory_slug }}'
                            {{ $loop->last ? '' : ',' }}
                        @endforeach

                    ]{{ $loop->last ? '' : ',' }}
                        @endforeach
                    };




                        // nature: ['forest', 'mountain'],
                        // architecture: ['modern', 'historical'],
                        // game: ['ui-ux', 'promo-video','social-media-poster']
            </script>
        </div>

    </div>





    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mainCategorySelect = document.getElementById('mainCategorySelect');
            const subCategorySelect = document.getElementById('subCategorySelect');
            const galleryItems = document.querySelectorAll('.item');
            const subFilterContainer = document.querySelector('.sub-filter-container');



            // Function to populate sub-category select options
            function populateSubCategoryOptions(selectedMainCategory) {
                subCategorySelect.innerHTML = '<option value="all">All</option>';

                if (selectedMainCategory !== 'all' && subcategories[selectedMainCategory]) {
                    subcategories[selectedMainCategory].forEach(subcategory => {
                        const option = document.createElement('option');
                        option.value = subcategory;
                        option.textContent = capitalizeFirstLetter(subcategory);
                        subCategorySelect.appendChild(option);
                    });
                }
            }


            // Capitalize the first letter of a string
            function capitalizeFirstLetter(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }

            // Set up event listener for main category select
            mainCategorySelect.addEventListener('change', () => {
                const mainCategoryValue = mainCategorySelect.value;

                // Hide or show sub-category select container
                if (mainCategoryValue === 'all') {
                    subFilterContainer.style.display = 'none';
                } else {
                    subFilterContainer.style.display = 'block';
                }

                // Clear subcategory select and gallery items
                subCategorySelect.innerHTML = '<option value="all">All</option>';
                galleryItems.forEach(item => {
                    item.style.display = 'none';
                });

                if (mainCategoryValue === 'all') {
                    // Show all gallery items
                    galleryItems.forEach(item => {
                        item.style.display = 'block';
                    });
                } else {
                    // Populate subcategory options and show filtered items
                    populateSubCategoryOptions(mainCategoryValue);
                    galleryItems.forEach(item => {
                        const itemCategories = item.classList;
                        if (itemCategories.contains(mainCategoryValue)) {
                            item.style.display = 'block';
                        }
                    });
                }
            });

            // Set up event listener for subcategory select
            subCategorySelect.addEventListener('change', () => {
                const mainCategoryValue = mainCategorySelect.value;
                const subCategoryValue = subCategorySelect.value;

                galleryItems.forEach(item => {
                    const itemCategories = item.classList;
                    if ((mainCategoryValue === 'all' || itemCategories.contains(mainCategoryValue)) &&
                    (subCategoryValue === 'all' || itemCategories.contains(subCategoryValue))) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>


@endsection
