<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PhotoSphere Pro Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                        "card-dark": "#1C252E",
                        "card-light": "#FFFFFF",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
<style>
        /* Custom Scrollbar for dark mode */
        .dark ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        .dark ::-webkit-scrollbar-track {
            background: #101922; 
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #233648; 
            border-radius: 4px;
        }
        .dark ::-webkit-scrollbar-thumb:hover {
            background: #344c64; 
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display overflow-hidden">
<div class="flex h-screen flex-col w-full">
<!-- Top Navigation -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-slate-200 dark:border-[#233648] bg-card-light dark:bg-[#111a22] px-6 py-3 z-20 shrink-0">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3 text-slate-900 dark:text-white">
<div class="size-8 flex items-center justify-center text-primary">
<span class="material-symbols-outlined !text-3xl">lens_blur</span>
</div>
<h2 class="text-xl font-bold leading-tight tracking-[-0.015em]">PhotoSphere</h2>
</div>
<label class="hidden md:flex flex-col min-w-40 !h-10 max-w-64">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full bg-slate-100 dark:bg-[#233648]">
<div class="text-slate-500 dark:text-[#92adc9] flex border-none items-center justify-center pl-4 rounded-l-lg border-r-0">
<span class="material-symbols-outlined">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-0 border-none bg-transparent focus:border-none h-full placeholder:text-slate-500 dark:placeholder:text-[#92adc9] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" placeholder="Search photos, albums..." value=""/>
</div>
</label>
</div>
<div class="flex items-center gap-6">
<div class="hidden lg:flex items-center gap-6">
<a class="text-slate-600 dark:text-white text-sm font-medium hover:text-primary transition-colors" href="#">Explore</a>
<a class="text-slate-600 dark:text-white text-sm font-medium hover:text-primary transition-colors" href="#">Community</a>
</div>
<button class="flex items-center justify-center rounded-lg h-10 px-5 bg-primary hover:bg-primary/90 text-white text-sm font-bold shadow-lg shadow-primary/20 transition-all">
<span class="material-symbols-outlined mr-2 !text-lg">cloud_upload</span>
<span class="truncate">Upload</span>
</button>
<div class="relative group cursor-pointer">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-transparent hover:ring-primary transition-all" data-alt="Portrait of the user, a professional photographer" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBlN-oSe-jbaH1eBx7JpI1ZEXc5PTeA010ZZlRaBXN1If-8QzIDooWB5LZTqmoPuJzmSzjQnxyJ12CjTxMC93YDYjzW71HD-C5qaaFC1A3CpSLkOrd4FVaAF47vEUdbFqG0kadThaV6OQ2cWr_nDd6U5X4f-GOQf1_GIrGGsHtLlMKK-pdXnw3QXdz58Me-vR2vJatdjgzmGgiA1kfkmK8gpHf7C4Z0VGtETb1E0zfIb2eVFGQuirg0Hx4Y23Qecnjo1oNmtt1A4jBG");'></div>
</div>
</div>
</header>
<div class="flex flex-1 overflow-hidden relative">
<!-- Sidebar -->
<aside class="hidden md:flex flex-col w-64 bg-card-light dark:bg-[#111a22] border-r border-slate-200 dark:border-[#233648] shrink-0 h-full overflow-y-auto pb-6">
<div class="flex flex-col justify-between h-full p-4">
<div class="flex flex-col gap-6">
<div class="flex flex-col gap-2">
<h3 class="text-slate-500 dark:text-[#92adc9] text-xs font-bold uppercase tracking-wider px-3 mb-1">Main Menu</h3>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary" href="#">
<span class="material-symbols-outlined">grid_view</span>
<p class="text-sm font-medium">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-[#233648] transition-colors group" href="#">
<span class="material-symbols-outlined group-hover:text-white">photo_library</span>
<p class="text-sm font-medium group-hover:text-slate-900 dark:group-hover:text-white">My Photos</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-[#233648] transition-colors group" href="#">
<span class="material-symbols-outlined group-hover:text-white">folder_open</span>
<p class="text-sm font-medium group-hover:text-slate-900 dark:group-hover:text-white">Albums</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-[#233648] transition-colors group" href="#">
<span class="material-symbols-outlined group-hover:text-white">bar_chart</span>
<p class="text-sm font-medium group-hover:text-slate-900 dark:group-hover:text-white">Analytics</p>
</a>
<div class="h-px bg-slate-200 dark:bg-[#233648] my-1"></div>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-[#233648] transition-colors group" href="#">
<span class="material-symbols-outlined group-hover:text-white">settings</span>
<p class="text-sm font-medium group-hover:text-slate-900 dark:group-hover:text-white">Settings</p>
</a>
</div>
</div>
<!-- Storage Widget -->
<div class="flex flex-col gap-3 p-4 rounded-xl bg-slate-100 dark:bg-[#1a2632]">
<div class="flex items-center gap-3">
<div class="p-2 rounded-full bg-primary/20 text-primary">
<span class="material-symbols-outlined !text-xl">cloud</span>
</div>
<div>
<p class="text-slate-900 dark:text-white text-sm font-bold">Storage</p>
<p class="text-slate-500 dark:text-[#92adc9] text-xs">Unlimited</p>
</div>
</div>
<div class="w-full h-1.5 bg-slate-200 dark:bg-[#233648] rounded-full overflow-hidden">
<div class="h-full bg-gradient-to-r from-primary to-blue-400 w-full animate-pulse"></div>
</div>
<p class="text-[10px] text-slate-400 dark:text-[#64748b] text-center">Pro Plan Active</p>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark p-6 lg:p-10 scroll-smooth">
<div class="max-w-6xl mx-auto flex flex-col gap-8">
<!-- Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
<div class="flex flex-col gap-1">
<h1 class="text-slate-900 dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">Welcome back, Alex</h1>
<div class="flex items-center gap-2 text-slate-500 dark:text-[#92adc9]">
<span class="material-symbols-outlined !text-sm">verified</span>
<p class="text-base font-normal">Pro Member since 2021</p>
</div>
</div>
<div class="flex items-center gap-3">
<span class="text-xs text-slate-500 dark:text-slate-400">Last login: Today, 9:41 AM</span>
</div>
</div>
<!-- Stats Row -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<!-- Stat Card 1 -->
<div class="flex flex-col gap-4 rounded-xl p-5 bg-card-light dark:bg-[#233648] border border-slate-200 dark:border-transparent shadow-sm">
<div class="flex items-center justify-between">
<p class="text-slate-500 dark:text-[#92adc9] text-sm font-medium uppercase tracking-wide">Total Views</p>
<span class="material-symbols-outlined text-slate-400 dark:text-slate-500">visibility</span>
</div>
<div>
<p class="text-slate-900 dark:text-white text-3xl font-bold leading-tight">12.5k</p>
<div class="flex items-center gap-1 mt-1 text-[#0bda5b]">
<span class="material-symbols-outlined !text-sm">trending_up</span>
<p class="text-sm font-medium">+12% last 30 days</p>
</div>
</div>
</div>
<!-- Stat Card 2 -->
<div class="flex flex-col gap-4 rounded-xl p-5 bg-card-light dark:bg-[#233648] border border-slate-200 dark:border-transparent shadow-sm">
<div class="flex items-center justify-between">
<p class="text-slate-500 dark:text-[#92adc9] text-sm font-medium uppercase tracking-wide">Total Likes</p>
<span class="material-symbols-outlined text-slate-400 dark:text-slate-500">favorite</span>
</div>
<div>
<p class="text-slate-900 dark:text-white text-3xl font-bold leading-tight">3.2k</p>
<div class="flex items-center gap-1 mt-1 text-[#0bda5b]">
<span class="material-symbols-outlined !text-sm">trending_up</span>
<p class="text-sm font-medium">+5% last 30 days</p>
</div>
</div>
</div>
<!-- Stat Card 3 -->
<div class="flex flex-col gap-4 rounded-xl p-5 bg-card-light dark:bg-[#233648] border border-slate-200 dark:border-transparent shadow-sm">
<div class="flex items-center justify-between">
<p class="text-slate-500 dark:text-[#92adc9] text-sm font-medium uppercase tracking-wide">Photo Count</p>
<span class="material-symbols-outlined text-slate-400 dark:text-slate-500">image</span>
</div>
<div>
<p class="text-slate-900 dark:text-white text-3xl font-bold leading-tight">842</p>
<div class="flex items-center gap-1 mt-1 text-primary">
<span class="material-symbols-outlined !text-sm">add_a_photo</span>
<p class="text-sm font-medium">+8 photos added</p>
</div>
</div>
</div>
</div>
<!-- Analytics Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Main Chart -->
<div class="lg:col-span-2 rounded-xl p-6 bg-card-light dark:bg-[#233648] border border-slate-200 dark:border-transparent shadow-sm flex flex-col">
<div class="flex items-center justify-between mb-6">
<div>
<h3 class="text-slate-900 dark:text-white text-lg font-bold">Engagement Trends</h3>
<p class="text-slate-500 dark:text-[#92adc9] text-sm">Last 30 Days</p>
</div>
<div class="text-right">
<p class="text-slate-900 dark:text-white text-2xl font-bold">15.7k</p>
<p class="text-slate-500 dark:text-[#92adc9] text-xs uppercase">Interactions</p>
</div>
</div>
<div class="flex-1 w-full min-h-[200px] relative">
<!-- Simulated Chart with SVG -->
<svg class="w-full h-full" fill="none" preserveaspectratio="none" viewbox="0 0 478 150" xmlns="http://www.w3.org/2000/svg">
<defs>
<lineargradient gradientunits="userSpaceOnUse" id="paint0_linear_1131_5935" x1="239" x2="239" y1="0" y2="150">
<stop stop-color="#137fec" stop-opacity="0.3"></stop>
<stop offset="1" stop-color="#137fec" stop-opacity="0"></stop>
</lineargradient>
</defs>
<path d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V149H326.769H0V109Z" fill="url(#paint0_linear_1131_5935)"></path>
<path d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25" stroke="#137fec" stroke-linecap="round" stroke-width="3"></path>
</svg>
</div>
</div>
<!-- Sidebar Widgets Column -->
<div class="flex flex-col gap-6">
<!-- Geo Stats -->
<div class="rounded-xl p-6 bg-card-light dark:bg-[#233648] border border-slate-200 dark:border-transparent shadow-sm flex flex-col gap-4">
<h3 class="text-slate-900 dark:text-white text-lg font-bold">Top Audience Locations</h3>
<div class="relative w-full h-32 rounded-lg overflow-hidden">
<!-- Placeholder Map -->
<div class="absolute inset-0 bg-slate-800" data-location="World Map showing hotspots in USA, Japan, and Europe" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAX2xplGkuAeKnGJQ3PAxGQFeQdAB-AyyyINqIS66-i43KBn1Ndfzg28LQLfdttI9CAMygv66zdGP2b4Dvd92hEr3-Kxr-V21sHD_rWPHncreN-yn-i3RUiBxWMc59vu6Il4rczTz-fHnN13_nebY6yzqtdRwISSj_dJQKjrqoeg4gGSgVL5pe6-zndneUJn7bhd6dQDOya3bJfdmtnl6IkSJc1eJh7snQhQDzEivwEU8pVHvOBrWVBjhX8lvr_No2EoMUsxTOMFNeC"); background-size: cover; background-position: center; opacity: 0.6;'></div>
<div class="absolute inset-0 bg-gradient-to-t from-[#233648] to-transparent"></div>
</div>
<div class="flex flex-col gap-3">
<div class="flex items-center justify-between text-sm">
<div class="flex items-center gap-2">
<span class="text-xl">🇺🇸</span>
<span class="text-slate-700 dark:text-white font-medium">USA</span>
</div>
<span class="text-slate-500 dark:text-[#92adc9]">42%</span>
</div>
<div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-1.5">
<div class="bg-primary h-1.5 rounded-full" style="width: 42%"></div>
</div>
<div class="flex items-center justify-between text-sm mt-1">
<div class="flex items-center gap-2">
<span class="text-xl">🇯🇵</span>
<span class="text-slate-700 dark:text-white font-medium">Japan</span>
</div>
<span class="text-slate-500 dark:text-[#92adc9]">24%</span>
</div>
<div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-1.5">
<div class="bg-purple-500 h-1.5 rounded-full" style="width: 24%"></div>
</div>
<div class="flex items-center justify-between text-sm mt-1">
<div class="flex items-center gap-2">
<span class="text-xl">🇩🇪</span>
<span class="text-slate-700 dark:text-white font-medium">Germany</span>
</div>
<span class="text-slate-500 dark:text-[#92adc9]">18%</span>
</div>
<div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-1.5">
<div class="bg-amber-500 h-1.5 rounded-full" style="width: 18%"></div>
</div>
</div>
</div>
<!-- Subscription Card -->
<div class="rounded-xl p-6 bg-gradient-to-br from-primary/20 to-primary/5 border border-primary/20 shadow-sm flex flex-col gap-3 relative overflow-hidden">
<div class="absolute -right-4 -top-4 w-24 h-24 bg-primary/20 rounded-full blur-2xl"></div>
<div class="flex items-center justify-between z-10">
<span class="px-2 py-1 rounded bg-primary text-white text-[10px] font-bold uppercase tracking-wider">Pro Tier</span>
<a class="text-xs text-primary font-medium hover:underline" href="#">Manage</a>
</div>
<div class="z-10">
<h4 class="text-slate-900 dark:text-white text-lg font-bold">PhotoSphere Pro</h4>
<p class="text-slate-500 dark:text-slate-300 text-sm mt-1">Active - Next billing on Nov 12</p>
</div>
<div class="flex items-center gap-2 mt-2 z-10 text-slate-700 dark:text-white">
<span class="material-symbols-outlined">all_inclusive</span>
<span class="text-sm font-medium">Unlimited Storage</span>
</div>
</div>
</div>
</div>
<!-- Recent Uploads Section -->
<div class="flex flex-col gap-4">
<div class="flex items-center justify-between">
<h3 class="text-slate-900 dark:text-white text-xl font-bold">Recent Uploads</h3>
<div class="flex items-center gap-2">
<button class="flex items-center justify-center size-8 rounded-full bg-slate-200 dark:bg-[#233648] text-slate-700 dark:text-white hover:bg-slate-300 dark:hover:bg-slate-700 transition">
<span class="material-symbols-outlined !text-lg">grid_view</span>
</button>
<button class="flex items-center justify-center size-8 rounded-full bg-transparent text-slate-500 dark:text-[#92adc9] hover:bg-slate-200 dark:hover:bg-[#233648] transition">
<span class="material-symbols-outlined !text-lg">list</span>
</button>
</div>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
<!-- Photo Card 1 -->
<div class="group relative aspect-[4/3] rounded-lg overflow-hidden bg-slate-800 cursor-pointer">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Close up of a neon city street at night with rain reflections" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAWRtjz3_CIM4UsEOpHtaMwcfViM2Ba_fKq1qK5QkjKp9J8xr3-i0a3BGVcSBFOEwK2Ihi2NJNxD3yt1gOiPxyioJLO7GXTX3PyL61N0L5yndCvRMyiGMZRUMXQwCL8KAaaigTCF-sndUkRr_4DLWNzj7dhrIh4E42643ErduKNPxobuD3E9zKbuKgy1b6x1fKyetKuJeJYT1tjr1CCCqgdk2_8sgqelL0SpFQk0sHjcS2f33Fzk5E3sWVOTAG9POyLZAfS4fcmF9F4");'></div>
<div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100">
<div class="flex gap-2">
<button class="size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/40 transition">
<span class="material-symbols-outlined !text-sm">edit</span>
</button>
<button class="size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/40 transition">
<span class="material-symbols-outlined !text-sm">share</span>
</button>
</div>
</div>
<div class="absolute top-2 right-2 px-2 py-0.5 rounded bg-black/50 backdrop-blur-sm text-white text-[10px] flex items-center gap-1">
<span class="material-symbols-outlined !text-[10px]">public</span> Public
                                </div>
</div>
<!-- Photo Card 2 -->
<div class="group relative aspect-[4/3] rounded-lg overflow-hidden bg-slate-800 cursor-pointer">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Portrait of a woman with dramatic studio lighting" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAQdpYgElrlFhNtaufvE4PeyiLHjrx74wURTbnhWBfsbJJFhmTRfP22uApVzRff4frkPnvqi43OMH-raNncpQjGlZJmgDIazzH6q1i8nOE5rTtz7DHscwJd7n_OmWUVssNkGSanfhpN8HjwwWX5gEBTN-dhHHa2z6un7XujFIo6jk9PD9dtdn_b0Rg0y7rf0w-CtKDpSldUy5Y2JR983NAU5hh0p1jYFsZSvYOSUma6UwlcEaNEGlFAbRpkd8fDAvxm9_xk_jxbyoXr");'></div>
<div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100">
<div class="flex gap-2">
<button class="size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/40 transition">
<span class="material-symbols-outlined !text-sm">edit</span>
</button>
<button class="size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/40 transition">
<span class="material-symbols-outlined !text-sm">share</span>
</button>
</div>
</div>
<div class="absolute top-2 right-2 px-2 py-0.5 rounded bg-black/50 backdrop-blur-sm text-white text-[10px] flex items-center gap-1">
<span class="material-symbols-outlined !text-[10px]">lock</span> Private
                                </div>
</div>
<!-- Photo Card 3 -->
<div class="group relative aspect-[4/3] rounded-lg overflow-hidden bg-slate-800 cursor-pointer">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Landscape shot of misty mountains in the morning" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDjQrK-2C2EDRpIY0SKcLXJUMdAtfAwF4wbWna3xtH88sW8O78-nsT-cTG7RWq25aQIOz_2w4vzEb9NmOgrT8KOkKNA_ed9eNptoBnnPgS709gRFzWzf_MsqS9-mOLUKn3SeeBDvPRvzb8efY31Shid00VhYe7LGuPIej0m1Pvryj78vFd-ggxbW5CSnRNq_9cZhg_cK-nVn0FTu-dS-GSIONsC0i20_7HffXF8wp0sLeZxBLSeDL9sZl0NrrLCd4qqbOet4lMH6mez");'></div>
<div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100">
<div class="flex gap-2">
<button class="size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/40 transition">
<span class="material-symbols-outlined !text-sm">edit</span>
</button>
<button class="size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/40 transition">
<span class="material-symbols-outlined !text-sm">share</span>
</button>
</div>
</div>
<div class="absolute top-2 right-2 px-2 py-0.5 rounded bg-black/50 backdrop-blur-sm text-white text-[10px] flex items-center gap-1">
<span class="material-symbols-outlined !text-[10px]">public</span> Public
                                </div>
</div>
<!-- Photo Card 4 -->
<div class="group relative aspect-[4/3] rounded-lg overflow-hidden bg-slate-800 cursor-pointer">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Abstract architectural details of a modern building" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDdXeDhjySgQ_qWmuo4VrhkQdwOklgOb49exrPDRi1_lLy-RDgU2zK77rRtEPg6HylEYNgoYjEZzkACnGQNpMYec8xO04IsuqaJqN6r5MrBSMIHpD_5YsAa8XnEotPkSQiiBKCUNKqWZ6-87iLeZyjEVOXSaL6srRkfhG8liXdo22-TNIrs5ZbX9vgUuCVGqo-NLsgx_NhNR-YQd6obscP9tPdgHLe8i7niPJIyhxl-yM2Oda7k5hDXcpGND4YTxa3rX3U8cY2CF_jH");'></div>
<div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100">
<div class="flex gap-2">
<button class="size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/40 transition">
<span class="material-symbols-outlined !text-sm">edit</span>
</button>
<button class="size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/40 transition">
<span class="material-symbols-outlined !text-sm">share</span>
</button>
</div>
</div>
<div class="absolute top-2 right-2 px-2 py-0.5 rounded bg-black/50 backdrop-blur-sm text-white text-[10px] flex items-center gap-1">
<span class="material-symbols-outlined !text-[10px]">public</span> Public
                                </div>
</div>
</div>
</div>
</div>
</main>
</div>
<!-- Floating Action Button for Mobile -->
<button class="md:hidden fixed bottom-6 right-6 size-14 rounded-full bg-primary text-white shadow-xl shadow-primary/30 flex items-center justify-center z-50">
<span class="material-symbols-outlined !text-2xl">add</span>
</button>
</div>
</body></html>