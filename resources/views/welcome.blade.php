<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="وكالة المشرافي للتسويق - وكالة تسويق احترافية تقدم حلولاً ذكية وعصرية في عالم التسويق الرقمي">
    <title>وكالة المشرافي للتسويق</title>

    <!-- Google Fonts - Cairo for Arabic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('milaf.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0f0a1e] text-white antialiased">

    {{-- ===== NAVIGATION ===== --}}
    <nav id="navbar" class="fixed top-0 right-0 left-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                {{-- Logo --}}
                <a href="#" class="flex items-center">
                    <img src="{{ asset('milaf.png') }}" alt="وكالة المشرافي للتسويق" class="h-14 w-auto object-contain">
                </a>

                {{-- Desktop Menu --}}
                <div class="hidden md:flex items-center gap-8">
                    <a href="#home" class="nav-link text-gray-300 hover:text-white font-medium transition-colors">الرئيسية</a>
                    <a href="#about" class="nav-link text-gray-300 hover:text-white font-medium transition-colors">من نحن</a>
                    <a href="#services" class="nav-link text-gray-300 hover:text-white font-medium transition-colors">خدماتنا</a>
                    <a href="#portfolio" class="nav-link text-gray-300 hover:text-white font-medium transition-colors">أعمالنا</a>
                    <a href="#achievements" class="nav-link text-gray-300 hover:text-white font-medium transition-colors">إنجازاتنا</a>
                    <a href="#customers" class="nav-link text-gray-300 hover:text-white font-medium transition-colors">عملاؤنا</a>
                    <a href="#contact" class="nav-link text-gray-300 hover:text-white font-medium transition-colors">تواصل معنا</a>
                </div>

                {{-- Social + CTA --}}
                <div class="hidden md:flex items-center gap-4">
                    <a href="https://wa.me/966533663843" target="_blank" class="text-gray-400 hover:text-green-400 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </a>
                    <a href="mailto:M.almashrafi@almashrafi.com" class="text-gray-400 hover:text-purple-400 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </a>
                    <a href="#contact" class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-sm hover:opacity-90 transition-opacity shadow-lg shadow-purple-500/30">
                        ابدأ مشروعك
                    </a>
                </div>

                {{-- Mobile Menu Button --}}
                <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="md:hidden text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden md:hidden bg-[#1a1235] border-t border-purple-900/30 px-4 py-4">
            <div class="flex flex-col gap-4">
                <a href="#home" class="text-gray-300 hover:text-white font-medium py-2">الرئيسية</a>
                <a href="#about" class="text-gray-300 hover:text-white font-medium py-2">من نحن</a>
                <a href="#services" class="text-gray-300 hover:text-white font-medium py-2">خدماتنا</a>
                <a href="#portfolio" class="text-gray-300 hover:text-white font-medium py-2">أعمالنا</a>
                <a href="#achievements" class="text-gray-300 hover:text-white font-medium py-2">إنجازاتنا</a>
                <a href="#customers" class="text-gray-300 hover:text-white font-medium py-2">عملاؤنا</a>
                <a href="#contact" class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-center">تواصل معنا</a>
            </div>
        </div>
    </nav>

    {{-- ===== HERO SECTION ===== --}}
    <section id="home" class="min-h-screen gradient-hero flex items-center relative overflow-hidden">
        {{-- Background decorations --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 right-10 w-72 h-72 bg-purple-600/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-10 w-96 h-96 bg-indigo-600/15 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-3xl"></div>
            <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle, #9b6fd4 1px, transparent 1px); background-size: 40px 40px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-16 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">

                {{-- Hero Text --}}
                <div class="text-center lg:text-right">
                    <div class="inline-flex items-center gap-2 bg-purple-900/40 border border-purple-700/50 rounded-full px-4 py-2 mb-6">
                        <span class="w-2 h-2 bg-amber-400 rounded-full animate-pulse"></span>
                        <span class="text-amber-400 text-sm font-semibold">وكالة تسويق رقمي احترافية</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-tight mb-6">
                        <span class="text-white">نضع العميل</span><br>
                        <span class="text-gradient">في قلب كل</span><br>
                        <span class="text-white">مشروع</span>
                    </h1>

                    <p class="text-gray-300 text-lg leading-relaxed mb-8 max-w-lg mx-auto lg:mx-0">
                        وكالة المشرافي للتسويق — وكالة تسويق احترافية تقدم حلولاً ذكية وعصرية في عالم التسويق الرقمي. نعمل بشغف لصناعة حضور قوي للعلامات التجارية.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#contact" class="gradient-primary text-white px-8 py-4 rounded-full font-bold text-lg hover:opacity-90 transition-opacity shadow-xl shadow-purple-500/40 flex items-center justify-center gap-2">
                            ابدأ مشروعك الآن
                            <svg class="w-5 h-5 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="#portfolio" class="border border-purple-500/50 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-purple-900/30 transition-colors flex items-center justify-center gap-2">
                            شاهد أعمالنا
                        </a>
                    </div>

                    {{-- Trust badges --}}
                    <div class="mt-10 flex flex-wrap items-center gap-5 justify-center lg:justify-start">
                        <div class="flex items-center gap-2 text-gray-400 text-sm">
                            <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            حائزون على 3 جوائز دولية
                        </div>
                        <div class="w-px h-6 bg-gray-700 hidden sm:block"></div>
                        <div class="flex items-center gap-2 text-gray-400 text-sm">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            فهم عميق للسوق السعودي
                        </div>
                        <div class="w-px h-6 bg-gray-700 hidden sm:block"></div>
                        <div class="flex items-center gap-2 text-gray-400 text-sm">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            سرعة في التنفيذ
                        </div>
                    </div>
                </div>

                {{-- Hero Visual --}}
                <div class="relative flex justify-center lg:justify-end">
                    <div class="relative w-full max-w-lg">
                        <div class="gradient-card border border-purple-700/40 rounded-3xl p-8 backdrop-blur-sm shadow-2xl shadow-purple-900/50">
                            <div class="flex items-center justify-center mb-6">
                                <img src="{{ asset('milaf.png') }}" alt="وكالة المشرافي للتسويق" class="h-24 w-auto object-contain">
                            </div>
                            <div class="text-center mb-6">
                                <h3 class="text-white font-black text-xl">وكالة المشرافي للتسويق</h3>
                                <p class="text-gray-400 text-sm mt-1">حلول ذكية وعصرية في التسويق الرقمي</p>
                            </div>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="bg-purple-900/40 rounded-xl p-3 text-center">
                                    <div class="text-2xl font-black text-amber-400 counter-animate" data-target="3" data-suffix="+">0</div>
                                    <div class="text-xs text-gray-400 mt-1">جوائز دولية</div>
                                </div>
                                <div class="bg-purple-900/40 rounded-xl p-3 text-center">
                                    <div class="text-2xl font-black text-white counter-animate" data-target="5" data-suffix="">0</div>
                                    <div class="text-xs text-gray-400 mt-1">خدمات متكاملة</div>
                                </div>
                                <div class="bg-purple-900/40 rounded-xl p-3 text-center">
                                    <div class="text-2xl font-black text-purple-400 counter-animate" data-target="100" data-suffix="%">0</div>
                                    <div class="text-xs text-gray-400 mt-1">التزام بالجودة</div>
                                </div>
                            </div>
                            <div class="mt-4 space-y-2">
                                @foreach([['السوشيال ميديا', 90, 'bg-pink-500'], ['الهوية البصرية', 85, 'bg-purple-500'], ['الحملات الإعلانية', 95, 'bg-amber-500']] as [$label, $pct, $color])
                                <div class="flex items-center gap-3">
                                    <span class="text-xs text-gray-400 w-28 text-right">{{ $label }}</span>
                                    <div class="flex-1 h-1.5 bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full {{ $color }} rounded-full" style="width: {{ $pct }}%"></div>
                                    </div>
                                    <span class="text-xs text-gray-400">{{ $pct }}%</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="absolute -top-4 -right-4 bg-amber-400 text-black px-4 py-2 rounded-2xl font-bold text-sm shadow-lg shadow-amber-500/40 animate-bounce">
                            🏆 3 جوائز دولية
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-[#1a1235] border border-purple-700/50 px-4 py-2 rounded-2xl text-sm shadow-lg">
                            <span class="text-green-400 font-bold">✓</span>
                            <span class="text-gray-400 mr-1">أسعار تنافسية · جودة ممتازة</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 60L48 50C96 40 192 20 288 15C384 10 480 20 576 25C672 30 768 30 864 27.5C960 25 1056 20 1152 18.3C1248 16.7 1344 18.3 1392 19.2L1440 20V60H0Z" fill="#0f0a1e" fill-opacity="0.5"/>
            </svg>
        </div>
    </section>

    {{-- ===== ABOUT SECTION ===== --}}
    <section id="about" class="py-20 bg-[#0f0a1e]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-start">

                {{-- Who we are + Mission + Vision --}}
                <div>
                    <span class="text-amber-400 font-semibold text-sm uppercase tracking-widest mb-3 block">من نحن</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-white mb-6">
                        وكالة المشرافي <span class="text-gradient">للتسويق</span>
                    </h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        وكالة تسويق احترافية تقدم حلولاً ذكية وعصرية في عالم التسويق الرقمي. نعمل بشغف لصناعة حضور قوي للعلامات التجارية للعملاء عبر بناء استراتيجيات دقيقة، إدارة الهوية البصرية، وإطلاق حملات مؤثرة تحقق النتائج.
                    </p>
                    <p class="text-gray-400 leading-relaxed mb-8">
                        نضع العميل في قلب كل مشروع، ونصنع التجربة التي تليق بطموحه.
                    </p>

                    {{-- Mission & Vision cards --}}
                    <div class="space-y-4">
                        <div class="bg-amber-500/10 border border-amber-500/20 rounded-2xl p-5">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-8 h-8 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </div>
                                <h4 class="text-amber-400 font-bold">رسالتنا</h4>
                            </div>
                            <p class="text-gray-300 text-sm leading-relaxed">تمكين العلامات التجارية من النمو وتحقيق تأثير فعّال من خلال حلول تسويقية مبتكرة، تُبنى على التحليل، الجودة، والنتائج الواقعية.</p>
                        </div>
                        <div class="bg-purple-500/10 border border-purple-500/20 rounded-2xl p-5">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                </div>
                                <h4 class="text-purple-400 font-bold">رؤيتنا</h4>
                            </div>
                            <p class="text-gray-300 text-sm leading-relaxed">أن نكون من أبرز وكالات التسويق في المملكة، ونقود التحول الرقمي للعلامات التجارية عبر خدمات عالية الجودة تُقدَّم بأسلوب احترافي وراقٍ.</p>
                        </div>
                    </div>
                </div>

                {{-- Values --}}
                <div>
                    <span class="text-amber-400 font-semibold text-sm uppercase tracking-widest mb-3 block">قيمنا</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-white mb-6">
                        ما يُميّزنا <span class="text-gradient">عن غيرنا</span>
                    </h2>
                    <div class="grid grid-cols-1 gap-4">
                        @foreach([
                            ['الاحترافية', 'نلتزم بأعلى المعايير في كل مشروع', 'bg-purple-500/10', 'border-purple-500/20', 'text-purple-400', '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>'],
                            ['الإبداع', 'نبتكر حلولاً متنوعة تلامس ذوق العميل وهويته', 'bg-pink-500/10', 'border-pink-500/20', 'text-pink-400', '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>'],
                            ['الشفافية', 'وضوح كامل في آليات العمل والتسعير والنتائج', 'bg-blue-500/10', 'border-blue-500/20', 'text-blue-400', '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>'],
                            ['الالتزام', 'نسلّم العمل في الوقت المحدد وبأفضل جودة', 'bg-green-500/10', 'border-green-500/20', 'text-green-400', '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>'],
                        ] as [$title, $desc, $bg, $border, $color, $icon])
                        <div class="flex items-start gap-4 {{ $bg }} border {{ $border }} rounded-2xl p-4">
                            <div class="w-10 h-10 {{ $bg }} rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-5 h-5 {{ $color }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    {!! $icon !!}
                                </svg>
                            </div>
                            <div>
                                <h4 class="{{ $color }} font-bold mb-1">{{ $title }}</h4>
                                <p class="text-gray-400 text-sm">{{ $desc }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== SERVICES SECTION ===== --}}
    <section id="services" class="py-20 bg-[#1a1235]/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-amber-400 font-semibold text-sm uppercase tracking-widest mb-3 block">خدماتنا</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4">
                    خدمات <span class="text-gradient">متكاملة</span> لعلامتك التجارية
                </h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    نقدّم خمس خدمات متخصصة مصممة لتحقيق أهداف عملك وتعزيز حضورك في السوق السعودي
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Service 1: Social Media --}}
                <div class="card-hover bg-pink-500/10 border border-pink-500/20 rounded-2xl p-6 group lg:col-span-1">
                    <div class="w-12 h-12 bg-pink-500/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">إدارة السوشيال ميديا</h3>
                    <ul class="space-y-1.5 mb-4">
                        @foreach(['إعداد خطة محتوى شهرية', 'إدارة وإشراف كامل على الحسابات', 'تصميم منشورات وقصص احترافية', 'كتابة محتوى جذاب', 'تحليل الأداء والتطوير المستمر'] as $item)
                        <li class="flex items-center gap-2 text-gray-400 text-sm">
                            <span class="w-1.5 h-1.5 bg-pink-400 rounded-full flex-shrink-0"></span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="#contact" class="text-pink-400 text-sm font-semibold inline-flex items-center gap-1 hover:gap-2 transition-all">
                        اطلب الخدمة
                        <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>

                {{-- Service 2: Visual Identity --}}
                <div class="card-hover bg-purple-500/10 border border-purple-500/20 rounded-2xl p-6 group">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">الهوية البصرية</h3>
                    <ul class="space-y-1.5 mb-4">
                        @foreach(['تصميم شعار احترافي', 'اختيار ألوان وهوية فاخرة', 'نماذج استخدام الهوية', 'Brand Guidelines دليل شامل للهوية'] as $item)
                        <li class="flex items-center gap-2 text-gray-400 text-sm">
                            <span class="w-1.5 h-1.5 bg-purple-400 rounded-full flex-shrink-0"></span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="#contact" class="text-purple-400 text-sm font-semibold inline-flex items-center gap-1 hover:gap-2 transition-all">
                        اطلب الخدمة
                        <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>

                {{-- Service 3: Company Profiles --}}
                <div class="card-hover bg-blue-500/10 border border-blue-500/20 rounded-2xl p-6 group">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">بروفايلات الشركات</h3>
                    <ul class="space-y-1.5 mb-4">
                        @foreach(['كتابة محتوى احترافي', 'تصميم بروفايل عربي/إنجليزي', 'تنسيق وتنفيذ جاهز للطباعة'] as $item)
                        <li class="flex items-center gap-2 text-gray-400 text-sm">
                            <span class="w-1.5 h-1.5 bg-blue-400 rounded-full flex-shrink-0"></span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="#contact" class="text-blue-400 text-sm font-semibold inline-flex items-center gap-1 hover:gap-2 transition-all">
                        اطلب الخدمة
                        <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>

                {{-- Service 4: Ad Campaigns --}}
                <div class="card-hover bg-amber-500/10 border border-amber-500/20 rounded-2xl p-6 group">
                    <div class="w-12 h-12 bg-amber-500/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">الحملات الإعلانية</h3>
                    <ul class="space-y-1.5 mb-4">
                        @foreach(['إدارة حملات منصات التواصل', 'تحديد الجمهور المستهدف', 'إعداد الميزانية وتحليل النتائج'] as $item)
                        <li class="flex items-center gap-2 text-gray-400 text-sm">
                            <span class="w-1.5 h-1.5 bg-amber-400 rounded-full flex-shrink-0"></span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="#contact" class="text-amber-400 text-sm font-semibold inline-flex items-center gap-1 hover:gap-2 transition-all">
                        اطلب الخدمة
                        <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>

                {{-- Service 5: Marketing Consulting --}}
                <div class="card-hover bg-green-500/10 border border-green-500/20 rounded-2xl p-6 group md:col-span-2 lg:col-span-2">
                    <div class="flex items-start gap-6">
                        <div class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-white font-bold text-lg mb-2">الاستشارات التسويقية</h3>
                            <ul class="grid grid-cols-2 gap-x-6 gap-y-1.5 mb-4">
                                @foreach(['بناء خطة تسويق متكاملة', 'تحليل السوق والمنافسين', 'توجيهات مهنية لنجاح العلامة', 'استراتيجيات نمو مخصصة'] as $item)
                                <li class="flex items-center gap-2 text-gray-400 text-sm">
                                    <span class="w-1.5 h-1.5 bg-green-400 rounded-full flex-shrink-0"></span>
                                    {{ $item }}
                                </li>
                                @endforeach
                            </ul>
                            <a href="#contact" class="text-green-400 text-sm font-semibold inline-flex items-center gap-1 hover:gap-2 transition-all">
                                اطلب استشارة
                                <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Why Us --}}
            <div class="mt-12 gradient-card border border-purple-700/30 rounded-3xl p-8">
                <div class="text-center mb-6">
                    <h3 class="text-white font-black text-2xl">لماذا <span class="text-gradient">وكالة المشرافي؟</span></h3>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    @foreach([
                        ['فهم عميق للسوق السعودي', 'text-purple-400', 'bg-purple-500/10'],
                        ['جودة عالية بتصميم راقٍ', 'text-amber-400', 'bg-amber-500/10'],
                        ['سرعة في التنفيذ', 'text-blue-400', 'bg-blue-500/10'],
                        ['التزام كامل بالأهداف', 'text-green-400', 'bg-green-500/10'],
                        ['أسعار تنافسية', 'text-pink-400', 'bg-pink-500/10'],
                    ] as [$text, $color, $bg])
                    <div class="{{ $bg }} rounded-xl p-3 text-center">
                        <p class="{{ $color }} font-semibold text-sm">{{ $text }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ===== PORTFOLIO SECTION ===== --}}
    <section id="portfolio" class="py-20 bg-[#0f0a1e]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-amber-400 font-semibold text-sm uppercase tracking-widest mb-3 block">أعمالنا</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4">
                    نماذج من <span class="text-gradient">أعمالنا المفضلة</span>
                </h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    نظرة عامة على أعمال التسويق والدعايا التي أنجزناها لعملائنا
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                {{-- Marketing Works --}}
                <div class="bg-purple-500/10 border border-purple-500/20 rounded-3xl p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 gradient-primary rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
                        <h3 class="text-white font-bold text-xl">أعمال التسويق</h3>
                    </div>
                    <div class="space-y-4">
                        @foreach([
                            ['إدارة حسابات سوشيال ميديا', 'نمو ملحوظ في التفاعل والمتابعين'],
                            ['حملات إعلانية ممولة', 'تحقيق أهداف البيع والوصول'],
                            ['استشارات تسويقية', 'خطط تسويق متكاملة وقابلة للتنفيذ'],
                            ['هويات بصرية', 'تصاميم تعكس شخصية العلامة التجارية'],
                        ] as [$title, $desc])
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <p class="text-white font-medium text-sm">{{ $title }}</p>
                                <p class="text-gray-400 text-xs">{{ $desc }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Advertising Works --}}
                <div class="bg-amber-500/10 border border-amber-500/20 rounded-3xl p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-amber-400 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                        </div>
                        <h3 class="text-white font-bold text-xl">أعمال الدعايا</h3>
                    </div>
                    <div class="space-y-4">
                        @foreach([
                            ['تصميم مواد إعلانية', 'بنرات وإعلانات رقمية ومطبوعة'],
                            ['محتوى إعلاني إبداعي', 'نصوص وتصاميم تجذب الجمهور'],
                            ['حملات إطلاق المنتجات', 'تغطية شاملة لحملات الإطلاق'],
                            ['بروفايلات الشركات', 'عربي وإنجليزي جاهزة للطباعة'],
                        ] as [$title, $desc])
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-amber-400 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <p class="text-white font-medium text-sm">{{ $title }}</p>
                                <p class="text-gray-400 text-xs">{{ $desc }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="#contact" class="gradient-primary text-white px-8 py-3 rounded-full font-bold hover:opacity-90 transition-opacity inline-flex items-center gap-2 shadow-lg shadow-purple-500/30">
                    اطلع على المزيد من أعمالنا
                </a>
            </div>
        </div>
    </section>

    {{-- ===== ACHIEVEMENTS SECTION ===== --}}
    <section id="achievements" class="py-20 bg-[#1a1235]/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-amber-400 font-semibold text-sm uppercase tracking-widest mb-3 block">إنجازاتنا</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4">
                    <span class="text-gradient">جوائز دولية</span> تشهد على تميّزنا
                </h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    فخورون بحصولنا على ثلاث جوائز دولية معترف بها في مجال التسويق الإبداعي
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                {{-- Award 1: SCXA --}}
                <div class="card-hover bg-gradient-to-br from-amber-500/20 to-amber-900/10 border border-amber-500/30 rounded-3xl p-8 text-center relative overflow-hidden">
                    <div class="absolute top-4 left-4 text-xs bg-amber-400 text-black px-2 py-1 rounded-full font-bold">الإنجاز الأول</div>
                    <div class="w-20 h-20 mx-auto bg-amber-400/20 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-10 h-10 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <h3 class="text-white font-black text-lg mb-2">Saudi Customer Experience Awards</h3>
                    <p class="text-amber-400 font-semibold text-sm mb-3">SCXA</p>
                    <p class="text-gray-400 text-sm">جائزة تجربة العملاء السعودية — تقدير لتميّزنا في تقديم تجارب عملاء استثنائية</p>
                </div>

                {{-- Award 2: Effie Saudi Arabia --}}
                <div class="card-hover bg-gradient-to-br from-purple-500/20 to-purple-900/10 border border-purple-500/30 rounded-3xl p-8 text-center relative overflow-hidden">
                    <div class="absolute top-4 left-4 text-xs bg-purple-500 text-white px-2 py-1 rounded-full font-bold">الإنجاز الثاني</div>
                    <div class="w-20 h-20 mx-auto bg-purple-500/20 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-10 h-10 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/></svg>
                    </div>
                    <h3 class="text-white font-black text-lg mb-2">Effie Awards Saudi Arabia</h3>
                    <p class="text-purple-400 font-semibold text-sm mb-3">جائزة "إيفي" السعودية</p>
                    <p class="text-gray-400 text-sm">الجائزة العالمية للفعالية التسويقية — اعتراف بكفاءة حملاتنا في تحقيق النتائج</p>
                </div>

                {{-- Award 3: Athar Festival --}}
                <div class="card-hover bg-gradient-to-br from-green-500/20 to-green-900/10 border border-green-500/30 rounded-3xl p-8 text-center relative overflow-hidden">
                    <div class="absolute top-4 left-4 text-xs bg-green-500 text-white px-2 py-1 rounded-full font-bold">الإنجاز الثالث</div>
                    <div class="w-20 h-20 mx-auto bg-green-500/20 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-10 h-10 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                    </div>
                    <h3 class="text-white font-black text-lg mb-2">Athar Festival of Creativity</h3>
                    <p class="text-green-400 font-semibold text-sm mb-3">جائزة "أثر" للإبداع التسويقي</p>
                    <p class="text-gray-400 text-sm">مهرجان الإبداع التسويقي — تتويج لإبداعنا وابتكارنا في صناعة المحتوى التسويقي</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== CUSTOMERS SECTION ===== --}}
    <section id="customers" class="py-20 bg-[#0f0a1e]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-amber-400 font-semibold text-sm uppercase tracking-widest mb-3 block">عملاؤنا</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4">
                    ثقة <span class="text-gradient">عملائنا</span> تلهمنا
                </h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    شركاء النجاح الذين وثقوا بوكالة المشرافي لبناء علامتهم التجارية
                </p>
            </div>

            {{-- Row 1: 3 logos --}}
            <div class="flex flex-wrap justify-center gap-8 mb-8">
                @foreach([
                    ['ejra',''],
                    ['mourid',''],
                    ['khulasa',''],
                ] as [$slug, $name])
                <div class="card-hover flex flex-col items-center gap-4 group">
                    <div class="w-36 h-36 rounded-full overflow-hidden border-2 border-white/10 group-hover:border-purple-500/50 transition-colors shadow-lg shadow-black/40">
                        <img src="{{ asset('images/customers/' . $slug . '.png') }}" alt="{{ $name }}"
                             class="w-full h-full object-cover">
                    </div>
                    <span class="text-gray-400 text-sm font-medium group-hover:text-white transition-colors">{{ $name }}</span>
                </div>
                @endforeach
            </div>

            {{-- Row 2: 2 logos --}}
            <div class="flex flex-wrap justify-center gap-8">
                @foreach([
                    ['othaim',''],
                    ['ratio',''],
                ] as [$slug, $name])
                <div class="card-hover flex flex-col items-center gap-4 group">
                    <div class="w-36 h-36 rounded-full overflow-hidden border-2 border-white/10 group-hover:border-purple-500/50 transition-colors shadow-lg shadow-black/40">
                        <img src="{{ asset('images/customers/' . $slug . '.png') }}" alt="{{ $name }}"
                             class="w-full h-full object-cover">
                    </div>
                    <span class="text-gray-400 text-sm font-medium group-hover:text-white transition-colors">{{ $name }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== CONTACT SECTION ===== --}}
    <section id="contact" class="py-20 bg-[#0f0a1e]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-amber-400 font-semibold text-sm uppercase tracking-widest mb-3 block">تواصل معنا</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4">
                    لنعمل <span class="text-gradient">معاً</span>
                </h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    أخبرنا عن مشروعك وسنتواصل معك بأسرع وقت لوضع خطة عمل مخصصة
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                {{-- Contact Info --}}
                <div class="space-y-5">
                    <div class="gradient-card border border-purple-700/30 rounded-2xl p-7">
                        <div class="flex items-center justify-center mb-6">
                            <img src="{{ asset('milaf.png') }}" alt="وكالة المشرافي للتسويق" class="h-20 w-auto object-contain">
                        </div>
                        <h3 class="text-white font-bold text-xl mb-6 text-center">معلومات التواصل</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-green-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">رقم الجوال</div>
                                    <div class="text-white font-bold text-lg">0533663843</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-blue-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">البريد الإلكتروني</div>
                                    <div class="text-white font-medium">M.almashrafi@almashrafi.com</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-purple-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">العنوان</div>
                                    <div class="text-white font-medium">أبراج العليا - برج ب، الدور 29</div>
                                    <div class="text-gray-400 text-sm">الرياض – المملكة العربية السعودية</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-amber-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                </div>
                                <div>
                                    <div class="text-gray-500 text-xs">السجل التجاري</div>
                                    <div class="text-white font-medium">7052741811</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- WhatsApp CTA --}}
                    <a href="https://wa.me/966533663843" target="_blank" class="flex items-center gap-4 bg-green-500/10 border border-green-500/30 rounded-2xl p-5 hover:bg-green-500/20 transition-colors">
                        <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </div>
                        <div>
                            <div class="text-white font-bold">راسلنا على واتساب</div>
                            <div class="text-green-400 text-sm font-medium">0533663843</div>
                        </div>
                        <svg class="w-5 h-5 text-green-400 mr-auto rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>

                {{-- Contact Form --}}
                <div class="gradient-card border border-purple-700/30 rounded-2xl p-8">
                    <h3 class="text-white font-bold text-xl mb-6">أرسل لنا رسالة</h3>
                    <form class="space-y-5" action="#" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="text-gray-400 text-sm mb-1.5 block">الاسم</label>
                                <input type="text" name="name" placeholder="اسمك الكريم" required
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:outline-none focus:border-purple-500 focus:bg-purple-900/20 transition-colors text-sm">
                            </div>
                            <div>
                                <label class="text-gray-400 text-sm mb-1.5 block">رقم الجوال</label>
                                <input type="tel" name="phone" placeholder="05xxxxxxxx" required
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:outline-none focus:border-purple-500 focus:bg-purple-900/20 transition-colors text-sm">
                            </div>
                        </div>
                        <div>
                            <label class="text-gray-400 text-sm mb-1.5 block">البريد الإلكتروني</label>
                            <input type="email" name="email" placeholder="email@example.com"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:outline-none focus:border-purple-500 focus:bg-purple-900/20 transition-colors text-sm">
                        </div>
                        <div>
                            <label class="text-gray-400 text-sm mb-1.5 block">نوع النشاط التجاري</label>
                            <select name="business_type" class="w-full bg-[#1a1235] border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors text-sm">
                                <option value="" disabled selected>اختر نوع نشاطك</option>
                                @foreach(['مطعم / كافيه', 'متجر إلكتروني', 'عيادة / مستشفى', 'شركة عقارية', 'مركز تجميل', 'تعليم / تدريب', 'أخرى'] as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="text-gray-400 text-sm mb-1.5 block">الخدمة المطلوبة</label>
                            <select name="service" class="w-full bg-[#1a1235] border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors text-sm">
                                <option value="" disabled selected>اختر الخدمة</option>
                                @foreach(['إدارة السوشيال ميديا', 'الهوية البصرية', 'بروفايل الشركة', 'الحملات الإعلانية', 'الاستشارات التسويقية', 'باقة متكاملة'] as $service)
                                <option value="{{ $service }}">{{ $service }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="text-gray-400 text-sm mb-1.5 block">تفاصيل المشروع</label>
                            <textarea name="message" rows="3" placeholder="أخبرنا عن مشروعك وأهدافك..."
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:outline-none focus:border-purple-500 focus:bg-purple-900/20 transition-colors text-sm resize-none"></textarea>
                        </div>
                        <button type="submit" class="w-full gradient-primary text-white py-4 rounded-xl font-bold text-base hover:opacity-90 transition-opacity shadow-lg shadow-purple-500/30 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            إرسال الرسالة
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FOOTER ===== --}}
    <footer class="bg-[#0a0717] border-t border-purple-900/30 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                {{-- Brand --}}
                <div>
                    <div class="mb-4">
                        <img src="{{ asset('milaf.png') }}" alt="وكالة المشرافي للتسويق" class="h-16 w-auto object-contain">
                    </div>
                    <p class="text-gray-400 leading-relaxed mb-4 text-sm">
                        وكالة تسويق احترافية تقدم حلولاً ذكية وعصرية في عالم التسويق الرقمي. نضع العميل في قلب كل مشروع.
                    </p>
                    <p class="text-gray-500 text-xs">س.ت: 7052741811</p>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h4 class="text-white font-bold mb-4">روابط سريعة</h4>
                    <ul class="space-y-2">
                        @foreach([['#home', 'الرئيسية'], ['#about', 'من نحن'], ['#services', 'خدماتنا'], ['#portfolio', 'أعمالنا'], ['#achievements', 'إنجازاتنا'], ['#customers', 'عملاؤنا'], ['#contact', 'تواصل معنا']] as [$href, $label])
                        <li><a href="{{ $href }}" class="text-gray-400 hover:text-white text-sm transition-colors">{{ $label }}</a></li>
                        @endforeach
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 class="text-white font-bold mb-4">تواصل معنا</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-gray-400 text-sm">
                            <svg class="w-4 h-4 text-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            0533663843
                        </li>
                        <li class="flex items-center gap-2 text-gray-400 text-sm">
                            <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            M.almashrafi@almashrafi.com
                        </li>
                        <li class="flex items-start gap-2 text-gray-400 text-sm">
                            <svg class="w-4 h-4 text-purple-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            أبراج العليا - برج ب، الدور 29، الرياض
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-purple-900/30 pt-6 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-gray-500 text-sm">© {{ date('Y') }} وكالة المشرافي للتسويق. جميع الحقوق محفوظة.</p>
                <p class="text-gray-600 text-sm">صُنع بـ ❤️ في الرياض، المملكة العربية السعودية</p>
            </div>
        </div>
    </footer>

    {{-- ===== SCRIPTS ===== --}}
    <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-[#0f0a1e]/95', 'backdrop-blur-sm', 'shadow-lg', 'shadow-purple-900/20', 'border-b', 'border-purple-900/30');
            } else {
                navbar.classList.remove('bg-[#0f0a1e]/95', 'backdrop-blur-sm', 'shadow-lg', 'shadow-purple-900/20', 'border-b', 'border-purple-900/30');
            }
        });

        // Mobile menu auto-close on link click
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });

        // Counter animation
        function animateCounter(el) {
            const target = parseInt(el.getAttribute('data-target'));
            const suffix = el.getAttribute('data-suffix') || '';
            const duration = 2000;
            const steps = duration / 16;
            const increment = target / steps;
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                el.textContent = Math.floor(current) + suffix;
            }, 16);
        }

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.dataset.animated) {
                    entry.target.dataset.animated = 'true';
                    animateCounter(entry.target);
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('.counter-animate').forEach(el => counterObserver.observe(el));
    </script>
</body>
</html>
