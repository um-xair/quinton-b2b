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
        <a href="setting.php">
            <div class="bg-[#181C14] rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </div>
        </a>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Help</h1>
    </div>

    <div class="mt-10 px-4">
        <div class="bg-white rounded-[20px] p-4">
            <h3 class="font-bold text-[#181C14] text-lg mb-4">Email Support</h3>
            <p class="text-[#181C14] text-sm mb-4">
                If you have any questions or need assistance, feel free to email us at <a href="mailto:support@quinton.com.my" class="text-[#F3BF01] font-medium">support@quinton.com.my</a>. 
                Our support team will get back to you as soon as possible.
            </p>
            <button class="w-full bg-[#181C14] text-white py-3 rounded-full mt-4">SEND EMAIL</button>
        </div>
    </div>

    <div class="mt-10 px-4">
        <div class="bg-white rounded-[20px] p-4">
            <h3 class="font-bold text-[#181C14] text-lg mb-4">Phone Support</h3>
            <p class="text-[#181C14] text-sm mb-4">
            For immediate assistance, you can call us or reach us via WhatsApp at +60 12-345 6789. Our phone and WhatsApp support are available from 9 AM to 6 PM, Monday to Friday. 
            Click the link or add our number to your contacts and send us a message on WhatsApp.
            </p>
            <button class="w-full bg-[#181C14] text-white py-3 rounded-full mt-4">CALL NOW</button>
        </div>
    </div>

</body>
</html>