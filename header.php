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

    <header class="w-full bg-[#F3BF01] text-white px-4 py-10 rounded-b-[50px]">
        <div class="flex items-center justify-between px-4">
            <div class="">
                <button id="hamburger" class="text-[#181C14] text-2xl">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>

            <div class="flex items-center">
                <img src="https://i.pinimg.com/736x/77/67/26/7767263d0002e31bbf715dcaef60af09.jpg" alt="Profile" class="w-14 h-14 rounded-full">
            </div>
        </div>
    
        <div class="text-left mt-6 px-4">
            <h1 class="text-xl font-bold text-[#181C14]">BABY SHOP</h1>
            <p id="motivational-message" class="text-sm text-[#181C14] mt-2">Great companies are built by great people.</p>
        </div>
    </header>

    <div id="menu" class="fixed inset-0 bg-[#F3BF01] text-white transform -translate-x-full transition-transform duration-300 overflow-y-auto z-[9999]">
        <div class="flex items-center justify-between px-4 py-10 bg-white h-32">
            <div class="px-2">
                <button id="closeMenu" class="bg-[#181C14] text-white text-md px-4 py-2 rounded-full">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
            </div>
            <div class="flex-1 text-center">
                <h1 class="text-xl font-semibold text-[#181C14]">Baby Shop</h1>
            </div>
            <div class="px-4">
                <img src="https://i.pinimg.com/736x/77/67/26/7767263d0002e31bbf715dcaef60af09.jpg" alt="Profile" class="w-14 h-14 rounded-full">
            </div>
        </div>

        <div class="px-2 py-4 mt-10">
            <h2 class="text-[#181C14] text-xl font-bold px-4">Explore More</h2>
            <div class="grid grid-cols-2 gap-2 px-4 py-4">
            <a href="order approve/order-approve.php">
                <div class="bg-[#F2F2F2] text-center p-2 rounded-[20px] flex flex-col items-center justify-center h-[200px] relative">
                    <div class="absolute top-2 right-2 bg-yellow-400 text-[#181C14] text-sm rounded-full px-4 py-2">1</div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#181C14">
                        <path d="M280-280h280v-80H280v80Zm0-160h400v-80H280v80Zm0-160h400v-80H280v80Zm-80 480q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/>
                    </svg>
                    <p class="text-[#181C14] text-sm mt-2">Order to approve</p>
                </div>
            </a>

            <a href="category product/cart.php">
                <div class="bg-[#F2F2F2] text-center p-2 rounded-[20px] flex flex-col items-center justify-center h-[200px]">
                    <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#181C14">
                        <path d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"/>
                    </svg>
                    <p class="text-[#181C14] text-sm mt-2">My cart</p>
                </div>
            </a>

            <a href="category product/category.php">
                <div class="bg-[#F2F2F2] text-center p-2 rounded-[20px] flex flex-col items-center justify-center h-[200px]">
                    <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#181C14">
                        <path d="m260-520 220-360 220 360H260ZM700-80q-75 0-127.5-52.5T520-260q0-75 52.5-127.5T700-440q75 0 127.5 52.5T880-260q0 75-52.5 127.5T700-80Zm-580-20v-320h320v320H120Zm580-60q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Zm-500-20h160v-160H200v160Zm202-420h156l-78-126-78 126Zm78 0ZM360-340Zm340 80Z"/>
                    </svg>
                    <p class="text-[#181C14] text-sm mt-2">Category</p>
                </div>
            </a>

            <a href="save product/save-product.php">
                <div class="bg-[#F2F2F2] text-center p-2 rounded-[20px] flex flex-col items-center justify-center h-[200px]">
                    <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#181C14">
                        <path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z"/>
                    </svg>
                    <p class="text-[#181C14] text-sm mt-2">Saved</p>
                </div>
            </a>

            </div>
        </div>

        <div class="px-2 py-4 mt-6">
            <h2 class="text-[#181C14] text-xl font-bold px-4">More</h2>
            <div class="grid grid-cols-1 gap-2 px-4 py-4">
                <a href="account/account.php" class="bg-[#F2F2F2] text-center px-4 py-4 rounded-[20px] flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#181C14">
                            <path d="M841-518v318q0 33-23.5 56.5T761-120H201q-33 0-56.5-23.5T121-200v-318q-23-21-35.5-54t-.5-72l42-136q8-26 28.5-43t47.5-17h556q27 0 47 16.5t29 43.5l42 136q12 39-.5 71T841-518Zm-272-42q27 0 41-18.5t11-41.5l-22-140h-78v148q0 21 14 36.5t34 15.5Zm-180 0q23 0 37.5-15.5T441-612v-148h-78l-22 140q-4 24 10.5 42t37.5 18Zm-178 0q18 0 31.5-13t16.5-33l22-154h-78l-40 134q-6 20 6.5 43t41.5 23Zm540 0q29 0 42-23t6-43l-42-134h-76l22 154q3 20 16.5 33t31.5 13ZM201-200h560v-282q-5 2-6.5 2H751q-27 0-47.5-9T663-518q-18 18-41 28t-49 10q-27 0-50.5-10T481-518q-17 18-39.5 28T393-480q-29 0-52.5-10T299-518q-21 21-41.5 29.5T211-480h-4.5q-2.5 0-5.5-2v282Zm560 0H201h560Z"/>
                        </svg>
                        <p class="text-[#181C14] text-sm">My account</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#181C14">
                            <path d="M9.29 16.29L13.59 12 9.29 7.71 10.71 6.29 15.71 12 10.71 17.71z"/>
                        </svg>
                    </div>
                </a>

                <a href="setting.php" class="bg-[#F2F2F2] text-center px-4 py-4 rounded-[20px] flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#181C14">
                            <path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/>
                        </svg>
                        <p class="text-[#181C14] text-sm">Setting</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#181C14">
                            <path d="M9.29 16.29L13.59 12 9.29 7.71 10.71 6.29 15.71 12 10.71 17.71z"/>
                        </svg>
                    </div>
                </a>

                <a href="ticket.php" class="bg-[#F2F2F2] text-center px-4 py-4 rounded-[20px] flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#181C14">
                            <path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm0-160q17 0 28.5-11.5T520-480q0-17-11.5-28.5T480-520q-17 0-28.5 11.5T440-480q0 17 11.5 28.5T480-440Zm0-160q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm320 440H160q-33 0-56.5-23.5T80-240v-160q33 0 56.5-23.5T160-480q0-33-23.5-56.5T80-560v-160q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v160q-33 0-56.5 23.5T800-480q0 33 23.5 56.5T880-400v160q0 33-23.5 56.5T800-160Zm0-80v-102q-37-22-58.5-58.5T720-480q0-43 21.5-79.5T800-618v-102H160v102q37 22 58.5 58.5T240-480q0 43-21.5 79.5T160-342v102h640ZM480-480Z"/>
                        </svg>
                        <p class="text-[#181C14] text-sm">Submit ticket</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="http://www.w3.org/2000/svg" width="24px" fill="#181C14">
                            <path d="M9.29 16.29L13.59 12 9.29 7.71 10.71 6.29 15.71 12 10.71 17.71z"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('hamburger').addEventListener('click', function() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('-translate-x-full');
        });

        document.getElementById('closeMenu').addEventListener('click', function() {
            const menu = document.getElementById('menu');
            menu.classList.add('-translate-x-full');
        });
    </script>

    <div class="fixed bottom-10 left-4 right-4 bg-[#F3BF01] py-4 px-4 rounded-full z-[999]">
        <div class="flex justify-around">
            <a href="feeds.php" class="bg-white rounded-full p-4">
                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                    <path d="m300-300 280-80 80-280-280 80-80 280Zm180-120q-25 0-42.5-17.5T420-480q0-25 17.5-42.5T480-540q25 0 42.5 17.5T540-480q0 25-17.5 42.5T480-420Zm0 340q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Zm0-320Z"/>
                </svg>
            </a>
            <a href="#" class="bg-white rounded-full p-4">
                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                    <path d="M444-200h70v-50q50-9 86-39t36-89q0-42-24-77t-96-61q-60-20-83-35t-23-41q0-26 18.5-41t53.5-15q32 0 50 15.5t26 38.5l64-26q-11-35-40.5-61T516-710v-50h-70v50q-50 11-78 44t-28 74q0 47 27.5 76t86.5 50q63 23 87.5 41t24.5 47q0 33-23.5 48.5T486-314q-33 0-58.5-20.5T390-396l-66 26q14 48 43.5 77.5T444-252v52Zm36 120q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
                </svg>
            </a>
            <a href="home.php" class="bg-[#181C14] rounded-full p-4">
                <img src="assets/q.png" alt="Icon" class="w-6 h-6"/>
            </a>
            <a href="notification.php" class="bg-white rounded-full p-4">
                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                    <path d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"/>
                </svg>
            </a>
            <a href="account/account.php" class="bg-white rounded-full p-4">
                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#181C14">
                    <path d="M841-518v318q0 33-23.5 56.5T761-120H201q-33 0-56.5-23.5T121-200v-318q-23-21-35.5-54t-.5-72l42-136q8-26 28.5-43t47.5-17h556q27 0 47 16.5t29 43.5l42 136q12 39-.5 71T841-518Zm-272-42q27 0 41-18.5t11-41.5l-22-140h-78v148q0 21 14 36.5t34 15.5Zm-180 0q23 0 37.5-15.5T441-612v-148h-78l-22 140q-4 24 10.5 42t37.5 18Zm-178 0q18 0 31.5-13t16.5-33l22-154h-78l-40 134q-6 20 6.5 43t41.5 23Zm540 0q29 0 42-23t6-43l-42-134h-76l22 154q3 20 16.5 33t31.5 13ZM201-200h560v-282q-5 2-6.5 2H751q-27 0-47.5-9T663-518q-18 18-41 28t-49 10q-27 0-50.5-10T481-518q-17 18-39.5 28T393-480q-29 0-52.5-10T299-518q-21 21-41.5 29.5T211-480h-4.5q-2.5 0-5.5-2v282Zm560 0H201h560Z"/>
                </svg>
            </a>
        </div>
    </div>

    <script>
        const motivationalMessages = [
            "Success is the result of hard work and determination.",
            "Believe in yourself and all that you are.",
            "Every day is a chance to improve yourself.",
            "Dream big and dare to fail.",
            "Great things never come from comfort zones.",
            "Stay positive, work hard, make it happen."
        ];

        function getGreeting() {
            const hours = new Date().getHours();
            if (hours < 12) {
                return "Good morning!";
            } else if (hours < 18) {
                return "Good afternoon!";
            } else {
                return "Good evening!";
            }
        }

        function updateMessage() {
            const messageElement = document.getElementById('motivational-message');
            const randomMessage = motivationalMessages[Math.floor(Math.random() * motivationalMessages.length)];
            const greeting = getGreeting();
            messageElement.textContent = `${greeting} ${randomMessage}`;
        }

        setInterval(updateMessage, 60 * 60 * 1000);
        updateMessage();
    </script>

</body>
</html>