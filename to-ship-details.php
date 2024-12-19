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
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Order Details</h1>
    </div>

    <div class="mt-10 px-4 relative">
        <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2 w-80 h-1 bg-[#E0E0E0] rounded-full"></div>

        <div class="grid grid-cols-4 gap-4 text-center relative z-10">
            <div>
                <div class="bg-[#F3BF01] w-12 h-12 mx-auto flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                        <path d="M560-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM280-320q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80h400q0-33 23.5-56.5T840-480v-160q-33 0-56.5-23.5T760-720H360q0 33-23.5 56.5T280-640v160q33 0 56.5 23.5T360-400Zm440 240H120q-33 0-56.5-23.5T40-240v-440h80v440h680v80ZM280-400v-320 320Z"/>
                    </svg>
                </div>
                <p class="mt-2 text-xs text-[#181C14]">order placed</p>
            </div>
            <div>
                <div class="bg-[#F3BF01] w-12 h-12 mx-auto flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                        <path d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-80 92L160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11Zm200-528 77-44-237-137-78 45 238 136Zm-160 93 78-45-237-137-78 45 237 137Z"/>
                    </svg>
                </div>
                <p class="mt-2 text-xs text-[#181C14]">waiting for courier</p>
            </div>
            <div>
                <div class="bg-[#F3BF01] w-12 h-12 mx-auto flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                        <path d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z"/>
                    </svg>
                </div>
                <p class="mt-2 text-xs text-[#181C14]">in transit</p>
            </div>
            <div>
                <div class="bg-[#F3BF01] w-12 h-12 mx-auto flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                        <path d="m480-320 56-56-63-64h167v-80H473l63-64-56-56-160 160 160 160ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h168q13-36 43.5-58t68.5-22q38 0 68.5 22t43.5 58h168q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm280-590q13 0 21.5-8.5T510-820q0-13-8.5-21.5T480-850q-13 0-21.5 8.5T450-820q0 13 8.5 21.5T480-790ZM200-200v-560 560Z"/>
                    </svg>
                </div>
                <p class="mt-2 text-xs text-[#181C14]">order delivered</p>
            </div>
        </div>
    </div>


    <div class="mt-6 px-4">
        <div class="bg-white rounded-[20px]">
            <div class="flex items-center justify-between bg-[#F3BF01] p-4 rounded-t-[20px]">
                <div class="flex items-center">
                    <label for="defaultAddress" class="text-md">Default Address</label>
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
        <div class="bg-white rounded-[20px] px-4 py-6">
            <div class="flex items-center space-x-6">
                <div class="w-40 h-24 bg-[#F2F2F2] rounded-[10px] p-2 flex items-center justify-center">
                    <img src="assets/Nior Creamy White.webp" alt="Stroller" class="w-full h-full object-cover">
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
                    <p class="text-md">Support Center</p>
                </div>
            </div>
            <div class="mt-4 px-4 pb-6 flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <i class="fa-regular fa-comment text-[#181C14] text-xl"></i>
                    <span class="text-md text-[#181C14]">Contact Sales Person</span>
                </div>
                <i class="fas fa-chevron-right text-[#181C14] text-xl"></i>
            </div>
        </div>
    </div>

    <div class="mt-6 px-4">
        <div class="bg-white rounded-[20px]">
            <div class="flex items-center justify-between bg-[#F3BF01] p-4 rounded-t-[20px]">
                <div class="flex items-center">
                    <label for="defaultAddress" class="text-md">Order ID</label>
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
        <div class="bg-white rounded-[20px]">
            <div class="flex items-center justify-between bg-[#F3BF01] p-4 rounded-t-[20px]">
                <div class="flex items-center">
                    <label for="defaultAddress" class="text-md">Payment Details</label>
                </div>
            </div>
            <div class="mt-4 px-4 pb-4">
                <div class="flex justify-between items-center">
                    <p class="text-[#181C14] text-md">Merchandise Subtotal</p>
                    <p class="text-[#181C14] text-md font-medium">RM 2998.00</p>
                </div>
                <div class="flex justify-between items-center mt-2">
                    <p class="text-[#181C14] text-md">Shipping Fee</p>
                    <p class="text-[#181C14] text-md font-medium">RM 0</p>
                </div>
                <div class="flex justify-between items-center mt-2">
                    <p class="text-[#181C14] text-md">Discount</p>
                    <p class="text-[#181C14] text-md font-medium">RM 0</p>
                </div>
                <div class="flex justify-between items-center mt-2">
                    <p class="text-[#181C14] text-md">Total Payment</p>
                    <p class="text-[#181C14] text-md font-medium">RM 2998.00</p>
                </div>
            </div>

        </div>
    </div>

    <div class="fixed bottom-10 left-4 right-4 bg-[#F3BF01] py-4 px-4 rounded-full z-[999]">
        <div class="flex justify-around gap-2">
            <button class="w-1/2 bg-white text-[#181C14] py-3 rounded-full">Cancel Order</button>
            <button class="w-1/2 bg-[#181C14] text-white py-3 rounded-full">Contact Seller</button>
        </div>
    </div>

</body>
</html>