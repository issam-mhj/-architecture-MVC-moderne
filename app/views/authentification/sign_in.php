<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
            <h2 class="text-4xl font-bold mb-4">Welcome Page</h2>
            <p class="mb-8">Sign in to continue access</p>

            <!-- Website URL -->
            <div class="absolute bottom-12">
                <p>www.yoursite.com</p>
            </div>

            <!-- Decorative Blobs -->
            <div class="blob-shape w-32 h-32 absolute top-1/4 right-12 opacity-50"></div>
            <div class="blob-shape w-24 h-24 absolute bottom-1/4 left-12 opacity-50"></div>
        </div>

        <!-- Right Side - Sign In Form -->
        <div class="w-full md:w-1/2 p-12">
            <h2 class="text-3xl font-bold mb-8">Sign In</h2>

            <form id="signInForm" action="/" method="POST" class="space-y-6">
                <!-- Email Input -->
                <div>
                    <input type="email"
                        name="email"
                        placeholder="Email Address"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-500"
                        required>
                </div>

                <!-- Password Input -->
                <div>
                    <input type="password"
                        name="password"
                        placeholder="Password"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-500"
                        required>
                </div>

                <!-- Continue Button -->
                <button type="submit"
                    class="w-full bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
                    Continue
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </form>
            <p class="text-center text-gray-600">
                you don't have an account?
                <a href="/signup" class="text-purple-600 hover:text-purple-700">Sign up</a>
            </p>

        </div>
    </div>


</body>

</html>