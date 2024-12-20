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
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
            </svg>
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
                    <span id="more" class="text-blue-500 cursor-pointer" onclick="toggleDescription()">See More</span>
                </p>
                <p id="fullDesc" class="hidden text-sm text-[#181C14] mt-2">
                    Here is the full description that is initially hidden. It provides more detailed information about the content and context of the post.
                </p>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-1">
                <div class="w-full h-[200px]">
                    <img src="https://scontent.fmkz1-2.fna.fbcdn.net/v/t39.30808-6/467644879_589809663715043_3137173989872180622_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=127cfc&_nc_ohc=ZwOODpSm2DwQ7kNvgGDDJBO&_nc_zt=23&_nc_ht=scontent.fmkz1-2.fna&_nc_gid=AoQA53uCzsQ3jFz9oqcREbW&oh=00_AYA5M0OqGYPfSgc7Forr7_yqWJu5qS8cp6mJQTqCLtuqfQ&oe=676AC647" alt="Image 1" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[200px]">
                    <img src="https://scontent.fmkz1-2.fna.fbcdn.net/v/t39.30808-6/467976745_589809740381702_1095967752859895391_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=Uy8U4F_irZ4Q7kNvgGiC6qH&_nc_zt=23&_nc_ht=scontent.fmkz1-2.fna&_nc_gid=Arwc-smHv-2Csw29P7GZqVN&oh=00_AYAuOkHNTOwoONUeOhXkldVLRwGc-nzGJDrWmf9_MEG5dA&oe=676AA120" alt="Image 2" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="mt-1 grid grid-cols-3 gap-1">
                <div class="w-34 h-34">
                    <img src="https://scontent.fmkz1-2.fna.fbcdn.net/v/t39.30808-6/467730936_589809633715046_1131166506602066430_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=sMD-LBspo1wQ7kNvgHz2-kP&_nc_zt=23&_nc_ht=scontent.fmkz1-2.fna&_nc_gid=A7saqxSw8la6v4RipViS71G&oh=00_AYCEliCITSCJ-aYH6eb1g-p64dvPPo_oMQfF8OFMoAGuuQ&oe=676AB11E" alt="Image 3" class="w-full h-full object-cover">
                </div>
                <div class="w-34 h-34">
                    <img src="https://scontent.fmkz1-1.fna.fbcdn.net/v/t39.30808-6/467713022_589809653715044_1243775729026650509_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=127cfc&_nc_ohc=5HoGUNm0vCsQ7kNvgG3fupO&_nc_zt=23&_nc_ht=scontent.fmkz1-1.fna&_nc_gid=Ag_3m_ABIQsP6vU48tPOH-8&oh=00_AYClOhnMi3sP10IZgEDsCcy_iQMh9UoHsSFoD9_Wdg-Xag&oe=676A9E3E" alt="Image 4" class="w-full h-full object-cover">
                </div>
                <div class="w-34 h-34">
                    <img src="https://scontent.fmkz1-1.fna.fbcdn.net/v/t39.30808-6/467502606_589809723715037_5634366192346471974_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_ohc=bgc-ih43eTgQ7kNvgHMnOJZ&_nc_zt=23&_nc_ht=scontent.fmkz1-1.fna&_nc_gid=AchK8caAqbmFKgq8cV18EXY&oh=00_AYDZWgPEpXXVllHQipCzesTRiAzzALIUwM1WIhJutN7tYg&oe=676A9135" alt="Image 5" class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </div>

    <script>
        function toggleDescription() {
            var fullDesc = document.getElementById('fullDesc');
            var more = document.getElementById('more');

            if (fullDesc.classList.contains('hidden')) {
                fullDesc.classList.remove('hidden');
                more.textContent = "See Less";
            } else {
                fullDesc.classList.add('hidden');
                more.textContent = "See More";
            }
        }
    </script>

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
                    <span id="more" class="text-blue-500 cursor-pointer" onclick="toggleDescription()">See More</span>
                </p>
                <p id="fullDesc" class="hidden text-sm text-[#181C14] mt-2">
                    Here is the full description that is initially hidden. It provides more detailed information about the content and context of the post.
                </p>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-1">
                <div class="w-full h-[200px]">
                    <img src="https://scontent.fmkz1-2.fna.fbcdn.net/v/t39.30808-6/467644879_589809663715043_3137173989872180622_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=127cfc&_nc_ohc=ZwOODpSm2DwQ7kNvgGDDJBO&_nc_zt=23&_nc_ht=scontent.fmkz1-2.fna&_nc_gid=AoQA53uCzsQ3jFz9oqcREbW&oh=00_AYA5M0OqGYPfSgc7Forr7_yqWJu5qS8cp6mJQTqCLtuqfQ&oe=676AC647" alt="Image 1" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[200px]">
                    <img src="https://scontent.fmkz1-2.fna.fbcdn.net/v/t39.30808-6/467976745_589809740381702_1095967752859895391_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=Uy8U4F_irZ4Q7kNvgGiC6qH&_nc_zt=23&_nc_ht=scontent.fmkz1-2.fna&_nc_gid=Arwc-smHv-2Csw29P7GZqVN&oh=00_AYAuOkHNTOwoONUeOhXkldVLRwGc-nzGJDrWmf9_MEG5dA&oe=676AA120" alt="Image 2" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[200px]">
                    <img src="https://scontent.fmkz1-2.fna.fbcdn.net/v/t39.30808-6/467730936_589809633715046_1131166506602066430_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=sMD-LBspo1wQ7kNvgHz2-kP&_nc_zt=23&_nc_ht=scontent.fmkz1-2.fna&_nc_gid=A7saqxSw8la6v4RipViS71G&oh=00_AYCEliCITSCJ-aYH6eb1g-p64dvPPo_oMQfF8OFMoAGuuQ&oe=676AB11E" alt="Image 3" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[200px]">
                    <img src="https://scontent.fmkz1-1.fna.fbcdn.net/v/t39.30808-6/467713022_589809653715044_1243775729026650509_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=127cfc&_nc_ohc=5HoGUNm0vCsQ7kNvgG3fupO&_nc_zt=23&_nc_ht=scontent.fmkz1-1.fna&_nc_gid=Ag_3m_ABIQsP6vU48tPOH-8&oh=00_AYClOhnMi3sP10IZgEDsCcy_iQMh9UoHsSFoD9_Wdg-Xag&oe=676A9E3E" alt="Image 4" class="w-full h-full object-cover">
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
            <div class="mt-4">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <div class="mt-4">
                <!-- TikTok Video Embed -->
                <iframe src="https://www.tiktok.com/@quintonbaby/video/7447809187951824146" width="100%" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>









































    <div class="mt-10 px-4">
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
                    <span id="more" class="text-blue-500 cursor-pointer" onclick="toggleDescription()">See More</span>
                </p>
                <p id="fullDesc" class="hidden text-sm text-[#181C14] mt-2">
                    Here is the full description that is initially hidden. It provides more detailed information about the content and context of the post.
                </p>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-1">
                <div class="w-full h-[200px]">
                    <img src="https://scontent.fmkz1-2.fna.fbcdn.net/v/t39.30808-6/467644879_589809663715043_3137173989872180622_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=127cfc&_nc_ohc=ZwOODpSm2DwQ7kNvgGDDJBO&_nc_zt=23&_nc_ht=scontent.fmkz1-2.fna&_nc_gid=AoQA53uCzsQ3jFz9oqcREbW&oh=00_AYA5M0OqGYPfSgc7Forr7_yqWJu5qS8cp6mJQTqCLtuqfQ&oe=676AC647" alt="Image 1" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[200px]">
                    <img src="https://scontent.fmkz1-2.fna.fbcdn.net/v/t39.30808-6/467976745_589809740381702_1095967752859895391_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=Uy8U4F_irZ4Q7kNvgGiC6qH&_nc_zt=23&_nc_ht=scontent.fmkz1-2.fna&_nc_gid=Arwc-smHv-2Csw29P7GZqVN&oh=00_AYAuOkHNTOwoONUeOhXkldVLRwGc-nzGJDrWmf9_MEG5dA&oe=676AA120" alt="Image 2" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="mt-1 grid grid-cols-3 gap-1">
    <!-- First Image -->
    <div class="w-34 h-34">
        <img src="https://scontent.fmkz1-2.fna.fbcdn.net/v/t39.30808-6/467730936_589809633715046_1131166506602066430_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=sMD-LBspo1wQ7kNvgHz2-kP&_nc_zt=23&_nc_ht=scontent.fmkz1-2.fna&_nc_gid=A7saqxSw8la6v4RipViS71G&oh=00_AYCEliCITSCJ-aYH6eb1g-p64dvPPo_oMQfF8OFMoAGuuQ&oe=676AB11E" alt="Image 3" class="w-full h-full object-cover">
    </div>

    <!-- Second Image -->
    <div class="w-34 h-34">
        <img src="https://scontent.fmkz1-1.fna.fbcdn.net/v/t39.30808-6/467713022_589809653715044_1243775729026650509_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=127cfc&_nc_ohc=5HoGUNm0vCsQ7kNvgG3fupO&_nc_zt=23&_nc_ht=scontent.fmkz1-1.fna&_nc_gid=Ag_3m_ABIQsP6vU48tPOH-8&oh=00_AYClOhnMi3sP10IZgEDsCcy_iQMh9UoHsSFoD9_Wdg-Xag&oe=676A9E3E" alt="Image 4" class="w-full h-full object-cover">
    </div>

    <!-- Third Image with Overlay -->
    <div class="w-34 h-34 relative">
        <img src="https://scontent.fmkz1-1.fna.fbcdn.net/v/t39.30808-6/467502606_589809723715037_5634366192346471974_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_ohc=bgc-ih43eTgQ7kNvgHMnOJZ&_nc_zt=23&_nc_ht=scontent.fmkz1-1.fna&_nc_gid=AchK8caAqbmFKgq8cV18EXY&oh=00_AYDZWgPEpXXVllHQipCzesTRiAzzALIUwM1WIhJutN7tYg&oe=676A9135" alt="Image 5" class="w-full h-full object-cover">
        <!-- Overlay with +5 Text -->
        <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center cursor-pointer" onclick="openImage()">
            <span class="text-white text-2xl font-bold">+5</span>
        </div>
    </div>
</div>

<!-- Modal for Additional Image Gallery -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="relative max-w-2xl w-full">
        <!-- Image Gallery -->
        <div class="relative">
            <button onclick="closeImage()" class="absolute top-4 right-4 text-white text-2xl font-bold">X</button>
            <!-- Slide Show -->
            <div class="flex justify-center">
                <img id="modalImage" src="https://scontent.fmkz1-1.fna.fbcdn.net/v/t39.30808-6/467502606_589809723715037_5634366192346471974_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_ohc=bgc-ih43eTgQ7kNvgHMnOJZ&_nc_zt=23&_nc_ht=scontent.fmkz1-1.fna&_nc_gid=AchK8caAqbmFKgq8cV18EXY&oh=00_AYDZWgPEpXXVllHQipCzesTRiAzzALIUwM1WIhJutN7tYg&oe=676A9135" alt="Image 5" class="w-full h-full object-cover">
            </div>
            <!-- Navigation Arrows -->
            <button class="absolute top-1/2 left-0 transform -translate-y-1/2 text-white text-3xl" onclick="prevImage()">&#10094;</button>
            <button class="absolute top-1/2 right-0 transform -translate-y-1/2 text-white text-3xl" onclick="nextImage()">&#10095;</button>
        </div>
    </div>
</div>

<script>
    let currentImageIndex = 0;
    const images = [
        "https://scontent.fmkz1-2.fna.fbcdn.net/v/t39.30808-6/467730936_589809633715046_1131166506602066430_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=sMD-LBspo1wQ7kNvgHz2-kP&_nc_zt=23&_nc_ht=scontent.fmkz1-2.fna&_nc_gid=A7saqxSw8la6v4RipViS71G&oh=00_AYCEliCITSCJ-aYH6eb1g-p64dvPPo_oMQfF8OFMoAGuuQ&oe=676AB11E",
        "https://scontent.fmkz1-1.fna.fbcdn.net/v/t39.30808-6/467713022_589809653715044_1243775729026650509_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=127cfc&_nc_ohc=5HoGUNm0vCsQ7kNvgG3fupO&_nc_zt=23&_nc_ht=scontent.fmkz1-1.fna&_nc_gid=Ag_3m_ABIQsP6vU48tPOH-8&oh=00_AYClOhnMi3sP10IZgEDsCcy_iQMh9UoHsSFoD9_Wdg-Xag&oe=676A9E3E",
        "https://scontent.fmkz1-1.fna.fbcdn.net/v/t39.30808-6/467502606_589809723715037_5634366192346471974_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_ohc=bgc-ih43eTgQ7kNvgHMnOJZ&_nc_zt=23&_nc_ht=scontent.fmkz1-1.fna&_nc_gid=AchK8caAqbmFKgq8cV18EXY&oh=00_AYDZWgPEpXXVllHQipCzesTRiAzzALIUwM1WIhJutN7tYg&oe=676A9135",
        "https://via.placeholder.com/400x400?text=Image+4",
        "https://via.placeholder.com/400x400?text=Image+5"
    ];

    // Function to open the modal
    function openImage() {
        document.getElementById("imageModal").classList.remove("hidden");
        displayImage(currentImageIndex);
    }

    // Function to close the modal
    function closeImage() {
        document.getElementById("imageModal").classList.add("hidden");
    }

    // Function to display the image based on index
    function displayImage(index) {
        const image = document.getElementById("modalImage");
        image.src = images[index];
    }

    // Function to go to the previous image
    function prevImage() {
        currentImageIndex = (currentImageIndex === 0) ? images.length - 1 : currentImageIndex - 1;
        displayImage(currentImageIndex);
    }

    // Function to go to the next image
    function nextImage() {
        currentImageIndex = (currentImageIndex === images.length - 1) ? 0 : currentImageIndex + 1;
        displayImage(currentImageIndex);
    }
</script>



        

</body>
</html>