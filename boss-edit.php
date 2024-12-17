<?php include 'subheader.php'; ?>

<div class="flex items-center px-6 py-2 bg-[#F3BF01] h-32">
    <div class="bg-[#181C14] rounded-full p-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
            <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
        </svg>
    </div>
    <h1 class="flex-1 text-center text-xl font-semibold text-[#181C14]">Edit Personal Details</h1>
</div>

<div class="mt-10 px-6">
    <form action="#" method="POST">
        <div class="mb-4">
            <label for="shopName" class="block text-sm font-bold text-[#181C14]">Full Name</label>
            <input type="text" id="shopName" name="shopName" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter shop name" required>
        </div>

        <div class="mb-4">
            <label for="icNo" class="block text-sm font-bold text-[#181C14]">IC Number</label>
            <input type="text" id="icNo" name="icNo" class="w-full p-3 mt-2 border rounded-full" placeholder="Enter IC number" required>
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
            <label for="dob" class="block text-sm font-bold text-[#181C14]">Date of Birth</label>
            <input type="date" id="dob" name="dob" class="w-full p-3 mt-2 border rounded-full" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-bold text-[#181C14]">Address</label>
            <input type="text" id="addressLine1" name="addressLine1" class="w-full p-3 mt-2 border rounded-full" placeholder="Address Line 1" required>
            <input type="text" id="addressLine2" name="addressLine2" class="w-full p-3 mt-2 border rounded-full" placeholder="Address Line 2" required>
            <input type="text" id="postalCode" name="postalCode" class="w-full p-3 mt-2 border rounded-full" placeholder="Postal Code" required>
            <input type="text" id="city" name="city" class="w-full p-3 mt-2 border rounded-full" placeholder="District/City" required>
            <input type="text" id="state" name="state" class="w-full p-3 mt-2 border rounded-full" placeholder="State" required>
            <input type="text" id="region" name="region" class="w-full p-3 mt-2 border rounded-full" placeholder="Region" required>
            <input type="text" id="country" name="country" class="w-full p-3 mt-2 border rounded-full" placeholder="Country" required>
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full bg-[#181C14] px-4 py-4 rounded-full text-white font-bold">Save</button>
        </div>
    </form>
</div>