<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit PFP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-white h-screen flex items-center justify-center text-center px-6">
    <div class="relative w-full h-screen">
        <a href="sales.php">
            <div class="mt-10 absolute top-4 right-4 bg-[#181C14] text-white p-2 rounded-full cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                </svg>
            </div>
        </a>

        <div class="mt-40 w-full h-60 mb-4">
            <h2 class="text-2xl font-bold text-[#181C14] mb-4">Are you happy with our service?</h2>
            <img id="service-image" src="../assets/5star.gif" alt="Profile Picture" class="w-52 h-52 mx-auto object-cover">
            <p id="service-desc" class="text-lg text-[#181C14] mt-2">Absolutely fantastic!</p>
        
            <div class="flex justify-center items-center mt-2">
                <i class="fa fa-star text-[#F3BF01] text-5xl" onclick="setRating(1)"></i>
                <i class="fa fa-star text-[#F3BF01] text-5xl" onclick="setRating(2)"></i>
                <i class="fa fa-star text-[#F3BF01] text-5xl" onclick="setRating(3)"></i>
                <i class="fa fa-star text-[#F3BF01] text-5xl" onclick="setRating(4)"></i>
                <i class="fa fa-star text-[#F3BF01] text-5xl" onclick="setRating(5)"></i>
            </div>

            <textarea class="mt-6 w-full p-4 border border-[#ccc] rounded-lg" placeholder="Write your review..."></textarea>
        </div>

        <div class="absolute bottom-10 w-full px-4">
            <button type="submit" class="w-full bg-[#181C14] py-4 rounded-full text-white font-bold">Submit</button>
        </div>
    </div>

    <script>
        function setRating(starCount) {
            const image = document.getElementById("service-image");
            const desc = document.getElementById("service-desc");
            const stars = document.querySelectorAll(".fa-star");
            stars.forEach((star, index) => {
                if (index < starCount) {
                    star.classList.add("fa-solid");
                    star.classList.remove("fa-regular");
                } else {
                    star.classList.add("fa-regular");
                    star.classList.remove("fa-solid");
                }
            });

            if (starCount === 1) {
                image.src = "../assets/1star.gif";
                desc.textContent = "Hmm, not great.";
            } else if (starCount === 2) {
                image.src = "../assets/2star.gif";
                desc.textContent = "It's okay.";
            } else if (starCount === 3) {
                image.src = "../assets/3star.gif";
                desc.textContent = "Pretty good!";
            } else if (starCount === 4) {
                image.src = "../assets/4star.gif";
                desc.textContent = "Good service!";
            } else if (starCount === 5) {
                image.src = "../assets/5star.gif";
                desc.textContent = "Excellent service!";
            }
        }
    </script>
</body>
</html>
