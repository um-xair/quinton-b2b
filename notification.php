<?php include 'subheader.php'; ?>

<div class="flex items-center px-6 py-2 bg-[#F3BF01] h-32">
    <a href="home.php">
        <div class="bg-[#181C14] rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
            </svg>
        </div>
    </a>
    <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Notification</h1>
</div>

<div class="mt-6 px-4">
    <div class="bg-white p-6 rounded-[20px]">
        <h3 class="font-bold text-[#181C14] text-lg mb-4">Exciting News! Our 12.12 Promotion is here!</h3>
        <p class="text-[#181C14] text-sm mb-4" id="promoText">
            Enjoy amazing discounts from December 12th to December 15th. Don’t miss out on special deals, including our exclusive stroller promotion!
            Shop now and save big! 🛍️
            <span id="moreText" class="hidden">This is just the beginning! Take advantage of unbeatable prices on all our products, including exclusive online-only offers. Hurry, while stocks last!</span>
        </p>
        <a href="javascript:void(0)" id="seeMoreLink" class="text-blue-500 text-sm" onclick="toggleText()">See More</a>
        <img src="assets/banner.png" alt="12.12 Promotion" class="w-full rounded-lg mt-4">
    </div>
</div>

<script>
    function toggleText() {
        var moreText = document.getElementById('moreText');
        var seeMoreLink = document.getElementById('seeMoreLink');
        
        if (moreText.classList.contains('hidden')) {
            moreText.classList.remove('hidden');
            seeMoreLink.innerText = "See Less";
        } else {
            moreText.classList.add('hidden');
            seeMoreLink.innerText = "See More";
        }
    }
</script>

<div class="mt-4 px-4">
    <div class="bg-white p-6 rounded-[20px]">
        <h3 class="font-bold text-[#181C14] text-lg mb-4">Big Savings Alert!</h3>
        <p class="text-[#181C14] text-sm mb-4">
        Our 12.12 Sale is live! Enjoy unbeatable discounts from December 12th to 15th. Special deals on strollers and more await you! 🎁🛒
        </p>
    </div>
</div>