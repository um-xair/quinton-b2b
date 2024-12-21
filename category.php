<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#F2F2F2] overflow-auto">

    <div class="flex items-center px-6 py-2 bg-[#F3BF01] h-32">
        <a href="home.php">
            <div class="bg-[#181C14] rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </div>
        </a>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">All category</h1>
    </div>

    <div class="mt-10 px-4">
        <div class="grid grid-cols-3 gap-4 mb-6">
            <div class="text-center">
                <a href="stroller.php">
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
            <div class="text-center">
                <a href="#">
                    <img src="assets/playpen.webp" alt="Category Image 1" class="w-full h-auto object-cover rounded-[20px]">
                    <p class="mt-2 text-xs text-[#181C14]">Playpen</p>
                </a>
            </div>
        </div>
    </div>

</body>
</html>