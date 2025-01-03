<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Person In Charge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .profile-bg {
            background-image: url('https://i.pinimg.com/736x/89/3f/34/893f34c8252a521e5e24692ffd14d412.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
        }

        .clip-path-circle {
            clip-path: circle(60% at 51% 93%);
            background-color: #F3BF01;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
        }

        .header-icon {
            background-color: #F3BF01;
            border-radius: 50%;
            padding: 10px;
        }
    </style>
</head>
<body class="bg-white h-screen flex flex-col">

    <div class="profile-bg flex flex-col justify-between h-screen relative">
        <div class="flex items-center px-6 py-2 h-32">
            <a href="account.php">
                <div class="header-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#181C14" viewBox="0 0 24 24" width="20px" height="20px">
                        <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                    </svg>
                </div>
            </a>
        </div>

        <div class="text-center px-6 text-white z-10 relative mb-20">
            <h1 class="text-4xl font-bold text-[#181C14]">YANA</h1>
            <p class="text-sm text-[#181C14] mt-2">Quinton’s Sales Person</p>
            <p class="mt-4 text-xs text-[#181C14] text-justify">
                I am highly experienced and dynamic Senior Sales Executive with over a decade of expertise in the industry. Known for his exceptional ability to build strong client relationships and deliver outstanding sales results.
            </p>

            <div class="mt-8 grid grid-cols-3 gap-4">
                <div class="bg-[#181C14] p-4 rounded-[15px] text-center flex flex-col items-center justify-center">
                    <i class="fa-brands fa-whatsapp text-4xl text-[#F3BF01]"></i>
                    <p class="mt-2 text-sm text-[#F3BF01]">Whatsapp</p>
                </div>
                <div class="bg-[#181C14] p-4 rounded-[15px] text-center flex flex-col items-center justify-center">
                    <i class="fa-regular fa-envelope text-4xl text-[#F3BF01]"></i>
                    <p class="mt-2 text-sm text-[#F3BF01]">Email</p>
                </div>
                <a href="rating.php">
                    <div class="bg-[#181C14] p-4 rounded-[15px] text-center flex flex-col items-center justify-center">
                        <i class="fa-solid fa-star text-4xl text-[#F3BF01]"></i>
                        <p class="mt-2 text-sm text-[#F3BF01]">Rate Me</p>
                    </div>
                </a>                
            </div>
        </div>

        <div class="clip-path-circle"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha384-PL2pG8Qw5f4+8T8JbdHzcbb6vgjDQ2tdDZPsaHRqBqbn3q9qffJAtkkvN0Mllpfu" crossorigin="anonymous"></script>


</body>
</html>
