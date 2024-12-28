<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Splash Screen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-white h-screen flex items-center justify-center text-center px-6">

    <div id="splash-screen" class="bg-white p-8 w-full max-w-md opacity-0 transition-opacity duration-1000">
        <div class="flex justify-center mb-6">
            <img src="../assets/pic.jpg" alt="Success Image" class="w-full h-full">
        </div>
        <h1 class="text-3xl font-bold text-[#181C14] mt-10 text-center">Product approved!</h1>
    </div>

    <script>
        window.onload = function() {
            const splashScreen = document.getElementById('splash-screen');
            splashScreen.classList.remove('opacity-0');
            splashScreen.classList.add('opacity-100');
            
            setTimeout(function() {
                splashScreen.classList.remove('opacity-100');
                splashScreen.classList.add('opacity-0');
                
                setTimeout(function() {
                    window.location.href = '../category product/to-pay.php'; 
                }, 500); 
            }, 3000);
        }
    </script>

</body>
</html>