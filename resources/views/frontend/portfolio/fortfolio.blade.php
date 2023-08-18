@extends('frontend.main_master')
@section('title')
    Portfolio
@endsection
@section('content')


    <div class="portfolio-page">

        <div class="filter-menu">
            <div class="filter-container">
                <span>Category:</span>
                <select class="form-select filter-select" id="mainCategorySelect">
                    <option value="all">All</option>
                    <option value="nature">Nature</option>
                    <option value="architecture">Architecture</option>
                    <option value="game">Game</option>
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
            <div class="item nature forest">
                <a href="#">
                    <img class="img-fluid" src="https://images.pexels.com/photos/15286/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Nature Forest 1">
                </a>
            </div>
            <div class="item nature mountain">
                <a href="#">
                    <img class="img-fluid" src="https://www.tripsavvy.com/thmb/qFqPcg6Wo24Hu4fLokNfAZdC-xQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/fuji-mountain-in-autumn-822273028-5a6a8a9c3418c600363958d3.jpg" alt="Nature Mountain 1">
                </a>
            </div>
            <div class="item architecture modern">
                <a href="#">
                    <img class="img-fluid" src="https://media.gq.com/photos/5b6b20e3a3a1320b7280f029/16:9/w_2560%2Cc_limit/The-Brutal-Wonders-Of-The-Architecture-World-GQ-Style-Fall-2018_07.jpg" alt="Architecture Modern 1">
                </a>
            </div>
            <div class="item architecture historical">
                <a href="#">
                    <img class="img-fluid" src="https://images.adsttc.com/media/images/5b57/5c76/f197/cc65/2900/003f/newsletter/17088729869_8508ee1ec7_h.jpg?1532451952" alt="Architecture Historical 1">
                </a>
            </div>
            <div class="item architecture historical">
                <a href="#">
                    <img class="img-fluid" src="https://www.architectureartdesigns.com/wp-content/uploads/2015/10/11-630x446.jpg" alt="Architecture Historical 1">
                </a>
            </div>
            <div class="item game ui-ux">
                <a href="#">
                    <img class="img-fluid" class="img-fluid" src="https://mir-s3-cdn-cf.behance.net/project_modules/hd/b4aec661849141.5a7bbae97816a.jpg" alt="Architecture ui-ux 1">
                </a>
            </div>
            <div class="item game ui-ux">
                <a href="#">
                    <img class="img-fluid" src="https://cdn.dribbble.com/users/6963273/screenshots/16049180/game-app-ui-kit-1_4x.jpg" alt="game ui-ux 1">
                </a>
            </div>
            <div class="item game promo-video">
                <a href="#">
                    <img class="img-fluid" src="https://ak04-promo-cdn.slidely.com/images/promoVideos/default-og.jpg/1691398009" alt="game ui-ux 1">
                </a>
            </div>
            <div class="item game promo-video">
                <a href="#">
                    <img class="img-fluid" src="https://previewed.app/static/7e346349fdf0ee334e431cdc110b73cf/6c79e/app-promo-video-hero-dark.png" alt="game ui-ux 1">
                </a>
            </div>
            <div class="item game social-media-poster">
                <a href="#">
                    <img class="img-fluid" src="https://i.pinimg.com/736x/4d/f1/29/4df12992c336d52c8e6199b354051abd.jpg" alt="game ui-ux 1">
                </a>
            </div>
            <div class="item game social-media-poster">
                <a href="#">
                    <img class="img-fluid" src="https://i.pinimg.com/originals/e3/54/8c/e3548c4efa351674a824878560df00bf.jpg" alt="game ui-ux 1">
                </a>
            </div>
        </div>

    </div>



    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mainCategorySelect = document.getElementById('mainCategorySelect');
            const subCategorySelect = document.getElementById('subCategorySelect');
            const galleryItems = document.querySelectorAll('.item');
            const subFilterContainer = document.querySelector('.sub-filter-container');

            // Sample subcategory data
            const subcategories = {
                nature: ['forest', 'mountain'],
                architecture: ['modern', 'historical'],
                game: ['ui-ux', 'promo-video','social-media-poster']
            };

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
