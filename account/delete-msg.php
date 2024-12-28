<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Address</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-white h-screen flex items-center justify-center text-center px-6">
    <div class="relative w-full h-screen">
        <a href="address.php">
            <div class="mt-10 absolute top-4 right-4 bg-[#181C14] text-white p-2 rounded-full cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                </svg>
            </div>
        </a>

        <div class="flex items-center justify-center h-screen">
            <div class="text-center">
                <div class="flex items-center justify-center p-4 bg-red-500 w-60 h-60 text-white rounded-full mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" height="150px" viewBox="0 -960 960 960" width="150px" fill="#FFFFFF">
                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                    </svg>
                </div>
                <h2 class="text-xl text-[#181C14] mb-2">Are you sure you want to delete this?</h2>
            </div>
        </div>
        

        <div class="absolute bottom-10 w-full px-4">
            <button type="submit" class="w-full bg-red-500 py-4 rounded-full text-white font-bold">Confirm Delete</button>
        </div>
    </div>
</body>
</html>