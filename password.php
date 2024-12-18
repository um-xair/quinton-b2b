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
<body class="bg-[#F2F2F2] overflow-auto h-screen">
    <div class="flex items-center px-6 py-2 bg-[#F3BF01] h-32">
        <div class="bg-[#181C14] rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
            </svg>
        </div>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Add New Address</h1>
    </div>

    <div class="mt-10 px-6 pb-20">
        <form>
            <div class="mb-4">
                <label for="currentPassword" class="block text-sm font-bold text-[#181C14]">Current Password</label>
                <div class="relative">
                    <input type="password" id="currentPassword" name="currentPassword" 
                           class="w-full p-3 mt-2 border rounded-full" placeholder="Enter current password" required>
                    <button type="button" class="absolute top-1/2 right-4 transform -translate-y-1/2" onclick="togglePassword('currentPassword', this)">
                        <i id="eye-currentPassword" class="fas fa-eye-slash text-[#181C14]"></i>
                    </button>
                </div>
            </div>

            <!-- New Password -->
            <div class="mb-4">
                <label for="newPassword" class="block text-sm font-bold text-[#181C14]">New Password</label>
                <div class="relative">
                    <input type="password" id="newPassword" name="newPassword" 
                           class="w-full p-3 mt-2 border rounded-full" placeholder="Enter new password" required>
                    <button type="button" class="absolute top-1/2 right-4 transform -translate-y-1/2" onclick="togglePassword('newPassword', this)">
                        <i id="eye-newPassword" class="fas fa-eye-slash text-[#181C14]"></i>
                    </button>
                </div>
            </div>

            <!-- Confirm New Password -->
            <div class="mb-4">
                <label for="confirmPassword" class="block text-sm font-bold text-[#181C14]">Confirm New Password</label>
                <div class="relative">
                    <input type="password" id="confirmPassword" name="confirmPassword" 
                           class="w-full p-3 mt-2 border rounded-full" placeholder="Confirm new password" required>
                    <button type="button" class="absolute top-1/2 right-4 transform -translate-y-1/2" onclick="togglePassword('confirmPassword', this)">
                        <i id="eye-confirmPassword" class="fas fa-eye-slash text-[#181C14]"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Fixed Submit Button -->
    <div class="fixed bottom-10 w-full px-6">
        <button type="submit" class="w-full bg-[#181C14] px-4 py-4 rounded-full text-white font-bold">Save Changes</button>
    </div>

    <script>
        function togglePassword(fieldId, button) {
            const inputField = document.getElementById(fieldId);
            const eyeIcon = button.querySelector('i');
            if (inputField.type === "password") {
                inputField.type = "text";
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                inputField.type = "password";
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }
    </script>

    <!-- Font Awesome Script -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>