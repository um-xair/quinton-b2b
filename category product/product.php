<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#F2F2F2] overflow-auto">

    <div class="flex items-center justify-between px-6 py-2 bg-[#F2F2F2] h-32">
        <a href="stroller.php">
            <div class="bg-[#F3BF01] rounded-full w-10 h-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </div>
        </a>

        <div class="flex gap-4">
            <a href="catalog.php">
                <div class="bg-white rounded-full w-10 h-10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#F3BF01">
                        <path d="M260-320q47 0 91.5 10.5T440-278v-394q-41-24-87-36t-93-12q-36 0-71.5 7T120-692v396q35-12 69.5-18t70.5-6Zm260 42q44-21 88.5-31.5T700-320q36 0 70.5 6t69.5 18v-396q-33-14-68.5-21t-71.5-7q-47 0-93 12t-87 36v394Zm-40 118q-48-38-104-59t-116-21q-42 0-82.5 11T100-198q-21 11-40.5-1T40-234v-482q0-11 5.5-21T62-752q46-24 96-36t102-12q58 0 113.5 15T480-740q51-30 106.5-45T700-800q52 0 102 12t96 36q11 5 16.5 15t5.5 21v482q0 23-19.5 35t-40.5 1q-37-20-77.5-31T700-240q-60 0-116 21t-104 59ZM280-494Z"/>
                    </svg>
                </div>
            </a>
            
            <div class="bg-white rounded-full w-10 h-10 flex items-center justify-center">
                <i class="fa-regular fa-heart text-[#F3BF01] text-xl cursor-pointer" onclick="toggleHeart(this)"></i>
            </div>

            <a href="cart.php">
                <div class="bg-white rounded-full w-10 h-10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#F3BF01">
                        <path d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"/>
                    </svg>
                </div>
            </a>

        </div>
    </div>
    
    <script>
        function toggleHeart(iconElement) {
            if (iconElement.classList.contains('fa-regular')) {
                iconElement.classList.remove('fa-regular');
                iconElement.classList.add('fa-solid');
            } else {
                iconElement.classList.remove('fa-solid');
                iconElement.classList.add('fa-regular');
            }
        }
    </script>

    <div class="mt-2 px-4">
        <div class="swiper-container relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex flex-col items-center p-4">
                    <img src="../assets/Nior Creamy White.webp" alt="Product 1" class="w-full h-full object-cover">
                </div>

                <div class="swiper-slide flex flex-col items-center p-4">
                    <img src="../assets/nior.png" alt="Product 2" class="w-full h-full object-cover">
                </div>

                <div class="swiper-slide flex flex-col items-center p-4">
                    <img src="../assets/nior.webp" alt="Product 3" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>    
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 3, spaceBetween: 30 },
            },
        });
    </script>

    <div class="mt-10 px-4">
        <div class="grid grid-cols-3 gap-2">
            <div class="bg-white text-center p-2 rounded-[20px] flex flex-col items-center justify-center h-[150px]">
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#181C14">
                    <path d="M580-490q-21 0-35.5-14.5T530-540q0-21 14.5-35.5T580-590q21 0 35.5 14.5T630-540q0 21-14.5 35.5T580-490Zm-200 0q-21 0-35.5-14.5T330-540q0-21 14.5-35.5T380-590q21 0 35.5 14.5T430-540q0 21-14.5 35.5T380-490Zm100 210q-60 0-108.5-33T300-400h360q-23 54-71.5 87T480-280Zm0 160q-75 0-140.5-28.5t-114-77q-48.5-48.5-77-114T120-480q0-75 28.5-140.5t77-114q48.5-48.5 114-77T480-840q75 0 140.5 28.5t114 77q48.5 48.5 77 114T840-480q0 75-28.5 140.5t-77 114q-48.5 48.5-114 77T480-120Zm0-80q116 0 198-82t82-198q0-116-82-198t-198-82h-12q-6 0-12 2-6 6-8 13t-2 15q0 21 14.5 35.5T496-680q9 0 16.5-3t15.5-3q12 0 20 9t8 21q0 23-21.5 29.5T496-620q-45 0-77.5-32.5T386-730v-6q0-3 1-8-83 30-135 101t-52 163q0 116 82 198t198 82Zm0-280Z"/>
                </svg>
                <p class="text-[#181C14] text-sm mt-2">newborn-22KG</p>
            </div>
            <div class="bg-white text-center p-2 rounded-[20px] flex flex-col items-center justify-center h-[150px]">
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#181C14">
                    <path d="M480-118 120-398l66-50 294 228 294-228 66 50-360 280Zm0-202L120-600l360-280 360 280-360 280Zm0-280Zm0 178 230-178-230-178-230 178 230 178Z"/>
                </svg>
                <p class="text-[#181C14] text-sm mt-2">bamboo fabric</p>
            </div>
            <div class="bg-white text-center p-2 rounded-[20px] flex flex-col items-center justify-center h-[150px]">
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#181C14">
                    <path d="M558-80H402v-160H120l160-240h-80l280-400 280 400h-80l160 240H558v160ZM270-320h160-76 252-76 160-420Zm0 0h420L530-560h76L480-740 354-560h76L270-320Z"/>
                </svg>
                <p class="text-[#181C14] text-sm mt-2">indoor & outdoor</p>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <div class="bg-[#A1D6CB] rounded-t-[50px] p-6 flex items-center justify-between cursor-pointer" onclick="toggleSection('videoTutorial')">
            <p class="text-[#181C14] text-lg font-medium mt-2">Video Tutorial</p>
            <div class="bg-black rounded-full p-2 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M7.41 8.59 12 13.17l4.59-4.58L18 10l-6 6-6-6z"/>
                </svg>
            </div>
        </div>
        <div id="videoTutorial" class="hidden bg-[#A1D6CB] p-6">
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-[20px]">
                    <div class="flex justify-start mt-4">
                        <img src="../assets/logo.png" alt="Logo 1" class="w-2/3">
                    </div>
                    <div class="flex items-center justify-center h-[150px]">
                        <p class="text-[#181C14] text-sm text-left">How to Fold for Front-Facing and Rear Facing</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-[20px]">
                    <div class="flex justify-start mt-4">
                        <img src="../assets/logo.png" alt="Logo 2" class="w-2/3">
                    </div>
                    <div class="flex items-center justify-center h-[150px]">
                        <p class="text-[#181C14] text-sm text-left">How to remove Nior Stroller padding</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-[20px]">
                    <div class="flex justify-start mt-4">
                        <img src="../assets/logo.png" alt="Logo 3" class="w-2/3">
                    </div>
                    <div class="flex items-center justify-center h-[150px]">
                        <p class="text-[#181C14] text-sm text-left">How to Use Nior Stroller</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#A1D6CB]">
        <div class="bg-[#A19AD3] rounded-t-[50px] p-6 flex items-center justify-between cursor-pointer" onclick="toggleSection('faq')">
            <p class="text-[#181C14] text-lg font-medium mt-2">FAQ</p>
            <div class="bg-black rounded-full p-2 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M7.41 8.59 12 13.17l4.59-4.58L18 10l-6 6-6-6z"/>
                </svg>
            </div>
        </div>
        <div id="faq" class="hidden bg-[#A19AD3] p-6 text-justify">
            <div class="bg-white p-4 rounded-[20px]">
                <div class="flex justify-between items-center">
                    <p class="text-[#181C14] text-l font-medium">Is the Quinton Nior Stroller suitable for newborns?</p>
                    <button onclick="toggleAnswer('faqAnswer')" class="text-[#181C14]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="20px" height="20px">
                            <path d="M12 16.5l4.5-4.5H7.5z"/>
                        </svg>
                    </button>
                </div>
                <div id="faqAnswer" class="mt-4 text-[#181C14] text-sm hidden">
                    <p>Yes, the Quinton Nior Stroller is suitable for newborns. It is designed to provide comfort and safety for your baby from birth up to 22 kg.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleSection(sectionId) {
            const section = document.getElementById(sectionId);
            const isHidden = section.classList.contains('hidden');

            if (isHidden) {
                section.classList.remove('hidden');
            } else {
                section.classList.add('hidden');
            }
        }
        function toggleAnswer(answerId) {
            const answer = document.getElementById(answerId);
            const isHidden = answer.classList.contains('hidden');

            if (isHidden) {
                answer.classList.remove('hidden');
            } else {
                answer.classList.add('hidden');
            }
        }
    </script>

    <div class="bg-[#A19AD3]">
        <div class="bg-white rounded-t-[50px] p-6 cursor-pointer" onclick="toggleSection('stroller')">
            <p class="text-[#181C14] text-2xl font-extrabold mt-2">Nior 2-Way Stroller</p>
            <div class="mt-10 mb-[150px]">
                <p class="text-[#181C14] font-medium text-lg">Key Features:</p>
                <ul class="list-disc pl-6 mt-2 text-[#181C14] text-sm">
                    <li>Reversible Seat</li>
                    <li>One-Push Folding System</li>
                    <li>Bamboo Lining Fabric</li>
                    <li>Luggage Concept Carrying</li>
                    <li>Durable, Never-Wear Wheels</li>
                    <li>All-Wheel Suspension with Front Swivel Lock</li>
                    <li>Mag-CLIP 5-Point Harness</li>
                    <li>Water-Resistant Canopy</li>
                    <li>Height-Adjustable Canopy</li>
                    <li>4-Level Adjustable Vegan Leather Handle</li>
                    <li>Fashionable SMART-MAMA Bag</li>
                    <li>360° Rotating Vegan Leather Bumper Bar</li>
                    <li>Luxury Ride for Newborns Up to 22kg</li>
                    <li>Premium Matte Aluminum Frame</li>
                    <li>3-Position Recline with One-Hand Adjustment</li>
                    <li>Adjustable 3-Position Footrests</li>
                    <li>Extendable All-Weather Canopy</li>
                    <li>Compact & Lightweight Design</li>
                    <li>Privacy Large Basket</li>
                    <li>One-Step Brake System</li>
                    <li>Maximum Airflow System</li>
                    <li>Travel System Compatible</li>
                </ul>        
                <div class="grid grid-cols-4 gap-2 mt-4">
                    <div class="flex flex-col items-center p-4 border rounded-[20px]">
                        <img src="https://i.pinimg.com/736x/ca/d6/03/cad6039c053896e2719e664ff6b16705.jpg" alt="YouTube" class="w-12 h-12" />
                    </div>
                    <div class="flex flex-col items-center p-4 border rounded-[20px]">
                        <img src="https://i.pinimg.com/736x/1a/79/2c/1a792cfe7ceb5f6638111dfc9a68cd9b.jpg" alt="TikTok" class="w-12 h-12" />
                    </div>
                    <div class="flex flex-col items-center p-4 border rounded-[20px]">
                        <img src="https://www.charlesworth-group.com/images/services/red-book.svg" alt="Xiaohongshu" class="w-12 h-12" />
                    </div>
                    <div class="flex flex-col items-center p-4 border rounded-[20px]">
                        <img src="https://i.pinimg.com/736x/f5/49/9f/f5499f238b73bb370ff9c05024a50066.jpg" alt="Google Drive" class="w-12 h-12" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleSection(sectionId) {
            const section = document.getElementById(sectionId);
            const isHidden = section.classList.contains('hidden');

            if (isHidden) {
                section.classList.remove('hidden');
            } else {
                section.classList.add('hidden');
            }
        }
    </script>

    <div class="fixed bottom-10 left-4 right-4 bg-[#F3BF01] py-4 px-4 rounded-full z-[999]">
        <div class="flex items-center justify-between">
            <div class="ml-4">
                <p class="text-[#181C14] text-sm">Total</p>
                <p class="text-[#181C14] font-bold text-2xl">RM1499</p>
            </div>
            <button class="w-1/2 bg-[#181C14] text-white py-3 rounded-full" onclick="window.location.href='cart.php'">Add to Cart</button>
        </div>
    </div>

</body>
</html>