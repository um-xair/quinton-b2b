<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onboarding</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hidden { 
            display: none; 
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        @keyframes slideUp {
            0% {
            transform: translateY(250px);
            }
            100% {
                transform: translateY(0);
            }
        }

        .slide-up {
            animation: slideUp 1s ease-out forwards;
        }
    </style>
</head>
<body class="bg-white flex items-center justify-center h-screen">

    <div id="page1" class="w-full flex flex-col h-full">
        <img src="assets/pic.jpg" alt="boarding-img" class="mt-20 w-full max-w-[450px] mb-4 mx-auto">
        <div class="bg-[#F3BF01] rounded-t-[50px] p-10 flex flex-col justify-between flex-grow slide-up">
            <div class="flex-grow mb-6">
                <h1 class="text-2xl text-[#1E201E] font-extrabold mb-2">Improved Collaboration</h1>
                <p class="text-sm text-[#1E201E]">
                    Enhance team collaboration with shared workspaces, real-time updates, and efficient communication tools.
                </p>
            </div>
            <div class="flex justify-between items-center">
                <button class="text-lg text-[#1E201E] underline" onclick="skip()">Skip</button>
                <button class="text-lg bg-[#1E201E] text-white px-4 py-4 rounded-[30px] font-semibold flex items-center justify-center" onclick="nextPage(2)">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                        <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="page2" class="w-full flex flex-col h-full hidden">
        <img src="assets/pic.jpg" alt="boarding-img" class="mt-20 w-full max-w-[450px] mb-4 mx-auto">
        <div class="bg-[#F3BF01] rounded-t-[50px] p-10 flex flex-col justify-between flex-grow">
            <div class="flex-grow mb-6">
                <h1 class="text-2xl font-extrabold mb-2 text-[#1E201E]">Efficient Order Management</h1>
                <p class="text-sm text-[#1E201E] mb-6">
                    Streamline your order processes with real-time tracking, inventory management, and automated notifications
                </p>
            </div>

            <div class="flex justify-between items-center">
                <button class="text-lg text-[#1E201E] underline" onclick="skip()">Skip</button>
                <button class="text-lg bg-[#1E201E] text-white px-4 py-4 rounded-[30px] font-semibold flex items-center justify-center" onclick="nextPage(3)">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                        <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="page3" class="w-full flex flex-col h-full hidden">
        <img src="assets/pic.jpg" alt="boarding-img" class="mt-20 w-full max-w-[450px] mb-4 mx-auto">
        <div class="bg-[#F3BF01] rounded-t-[50px] p-10 flex flex-col justify-between flex-grow">
            <div class="flex-grow mb-6">
                <h1 class="text-2xl font-extrabold mb-2 text-[#1E201E]">24/7 Accessibility</h1>
                <p class="text-sm text-[#1E201E] mb-6">Access your business data and manage operations anytime, anywhere, with mobile and web app compatibility</p>
            </div>

            <div class="flex justify-between items-center">
                <button class="text-lg bg-[#1E201E] w-full text-white px-10 py-3 rounded-[30px] font-semibold" onclick="skip()">Get Started</button>
            </div>
        </div>
    </div>

    <script>
        function nextPage(pageNumber) {
            for (let i = 1; i <= 3; i++) {
                document.getElementById(`page${i}`).classList.add('hidden');
            }
            document.getElementById(`page${pageNumber}`).classList.remove('hidden');
        }

        function skip() {
            window.location.href = "login.php";
        }
    </script>
</body>
</html>
