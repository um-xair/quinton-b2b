<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-white overflow-auto mb-[200px]">
    
    <div class="flex items-center px-6 py-2 bg-[#F3BF01] h-32">
        <div class="bg-[#181C14] rounded-full p-2">
            <a href="home.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </a>
        </div>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">PROMOTION</h1>
    </div>

    <div class="mt-10 w-full px-4">
        <a href="promo.php">
            <img src="assets/banner.png" alt="Banner" class="w-full h-full object-cover">
        </a>
    </div>

    <div class="mt-10 px-4">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <div class="relative bg-[#F2F2F2] rounded-[20px] p-4">
                    <img src="assets/Nior Creamy White.webp" alt="Product" class="w-full h-full object-cover rounded-[20px]">
                    <div class="absolute top-2 right-2 bg-white rounded-full w-10 h-10 flex items-center justify-center">
                        <i class="fa-regular fa-heart text-[#F3BF01] text-xl cursor-pointer" onclick="toggleHeart(this)"></i>
                    </div>
                </div>
                <div class="mt-2 text-center">
                    <h3 class="text-sm text-[#181C14]">Nior Stroller</h3>
                    <p class="text-lg text-[#181C14] font-semibold">RM1499.00</p>
                </div>
            </div>
            <div>
                <div class="relative bg-[#F2F2F2] rounded-[20px] p-4">
                    <img src="assets/Nior Creamy White.webp" alt="Product" class="w-full h-full object-cover rounded-[20px]">
                    <div class="absolute top-2 right-2 bg-white rounded-full w-10 h-10 flex items-center justify-center">
                        <i class="fa-regular fa-heart text-[#F3BF01] text-xl cursor-pointer" onclick="toggleHeart(this)"></i>
                    </div>
                </div>
                <div class="mt-2 text-center">
                    <h3 class="text-sm text-[#181C14]">Nior Stroller</h3>
                    <p class="text-lg text-[#181C14] font-semibold">RM1499.00</p>
                </div>
            </div>
        </div>
    </div>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <script>
        function toggleHeart(iconElement) {
            if (iconElement.classList.contains('fa-regular')) {
                iconElement.classList.remove('fa-regular');
                iconElement.classList.add('fa-solid');
            } else {
                iconElement.classList.remove('fa-solid');
                iconElement.classList.add('fa-regular');
            }
        }
    </script>

  
</body>
</html>