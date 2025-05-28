<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undistract - Make Your Life Better</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #a855f7 100%);
        }

        .phone-mockup {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .feature-icon {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
        }

        .team-member-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-member-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .screenshot-carousel {
            scroll-behavior: smooth;
        }

        .app-interface-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body class="bg-white antialiased">

    <!-- Navigation Section -->
    <nav class="gradient-bg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-8">
                    <div class="text-white font-bold text-xl">Undistract</div>
                    <div class="hidden md:flex space-x-6">
                        <a href="#home"
                            class="text-white/90 hover:text-white px-3 py-2 text-sm font-medium transition-colors">HOME</a>
                        <a href="#about"
                            class="text-white/90 hover:text-white px-3 py-2 text-sm font-medium transition-colors">ABOUT</a>
                        <a href="#features"
                            class="text-white/90 hover:text-white px-3 py-2 text-sm font-medium transition-colors">FEATURES</a>
                        <a href="#screenshots"
                            class="text-white/90 hover:text-white px-3 py-2 text-sm font-medium transition-colors">SCREENSHOTS</a>
                        <a href="#team"
                            class="text-white/90 hover:text-white px-3 py-2 text-sm font-medium transition-colors">TEAM</a>
                    </div>
                </div>
                <a href="#download"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg text-sm font-medium transition-colors">
                    DOWNLOAD
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="gradient-bg min-h-screen flex items-center pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <!-- Left Content -->
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        A GREAT APP MAKES<br>
                        <span class="text-yellow-300">YOUR LIFE BETTER</span>
                    </h1>
                    <p class="text-lg md:text-xl text-white/90 mb-8 leading-relaxed max-w-lg mx-auto lg:mx-0">
                        Atur waktu untuk fokus dan kurangi gangguan digital dengan Undistract.
                        Tingkatkan produktivitas dan kontrol waktu Anda.
                    </p>

                    <!-- Download Button -->
                    <div class="mb-8">
                        <button
                            class="bg-white text-purple-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transition-colors shadow-lg">
                            DOWNLOAD APP NOW
                        </button>
                    </div>


                </div>

                <!-- Right Content - Phone Mockup -->
                <div class="flex justify-center lg:justify-end">
                    <div class="relative">
                        <!-- Phone Frame -->
                        <div class="phone-mockup w-80 h-[600px] rounded-[3rem] p-3 shadow-2xl">
                            <div class="bg-white w-full h-full rounded-[2.5rem] overflow-hidden">
                                <!-- Phone Screen Content -->
                                <div class="bg-gradient-to-b from-purple-50 to-white h-full p-6">
                                    <!-- Status Bar -->
                                    <div class="flex justify-between items-center mb-6 text-sm text-gray-600">
                                        <span>9:41</span>
                                        <div class="flex space-x-1">
                                            <div class="w-4 h-2 bg-green-500 rounded-sm"></div>
                                            <div class="w-6 h-2 bg-gray-300 rounded-sm"></div>
                                        </div>
                                    </div>

                                    <!-- App Header -->
                                    <div class="text-center mb-8">
                                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Focus Sessions</h3>
                                        <div class="flex justify-end">
                                            <span class="text-sm text-gray-500">See All</span>
                                        </div>
                                    </div>

                                    <!-- Focus Items -->
                                    <div class="space-y-4 mb-8">
                                        <div
                                            class="flex items-center justify-between p-3 bg-white rounded-lg shadow-sm">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                                                    <div class="w-6 h-6 bg-purple-500 rounded"></div>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-gray-800">Work Focus</div>
                                                    <div class="text-sm text-gray-500">2 hours</div>
                                                </div>
                                            </div>
                                            <span class="font-semibold text-purple-600">Active</span>
                                        </div>

                                        <div
                                            class="flex items-center justify-between p-3 bg-white rounded-lg shadow-sm">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                                    <div class="w-6 h-6 bg-green-500 rounded"></div>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-gray-800">Study Time</div>
                                                    <div class="text-sm text-gray-500">45 minutes</div>
                                                </div>
                                            </div>
                                            <span class="font-semibold text-gray-800">Complete</span>
                                        </div>
                                    </div>

                                    <!-- User Avatars Circle -->
                                    <div class="relative flex justify-center mb-6">
                                        <div class="relative w-32 h-32">
                                            <!-- Center Avatar -->
                                            <div
                                                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-purple-500 rounded-full border-4 border-white shadow-lg">
                                            </div>

                                            <!-- Surrounding Avatars -->
                                            <div
                                                class="absolute top-0 left-1/2 transform -translate-x-1/2 w-10 h-10 bg-blue-400 rounded-full border-2 border-white shadow-md">
                                            </div>
                                            <div
                                                class="absolute top-4 right-0 w-10 h-10 bg-pink-400 rounded-full border-2 border-white shadow-md">
                                            </div>
                                            <div
                                                class="absolute bottom-4 right-0 w-10 h-10 bg-yellow-400 rounded-full border-2 border-white shadow-md">
                                            </div>
                                            <div
                                                class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-10 h-10 bg-green-400 rounded-full border-2 border-white shadow-md">
                                            </div>
                                            <div
                                                class="absolute bottom-4 left-0 w-10 h-10 bg-red-400 rounded-full border-2 border-white shadow-md">
                                            </div>
                                            <div
                                                class="absolute top-4 left-0 w-10 h-10 bg-indigo-400 rounded-full border-2 border-white shadow-md">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Bottom Button -->
                                    <div class="text-center">
                                        <button
                                            class="bg-gray-700 text-white px-8 py-3 rounded-full font-medium w-full">
                                            Start Focus Session
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
                        <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-white/5 rounded-full blur-2xl"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Our App Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">ABOUT OUR APP</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Undistract adalah aplikasi inovatif yang membantu Anda mengelola waktu dengan lebih efektif.
                    Dengan fitur-fitur canggih dan desain yang intuitif, aplikasi ini dirancang untuk meningkatkan
                    produktivitas dan mengurangi gangguan digital dalam kehidupan sehari-hari.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- App Screenshots Preview -->
                <div class="flex justify-center lg:justify-start">
                    <div class="relative">
                        <!-- Main Phone -->
                        <div
                            class="phone-mockup w-72 h-[550px] rounded-[2.5rem] p-2 shadow-xl bg-gradient-to-br from-purple-600 to-blue-600">
                            <div class="bg-white w-full h-full rounded-[2rem] overflow-hidden">
                                <div class="h-full bg-gradient-to-b from-purple-50 to-white p-6">
                                    <!-- App Interface Preview -->
                                    <div class="space-y-4">
                                        <div
                                            class="h-16 bg-gradient-to-r from-purple-400 to-pink-400 rounded-xl flex items-center justify-center">
                                            <span class="text-white font-semibold">Focus Dashboard</span>
                                        </div>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="h-24 bg-blue-100 rounded-lg flex items-center justify-center">
                                                <div class="text-center">
                                                    <div class="text-blue-600 font-bold text-lg">2h 45m</div>
                                                    <div class="text-xs text-blue-500">Today</div>
                                                </div>
                                            </div>
                                            <div class="h-24 bg-green-100 rounded-lg flex items-center justify-center">
                                                <div class="text-center">
                                                    <div class="text-green-600 font-bold text-lg">5</div>
                                                    <div class="text-xs text-green-500">Sessions</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h-32 bg-yellow-100 rounded-xl flex items-center justify-center">
                                            <div class="text-center">
                                                <div class="text-yellow-600 font-bold text-xl">Weekly Progress</div>
                                                <div class="w-full bg-yellow-200 rounded-full h-2 mt-2">
                                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 75%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="h-4 bg-gray-200 rounded w-3/4"></div>
                                            <div class="h-4 bg-gray-200 rounded w-1/2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Background Phones -->
                        <div
                            class="absolute -right-8 top-12 phone-mockup w-56 h-[420px] rounded-[2rem] p-2 shadow-lg bg-gradient-to-br from-blue-500 to-purple-500 opacity-30 rotate-12">
                        </div>
                        <div
                            class="absolute -left-6 top-20 phone-mockup w-48 h-[360px] rounded-[1.5rem] p-2 shadow-lg bg-gradient-to-br from-pink-500 to-purple-500 opacity-20 -rotate-12">
                        </div>
                    </div>
                </div>

                <!-- Features List -->
                <div class="space-y-8">

                    <!-- Creative Design -->
                    <div class="flex items-start space-x-4">
                        <div class="feature-icon w-14 h-14 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">SIMPLE DESIGN</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Desain antarmuka yang modern dan intuitif, dirancang dengan mempertimbangkan pengalaman
                                pengguna yang optimal. Setiap elemen visual dibuat untuk mendukung fokus dan
                                produktivitas Anda.
                            </p>
                        </div>
                    </div>

                    <!-- Easy to Use -->
                    <div class="flex items-start space-x-4">
                        <div class="feature-icon w-14 h-14 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.532 1.532 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.532 1.532 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">EASY TO USE</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Interface yang sederhana dan mudah dipahami, memungkinkan Anda untuk langsung
                                menggunakan aplikasi tanpa pembelajaran yang rumit. Navigasi yang intuitif untuk semua
                                kalangan.
                            </p>
                        </div>
                    </div>

                    <!-- Best User Experience -->
                    <div class="flex items-start space-x-4">
                        <div class="feature-icon w-14 h-14 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">BEST USER EXPERIENCE</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Pengalaman pengguna yang luar biasa dengan performa yang cepat, responsif, dan stabil.
                                Setiap fitur dirancang untuk memberikan nilai maksimal dalam meningkatkan produktivitas
                                Anda.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- App Features Section -->
    <section id="features" class="py-20 gradient-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">APP FEATURES</h2>
                <p class="text-lg text-white/90 max-w-3xl mx-auto">
                    Temukan berbagai fitur canggih yang dirancang khusus untuk membantu Anda mengontrol penggunaan
                    perangkat dan meningkatkan produktivitas.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Permanent Block -->
                <div class="text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">PERMANENT BLOCK</h3>
                    <p class="text-white/80 leading-relaxed">
                        Blokir aplikasi atau situs web secara permanen untuk menghindari gangguan yang tidak diinginkan.
                    </p>
                </div>

                <!-- Scheduled Block -->
                <div class="text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">SCHEDULED BLOCK</h3>
                    <p class="text-white/80 leading-relaxed">
                        Atur jadwal blokir aplikasi atau situs web sesuai waktu yang Anda tentukan.
                    </p>
                </div>

                <!-- Variable Session Limit -->
                <div class="text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">VARIABLE SESSION LIMIT</h3>
                    <p class="text-white/80 leading-relaxed">
                        Sesuaikan batas waktu sesi fokus sesuai kebutuhan Anda untuk produktivitas yang optimal.
                    </p>
                </div>

                <!-- Daily Limit -->
                <div class="text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">DAILY LIMIT</h3>
                    <p class="text-white/80 leading-relaxed">
                        Tetapkan batas waktu penggunaan harian untuk aplikasi atau situs web tertentu.
                    </p>
                </div>

                <!-- Notifications -->
                <div class="text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">NOTIFICATIONS</h3>
                    <p class="text-white/80 leading-relaxed">
                        Dapatkan notifikasi (head, pop-up, block) saat batas harian hampir atau telah tercapai.
                    </p>
                </div>

                <!-- Parental Control -->
                <div class="text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">PARENTAL CONTROL</h3>
                    <p class="text-white/80 leading-relaxed">
                        Kontrol penggunaan perangkat anak dengan verifikasi PIN untuk keamanan tambahan.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Screenshots Section -->
    <section id="screenshots" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">SCREENSHOTS</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Lihat tampilan aplikasi Undistract yang dirancang untuk meningkatkan produktivitas Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Screenshot 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x800" alt="Screenshot 1" class="w-full h-auto">
                </div>
                <!-- Screenshot 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x800" alt="Screenshot 2" class="w-full h-auto">
                </div>
                <!-- Screenshot 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x800" alt="Screenshot 3" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Developer Section -->
    <section id="team" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">OUR TEAM</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Tim pengembang yang berdedikasi untuk menciptakan aplikasi yang membantu Anda fokus dan produktif.
                </p>
            </div>

            <div class="flex justify-center">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Team Member 1 -->
                    <div class="team-member-card bg-white rounded-lg shadow-lg p-6 text-center">
                        <div class="flex justify-center">
                            <img src="https://via.placeholder.com/150" alt="Team Member 1"
                                class="w-24 h-24 rounded-full object-cover mb-4">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Ariq Fakhri</h3>
                        <p class="text-gray-600">Mobile Developer</p>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="team-member-card bg-white rounded-lg shadow-lg p-6 text-center">
                        <div class="flex justify-center">
                            <img src="https://via.placeholder.com/150" alt="Team Member 2"
                                class="w-24 h-24 rounded-full object-cover mb-4">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Firlyansah</h3>
                        <p class="text-gray-600">Mobile Developer</p>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="team-member-card bg-white rounded-lg shadow-lg p-6 text-center">
                        <div class="flex justify-center">
                            <img src="https://via.placeholder.com/150" alt="Team Member 3"
                                class="w-24 h-24 rounded-full object-cover mb-4">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Naufal</h3>
                        <p class="text-gray-600">Mobile Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <!-- Social Media Icons -->
                <div class="flex justify-center space-x-6 mb-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 10.956-.105-.949-.21-2.4.041-3.439.226-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.99 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.2.924 2.82.101.123.115.231.085.357-.093.387-.305 1.244-.345 1.416-.055.234-.179.282-.412.171-1.551-.719-2.522-2.988-2.522-4.82 0-3.92 2.851-7.52 8.195-7.52 4.303 0 7.656 3.07 7.656 7.174 0 4.283-2.705 7.731-6.456 7.731-1.259 0-2.444-.653-2.846-1.434l-.774 2.952c-.279 1.08-1.038 2.435-1.549 3.259C9.57 23.812 10.99 24.25 12.5 24.25c6.354 0 11.5-5.146 11.5-11.5 0-6.354-5.146-11.5-11.5-11.5z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.5.75C6.146.75 1 5.896 1 12.25c0 5.089 3.292 9.387 7.863 10.956-.11-.949-.21-2.4.04-3.441.226-.937 1.475-6.056 1.475-6.056s-.375-.75-.375-1.852c0-1.735.997-3.028 2.238-3.028 1.055 0 1.564.79 1.564 1.744 0 1.062-.677 2.65-1.024 4.127-.291 1.235.619 2.244 1.838 2.244 2.208 0 3.903-2.323 3.903-5.68 0-2.971-2.135-5.051-5.188-5.051-3.536 0-5.611 2.647-5.611 5.384 0 1.066.411 2.2.924 2.82.101.123.115.231.085.357-.093.387-.305 1.244-.345 1.416-.055.234-.179.282-.412.171-1.551-.719-2.522-2.988-2.522-4.82 0-3.92 2.851-7.52 8.195-7.52 4.303 0 7.656 3.07 7.656 7.174 0 4.283-2.705 7.731-6.456 7.731-1.259 0-2.444-.653-2.846-1.434l-.774 2.952c-.279 1.08-1.038 2.435-1.549 3.259C9.57 23.812 10.99 24.25 12.5 24.25c6.354 0 11.5-5.146 11.5-11.5 0-6.354-5.146-11.5-11.5-11.5z" />
                        </svg>
                    </a>
                </div>

                <!-- Copyright -->
                <p class="text-gray-400 text-sm">
                    &copy; 2024 Undistract. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>