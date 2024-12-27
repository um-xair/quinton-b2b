<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#F2F2F2] overflow-auto mb-[200px]">

    <div class="flex items-center px-6 py-2 bg-[#F3BF01] h-32">
        <div class="bg-[#181C14] rounded-full p-2">
            <a href="home.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </a>
        </div>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Feeds</h1>
    </div>

    <div class="mt-10 px-4">
        <div class="relative">
            <input type="text" placeholder="Search..." class="w-full bg-white py-3 px-4 border border-[#181C14] rounded-full text-md">
            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#181C14">
                    <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="mt-10 px-4">
        <div class="bg-white p-6 rounded-[20px]">
            <!-- Section 1 -->
            <div class="flex items-center space-x-4 justify-between">
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 rounded-full bg-gray-300 flex items-center justify-center">
                        <img src="https://i.pinimg.com/736x/5e/22/46/5e22460fa3074d0b487a97a8a7f63b3f.jpg" alt="PFP" class="w-full h-full object-cover rounded-full">
                    </div>
                    <div>
                        <p class="font-semibold text-lg text-[#181C14]">Quinton Baby</p>
                        <p class="text-xs text-gray-500">16 hours ago</p>
                    </div>
                </div>
            </div>

            <div class="mt-6 text-justify" id="promoText">
                <h3 class="font-bold text-[#181C14] text-lg mb-4">Our 12.12 Promotion is here!</h3>
                <p class="text-[#181C14] text-sm mb-4">
                    Enjoy amazing discounts from December 12th to December 15th. Don’t miss out on special deals, including our exclusive stroller promotion! 
                    Shop now and save big! 🛍️
                    <span id="moreText1" class="hidden">This is just the beginning! Take advantage of unbeatable prices on all our products, including exclusive online-only offers. Hurry, while stocks last!</span>
                    <a href="javascript:void(0)" id="seeMoreLink1" class="text-blue-500 text-sm" onclick="toggleText('moreText1', 'seeMoreLink1')">See More</a>
                </p>
            </div>

            <!-- Image Grid Section 1 -->
            <div class="mt-6 grid gap-1">
                <div class="grid grid-cols-2 gap-1">
                    <div class="w-full">
                        <img src="assets/feed1.jpg" alt="Image 1" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed1.jpg')">
                    </div>
                    <div class="w-full">
                        <img src="assets/feed2.jpg" alt="Image 2" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed2.jpg')">
                    </div>
                </div>
                <div class="mt-1 grid grid-cols-3 gap-1">
                    <div class="w-34 h-34">
                        <img src="assets/feed3.jpg" alt="Image 3" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed3.jpg')">
                    </div>
                    <div class="w-34 h-34">
                        <img src="assets/feed4.jpg" alt="Image 4" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed4.jpg')">
                    </div>
                    <div class="w-34 h-34">
                        <img src="assets/feed5.jpg" alt="Image 5" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed5.jpg')">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for images -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex items-center justify-center z-50">
        <div class="relative flex justify-center items-center max-w-full max-h-full">
            <img id="modalImage" src="" alt="Full Image" class="max-w-full max-h-[90vh] object-contain mx-auto">
            <button class="absolute top-4 right-4 text-black text-2xl" onclick="closeModal()">&times;</button>
        </div>
    </div>

    <script>
        function toggleText(moreTextId, seeMoreLinkId) {
            var moreText = document.getElementById(moreTextId);
            var seeMoreLink = document.getElementById(seeMoreLinkId);
        
            if (moreText.classList.contains('hidden')) {
                moreText.classList.remove('hidden');
                seeMoreLink.innerText = "See Less";
            } else {
                moreText.classList.add('hidden');
                seeMoreLink.innerText = "See More";
            }
        }

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

    <!-- Section 2 -->
    <div class="mt-4 px-4">
        <div class="bg-white p-6 rounded-[20px]">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 rounded-full bg-gray-300 flex items-center justify-center">
                    <img src="https://i.pinimg.com/736x/5e/22/46/5e22460fa3074d0b487a97a8a7f63b3f.jpg" alt="PFP" class="w-full h-full object-cover rounded-full">
                </div>
                <div>
                    <p class="font-semibold text-lg text-[#181C14]">John Doe</p>
                    <p class="text-xs text-gray-500">16 hours ago</p>
                </div>
            </div>

            <div class="mt-4 text-justify">
                <p class="text-lg font-bold text-[#181C14]">Our 12.12 Promotion is here!</p>
                <p id="desc" class="text-sm text-[#181C14] mt-2">
                    Enjoy amazing discounts from December 12th to December 15th. Don’t miss out on special deals, including our exclusive stroller promotion! Shop now and save big! 🛍️
                </p>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-1">
                <div class="w-full">
                    <img src="assets/feed7.jpg" alt="Image 1" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed7.jpg')">
                </div>
                <div class="w-full">
                    <img src="assets/feed8.jpg" alt="Image 2" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed8.jpg')">
                </div>
                <div class="w-full">
                    <img src="assets/feed9.jpg" alt="Image 3" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed9.jpg')">
                </div>
                <div class="w-full">
                    <img src="assets/feed10.jpg" alt="Image 4" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed10.jpg')">
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 px-4">
        <div class="bg-white p-6 rounded-[20px]">
            <div class="flex items-center space-x-4 justify-between">
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 rounded-full bg-gray-300 flex items-center justify-center">
                        <img src="https://i.pinimg.com/736x/5e/22/46/5e22460fa3074d0b487a97a8a7f63b3f.jpg" alt="PFP" class="w-full h-full object-cover rounded-full">
                    </div>
                    <div>
                        <p class="font-semibold text-lg text-[#181C14]">Quinton Baby</p>
                        <p class="text-xs text-gray-500">16 hours ago</p>
                    </div>
                </div>
            </div>

            <div class="mt-6 text-justify" id="promoText">
                <h3 class="font-bold text-[#181C14] text-lg mb-4">Our 12.12 Promotion is here!</h3>
                <p class="text-[#181C14] text-sm mb-4">
                    Enjoy amazing discounts from December 12th to December 15th. Don’t miss out on special deals, including our exclusive stroller promotion! 
                    Shop now and save big! 🛍️
                    <span id="moreText1" class="hidden">This is just the beginning! Take advantage of unbeatable prices on all our products, including exclusive online-only offers. Hurry, while stocks last!</span>
                    <a href="javascript:void(0)" id="seeMoreLink1" class="text-blue-500 text-sm" onclick="toggleText('moreText1', 'seeMoreLink1')">See More</a>
                </p>
            </div>

            <!-- Image Grid Section 1 -->
            <div class="mt-6 grid gap-1">
                <div class="grid grid-cols-2 gap-1">
                    <div class="w-full">
                        <img src="assets/feed1.jpg" alt="Image 1" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed1.jpg')">
                    </div>
                    <div class="w-full">
                        <img src="assets/feed2.jpg" alt="Image 2" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed2.jpg')">
                    </div>
                </div>
                <div class="mt-1 grid grid-cols-3 gap-1">
                    <div class="w-34 h-34">
                        <img src="assets/feed3.jpg" alt="Image 3" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed3.jpg')">
                    </div>
                    <div class="w-34 h-34">
                        <img src="assets/feed4.jpg" alt="Image 4" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed4.jpg')">
                    </div>
                    <div class="w-34 h-34">
                        <img src="assets/feed5.jpg" alt="Image 5" class="w-full object-cover cursor-pointer" onclick="openModal('assets/feed5.jpg')">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mt-4 px-4">
        <div class="bg-white p-6 rounded-[20px]">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 rounded-full bg-gray-300 flex items-center justify-center">
                    <img src="https://i.pinimg.com/736x/5e/22/46/5e22460fa3074d0b487a97a8a7f63b3f.jpg" alt="PFP" class="w-full h-full object-cover rounded-full">
                </div>
                <div>
                    <p class="font-semibold text-lg text-[#181C14]">John Doe</p>
                    <p class="text-xs text-gray-500">16 hours ago</p>
                </div>
            </div>
            <div class="mt-4 text-justify">
                <p class="text-lg font-bold text-[#181C14]">Our 12.12 Promotion is here!</p>
                <p id="desc" class="text-sm text-[#181C14] mt-2">
                    Enjoy amazing discounts from December 12th to December 15th. Don’t miss out on special deals, including our exclusive stroller promotion! Shop now and save big! 🛍️
                </p>
            </div>
        </div>
    </div>

    <div class="mt-4 px-4">
        <div class="bg-white p-6 rounded-[20px]">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 rounded-full bg-gray-300 flex items-center justify-center">
                    <img src="https://i.pinimg.com/736x/5e/22/46/5e22460fa3074d0b487a97a8a7f63b3f.jpg" alt="PFP" class="w-full h-full object-cover rounded-full">
                </div>
                <div>
                    <p class="font-semibold text-lg text-[#181C14]">John Doe</p>
                    <p class="text-xs text-gray-500">16 hours ago</p>
                </div>
            </div>
            <div class="mt-4 text-justify">
                <p class="text-lg font-bold text-[#181C14]">Our 12.12 Promotion is here!</p>
                <p id="desc" class="text-sm text-[#181C14] mt-2">
                    Enjoy amazing discounts from December 12th to December 15th. Don’t miss out on special deals, including our exclusive stroller promotion! Shop now and save big! 🛍️
                </p>
            </div>
            <div class="mt-4">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/4pA6FJSQhjg?si=SwyLTc7Ryr76EyJB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>


    <div class="fixed bottom-10 left-4 right-4 bg-[#F3BF01] py-4 px-4 rounded-full z-[999]">
        <div class="flex justify-around">
            <a href="feeds.php" class="bg-[#181C14] rounded-full p-4">
                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#FFFFFF">
                    <path d="m300-300 280-80 80-280-280 80-80 280Zm180-120q-25 0-42.5-17.5T420-480q0-25 17.5-42.5T480-540q25 0 42.5 17.5T540-480q0 25-17.5 42.5T480-420Zm0 340q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Zm0-320Z"/>
                </svg>
            </a>
            <a href="#" class="bg-white rounded-full p-4">
                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                    <path d="M444-200h70v-50q50-9 86-39t36-89q0-42-24-77t-96-61q-60-20-83-35t-23-41q0-26 18.5-41t53.5-15q32 0 50 15.5t26 38.5l64-26q-11-35-40.5-61T516-710v-50h-70v50q-50 11-78 44t-28 74q0 47 27.5 76t86.5 50q63 23 87.5 41t24.5 47q0 33-23.5 48.5T486-314q-33 0-58.5-20.5T390-396l-66 26q14 48 43.5 77.5T444-252v52Zm36 120q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
                </svg>
            </a>
            <a href="home.php" class="bg-white rounded-full p-4">
                <img src="assets/q-black.png" alt="Icon" class="w-6 h-6"/>
            </a>
            <a href="notification.php" class="bg-white rounded-full p-4">
                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                    <path d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"/>
                </svg>
            </a>
            <a href="account.php" class="bg-white rounded-full p-4">
                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                    <path d="M841-518v318q0 33-23.5 56.5T761-120H201q-33 0-56.5-23.5T121-200v-318q-23-21-35.5-54t-.5-72l42-136q8-26 28.5-43t47.5-17h556q27 0 47 16.5t29 43.5l42 136q12 39-.5 71T841-518Zm-272-42q27 0 41-18.5t11-41.5l-22-140h-78v148q0 21 14 36.5t34 15.5Zm-180 0q23 0 37.5-15.5T441-612v-148h-78l-22 140q-4 24 10.5 42t37.5 18Zm-178 0q18 0 31.5-13t16.5-33l22-154h-78l-40 134q-6 20 6.5 43t41.5 23Zm540 0q29 0 42-23t6-43l-42-134h-76l22 154q3 20 16.5 33t31.5 13ZM201-200h560v-282q-5 2-6.5 2H751q-27 0-47.5-9T663-518q-18 18-41 28t-49 10q-27 0-50.5-10T481-518q-17 18-39.5 28T393-480q-29 0-52.5-10T299-518q-21 21-41.5 29.5T211-480h-4.5q-2.5 0-5.5-2v282Zm560 0H201h560Z"/>
                </svg>
            </a>
        </div>
    </div>


</body>
</html>