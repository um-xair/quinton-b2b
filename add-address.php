<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#F2F2F2] overflow-auto mb-[80px]">
    <div class="flex items-center px-6 py-2 bg-[#F3BF01] h-32">
        <div class="bg-[#181C14] rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
            </svg>
        </div>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Add New Address</h1>
    </div>

    <div class="mt-10 px-6">
        <form class="">
            <div class="mb-4">
                <label for="fullName" class="block text-sm font-bold text-[#181C14]">Full Name</label>
                <input type="text" id="fullName" name="fullName" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter full name" required>
            </div>
            <div class="mb-4">
                <label for="phoneNumber" class="block text-sm font-bold text-[#181C14]">Phone Number</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter phone number" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold text-[#181C14]">Address</label>
                <input type="text" id="addressLine1" name="addressLine1" class="w-full p-3 mt-2 border rounded-full" placeholder="Address Line 1" required>
                <input type="text" id="addressLine2" name="addressLine2" class="w-full p-3 mt-2 border rounded-full" placeholder="Address Line 2" required>
                <input type="text" id="postalCode" name="postalCode" class="w-full p-3 mt-2 border rounded-full" placeholder="Postal Code" required>
                <input type="text" id="city" name="city" class="w-full p-3 mt-2 border rounded-full" placeholder="District/City" required>
                <input type="text" id="state" name="state" class="w-full p-3 mt-2 border rounded-full" placeholder="State" required>
                <input type="text" id="region" name="region" class="w-full p-3 mt-2 border rounded-full" placeholder="Region" required>
                <input type="text" id="country" name="country" class="w-full p-3 mt-2 border rounded-full" placeholder="Country" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold text-[#181C14]">Category</label>
                <div class="flex items-center mt-2 space-x-4">
                    <label class="flex items-center">
                        <input type="radio" name="category" value="Home" class="mr-2">
                        Home
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="category" value="Work" class="mr-2">
                        Work
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="category" value="Other" class="mr-2" id="otherCategory">
                        Other
                    </label>
                </div>
                <div class="mt-4 hidden" id="otherCategoryInput">
                    <label for="customCategory" class="block text-sm font-bold text-[#181C14]">New Category</label>
                    <input type="text" id="customCategory" name="customCategory" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter new category">
                </div>
            </div>
            <div class="mb-4 flex items-center justify-between">
                <span class="block text-sm font-bold text-[#181C14]">Set as Default Address</span>
                <label class="inline-flex items-center">
                    <input type="checkbox" id="setDefault" name="setDefault" class="toggle-checkbox hidden">
                    <div class="toggle-bg w-10 h-6 bg-gray-200 rounded-full shadow-inner flex items-center p-1 cursor-pointer">
                        <div class="toggle-dot w-4 h-4 bg-white rounded-full shadow-md transform transition-transform duration-300 ease-in-out"></div>
                    </div>
                </label>
            </div>
            <button type="submit" class="w-full bg-[#181C14] px-4 py-3 rounded-full text-white font-bold">Save Address</button>
        </form>
    </div>

    <script>
        document.getElementById('otherCategory').addEventListener('change', function () {
            const otherCategoryInput = document.getElementById('otherCategoryInput');
            if (this.checked) {
                otherCategoryInput.classList.remove('hidden');
            } else {
                otherCategoryInput.classList.add('hidden');
            }
        });
    </script>
</body>
</html>