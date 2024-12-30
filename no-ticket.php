<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#FFFFFF] overflow-auto mb-[200px]">

<div class="flex items-center px-6 py-2 bg-[#F3BF01] h-32">
        <a href="ticket.php">
            <div class="bg-[#181C14] rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </div>
        </a>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Ticket</h1>
    </div>

    <div class="mt-10 px-4 flex flex-col items-center justify-center">
        <img src="assets/no-order.jpg" alt="No Orders Yet" class="w-full h-auto object-contain mb-4">
        <p class="text-[#181C14] text-center text-lg">Oops! You have no ticket yet.</p>
    </div>

</body>
</html>