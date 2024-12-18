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
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Edit Shop Details</h1>
    </div>

    <div class="mt-10 px-4 flex justify-center">
        <div class="relative w-[120px] h-[120px] rounded-full">
            <img src="https://i.pinimg.com/736x/77/67/26/7767263d0002e31bbf715dcaef60af09.jpg" alt="Profile Picture" class="w-full h-full object-cover rounded-full">
            <a href="edit-pfp.php">
                <div class="absolute bottom-0 left-20 mb-2 mr-2 bg-[#181C14] p-2 rounded-full z-[50]">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                        <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <div class="mt-10 px-6">
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="shopName" class="block text-sm font-bold text-[#181C14]">Shop Name</label>
                <input type="text" id="shopName" name="shopName" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter shop name" required>
            </div>

            <div class="mb-4">
                <label for="regNo" class="block text-sm font-bold text-[#181C14]">Company Registration Number</label>
                <input type="text" id="regNo" name="regNo" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter company registration number" required>
            </div>

            <div class="mb-4">
                <label for="website" class="block text-sm font-bold text-[#181C14]">Website/URL</label>
                <input type="url" id="website" name="website" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter website URL" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-bold text-[#181C14]">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter email address" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-sm font-bold text-[#181C14]">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter phone number" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold text-[#181C14]">Registered Office Address</label>
                <input type="text" id="addressLine1" name="addressLine1" class="w-full p-3 mt-2 border rounded-full" placeholder="Address Line 1" required>
                <input type="text" id="addressLine2" name="addressLine2" class="w-full p-3 mt-2 border rounded-full" placeholder="Address Line 2" required>
                <input type="text" id="postalCode" name="postalCode" class="w-full p-3 mt-2 border rounded-full" placeholder="Postal Code" required>
                <input type="text" id="city" name="city" class="w-full p-3 mt-2 border rounded-full" placeholder="District/City" required>
                <input type="text" id="state" name="state" class="w-full p-3 mt-2 border rounded-full" placeholder="State" required>
                <input type="text" id="region" name="region" class="w-full p-3 mt-2 border rounded-full" placeholder="Region" required>
                <input type="text" id="country" name="country" class="w-full p-3 mt-2 border rounded-full" placeholder="Country" required>
            </div>

            <div class="mb-4">
                <label for="tin" class="block text-sm font-bold text-[#181C14]">TIN (Tax Identification Number)</label>
                <input type="text" id="tin" name="tin" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter TIN" required>
            </div>

            <div class="fixed bottom-10 left-4 right-4 py-4 px-4 rounded-full z-[999]">
                <button type="submit" class="w-full bg-[#181C14] px-4 py-4 rounded-full text-white font-bold">Save</button>
            </div>
        </form>
    </div>
</body>
</html>