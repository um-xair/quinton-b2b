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
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Feedback</h1>
    </div>

    <div class="mt-10 px-6">
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="shopName" class="block text-sm font-bold text-[#181C14]">Full Name</label>
                <input type="text" id="shopName" name="shopName" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter shop name" required>
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
                <label for="message" class="block text-sm font-bold text-[#181C14]">Message / Feedback</label>
                <textarea id="message" name="message" class="w-full p-3 mt-2 border rounded-xl" rows="4" placeholder="Enter your message or feedback" required></textarea>
            </div>

            <div class="fixed bottom-10 left-4 right-4 py-4 px-4 rounded-full z-[999]">
                <button type="submit" class="w-full bg-[#181C14] px-4 py-4 rounded-full text-white font-bold">submit feedback</button>
            </div>
        </form>
    </div>

</body>
</html>