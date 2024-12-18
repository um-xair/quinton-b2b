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
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Address</h1>
    </div>

    <div class="mt-10 px-4">
        <div class="bg-white rounded-[20px]">
            <div class="flex items-center justify-between bg-[#F3BF01] p-4 rounded-t-[20px]">
                <div class="flex items-center">
                    <input type="radio" id="defaultAddress" name="address" class="mr-2 w-4 h-4">
                    <label for="defaultAddress" class="text-lg">Default Address</label>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="p-2 bg-black text-white rounded-full hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                            <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                        </svg>
                    </button>
                    <button class="p-2 bg-red-500 text-white rounded-full hover:bg-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                            <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-4 px-4 pb-6">
                <div class="flex items-center space-x-2 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#181C14">
                        <path d="M160-120q-33 0-56.5-23.5T80-200v-440q0-33 23.5-56.5T160-720h160v-80q0-33 23.5-56.5T400-880h160q33 0 56.5 23.5T640-800v80h160q33 0 56.5 23.5T880-640v440q0 33-23.5 56.5T800-120H160Zm240-600h160v-80H400v80Zm400 360H600v80H360v-80H160v160h640v-160Zm-360 0h80v-80h-80v80Zm-280-80h200v-80h240v80h200v-200H160v200Zm320 40Z"/>
                    </svg>
                    <p class="font-bold text-[#181C14] text-lg">Work Address</p>
                </div>
                <hr class="mt-4 mb-4 border-t border-gray-300">
                <p class="font-bold text-[#181C14] text-lg">Quinton Baby</p>
                <p class="text-[#181C14] mt-1">(+60) 12-383 6148</p>

                <p class="text-[#181C14] text-sm mt-2">PT 11, Jalan Perindustrian Mahsan, Mahsan</p>
                <p class="text-[#181C14] text-sm mt-1">72100, Bahau, Negeri Sembilan</p>
                <p class="text-[#181C14] text-sm mt-1">Malaysia</p>
            </div>
        </div>
    </div>

    <div class="mt-10 px-4">
        <div class="bg-white rounded-[20px]">
            <div class="flex items-center justify-between bg-[#F3BF01] p-4 rounded-t-[20px]">
                <div class="flex items-center">
                    <input type="radio" id="defaultAddress" name="address" class="mr-2 w-4 h-4">
                    <label for="defaultAddress" class="text-lg">Additional Address</label>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="p-2 bg-black text-white rounded-full hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                            <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                        </svg>
                    </button>
                    <button class="p-2 bg-red-500 text-white rounded-full hover:bg-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                            <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-4 px-4 pb-6">
                <div class="flex items-center space-x-2 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#181C14">
                        <path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/>
                    </svg>
                    <p class="font-bold text-[#181C14] text-lg">Home address</p>
                </div>
                <hr class="mt-4 mb-4 border-t border-gray-300">
                <p class="font-bold text-[#181C14] text-lg">Alyssa Umairah</p>
                <p class="text-[#181C14] mt-1">(+60) 11-6226 0866</p>

                <p class="text-[#181C14] text-sm mt-2">NO 473, Jalan Bahau 2/22, Taman Bahau</p>
                <p class="text-[#181C14] text-sm mt-1">72100, Bahau, Negeri Sembilan</p>
                <p class="text-[#181C14] text-sm mt-1">Malaysia</p>
            </div>
        </div>
    </div>

    <div class="fixed bottom-10 left-0 w-full px-6 z-[999]">
        <button type="submit" class="w-full bg-[#181C14] px-4 py-4 rounded-full text-white font-bold">Add New</button>
    </div>
</body>
</html>