<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <!-- Include Tailwind CSS (using CDN for simplicity) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-2xl mx-auto text-center p-8 bg-white rounded-lg shadow-xl">
        <h1 class="text-5xl font-bold text-indigo-600 mb-6">Coming Soon</h1>
        <p class="text-xl text-gray-600 mb-8">We're working hard to bring you something amazing. Stay tuned!</p>
        
        <div class="mb-8">
            <div class="text-4xl font-mono text-gray-800 mb-2" id="countdown">
                <!-- Countdown will be inserted here by JavaScript -->
            </div>
            <p class="text-gray-500 hidden">Until launch</p>
        </div>
        
        <div class="mb-8 hidden">
            <p class="text-gray-600 mb-4">Notify me when it's ready:</p>
            <form action="subscribe.php" method="POST" class="flex max-w-md mx-auto">
                <input type="email" name="email" placeholder="Your email address" required 
                       class="flex-grow px-4 py-2 rounded-l-lg border-2 border-indigo-300 focus:outline-none focus:border-indigo-500">
                <button type="submit" 
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-r-lg transition duration-200">
                    Notify Me
                </button>
            </form>
        </div>
        
    </div>

    <script>
        // Set the date we're counting down to (replace with your launch date)
        const countDownDate = new Date("Jan 1, 2024 00:00:00").getTime();

        // Update the countdown every 1 second
        const x = setInterval(function() {
            // Get today's date and time
            const now = new Date().getTime();
            
            // Find the distance between now and the countdown date
            const distance = countDownDate - now;
            
            // Time calculations for days, hours, minutes and seconds
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Display the result
            document.getElementById("countdown").innerHTML = 
                `<span class="text-indigo-500">${days}</span>d 
                <span class="text-indigo-500">${hours}</span>h 
                <span class="text-indigo-500">${minutes}</span>m 
                <span class="text-indigo-500">${seconds}</span>s`;
            
            // If the countdown is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "WE'RE LIVE!";
            }
        }, 1000);
    </script>
</body>
</html>