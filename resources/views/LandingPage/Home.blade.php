<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undistract - Make Your Life Better</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
                <a href="https://www.mediafire.com/file/1p432dr9bjga2ji/undistract.apk/file"
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
                            <a href="https://www.mediafire.com/file/1p432dr9bjga2ji/undistract.apk/file">DOWNLOAD APP
                                NOW
                            </a>
                        </button>
                    </div>


                </div>

                <!-- Right Content - Phone Mockup -->
                <div class="flex justify-center lg:justify-end">
                    <div class="relative">
                        <!-- Phone Frame -->
                        <div class="phone-mockup w-90 h-[700px] rounded-[3rem] p-3 shadow-2xl">
                            <div class="bg-white w-full h-full rounded-[2.5rem] overflow-hidden">
                                <img src="{{ asset('images/cover1.jpg') }}" alt="Cover Image"
                                    class="w-full h-full object-cover">
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

                        <!-- Phone Frame -->
                        <div class="phone-mockup w-90 h-[700px] rounded-[3rem] p-3 shadow-2xl">
                            <div class="bg-white w-full h-full rounded-[2.5rem] overflow-hidden">
                                <img src="{{ asset('images/cover2.jpg') }}" alt="Cover Image"
                                    class="w-full h-full object-cover">
                            </div>
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

            <!-- Swiper Container -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- Screenshot 1 -->
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <div class="relative">
                                <!-- Phone Frame -->
                                <div
                                    class="phone-mockup w-64 sm:w-72 md:w-80 h-[500px] sm:h-[600px] md:h-[650px] rounded-[2.5rem] p-3 bg-gray-800 shadow-2xl">
                                    <div class="bg-white w-full h-full rounded-[2rem] overflow-hidden">
                                        <img src="{{ asset('images/cover1.jpg') }}" alt="Screenshot 1"
                                            class="w-full h-full object-cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Screenshot 2 -->
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <div class="relative">
                                <!-- Phone Frame -->
                                <div
                                    class="phone-mockup w-64 sm:w-72 md:w-80 h-[500px] sm:h-[600px] md:h-[650px] rounded-[2.5rem] p-3 bg-gray-800 shadow-2xl">
                                    <div class="bg-white w-full h-full rounded-[2rem] overflow-hidden">
                                        <img src="{{ asset('images/cover2.jpg') }}" alt="Screenshot 2"
                                            class="w-full h-full object-cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Screenshot 3 -->
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <div class="relative">
                                <!-- Phone Frame -->
                                <div
                                    class="phone-mockup w-64 sm:w-72 md:w-80 h-[500px] sm:h-[600px] md:h-[650px] rounded-[2.5rem] p-3 bg-gray-800 shadow-2xl">
                                    <div class="bg-white w-full h-full rounded-[2rem] overflow-hidden">
                                        <img src="{{ asset('images/usagelimit.jpg') }}" alt="Screenshot 3"
                                            class="w-full h-full object-cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Screenshot 4 -->
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <div class="relative">
                                <!-- Phone Frame -->
                                <div
                                    class="phone-mockup w-64 sm:w-72 md:w-80 h-[500px] sm:h-[600px] md:h-[650px] rounded-[2.5rem] p-3 bg-gray-800 shadow-2xl">
                                    <div class="bg-white w-full h-full rounded-[2rem] overflow-hidden">
                                        <img src="{{ asset('images/blockpermanent.jpg') }}" alt="Screenshot 4"
                                            class="w-full h-full object-cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Screenshot 5 -->
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <div class="relative">
                                <!-- Phone Frame -->
                                <div
                                    class="phone-mockup w-64 sm:w-72 md:w-80 h-[500px] sm:h-[600px] md:h-[650px] rounded-[2.5rem] p-3 bg-gray-800 shadow-2xl">
                                    <div class="bg-white w-full h-full rounded-[2rem] overflow-hidden">
                                        <img src="{{ asset('images/variablesession.jpg') }}" alt="Screenshot 5"
                                            class="w-full h-full object-cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Screenshot 6 -->
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <div class="relative">
                                <!-- Phone Frame -->
                                <div
                                    class="phone-mockup w-64 sm:w-72 md:w-80 h-[500px] sm:h-[600px] md:h-[650px] rounded-[2.5rem] p-3 bg-gray-800 shadow-2xl">
                                    <div class="bg-white w-full h-full rounded-[2rem] overflow-hidden">
                                        <img src="{{ asset('images/dailylimit.jpg') }}" alt="Screenshot 6"
                                            class="w-full h-full object-cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Screenshot 7 -->
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <div class="relative">
                                <!-- Phone Frame -->
                                <div
                                    class="phone-mockup w-64 sm:w-72 md:w-80 h-[500px] sm:h-[600px] md:h-[650px] rounded-[2.5rem] p-3 bg-gray-800 shadow-2xl">
                                    <div class="bg-white w-full h-full rounded-[2rem] overflow-hidden">
                                        <img src="{{ asset('images/blockschedule.jpg') }}" alt="Screenshot 7"
                                            class="w-full h-full object-cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation Buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
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
                            <img src="{{ asset('images/ariq.jpg') }}" alt="Cover Image"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Ariq Fakhri</h3>
                        <p class="text-gray-600">Anggota</p>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="team-member-card bg-white rounded-lg shadow-lg p-6 text-center">
                        <div class="flex justify-center">
                            <img src="{{ asset('images/firli.jpg') }}" alt="Cover Image"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Firlyansah</h3>
                        <p class="text-gray-600">Ketua</p>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="team-member-card bg-white rounded-lg shadow-lg p-6 text-center">
                        <div class="flex justify-center">
                            <img src="{{ asset('images/naufal.jpg') }}" alt="Cover Image"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Naufal</h3>
                        <p class="text-gray-600">Anggota</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">


                <!-- Copyright -->
                <p class="text-gray-400 text-sm">
                    &copy; 2024 Undistract. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Swiper JS -->
    <!-- Swiper JS and CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.mySwiper', {
                slidesPerView: 1,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        });
    </script>
    <style>
        /* Ensure navigation buttons are visible and styled */
        .swiper-button-next,
        .swiper-button-prev {
            color: #1f2937;
            /* Tailwind gray-900 */
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            width: 44px;
            height: 44px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 20px;
        }

        /* Center the swiper container */
        .swiper {
            padding: 0 50px;
            /* Space for navigation buttons */
        }

        /* Adjust phone mockup for responsiveness */
    </style>
</body>

</html>