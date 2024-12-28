<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Purchase-To Pay</title>
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
        <a href="../home.php">
            <div class="bg-[#181C14] rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </div>
        </a>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">My Purchase</h1>
    </div>

    <div class="mt-10 px-4">
        <div class="bg-[#181C14] rounded-[20px] p-6">
            <div class="flex justify-between text-center items-center">
            <div>
                <a href="to-pay.php" class="block">
                    <div class="bg-[#F3BF01] w-32 h-12 flex items-center justify-center rounded-full px-4 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14" class="flex-shrink-0">
                            <path d="M560-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM280-320q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80h400q0-33 23.5-56.5T840-480v-160q-33 0-56.5-23.5T760-720H360q0 33-23.5 56.5T280-640v160q33 0 56.5 23.5T360-400Zm440 240H120q-33 0-56.5-23.5T40-240v-440h80v440h680v80ZM280-400v-320 320Z"/>
                        </svg>
                        <span class="text-sm font-medium text-[#181C14] ml-2">To Pay</span>
                    </div>
                </a>
            </div>

            <div>
                <a href="to-ship.php" class="block">
                    <div class="bg-[#F3BF01] w-12 h-12 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                            <path d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-80 92L160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11Zm200-528 77-44-237-137-78 45 238 136Zm-160 93 78-45-237-137-78 45 237 137Z"/>
                        </svg>
                    </div>
                </a>
            </div>

            <div>
                <a href="to-receive.php" class="block">
                    <div class="bg-[#F3BF01] w-12 h-12 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                            <path d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z"/>
                        </svg>
                    </div>
                </a>
            </div>

            <div>
                <a href="to-cancel.php" class="block">
                    <div class="bg-[#F3BF01] w-12 h-12 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                            <path d="m480-320 56-56-63-64h167v-80H473l63-64-56-56-160 160 160 160ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h168q13-36 43.5-58t68.5-22q38 0 68.5 22t43.5 58h168q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm280-590q13 0 21.5-8.5T510-820q0-13-8.5-21.5T480-850q-13 0-21.5 8.5T450-820q0 13 8.5 21.5T480-790ZM200-200v-560 560Z"/>
                        </svg>
                    </div>
                </a>
            </div>

            </div>
        </div>
    </div>

    <div class="mt-10 px-4">
        <div class="bg-white rounded-[20px] p-4">
            <a href="to-pay-details.php" class="block">
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
            </a>
    
            <hr class="my-4 border-gray-300">
    
            <div class="flex justify-between items-center">
                <p class="text-md font-semibold text-[#181C14]">Total 10 item(s)</p>
                <p class="text-md font-semibold text-[#181C14]">RM14990.00</p>
            </div>

            <div class="flex space-x-4 mt-4">
                <button class="w-1/2 bg-white border-2 border-[#F3BF01] text-[#181C14] py-3 rounded-full">Cancel order</button>
                <button class="w-1/2 bg-[#F3BF01] text-[#181C14] py-3 rounded-full">Pay</button>
            </div>
        </div>
    </div>

</body>
</html>