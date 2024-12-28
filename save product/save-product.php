<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAVE PRODUCT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-white overflow-auto mb-[200px]">

    <div class="flex items-center px-6 py-2 bg-[#F3BF01] h-32">
        <div class="bg-[#181C14] rounded-full p-2">
            <a href="../home.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </a>
        </div>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Save Product</h1>
    </div>

    <div class="mt-10 px-4">
        <div class="relative">
            <input type="text" placeholder="Search..." class="w-full bg-white py-3 px-4 border border-[#181C14] rounded-full text-md">
            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#181C14">
                    <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="mt-10 px-4">
        <div class="grid grid-cols-2 gap-4">
            <div id="product-1" class="product">
                <div class="relative bg-[#F2F2F2] rounded-[20px] p-4">
                    <img src="../assets/Nior Creamy White.webp" alt="Product" class="w-full h-full object-cover rounded-[20px]">
                    <div class="absolute top-2 right-2 bg-white p-2 rounded-full cursor-pointer" onclick="openModal('product-1')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#F3BF01" width="20px" height="20px" viewBox="0 0 24 24" stroke="none">
                            <path d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                    </div>
                </div>
                <div class="mt-2">
                    <h3 class="text-sm text-[#181C14]">Nior Stroller</h3>
                    <p class="text-lg text-[#181C14] font-semibold">RM1499.00</p>
                </div>
            </div>
        </div>
    </div>

    <div id="removeModal" class="hidden fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-[20px] relative w-[90%] max-w-md">
            <button class="absolute top-2 right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center" onclick="closeModal()">
                &times;
            </button>
            <p class="text-lg text-center mb-4 mt-10">Are you sure you want to remove this product?</p>
            <div class="flex justify-center gap-4">
                <button class="bg-red-500 text-white px-6 py-2 rounded-full w-full" onclick="confirmRemove()">Yes</button>
            </div>
        </div>
    </div>

    <script>
        let productToRemove = null;

        function openModal(productId) {
            productToRemove = document.getElementById(productId);
            document.getElementById('removeModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('removeModal').classList.add('hidden');
        }

        function confirmRemove() {
            if (productToRemove) {
                productToRemove.remove();
            }
            closeModal();
        }
    </script>
</body>
</html>
