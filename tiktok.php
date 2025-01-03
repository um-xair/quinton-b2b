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
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Tiktok</h1>
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
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold">From Quinton</h2>
            <div class="bg-[#181C14] rounded-full p-2">
                <a href="tiktok.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="#fff" viewBox="0 0 24 24">
                        <path d="M9.29 16.29L13.59 12 9.29 7.71 10.71 6.29 15.71 12 10.71 17.71z"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2">
            <div class="w-full h-auto">
                <video class="w-full h-auto object-cover rounded-[10px]" autoplay muted loop controls onclick="openFullscreen(this)">
                    <source src="assets/tiktok.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="w-full h-auto">
                <video class="w-full h-auto object-cover rounded-[10px]" autoplay muted loop controls onclick="openFullscreen(this)">
                    <source src="assets/tiktok2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

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
        
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2">
            <div class="w-full h-auto">
                <video class="w-full h-auto object-cover rounded-[10px]" autoplay muted loop controls onclick="openFullscreen(this)">
                    <source src="assets/tiktok3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <script>
        function openFullscreen(videoElement) {
            if (videoElement.requestFullscreen) {
                videoElement.requestFullscreen();
            } else if (videoElement.mozRequestFullScreen) { // Firefox
                videoElement.mozRequestFullScreen();
            } else if (videoElement.webkitRequestFullscreen) { // Chrome, Safari and Opera
                videoElement.webkitRequestFullscreen();
            } else if (videoElement.msRequestFullscreen) { // IE/Edge
                videoElement.msRequestFullscreen();
            }
        }
    </script>

</body>
</html>
