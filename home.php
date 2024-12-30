<?php include 'header.php'; ?>

<div class="mt-10 w-full px-4">
    <a href="promo/promo.php">
        <img src="assets/banner.png" alt="Banner" class="w-full h-full object-cover">
    </a>
</div>


<div class="mt-10 px-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold">Categories</h2>
        <a href="category product/category.php" class="text-[#181C14] text-md underline">View All</a>
    </div>
    <div class="grid grid-cols-3 gap-4 mb-6">
        <div class="text-center">
            <a href="category product/stroller.php">
                <img src="assets/stroller.webp" alt="Category Image 1" class="w-full h-auto object-cover rounded-[20px]">
                <p class="mt-2 text-xs text-[#181C14]">Stroller</p>
            </a>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="assets/carseat.webp" alt="Category Image 2" class="w-full h-auto object-cover rounded-[20px]">
                <p class="mt-2 text-xs text-[#181C14]">Car Seat</p>
            </a>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="assets/highchair.webp" alt="Category Image 3" class="w-full h-auto object-cover rounded-[20px]">
                <p class="mt-2 text-xs text-[#181C14]">High Chair</p>
            </a>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="assets/playmat.webp" alt="Category Image 1" class="w-full h-auto object-cover rounded-[20px]">
                <p class="mt-2 text-xs text-[#181C14]">Playmat</p>
            </a>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="assets/crib.webp" alt="Category Image 2" class="w-full h-auto object-cover rounded-[20px]">
                <p class="mt-2 text-xs text-[#181C14]">Sleeping Crib</p>
            </a>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="assets/table.webp" alt="Category Image 3" class="w-full h-auto object-cover rounded-[20px]">
                <p class="mt-2 text-xs text-[#181C14]">Changing Table</p>
            </a>
        </div>
    </div>
</div>

<div class="mt-10 px-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold">Explore More</h2>
        <div class="bg-[#181C14] rounded-full p-2">
            <a href="tiktok.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="#fff" viewBox="0 0 24 24">
                    <path d="M9.29 16.29L13.59 12 9.29 7.71 10.71 6.29 15.71 12 10.71 17.71z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="flex overflow-x-auto gap-4">
        <div class="w-2/4 h-auto flex-none">
            <video class="w-full h-auto object-cover rounded-[20px]" autoplay muted loop controls>
                <source src="assets/tiktok.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="w-2/4 h-auto flex-none">
            <video class="w-full h-auto object-cover rounded-[20px]" autoplay muted loop controls>
                <source src="assets/tiktok2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="w-2/4 h-auto flex-none">
            <video class="w-full h-auto object-cover rounded-[20px]" autoplay muted loop controls>
                <source src="assets/tiktok3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>

<div class="mt-20 px-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold">Newest Release</h2>
        <div class="bg-[#181C14] rounded-full p-2">
            <a href="new-realease.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="#fff" viewBox="0 0 24 24">
                    <path d="M9.29 16.29L13.59 12 9.29 7.71 10.71 6.29 15.71 12 10.71 17.71z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-2 mb-2">
        <div class="text-center">
            <img src="assets/stroller.webp" alt="Newest Release 1" class="w-full h-auto object-cover" onclick="openModal('assets/stroller.webp')">
        </div>
        <div class="text-center">
            <img src="assets/desc1.webp" alt="Newest Release 2" class="w-full h-auto object-cover" onclick="openModal('assets/desc1.webp')">
        </div>
    </div>
    <div class="grid grid-cols-3 gap-2">
        <div class="text-center">
            <img src="assets/desc3.webp" alt="Newest Release 3" class="w-full h-auto object-cover" onclick="openModal('assets/desc3.webp')">
        </div>
        <div class="text-center">
            <img src="assets/desc1.webp" alt="Newest Release 4" class="w-full h-auto object-cover" onclick="openModal('assets/desc1.webp')">
        </div>
        <div class="relative text-center">
            <img src="assets/desc3.webp" alt="Newest Release 5" class="w-full h-auto object-cover" onclick="openModal('assets/desc3.webp')">
            <div class="absolute inset-0 bg-[#181C14] bg-opacity-50 flex items-center justify-center">
                <span class="text-white text-2xl font-bold">+2</span>
            </div>
        </div>
    </div>
</div>

<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex items-center justify-center z-50">
    <div class="relative flex justify-center items-center max-w-full max-h-full">
        <img id="modalImage" src="" alt="Full Image" class="max-w-full max-h-[90vh] object-contain mx-auto">
        <button class="absolute top-4 right-4 text-[#181C14] text-2xl" onclick="closeModal()">&times;</button>
    </div>
</div>

<script>
    function openModal(imageSrc) {
        var modal = document.getElementById('imageModal');
        var modalImage = document.getElementById('modalImage');
        modalImage.src = imageSrc;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        var modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
    }
</script>


<div class="mt-10 px-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold">Our Influencers</h2>
        <div class="bg-[#181C14] rounded-full p-2">
            <a href="tiktok.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="#fff" viewBox="0 0 24 24">
                    <path d="M9.29 16.29L13.59 12 9.29 7.71 10.71 6.29 15.71 12 10.71 17.71z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="flex overflow-x-auto gap-4">
        <div class="w-2/4 h-auto flex-none">
            <video class="w-full h-auto object-cover rounded-[20px]" autoplay muted loop controls>
                <source src="assets/tiktok4.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="w-2/4 h-auto flex-none">
            <video class="w-full h-auto object-cover rounded-[20px]" autoplay muted loop controls>
                <source src="assets/tiktok5.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="w-2/4 h-auto flex-none">
            <video class="w-full h-auto object-cover rounded-[20px]" autoplay muted loop controls>
                <source src="assets/tiktok6.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>