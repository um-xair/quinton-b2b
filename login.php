<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .custom-clip {
            clip-path: ellipse(100% 40% at 10% 0%);
        }
    </style>
</head>
<body class="flex justify-center min-h-screen bg-[#F3BF01] items-center">
    <div class="absolute w-full h-full bg-[#FFFFFF] overflow-hidden custom-clip">
    </div>

    <div class="flex flex-col justify-end items-center min-h-screen z-10 pb-20">
        <h1 class="text-3xl font-extrabold text-[#181C14] mb-2">Glad You're Here</h1>
        <p class="text-sm text-[#181C14] mb-6">Please login to your account</p>

        <form action="#" method="POST" class="space-y-4 mt-4">
            <div class="relative">
                <input
                    type="email"
                    placeholder="email@mail.com"
                    class="w-[300px] px-6 py-3 pl-12 text-gray-600 bg-white rounded-full outline-none focus:ring-2 focus:ring-yellow-500"
                />
                <span class="absolute left-4 top-3 text-[#181C14]">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
            <div class="relative">
                <input
                    type="password"
                    id="password"
                    placeholder="password"
                    class="w-[300px] px-6 py-3 pl-12 text-gray-600 bg-white rounded-full outline-none focus:ring-2 focus:ring-yellow-500"
                />
                <span class="absolute left-4 top-3 text-[#181C14]">
                    <i class="fas fa-lock"></i>
                </span>
                <span
                    class="absolute right-4 top-3 text-[#181C14] cursor-pointer"
                    id="togglePassword"
                >
                    <i class="fas fa-eye-slash" id="eyeIcon"></i>
                </span>
            </div>
            <a href="msg.php">
                <button
                    type="button"
                    class="mt-10 w-[300px] bg-[#181C14] text-white text-lg font-semibold px-4 py-4 rounded-full"
                >
                    Login
                </button>
            </a>            
        </form>        
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function (e) {
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            if (type === 'password') {
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        });
    </script>
</body>
</html>