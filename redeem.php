<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 200px;
        }
        .clip-container {
            background-color: #181C14;
            clip-path: circle(85% at 50% 0); 
            height: 60vh; 
            position: relative;
        }
    </style>
</head>
<body class="bg-[#F2F2F2]">

    <div class="clip-container">
        <div class="flex items-center px-6 py-2 h-32">
            <div class="bg-[#F3BF01] rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#181C14" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </div>
        </div>

        <div class="absolute top-10 left-1/2 transform -translate-x-1/2 mt-8">
            <div class="border-8 border-[#F3BF01] rounded-full">
                <div class="bg-[#F3BF01] border-8 border-[#FFFFFF] rounded-full w-60 h-60 flex flex-col justify-center items-center">
                    <div class="text-4xl font-bold text-[#181C14]">10,000</div>
                    <div class="text-sm text-[#181C14] mt-2 text-center">Points to redeem</div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4">
        <div class="flex items-center bg-white p-4 rounded-full shadow-lg">
            <div class="w-16 h-16 bg-[#F3BF01] rounded-full flex items-center justify-center">
                <img src="https://www.ogawaworld.net/image/cache/data/theme/products/Ogawa/OGAWA%20Master%20Drive%20AI%202.0/md-ai-2-0-black--1_180221112729-540x540_0.png" alt="Product Image" class="w-10 h-10 object-cover rounded-full">
            </div>

            <!-- Text section -->
            <div class="ml-4">
                <p class="text-xl font-semibold text-[#181C14]">OGAWA Master Drive AI 2.0</p>
                <p class="text-sm text-[#181C14] mt-1">20,000 points to redeem</p>
            </div>

            <!-- Button section -->
            <div class="ml-auto">
                <button class="bg-[#F3BF01] text-[#181C14] px-6 py-2 rounded-full font-semibold">Redeem NOW!</button>
            </div>
        </div>
    </div>

</body>
</html>
