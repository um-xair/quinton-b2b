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
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Report Bug</h1>
    </div>

    <div class="mt-10 px-6">
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="FullName" class="block text-sm font-bold text-[#181C14]">Full Name</label>
                <input type="text" id="FullName" name="FullName" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter full name" required>
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
                <label for="report-title" class="block text-sm font-bold text-[#181C14]">Report Title</label>
                <input type="text" id="report-title" name="report-title" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter report title" required>
            </div>

            <div class="mb-4">
                <label for="report-description" class="block text-sm font-bold text-[#181C14]">Report Description</label>
                <textarea id="report-description" name="report-description" class="w-full p-3 mt-2 border rounded-xl" rows="4" placeholder="Provide a detailed description of the report" required></textarea>
            </div>

            <div class="mb-4">
                <label for="file-input" class="block text-sm font-bold text-[#181C14]">Attachment</label>
                <label for="file-input" class="mt-4 w-full h-32 border-2 border-dashed border-[#181C14] p-4 rounded-[20px] flex flex-col items-center justify-center mb-4 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#181C14">
                        <path d="M480-260q75 0 127.5-52.5T660-440q0-75-52.5-127.5T480-620q-75 0-127.5 52.5T300-440q0 75 52.5 127.5T480-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM160-120q-33 0-56.5-23.5T80-200v-480q0-33 23.5-56.5T160-760h126l74-80h240l74 80h126q33 0 56.5 23.5T880-680v480q0 33-23.5 56.5T800-120H160Zm0-80h640v-480H638l-73-80H395l-73 80H160v480Zm320-240Z"/>
                    </svg>
                    <span class="text-[#181C14] text-sm">Upload New Image Here</span>
                    <input type="file" id="file-input" class="hidden">
                </label>
            </div>
                


            <div class="fixed bottom-10 left-4 right-4 py-4 px-4 rounded-full z-[999]">
                <button type="submit" class="w-full bg-[#181C14] px-4 py-4 rounded-full text-white font-bold">Send Report</button>
            </div>
        </form>
    </div>

</body>
</html>