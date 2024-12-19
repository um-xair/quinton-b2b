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
        <a href="account.php">
            <div class="bg-[#181C14] rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </div>
        </a>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Track Order</h1>
    </div>

    <div class="mt-6 px-4">
        <div class="bg-white rounded-[20px]">
            <div class="flex items-center justify-between bg-[#F3BF01] p-4 rounded-t-[20px]">
                <div class="flex items-center">
                    <label for="defaultAddress" class="text-md">J&T Express Standard Shipping</label>
                </div>
            </div>
            <div class="mt-4 p-4">
                <div class="flex items-center space-x-2 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#181C14">
                        <path d="M360-240q-33 0-56.5-23.5T280-320v-480q0-33 23.5-56.5T360-880h360q33 0 56.5 23.5T800-800v480q0 33-23.5 56.5T720-240H360Zm0-80h360v-480H360v480ZM200-80q-33 0-56.5-23.5T120-160v-560h80v560h440v80H200Zm160-240v-480 480Z"/>
                    </svg>
                    <p class="text-[#181C14] text-md">98989818373-P</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 px-4">
        <div class="flex items-center relative">
            <div class="flex flex-col items-center">
                <div class="w-6 h-6 bg-[#F3BF01] rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="h-full bg-[#F3BF01]"></div>
            </div>
            <div class="ml-4 text-[#181C14]">
                <p class="text-sm">Today 2:40 PM</p>
                <h3 class="font-bold">Departed from sorting center</h3>
                <p class="">Left the CDC SENAI 315 sorting center in <span class="font-bold">KULAI</span>.</p>
            </div>
        </div>
        <div class="flex items-center relative mt-8">
            <div class="flex flex-col items-center">
                <div class="w-6 h-6 bg-[#F3BF01] rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="h-full w-1 bg-transparent"></div>
            </div>
            <div class="ml-4 text-[#181C14]">
                <p class="text-sm">Dec 5 10:40 AM</p>
                <h3 class="font-bold">Package picked up</h3>
                <p class="">Your package has been collected by our carrier in <span class="font-bold">JOHOR BAHRU</span>.</p>
            </div>
        </div>
    </div>

    

</body>
</html>