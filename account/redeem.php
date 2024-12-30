<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redeem</title>
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
            <a href="account.php" class="bg-[#F3BF01] rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#181C14" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </a>
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
        <div id="redeem-box" class="flex items-center bg-white px-4 py-4 rounded-full transition-all">
            <div id="redeem-img" class="w-32 h-32 bg-[#F3BF01] rounded-full flex items-center justify-center transition-all">
                <img src="../assets/redeem.png" alt="Product Image" class="w-24 h-24 object-cover rounded-full">
            </div>

            <div class="ml-4 flex flex-col justify-between">
                <div>
                    <p class="text-lg font-semibold text-[#181C14]">OGAWA Master</p>
                    <p class="text-xs text-[#181C14] mt-1">20,000 points to redeem</p>
                </div>
                <div class="mt-2">
                    <button id="redeem-btn" class="bg-[#181C14] text-white px-6 py-2 rounded-[10px]">Redeem NOW!</button>
                </div>
            </div>
        </div>
    </div>
        
</body>
</html>
