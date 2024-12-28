<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Splash Screen</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeOut {
      0% {
        opacity: 1;
      }
      100% {
        opacity: 0;
      }
    }
    .fade-out {
      animation: fadeOut 2s forwards;
    }
  </style>
</head>
<body class="bg-[#F3BF01] flex flex-col items-center justify-center h-screen">

    <div class="w-full flex justify-center mb-6">
        <img 
            src="assets/logo.png" 
            alt="Top Image"
            class="mt-40 w-3/4 h-auto object-contain"
        />
    </div>

    <div class="flex-grow"></div>
    <div class="w-full flex justify-center mb-10">
        <img 
            src="assets/logo bottom.png" 
            alt="Bottom Image"
            class="w-full h-auto object-contain"
            />
    </div>

    <script>
        setTimeout(() => {
            document.body.classList.add('fade-out');
            setTimeout(() => {
                window.location.href = "onboarding.php";
            }, 2000);
        }, 2000);
    </script>
</body>
</html>