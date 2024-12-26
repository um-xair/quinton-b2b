<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#F2F2F2] overflow-auto mb-[150px]">

    <div class="flex items-center px-6 py-2 bg-[#F3BF01] h-32">
        <a href="product.php">
            <div class="bg-[#181C14] rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </div>
        </a>
        <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Nior Stroller</h1>
    </div>

    <div class="mt-10 w-full px-4">
        <div class="grid grid-cols-1 gap-4">
            <div class="relative">
                <img src="assets/niordesc2.webp" alt="Image 1" class="w-full h-auto object-cover">
                <a href="assets/niordesc2.webp" download="desc1.webp" class="absolute bottom-2 right-2 bg-[#F3BF01] text-white rounded-full p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#181C14">
                        <path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/>
                    </svg>
                </a>
            </div>
            <div class="relative">
                <img src="assets/niordesc.webp" alt="Image 2" class="w-full h-auto object-cover">
                <a href="assets/niordesc.webp" download="desc2.webp" class="absolute bottom-2 right-2 bg-[#F3BF01] text-white rounded-full p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#181C14">
                        <path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="fixed bottom-10 left-4 right-4 z-[999]">
        <button id="download-all-btn" class="w-full bg-[#181C14] text-white py-4 px-4 rounded-full">Download ALL</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jszip@3.7.1/dist/jszip.min.js"></script>
    <script>
        document.getElementById("download-all-btn").addEventListener("click", function () {
            const zip = new JSZip();
            const images = [
                { name: "desc1.webp", url: "assets/niordesc2.webp" },
                { name: "desc2.webp", url: "assets/niordesc.webp" }
            ];

            const downloadImage = async (image) => {
                const response = await fetch(image.url);
                if (!response.ok) throw new Error(`Failed to fetch ${image.url}`);
                const blob = await response.blob();
                zip.file(image.name, blob);
            };

            Promise.all(images.map(downloadImage))
                .then(() => {
                    return zip.generateAsync({ type: "blob" });
                })
                .then((content) => {
                    const a = document.createElement("a");
                    a.href = URL.createObjectURL(content);
                    a.download = "images.zip";
                    a.click();
                })
                .catch((err) => {
                    console.error("Error downloading images:", err);
                });
        });
    </script>

</body>
</html>
