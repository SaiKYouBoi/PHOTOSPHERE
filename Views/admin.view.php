<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PhotoSphere Admin Panel</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                        "surface-dark": "#182635",
                        "surface-light": "#ffffff",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display h-screen flex flex-col md:flex-row overflow-hidden text-[#111418] dark:text-white">
<!-- Sidebar -->
<aside class="w-full md:w-[280px] flex-shrink-0 bg-surface-light dark:bg-[#111a22] border-r border-[#e5e7eb] dark:border-[#233648] flex flex-col justify-between hidden md:flex h-full">
<div class="flex flex-col gap-4 p-4">
<div class="flex items-center gap-3 px-2 mb-6 mt-2">
<div class="bg-primary/20 flex items-center justify-center rounded-lg size-10 text-primary">
<span class="material-symbols-outlined">shutter_speed</span>
</div>
<div class="flex flex-col">
<h1 class="text-[#111418] dark:text-white text-lg font-bold leading-normal">PhotoSphere</h1>
<p class="text-[#637588] dark:text-[#92adc9] text-xs font-normal leading-normal">Admin Console</p>
</div>
</div>
<div class="flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary text-white" href="#">
<span class="material-symbols-outlined" style="font-size: 20px;">dashboard</span>
<p class="text-sm font-medium leading-normal">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#111418] dark:text-white hover:bg-[#f3f4f6] dark:hover:bg-[#1e2b3a] transition-colors" href="#">
<span class="material-symbols-outlined" style="font-size: 20px;">group</span>
<p class="text-sm font-medium leading-normal">Users</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#111418] dark:text-white hover:bg-[#f3f4f6] dark:hover:bg-[#1e2b3a] transition-colors" href="#">
<span class="material-symbols-outlined" style="font-size: 20px;">shield_person</span>
<p class="text-sm font-medium leading-normal">Content Moderation</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#111418] dark:text-white hover:bg-[#f3f4f6] dark:hover:bg-[#1e2b3a] transition-colors" href="#">
<span class="material-symbols-outlined" style="font-size: 20px;">dns</span>
<p class="text-sm font-medium leading-normal">Server Logs</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#111418] dark:text-white hover:bg-[#f3f4f6] dark:hover:bg-[#1e2b3a] transition-colors" href="#">
<span class="material-symbols-outlined" style="font-size: 20px;">settings</span>
<p class="text-sm font-medium leading-normal">Settings</p>
</a>
</div>
</div>
<div class="p-4 border-t border-[#e5e7eb] dark:border-[#233648]">
<div class="flex items-center gap-3 px-3 py-2 rounded-lg cursor-pointer hover:bg-[#f3f4f6] dark:hover:bg-[#1e2b3a] transition-colors">
<div class="size-8 rounded-full bg-cover bg-center" data-alt="Portrait of admin user" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBQjeCi0dEDGMKtfM4kOjPItDjUv0ug3YSwzQKHGVXPMaA_ELY4XVEwMHILJ5Sm8DxqlF5FrYcK5V07j1QwvnkAYGbT4pCeEnUCiHwRUs1XfVVo5v0mtYsLC8H78j5wxZpWkZgeKNrZdih3rhpMJcKe0TOTbuLUmsfX6KQ_RT2R3YYYnkeelcl4EupIJ2wDKVDbMgI-KRDKp5cpaqwjZzycBoIdJfwEUAChtCkwD0rxVCbe6ofVOnhBF1C7kwQ7s8p62yGTVkKf5Wp4");'></div>
<div class="flex flex-col flex-1 min-w-0">
<p class="text-[#111418] dark:text-white text-sm font-medium truncate">Marcus Chen</p>
<p class="text-[#637588] dark:text-[#92adc9] text-xs truncate">Super Admin</p>
</div>
<span class="material-symbols-outlined text-[#637588] dark:text-[#92adc9]" style="font-size: 20px;">logout</span>
</div>
</div>
</aside>
<!-- Main Content Wrapper -->
<div class="flex-1 flex flex-col h-full min-w-0 overflow-hidden relative">
<!-- Top Navigation -->
<header class="h-16 flex items-center justify-between px-6 bg-surface-light dark:bg-[#111a22] border-b border-[#e5e7eb] dark:border-[#233648] shrink-0">
<div class="flex items-center gap-4 lg:hidden">
<button class="text-[#111418] dark:text-white p-1">
<span class="material-symbols-outlined">menu</span>
</button>
<h1 class="text-[#111418] dark:text-white text-lg font-bold">PhotoSphere</h1>
</div>
<h2 class="hidden lg:block text-[#111418] dark:text-white text-lg font-semibold tracking-tight">System Overview</h2>
<div class="flex items-center gap-4">
<div class="relative hidden sm:block">
<span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#637588] dark:text-[#92adc9]">
<span class="material-symbols-outlined" style="font-size: 20px;">search</span>
</span>
<input class="w-64 pl-10 pr-4 py-2 bg-[#f3f4f6] dark:bg-[#233648] border-none rounded-lg text-sm text-[#111418] dark:text-white placeholder-[#637588] dark:placeholder-[#92adc9] focus:ring-2 focus:ring-primary focus:outline-none" placeholder="Search logs, users..." type="text"/>
</div>
<button class="relative p-2 text-[#637588] dark:text-[#92adc9] hover:text-primary transition-colors">
<span class="material-symbols-outlined" style="font-size: 24px;">notifications</span>
<span class="absolute top-1.5 right-1.5 size-2 bg-red-500 rounded-full border border-white dark:border-[#111a22]"></span>
</button>
</div>
</header>
<!-- Scrollable Content -->
<main class="flex-1 overflow-y-auto p-4 md:p-8 scrollbar-hide">
<div class="max-w-[1400px] mx-auto space-y-8">
<!-- Page Header with Actions -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div>
<h1 class="text-2xl md:text-3xl font-bold text-[#111418] dark:text-white tracking-tight">Dashboard</h1>
<p class="text-[#637588] dark:text-[#92adc9] mt-1">Real-time platform statistics and health metrics.</p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-4 py-2 bg-surface-light dark:bg-[#233648] border border-[#e5e7eb] dark:border-none rounded-lg text-sm font-medium text-[#111418] dark:text-white hover:bg-gray-50 dark:hover:bg-[#2f455a] transition-colors">
<span class="material-symbols-outlined" style="font-size: 20px;">build</span>
                            Maintenance Mode
                        </button>
<button class="flex items-center gap-2 px-4 py-2 bg-primary rounded-lg text-sm font-bold text-white hover:bg-primary/90 transition-colors shadow-lg shadow-primary/20">
<span class="material-symbols-outlined" style="font-size: 20px;">person_add</span>
                            Add User
                        </button>
</div>
</div>
<!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- Total Users -->
<div class="bg-surface-light dark:bg-[#1e293b] p-5 rounded-xl border border-[#e5e7eb] dark:border-[#334155] shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-blue-100 dark:bg-blue-500/10 rounded-lg text-blue-600 dark:text-blue-400">
<span class="material-symbols-outlined" style="font-size: 24px;">group</span>
</div>
<span class="flex items-center text-xs font-medium text-emerald-500 bg-emerald-50 dark:bg-emerald-500/10 px-2 py-1 rounded-full">
<span class="material-symbols-outlined mr-1" style="font-size: 14px;">trending_up</span> +5%
                            </span>
</div>
<p class="text-[#637588] dark:text-[#94a3b8] text-sm font-medium">Total Users</p>
<h3 class="text-[#111418] dark:text-white text-2xl font-bold mt-1">12,450</h3>
</div>
<!-- Total Photos -->
<div class="bg-surface-light dark:bg-[#1e293b] p-5 rounded-xl border border-[#e5e7eb] dark:border-[#334155] shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-purple-100 dark:bg-purple-500/10 rounded-lg text-purple-600 dark:text-purple-400">
<span class="material-symbols-outlined" style="font-size: 24px;">photo_library</span>
</div>
<span class="flex items-center text-xs font-medium text-emerald-500 bg-emerald-50 dark:bg-emerald-500/10 px-2 py-1 rounded-full">
<span class="material-symbols-outlined mr-1" style="font-size: 14px;">trending_up</span> +120
                            </span>
</div>
<p class="text-[#637588] dark:text-[#94a3b8] text-sm font-medium">Total Photos</p>
<h3 class="text-[#111418] dark:text-white text-2xl font-bold mt-1">840,102</h3>
</div>
<!-- Storage Used -->
<div class="bg-surface-light dark:bg-[#1e293b] p-5 rounded-xl border border-[#e5e7eb] dark:border-[#334155] shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-orange-100 dark:bg-orange-500/10 rounded-lg text-orange-600 dark:text-orange-400">
<span class="material-symbols-outlined" style="font-size: 24px;">cloud_done</span>
</div>
<span class="flex items-center text-xs font-medium text-amber-500 bg-amber-50 dark:bg-amber-500/10 px-2 py-1 rounded-full">
<span class="material-symbols-outlined mr-1" style="font-size: 14px;">warning</span> 45%
                            </span>
</div>
<p class="text-[#637588] dark:text-[#94a3b8] text-sm font-medium">Storage Used</p>
<h3 class="text-[#111418] dark:text-white text-2xl font-bold mt-1">45TB <span class="text-sm font-normal text-[#637588] dark:text-[#64748b]">/ 100TB</span></h3>
</div>
<!-- Server Load -->
<div class="bg-surface-light dark:bg-[#1e293b] p-5 rounded-xl border border-[#e5e7eb] dark:border-[#334155] shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-pink-100 dark:bg-pink-500/10 rounded-lg text-pink-600 dark:text-pink-400">
<span class="material-symbols-outlined" style="font-size: 24px;">memory</span>
</div>
<span class="flex items-center text-xs font-medium text-emerald-500 bg-emerald-50 dark:bg-emerald-500/10 px-2 py-1 rounded-full">
                                Healthy
                            </span>
</div>
<p class="text-[#637588] dark:text-[#94a3b8] text-sm font-medium">Server Load</p>
<h3 class="text-[#111418] dark:text-white text-2xl font-bold mt-1">24%</h3>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Charts & Performance -->
<div class="lg:col-span-2 bg-surface-light dark:bg-[#1e293b] rounded-xl border border-[#e5e7eb] dark:border-[#334155] shadow-sm overflow-hidden">
<div class="p-5 border-b border-[#e5e7eb] dark:border-[#334155] flex justify-between items-center">
<h3 class="text-[#111418] dark:text-white font-semibold">Request Latency</h3>
<div class="flex gap-2">
<span class="px-2 py-1 rounded bg-[#f3f4f6] dark:bg-[#334155] text-xs font-medium text-[#637588] dark:text-[#94a3b8] cursor-pointer">1H</span>
<span class="px-2 py-1 rounded text-xs font-medium text-[#637588] dark:text-[#64748b] hover:bg-[#f3f4f6] dark:hover:bg-[#334155] cursor-pointer transition-colors">24H</span>
</div>
</div>
<div class="p-6">
<div class="flex items-baseline gap-2 mb-6">
<span class="text-3xl font-bold text-[#111418] dark:text-white">14ms</span>
<span class="text-sm text-[#637588] dark:text-[#94a3b8]">avg latency</span>
</div>
<!-- Chart Visualization -->
<div class="h-64 w-full relative">
<svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 800 200">
<defs>
<lineargradient id="chartGradient" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#137fec" stop-opacity="0.2"></stop>
<stop offset="100%" stop-color="#137fec" stop-opacity="0"></stop>
</lineargradient>
</defs>
<!-- Grid lines -->
<line stroke="#e5e7eb" stroke-opacity="0.2" stroke-width="1" x1="0" x2="800" y1="0" y2="0"></line>
<line stroke="#e5e7eb" stroke-opacity="0.2" stroke-width="1" x1="0" x2="800" y1="50" y2="50"></line>
<line stroke="#e5e7eb" stroke-opacity="0.2" stroke-width="1" x1="0" x2="800" y1="100" y2="100"></line>
<line stroke="#e5e7eb" stroke-opacity="0.2" stroke-width="1" x1="0" x2="800" y1="150" y2="150"></line>
<!-- The curve -->
<path d="M0,120 C50,110 100,140 150,100 C200,60 250,90 300,70 C350,50 400,60 450,40 C500,20 550,50 600,45 C650,40 700,20 750,30 L800,20 V200 H0 Z" fill="url(#chartGradient)"></path>
<path d="M0,120 C50,110 100,140 150,100 C200,60 250,90 300,70 C350,50 400,60 450,40 C500,20 550,50 600,45 C650,40 700,20 750,30 L800,20" fill="none" stroke="#137fec" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path>
</svg>
<div class="flex justify-between mt-4 text-xs text-[#637588] dark:text-[#64748b] font-medium uppercase tracking-wide">
<span>10:00</span>
<span>10:15</span>
<span>10:30</span>
<span>10:45</span>
<span>11:00</span>
</div>
</div>
</div>
</div>
<!-- System Health Bars -->
<div class="bg-surface-light dark:bg-[#1e293b] rounded-xl border border-[#e5e7eb] dark:border-[#334155] shadow-sm flex flex-col">
<div class="p-5 border-b border-[#e5e7eb] dark:border-[#334155]">
<h3 class="text-[#111418] dark:text-white font-semibold">System Resource Usage</h3>
</div>
<div class="p-5 flex flex-col justify-center flex-1 gap-8">
<div class="space-y-2">
<div class="flex justify-between text-sm font-medium">
<span class="text-[#637588] dark:text-[#94a3b8]">CPU Usage</span>
<span class="text-[#111418] dark:text-white">42%</span>
</div>
<div class="w-full bg-[#e5e7eb] dark:bg-[#334155] rounded-full h-2">
<div class="bg-primary h-2 rounded-full" style="width: 42%"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-sm font-medium">
<span class="text-[#637588] dark:text-[#94a3b8]">RAM Usage</span>
<span class="text-[#111418] dark:text-white">68%</span>
</div>
<div class="w-full bg-[#e5e7eb] dark:bg-[#334155] rounded-full h-2">
<div class="bg-primary h-2 rounded-full" style="width: 68%"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-sm font-medium">
<span class="text-[#637588] dark:text-[#94a3b8]">Database Connection Pool</span>
<span class="text-[#111418] dark:text-white">15%</span>
</div>
<div class="w-full bg-[#e5e7eb] dark:bg-[#334155] rounded-full h-2">
<div class="bg-emerald-500 h-2 rounded-full" style="width: 15%"></div>
</div>
</div>
<div class="pt-4 border-t border-[#e5e7eb] dark:border-[#334155]">
<label class="flex items-center justify-between cursor-pointer group">
<div class="flex flex-col">
<span class="text-sm font-medium text-[#111418] dark:text-white">Disable New Registrations</span>
<span class="text-xs text-[#637588] dark:text-[#64748b]">Stop new users from signing up</span>
</div>
<div class="relative">
<input class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
</div>
</label>
</div>
</div>
</div>
</div>
<!-- User Management Table -->
<div class="bg-surface-light dark:bg-[#1e293b] rounded-xl border border-[#e5e7eb] dark:border-[#334155] shadow-sm overflow-hidden">
<div class="p-5 border-b border-[#e5e7eb] dark:border-[#334155] flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
<h3 class="text-[#111418] dark:text-white font-semibold text-lg">Recent Users</h3>
<div class="flex gap-2">
<button class="flex items-center gap-1.5 px-3 py-1.5 bg-surface-light dark:bg-[#2f455a] border border-[#e5e7eb] dark:border-none rounded-lg text-sm text-[#111418] dark:text-white hover:bg-gray-50 dark:hover:bg-[#3a5269] transition-colors">
<span class="material-symbols-outlined" style="font-size: 18px;">filter_list</span>
                                Filter
                            </button>
<button class="flex items-center gap-1.5 px-3 py-1.5 bg-surface-light dark:bg-[#2f455a] border border-[#e5e7eb] dark:border-none rounded-lg text-sm text-[#111418] dark:text-white hover:bg-gray-50 dark:hover:bg-[#3a5269] transition-colors">
<span class="material-symbols-outlined" style="font-size: 18px;">download</span>
                                Export
                            </button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-[#f9fafb] dark:bg-[#263545] border-b border-[#e5e7eb] dark:border-[#334155]">
<th class="p-4 text-xs font-semibold tracking-wide text-[#637588] dark:text-[#94a3b8] uppercase">User</th>
<th class="p-4 text-xs font-semibold tracking-wide text-[#637588] dark:text-[#94a3b8] uppercase hidden md:table-cell">Role</th>
<th class="p-4 text-xs font-semibold tracking-wide text-[#637588] dark:text-[#94a3b8] uppercase hidden sm:table-cell">Status</th>
<th class="p-4 text-xs font-semibold tracking-wide text-[#637588] dark:text-[#94a3b8] uppercase hidden lg:table-cell">Joined</th>
<th class="p-4 text-xs font-semibold tracking-wide text-[#637588] dark:text-[#94a3b8] uppercase text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-[#e5e7eb] dark:divide-[#334155]">
<tr class="hover:bg-[#f9fafb] dark:hover:bg-[#263545] transition-colors group">
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-cover bg-center shrink-0" data-alt="Profile picture of Sarah Johnson" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDK3YXCX-alzbmVR__LgvznsudoU2x848dsg_aB67cyk9np4eT6FDJZKKm6ptMh5oRsowyNxP4n5fnTGb6VcHJEUQNG_I142B6o6o18KF4GnAcEZ15GaM53BYX8gg3IGCDCxTaeC_XDlZlrQ79MQqhgcsWowamD5tItBG170zT4WV3QvkXvlOAQPTg9pCikCLvZzA3uQAJXbc6R1ly6PrTFOFrV7hPSnQYyl5UBYavf0Xr3cTg43OYXysK6P6a6RwtR1-LbotUUdX71");'></div>
<div>
<p class="text-[#111418] dark:text-white text-sm font-medium">Sarah Johnson</p>
<p class="text-[#637588] dark:text-[#94a3b8] text-xs">sarah.j@example.com</p>
</div>
</div>
</td>
<td class="p-4 hidden md:table-cell">
<span class="text-[#111418] dark:text-white text-sm">Pro Member</span>
</td>
<td class="p-4 hidden sm:table-cell">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-500/20 dark:text-green-400">
                                            Active
                                        </span>
</td>
<td class="p-4 hidden lg:table-cell">
<span class="text-[#637588] dark:text-[#94a3b8] text-sm">Oct 24, 2023</span>
</td>
<td class="p-4 text-right">
<button class="text-[#637588] dark:text-[#94a3b8] hover:text-primary dark:hover:text-white p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
<span class="material-symbols-outlined" style="font-size: 20px;">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-[#f9fafb] dark:hover:bg-[#263545] transition-colors group">
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-cover bg-center shrink-0" data-alt="Profile picture of Michael Chen" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBLAJtWrG8lfnUTr5Lu0dGXOJ6mK1vhVAchogUZjFQ5ogl20ZEEDvyH9PnEvvSVYtKecQvCZtD35gIhiOx-bJTCZz-jOzLOOHHRI6MBMKV3Y-hCqGNKPPzUPnhbrsDXduPCAyKw_RRQzPPrYIGyCINEJU4xtqB_veumd6jBOmyb31RQf3g0h-wnZsbt_ihpB2ov7vgf7XaScN-S2HCkBXYN7TLFp9k2HZ-iHWsOwWAOe61AyoM36Gh3f5ZXuCmtbaoVIh8uubwf_GGb");'></div>
<div>
<p class="text-[#111418] dark:text-white text-sm font-medium">Michael Chen</p>
<p class="text-[#637588] dark:text-[#94a3b8] text-xs">m.chen@studio.io</p>
</div>
</div>
</td>
<td class="p-4 hidden md:table-cell">
<span class="text-[#111418] dark:text-white text-sm">Contributor</span>
</td>
<td class="p-4 hidden sm:table-cell">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-500/20 dark:text-yellow-400">
                                            Pending
                                        </span>
</td>
<td class="p-4 hidden lg:table-cell">
<span class="text-[#637588] dark:text-[#94a3b8] text-sm">Oct 23, 2023</span>
</td>
<td class="p-4 text-right">
<button class="text-[#637588] dark:text-[#94a3b8] hover:text-primary dark:hover:text-white p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
<span class="material-symbols-outlined" style="font-size: 20px;">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-[#f9fafb] dark:hover:bg-[#263545] transition-colors group">
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-cover bg-center shrink-0" data-alt="Profile picture of Emma Wilson" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA8GFDu-2-SVhHEDikSlTJAT8ePQQzEQR4yt3gWiz_E1Frxo7l3f1P3TGYvqOy_DzubYbWGsIz6SYwq4ra3Ju3Dqq__NIdlbMUUSdzTbGhB4AbmOoWFNLFtZKjb-ek7tzXaGqXO1y1phlT1GvdFqFCBf8hjRbPmbbunSsnzqdJvlZ0cPYJG-Ph1CNMSdLVAqiA_q-5AvkwUkLNV8hNOUUpyXE0q9fdUJsG1MVjbMWA_zmpSsVC0eFGU7lHRQf3WRuM1zl20uAKnleAJ");'></div>
<div>
<p class="text-[#111418] dark:text-white text-sm font-medium">Emma Wilson</p>
<p class="text-[#637588] dark:text-[#94a3b8] text-xs">emma.w@mail.com</p>
</div>
</div>
</td>
<td class="p-4 hidden md:table-cell">
<span class="text-[#111418] dark:text-white text-sm">Free User</span>
</td>
<td class="p-4 hidden sm:table-cell">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-500/20 dark:text-red-400">
                                            Suspended
                                        </span>
</td>
<td class="p-4 hidden lg:table-cell">
<span class="text-[#637588] dark:text-[#94a3b8] text-sm">Oct 21, 2023</span>
</td>
<td class="p-4 text-right">
<button class="text-[#637588] dark:text-[#94a3b8] hover:text-primary dark:hover:text-white p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
<span class="material-symbols-outlined" style="font-size: 20px;">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-[#f9fafb] dark:hover:bg-[#263545] transition-colors group">
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-cover bg-center shrink-0" data-alt="Profile picture of David Brown" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBqysE-Gb3nhU8KpzJZ4IuNaA60GA5Q4Ke3fxofyOePWvXIktW_9EFpRTTDnGjLPRxJdDO1XZhkvWbs4bmwwfocN11AvhcXvJ1-WRIAwUkrtBzQVrMkkDkglkJj39t-oeY__N7vuE5SvaQ1Lxyi7rUlmEt6yz3RuN--1n4sGV3fJF4N2wTuJ02OxUV3vnMjUTrh14bAuQUnbEd04pq2QB7N5ydjPOXeRgeXxJWEC7RxqsrWK3OnC7Q5bzqVM5tKvSO2NUtyCJwG1DN2");'></div>
<div>
<p class="text-[#111418] dark:text-white text-sm font-medium">David Brown</p>
<p class="text-[#637588] dark:text-[#94a3b8] text-xs">dbrown88@tech.net</p>
</div>
</div>
</td>
<td class="p-4 hidden md:table-cell">
<span class="text-[#111418] dark:text-white text-sm">Pro Member</span>
</td>
<td class="p-4 hidden sm:table-cell">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-500/20 dark:text-green-400">
                                            Active
                                        </span>
</td>
<td class="p-4 hidden lg:table-cell">
<span class="text-[#637588] dark:text-[#94a3b8] text-sm">Oct 20, 2023</span>
</td>
<td class="p-4 text-right">
<button class="text-[#637588] dark:text-[#94a3b8] hover:text-primary dark:hover:text-white p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
<span class="material-symbols-outlined" style="font-size: 20px;">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</main>
</div>
</body></html>