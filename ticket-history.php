<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-[#F2F2F2] overflow-auto mb-[200px]">

    <div class="flex items-center px-6 py-2 bg-[#F3BF01] h-32">
        <a href="ticket.php">
            <div class="bg-[#181C14] rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </div>
        </a>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Ticket History</h1>
    </div>

    <div class="mt-10 px-6">
        <div class="flex items-center justify-between mb-6">
            <button id="filterButton" class="bg-[#F3BF01] text-[#181C14 font-semibold px-4 py-3 rounded-full w-40">Filter</button>
        </div>
    </div>

    <div id="priorityModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-6 rounded-[20px] w-80 relative">
            <h3 class="text-lg font-semibold text-[#181C14]">Select Priority</h3>
            <div class="mt-4">
                <button class="w-full py-2 mb-2 bg-[#D2D2D2] rounded-full text-[#181C14]" onclick="setPriority('low')">Low</button>
                <button class="w-full py-2 mb-2 bg-[#D2D2D2] rounded-full text-[#181C14]" onclick="setPriority('medium')">Medium</button>
                <button class="w-full py-2 mb-2 bg-[#D2D2D2] rounded-full text-[#181C14]" onclick="setPriority('high')">High</button>
            </div>
            <div class="absolute top-3 right-3 cursor-pointer" onclick="closeModal()">
                <div class="bg-red-500 text-white w-6 h-6 rounded-full flex items-center justify-center">
                    <i class="fas fa-times text-sm"></i>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("filterButton").addEventListener("click", function() {
            document.getElementById("priorityModal").classList.remove("hidden");
        });
        function closeModal() {
            document.getElementById("priorityModal").classList.add("hidden");
        }
        function setPriority(priority) {
            console.log("Selected Priority:", priority);
            closeModal();
        }
    </script>

    <div class="mt-4 px-6">
        <div class="bg-white p-6 rounded-[20px] flex items-center justify-between relative">
            <div class="mt-6">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#181C14" class="mr-2">
                        <path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm0-160q17 0 28.5-11.5T520-480q0-17-11.5-28.5T480-520q-17 0-28.5 11.5T440-480q0 17 11.5 28.5T480-440Zm0-160q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm320 440H160q-33 0-56.5-23.5T80-240v-160q33 0 56.5-23.5T160-480q0-33-23.5-56.5T80-560v-160q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v160q-33 0-56.5 23.5T800-480q0 33 23.5 56.5T880-400v160q0 33-23.5 56.5T800-160Zm0-80v-102q-37-22-58.5-58.5T720-480q0-43 21.5-79.5T800-618v-102H160v102q37 22 58.5 58.5T240-480q0 43-21.5 79.5T160-342v102h640ZM480-480Z"/>
                    </svg>
                    <h3 class="text-lg font-semibold text-[#181C14]">Ticket #1234</h3>
                </div>
                <p class="text-sm text-gray-600">This is a brief description of the ticket details.</p>
            </div>
            <div class="absolute top-3 right-3 bg-yellow-300 text-[#181C14] py-2 px-6 rounded-full text-sm font-semibold">
                In Progress
            </div>
        </div>
    </div>

    <div class="mt-4 px-6">
        <div class="bg-white p-6 rounded-[20px] flex items-center justify-between relative">
            <div class="mt-6">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#181C14" class="mr-2">
                        <path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm0-160q17 0 28.5-11.5T520-480q0-17-11.5-28.5T480-520q-17 0-28.5 11.5T440-480q0 17 11.5 28.5T480-440Zm0-160q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm320 440H160q-33 0-56.5-23.5T80-240v-160q33 0 56.5-23.5T160-480q0-33-23.5-56.5T80-560v-160q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v160q-33 0-56.5 23.5T800-480q0 33 23.5 56.5T880-400v160q0 33-23.5 56.5T800-160Zm0-80v-102q-37-22-58.5-58.5T720-480q0-43 21.5-79.5T800-618v-102H160v102q37 22 58.5 58.5T240-480q0 43-21.5 79.5T160-342v102h640ZM480-480Z"/>
                    </svg>
                    <h3 class="text-lg font-semibold text-[#181C14]">Ticket #1234</h3>
                </div>
                <p class="text-sm text-gray-600">This is a brief description of the ticket details.</p>
            </div>
            <div class="absolute top-3 right-3 bg-red-300 text-[#181C14] py-2 px-6 rounded-full text-sm font-semibold">
                Pending
            </div>
        </div>
    </div>

    <div class="mt-4 px-6">
        <div class="bg-white p-6 rounded-[20px] flex items-center justify-between relative">
            <div class="mt-6">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#181C14" class="mr-2">
                        <path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm0-160q17 0 28.5-11.5T520-480q0-17-11.5-28.5T480-520q-17 0-28.5 11.5T440-480q0 17 11.5 28.5T480-440Zm0-160q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm320 440H160q-33 0-56.5-23.5T80-240v-160q33 0 56.5-23.5T160-480q0-33-23.5-56.5T80-560v-160q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v160q-33 0-56.5 23.5T800-480q0 33 23.5 56.5T880-400v160q0 33-23.5 56.5T800-160Zm0-80v-102q-37-22-58.5-58.5T720-480q0-43 21.5-79.5T800-618v-102H160v102q37 22 58.5 58.5T240-480q0 43-21.5 79.5T160-342v102h640ZM480-480Z"/>
                    </svg>
                    <h3 class="text-lg font-semibold text-[#181C14]">Ticket #1234</h3>
                </div>
                <p class="text-sm text-gray-600">This is a brief description of the ticket details.</p>
            </div>
            <div class="absolute top-3 right-3 bg-green-300 text-[#181C14] py-2 px-6 rounded-full text-sm font-semibold">
                Complete
            </div>
        </div>
    </div>




</body>
</html>
