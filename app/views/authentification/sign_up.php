<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #4834d4 0%, #686de0 100%);
        }

        .blob-shape {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }
    </style>
</head>

<body class="bg-purple-500 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-xl flex max-w-4xl w-full overflow-hidden">
        <!-- Left Side - Welcome Section -->
        <div class="gradient-bg w-1/2 p-12 text-white relative hidden md:block">
            <!-- Logo -->
            <div class="flex items-center mb-8">
                <div class="w-8 h-8 border-2 border-white rounded-full mr-2"></div>
                <div class="w-8 h-8 border-2 border-white rounded-full -ml-4"></div>
            </div>

            <!-- Welcome Text -->
            <h2 class="text-4xl font-bold mb-4">Create Account</h2>
            <p class="mb-8">Join us to get started with your journey</p>

            <!-- Website URL -->
            <div class="absolute bottom-12">
                <p>www.yoursite.com</p>
            </div>

            <!-- Decorative Blobs -->
            <div class="blob-shape w-32 h-32 absolute top-1/4 right-12 opacity-50"></div>
            <div class="blob-shape w-24 h-24 absolute bottom-1/4 left-12 opacity-50"></div>
        </div>

        <!-- Right Side - Sign Up Form -->
        <div class="w-full md:w-1/2 p-12">
            <h2 class="text-3xl font-bold mb-8">Sign Up</h2>

            <form id="signUpForm" class="space-y-6">
                <!-- Full Name Input -->
                <div>
                    <input type="text"
                        placeholder="Full Name"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-500"
                        required>
                </div>

                <!-- Email Input -->
                <div>
                    <input type="email"
                        placeholder="Email Address"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-500"
                        required>
                </div>

                <!-- Password Input -->
                <div>
                    <input type="password"
                        placeholder="Password"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-500"
                        required>
                </div>

                <!-- Confirm Password Input -->
                <div>
                    <input type="password"
                        placeholder="Confirm Password"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-500"
                        required>
                </div>

                <!-- Sign Up Button -->
                <button type="submit"
                    class="w-full bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
                    Create Account
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Already have an account -->
                <p class="text-center text-gray-600">
                    Already have an account?
                    <a href="/" class="text-purple-600 hover:text-purple-700">Sign In</a>
                </p>

                <!-- Divider -->
                <div class="relative my-8">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Or Sign Up with Social Media</span>
                    </div>
                </div>

                <!-- Social Media Buttons -->
                <button type="button"
                    class="w-full bg-[#1DA1F2] text-white py-3 rounded-lg hover:bg-[#1a91da] transition-colors mb-4">
                    Sign Up With Twitter
                </button>
                <button type="button"
                    class="w-full bg-[#4267B2] text-white py-3 rounded-lg hover:bg-[#365899] transition-colors">
                    Sign Up With Facebook
                </button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('signUpForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your sign-up logic here
            console.log('Form submitted');
        });
    </script>
</body>

</html>