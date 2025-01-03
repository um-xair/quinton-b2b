<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
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
        <a href="order-approve.php">
            <div class="bg-[#181C14] rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </div>
        </a>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Order Details</h1>
    </div>

    <div class="mt-10 px-4">
        <div class="bg-white rounded-[20px]">
            <div class="flex items-center justify-between bg-[#F3BF01] p-4 rounded-t-[20px]">
                <div class="flex items-center">
                    <p>Address</p>
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

    <div class="mt-6 px-4">
        <div class="bg-white rounded-[20px] p-4">
            <div class="flex items-center space-x-6">
                <div class="w-40 h-24 bg-[#F2F2F2] rounded-[10px] p-2 flex items-center justify-center">
                    <img src="../assets/Nior Creamy White.webp" alt="Stroller" class="w-full h-full object-cover">
                </div>
    
                <div class="flex flex-col space-y-2 w-full">
                    <h2 class="text-lg font-bold text-[#181C14]">Nior Stroller</h2>
                    <p class="text-sm text-gray-500">Variation: Black</p>
                    <div class="flex justify-between items-center mt-4">
                        <p class="text-lg font-semibold text-[#181C14]">RM1499.00</p>
                        <span class="text-lg font-bold text-[#181C14]">x10</span>
                    </div>
                </div>
            </div>
    
            <hr class="my-4 border-gray-300">
    
            <div class="flex justify-between items-center">
                <p class="text-md font-semibold text-[#181C14]">Total 10 item(s)</p>
                <p class="text-md font-semibold text-[#181C14]">RM14990.00</p>
            </div>
        </div>
    </div>

    <div class="mt-6 px-4">
        <div class="bg-white rounded-[20px]">
            <div class="flex items-center justify-between bg-[#F3BF01] p-4 rounded-t-[20px]">
                <div class="flex items-center">
                    <p>Support Center</p>
                </div>
            </div>
            <div class="mt-4 px-4 pb-6 flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <i class="fa-regular fa-comment text-[#181C14] text-xl"></i>
                    <span class="text-sm text-[#181C14]">Contact Sales Person</span>
                </div>
                <i class="fas fa-chevron-right text-[#181C14] text-xl"></i>
            </div>
        </div>
    </div>

    <div class="fixed bottom-10 left-4 right-4 bg-[#F3BF01] py-4 px-4 rounded-full z-[999]">
        <div class="flex justify-around gap-2">
            <button class="w-1/2 bg-white border-2 border-[#F3BF01] text-[#181C14] py-3 rounded-full" onclick="window.location.href='#'">Reject</button>
            <button class="w-1/2 bg-[#181C14] text-white py-3 rounded-full" onclick="window.location.href='approve-msg.php'">Approve</button>            
        </div>
    </div>
    
</body>
</html>