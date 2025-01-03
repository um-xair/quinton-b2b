<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order To Approve</title>
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
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Order To Approve</h1>
    </div>

    <div class="mt-10 px-4">
        <div class="bg-white rounded-[20px] p-4">
            <a href="order-details.php" class="flex items-center space-x-6">
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
            </a>
    
            <hr class="my-4 border-gray-300">
    
            <div class="flex justify-between items-center">
                <p class="text-md font-semibold text-[#181C14]">Total 10 item(s)</p>
                <p class="text-md font-semibold text-[#181C14]">RM14990.00</p>
            </div>

            <div class="flex space-x-4 mt-4">
                <button class="w-1/2 bg-white border-2 border-[#F3BF01] text-[#181C14] py-3 rounded-full" onclick="window.location.href='#'">Reject</button>
                <button class="w-1/2 bg-[#F3BF01] text-[#181C14] py-3 rounded-full" onclick="window.location.href='approve-msg.php'">Approve</button>
            </div>
        </div>
    </div>
</body>
</html>