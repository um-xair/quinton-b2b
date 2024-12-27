<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#F2F2F2] overflow-auto mb-[200px]">
    <div class="flex items-center px-6 py-2 bg-[#F3BF01] h-32">
        <div class="bg-[#181C14] rounded-full p-2">
            <a href="home.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </a>
        </div>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">My Cart</h1>
    </div>
    
    <div class="mt-10 px-4 flex items-center">
        <input 
            type="checkbox" 
            id="select-all" 
            class="w-4 h-4 mr-2"
            onclick="selectAllProducts(this)"
        >
        <label for="select-all" class="text-sm text-[#181C14]">Select All</label>
    </div>

    <div class="mt-6 px-4" id="cart-items">
        <!-- Cart Item 1 -->
        <div class="relative bg-white p-4 rounded-[20px]">
            <div class="relative bg-white product-item">
                <div class="absolute -top-1 -right-1 cursor-pointer">
                    <div class="bg-red-500 text-white w-6 h-6 rounded-full flex items-center justify-center">
                        <i class="fas fa-times text-sm"></i>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center justify-center">
                        <input type="checkbox" class="w-4 h-4 text-[#F3BF01] product-checkbox" onchange="updateTotal()" data-price="1499.00" />
                    </div>

                    <div class="flex ml-2 items-start">
                        <div class="flex-shrink-0 bg-[#F2F2F2] w-32 h-32 p-2 rounded-[20px] flex items-center justify-center">
                            <img src="assets/nior.png" alt="Product" class="object-cover rounded" />
                        </div>
                        <div class="ml-4 flex-grow">
                            <p class="text-lg font-semibold text-[#181C14]">Nior</p>
                            <div class="mt-2">
                                <select class="w-full bg-[#F2F2F2] rounded-sm text-sm text-[#181C14]">
                                    <option value="Creamy White">Creamy White</option>
                                    <option value="Black">Black</option>
                                </select>
                            </div>
                            <p class="mt-2 text-sm font-medium text-[#181C14]">RM 1499.00</p>
                            <div class="mt-2 flex items-center space-x-2">
                                <button class="bg-gray-300 text-[#181C14] px-3 py-1 rounded hover:bg-gray-400 " onclick="decreaseQuantity(this)">-</button>
                                <input type="text" value="1" class="w-12 text-center border rounded text-[#181C14] quantity-input" onchange="updateTotal()" />
                                <button class="bg-gray-300 text-[#181C14] px-3 py-1 rounded hover:bg-gray-400 " onclick="increaseQuantity(this)">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative bg-white p-4 rounded-[20px] mt-6">
            <div class="relative bg-white product-item mt-6">
                <div class="absolute -top-1 -right-1 cursor-pointer">
                    <div class="bg-red-500 text-white w-6 h-6 rounded-full flex items-center justify-center">
                        <i class="fas fa-times text-sm"></i>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center justify-center">
                        <input type="checkbox" class="w-4 h-4 text-[#F3BF01] product-checkbox" onchange="updateTotal()" data-price="1499.00" />
                    </div>

                    <div class="flex ml-2 items-start">
                        <div class="flex-shrink-0 bg-[#F2F2F2] w-32 h-32 p-2 rounded-[20px] flex items-center justify-center">
                            <img src="assets/nior.png" alt="Product" class="object-cover rounded" />
                        </div>
                        <div class="ml-4 flex-grow">
                            <p class="text-lg font-semibold text-[#181C14]">Nior</p>
                            <div class="mt-2">
                                <select class="w-full bg-[#F2F2F2] rounded-sm text-sm text-[#181C14]">
                                    <option value="Creamy White">Creamy White</option>
                                    <option value="Black">Black</option>
                                </select>
                            </div>
                            <p class="mt-2 text-sm font-medium text-[#181C14]">RM 1499.00</p>
                            <div class="mt-2 flex items-center space-x-2">
                                <button class="bg-gray-300 text-[#181C14] px-3 py-1 rounded hover:bg-gray-400 " onclick="decreaseQuantity(this)">-</button>
                                <input type="text" value="1" class="w-12 text-center border rounded text-[#181C14] quantity-input" onchange="updateTotal()" />
                                <button class="bg-gray-300 text-[#181C14] px-3 py-1 rounded hover:bg-gray-400 " onclick="increaseQuantity(this)">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative bg-white p-4 rounded-[20px] product-item mt-6">
                <div class="absolute -top-1 -right-1 cursor-pointer">
                    <div class="bg-red-500 text-white w-6 h-6 rounded-full flex items-center justify-center">
                        <i class="fas fa-times text-sm"></i>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center justify-center">
                        <input type="checkbox" class="w-4 h-4 text-[#F3BF01] product-checkbox" onchange="updateTotal()" data-price="1499.00" />
                    </div>

                    <div class="flex ml-2 items-start">
                        <div class="flex-shrink-0 bg-[#F2F2F2] w-32 h-32 p-2 rounded-[20px] flex items-center justify-center">
                            <img src="assets/nior.png" alt="Product" class="object-cover rounded" />
                        </div>
                        <div class="ml-4 flex-grow">
                            <p class="text-lg font-semibold text-[#181C14]">Nior</p>
                            <div class="mt-2">
                                <select class="w-full bg-[#F2F2F2] rounded-sm text-sm text-[#181C14]">
                                    <option value="Creamy White">Creamy White</option>
                                    <option value="Black">Black</option>
                                </select>
                            </div>
                            <p class="mt-2 text-sm font-medium text-[#181C14]">RM 1499.00</p>
                            <div class="mt-2 flex items-center space-x-2">
                                <button class="bg-gray-300 text-[#181C14] px-3 py-1 rounded hover:bg-gray-400 " onclick="decreaseQuantity(this)">-</button>
                                <input type="text" value="1" class="w-12 text-center border rounded text-[#181C14] quantity-input" onchange="updateTotal()" />
                                <button class="bg-gray-300 text-[#181C14] px-3 py-1 rounded hover:bg-gray-400 " onclick="increaseQuantity(this)">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let totalAmount = 0;

        function updateTotal() {
            totalAmount = 0;
            // Loop through all product checkboxes
            document.querySelectorAll('.product-checkbox').forEach((checkbox) => {
                const price = parseFloat(checkbox.getAttribute('data-price'));
                const quantityInput = checkbox.closest('.product-item').querySelector('.quantity-input');
                const quantity = parseInt(quantityInput.value, 10);

                if (checkbox.checked && !isNaN(quantity)) {
                    totalAmount += price * quantity;
                }
            });

            // Update the total price display
            document.querySelector('.total-price').textContent = `RM ${totalAmount.toFixed(2)}`;
        }

        function selectAllProducts(selectAllCheckbox) {
            const checkboxes = document.querySelectorAll('.product-checkbox');
            checkboxes.forEach((checkbox) => {
                checkbox.checked = selectAllCheckbox.checked;
            });

            updateTotal();
        }

        function increaseQuantity(button) {
            const quantityInput = button.parentElement.querySelector('.quantity-input');
            let currentQuantity = parseInt(quantityInput.value, 10);
            if (!isNaN(currentQuantity)) {
                quantityInput.value = currentQuantity + 1;
            }

            updateTotal();
        }

        function decreaseQuantity(button) {
            const quantityInput = button.parentElement.querySelector('.quantity-input');
            let currentQuantity = parseInt(quantityInput.value, 10);
            if (!isNaN(currentQuantity) && currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
            }

            updateTotal();
        }
    </script>

    <div class="fixed bottom-10 left-4 right-4 bg-[#F3BF01] py-4 px-4 rounded-full z-[999]">
        <div class="flex items-center justify-between">
            <div class="ml-4">
                <p class="text-[#181C14] text-sm">Total</p>
                <p class="text-[#181C14] font-bold text-2xl total-price">RM0.00</p>
            </div>
            <button class="w-1/2 bg-[#181C14] text-white py-3 rounded-full">Checkout</button>
        </div>
    </div>
</body>
</html>
