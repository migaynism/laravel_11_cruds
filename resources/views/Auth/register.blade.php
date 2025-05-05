<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        @if($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1">Name</label>
                <input type="text" name="name" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1">Email</label>
                <input type="email" name="email" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <div>
                <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">
                    Register
                </button>
            </div>
        </form>

        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline text-sm">Already have an account? Login</a>
        </div>
    </div>

</body>
</html>
