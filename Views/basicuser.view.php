<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PhotoSphere | Community Gallery</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px"},
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #233648;
            border-radius: 10px;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white transition-colors duration-300">
<div class="relative flex h-screen w-full flex-col overflow-hidden">
<header class="flex h-16 shrink-0 items-center justify-between border-b border-solid border-slate-200 dark:border-[#233648] bg-white/80 dark:bg-background-dark/80 backdrop-blur-md px-6 z-50">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3">
<div class="flex items-center justify-center size-9 bg-primary rounded-lg text-white">
<span class="material-symbols-outlined text-2xl">lens_blur</span>
</div>
<h2 class="text-xl font-bold leading-tight tracking-tight">PhotoSphere</h2>
</div>
<div class="hidden md:flex items-center">
<label class="relative flex items-center w-80">
<span class="material-symbols-outlined absolute left-3 text-slate-400 text-lg">search</span>
<input class="w-full h-10 pl-10 pr-4 rounded-xl border-none bg-slate-100 dark:bg-[#233648] text-sm focus:ring-2 focus:ring-primary/50 placeholder:text-slate-500 dark:placeholder:text-[#92adc9]" placeholder="Search photos, people, or albums" type="text"/>
</label>
</div>
</div>
<div class="flex items-center gap-4">
<nav class="hidden lg:flex items-center gap-6 mr-4">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Explore</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Albums</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Challenges</a>
</nav>

<div class="h-10 w-px bg-slate-200 dark:bg-[#233648] mx-1"></div>
<div class="size-10 rounded-full border-2 border-primary/20 p-0.5 cursor-pointer">
<div class="size-full rounded-full bg-center bg-cover" data-alt="User profile avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQOFTVNWQ_rTuyDLkyR7S6Dvf396HE4aL_QGUUVKBVVtZPG4AVt4_uEDJ0KnVD_paH-DDmDk_ZGbI84Vp4B3rjs6UZyBF3Tf5k2EJK6eTce-0qyBO6TreBMdOQLy8t77-sQ8ivSPb-VQ7SX5N_51wZnB6eb8CBWr4QMY7aD4ROflAK7URQD2cn39K6QHsrbiD1o-P_miqNOH3XMtSz8ZSg9i37pm_i8eCQcYi4jlrdvqEh2JDIgQ05RSDe-jUQdl_aO2J31nSLR1Nu");'></div>
</div>
</div>
</header>
<div class="flex flex-1 overflow-hidden">
<aside class="w-64 shrink-0 flex-col justify-between border-r border-slate-200 dark:border-[#233648] bg-white dark:bg-background-dark p-4 hidden md:flex">
<div class="flex flex-col gap-6">
<div class="space-y-1">
<p class="px-3 pb-2 text-[10px] font-bold uppercase tracking-widest text-slate-400 dark:text-[#92adc9]">Menu</p>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-[#233648] group transition-all" href="#">
<span class="material-symbols-outlined text-slate-500 group-hover:text-primary">home</span>
<span class="text-sm font-medium">Home</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-[#233648] group transition-all" href="/Views/gallery.view.php">
<span class="material-symbols-outlined text-slate-500 group-hover:text-primary">explore</span>
<span class="text-sm font-medium">Explore</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-primary/10 text-primary transition-all" href="/Views/basicuser.view.php">
<span class="material-symbols-outlined text-slate-500 group-hover:text-primary">photo_library</span>
<span class="text-sm font-bold">Albums</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-[#233648] group transition-all" href="#">
<span class="material-symbols-outlined text-slate-500 group-hover:text-primary">favorite</span>
<span class="text-sm font-medium">Liked Photos</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-[#233648] group transition-all" href="#">
<span class="material-symbols-outlined text-slate-500 group-hover:text-primary">group</span>
<span class="text-sm font-medium">Following</span>
</a>
</div>
<div class="space-y-1">
<p class="px-3 pb-2 text-[10px] font-bold uppercase tracking-widest text-slate-400 dark:text-[#92adc9]">Your Library</p>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-slate-100 dark:hover:bg-[#233648] transition-all" href="#">
<div class="size-6 rounded bg-gradient-to-br from-indigo-500 to-purple-500"></div>
<span class="text-sm font-medium">Street Vibes</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-slate-100 dark:hover:bg-[#233648] transition-all" href="#">
<div class="size-6 rounded bg-gradient-to-br from-emerald-500 to-teal-500"></div>
<span class="text-sm font-medium">Macro Nature</span>
</a>
</div>
</div>
<div class="p-3 bg-slate-50 dark:bg-[#1a2632] rounded-2xl border border-slate-100 dark:border-[#233648]">
<div class="flex items-center justify-between mb-2">
<p class="text-[11px] font-bold text-slate-500 dark:text-[#92adc9]">Storage</p>
<p class="text-[11px] font-bold text-primary">85%</p>
</div>
<div class="w-full h-1.5 bg-slate-200 dark:bg-[#233648] rounded-full overflow-hidden">
<div class="h-full bg-primary w-[85%]"></div>
</div>
<button class="w-full mt-3 py-2 text-[11px] font-bold text-primary hover:text-primary/80 transition-colors uppercase tracking-wider">Upgrade Space</button>
</div>
</aside>
<main class="flex-1 overflow-y-auto custom-scrollbar bg-slate-50 dark:bg-background-dark relative">
<div class="max-w-[1000px] mx-auto px-6 py-8">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
<div>
<h1 class="text-3xl font-extrabold tracking-tight mb-2">Community Feed</h1>
<p class="text-slate-500 dark:text-[#92adc9]">Engage with the latest perspectives from our community.</p>
</div>
<div class="flex items-center gap-3">
<button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-[#233648] border border-slate-200 dark:border-transparent rounded-xl text-sm font-semibold shadow-sm hover:shadow-md transition-all">
<span class="material-symbols-outlined text-lg">filter_list</span>
<span>Filter Feed</span>
</button>
</div>
</div>
<div class="flex items-center justify-between border-b border-slate-200 dark:border-[#324d67] mb-6">
<div class="flex gap-8">
<a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-slate-500 dark:text-[#92adc9] pb-[13px] pt-4 hover:text-primary transition-all" href="#">
<p class="text-sm font-bold leading-normal tracking-wide">Latest</p>
</a>
<a class="flex flex-col items-center justify-center border-b-[3px] border-b-primary text-primary pb-[13px] pt-4" href="#">
<p class="text-sm font-bold leading-normal tracking-wide">Trending</p>
</a>
<a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-slate-500 dark:text-[#92adc9] pb-[13px] pt-4 hover:text-primary transition-all" href="#">
<p class="text-sm font-bold leading-normal tracking-wide">Most Popular</p>
</a>
</div>
<div class="flex gap-2 pb-2">
<button class="flex items-center justify-center size-8 rounded-lg text-slate-400 hover:bg-white dark:hover:bg-[#233648] transition-all">
<span class="material-symbols-outlined text-xl">view_agenda</span>
</button>
<button class="flex items-center justify-center size-8 rounded-lg text-primary bg-white dark:bg-[#233648] shadow-sm transition-all">
<span class="material-symbols-outlined text-xl">grid_view</span>
</button>
</div>
</div>

<!-- albums -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
<!-- Card 1 -->
<div class="group flex flex-col gap-3 cursor-pointer">
<div class="relative aspect-[4/3] w-full overflow-hidden rounded-xl bg-surface-dark shadow-md hover:shadow-xl transition-all duration-300 ring-1 ring-white/5 group-hover:ring-primary/50">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Night cityscape with illuminated skyscrapers and blurred traffic lights" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAnFYfdOn41Jp4xN33VEIMK1hRe_iLAI_i9L7EG0a-XHUvDm9-rkBCoYSMfAQgU4tmNxRqV609peJKY3HUgboCpoG-fmF4zMYHOKeWO5M6RO45nA8QT4hlVXuQAgv63HZ3m6l6z2b4Hsl0q1AL9x2hSQZPFonnHFR30gd1tMJB0gI-7uhHdlFoGyZwB2_LmczHoznooLf0kfN7KIaLLHALZDSjKznSLN_K9P5qOAkReaEDWXHbMucNTz_phSsCMuPIOwzwXMZ8CIBKh");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
<div class="absolute top-3 right-3 bg-black/50 backdrop-blur-md text-white text-xs font-bold px-2 py-1 rounded flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">visibility</span> Public
                            </div>
</div>
<div class="flex flex-col px-1">
<h3 class="text-slate-900 dark:text-white text-lg font-bold group-hover:text-primary transition-colors">Urban Landscapes</h3>
<p class="text-slate-500 dark:text-[#92adc9] text-sm">12 photos • Updated 2 days ago</p>
</div>
</div>
<!-- Card 2 -->
<div class="group flex flex-col gap-3 cursor-pointer">
<div class="relative aspect-[4/3] w-full overflow-hidden rounded-xl bg-surface-dark shadow-md hover:shadow-xl transition-all duration-300 ring-1 ring-white/5 group-hover:ring-primary/50">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Close up detail of a green fern leaf with water droplets" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDy7izwE-JkiZqxmEPjMhWfPY-hNFLXcKg01y4pdZ8YUMHLbq6u3YSYB7mufTryTGd8hvBFVsex8KnPYsnWMEDgTVl1DjdoplR56ADJlrhAbJbfta1tkXM2Q9DTTWNcrBwGt90qQ3rHRgpa4EkFJvu8yWPSAEpFrdkh_wRaSg9Hh7-vFcaqGi7kYGKQ1WnQEbfCvq_59XKI4zq8ehFIgt_jBceLXrdy5uNysX-rDeTw8zDL1yf2ztQd9M4gKHDzjatIEo5PM4XF2KXC");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
</div>
<div class="flex flex-col px-1">
<h3 class="text-slate-900 dark:text-white text-lg font-bold group-hover:text-primary transition-colors">Macro Nature</h3>
<p class="text-slate-500 dark:text-[#92adc9] text-sm">8 photos • Updated 5 days ago</p>
</div>
</div>
<!-- Card 3 -->
<div class="group flex flex-col gap-3 cursor-pointer">
<div class="relative aspect-[4/3] w-full overflow-hidden rounded-xl bg-surface-dark shadow-md hover:shadow-xl transition-all duration-300 ring-1 ring-white/5 group-hover:ring-primary/50">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Portrait of a woman with artistic lighting" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD1t07AmU2oKUUn4-xeyLR-G_7d20bIV3vTpr2HVHaQ5J4loctqwu_Q3R5PVB5yH0KUsOKzqUld7YzpDt57R2CSD3js9gvpZMS9Bmwjp_uK7w5fkmcT2P5KbYG_XLdii97-snSZkaQjWBmT7IHY-eCmnB2TSHxf6-vuJYFGBir2HafWvk9x__Et2RTO5dwtH2sS8LSxtoFP_xCPT2KxwjsC5zEUF8S7XUXx9w_1q6U9-oAdRAssigNzTlAKxvEdlQunVYhWUa2ZVw57");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
</div>
<div class="flex flex-col px-1">
<h3 class="text-slate-900 dark:text-white text-lg font-bold group-hover:text-primary transition-colors">Portraits 2023</h3>
<p class="text-slate-500 dark:text-[#92adc9] text-sm">24 photos • Updated 1 week ago</p>
</div>
</div>
<!-- Card 4 -->
<div class="group flex flex-col gap-3 cursor-pointer">
<div class="relative aspect-[4/3] w-full overflow-hidden rounded-xl bg-surface-dark shadow-md hover:shadow-xl transition-all duration-300 ring-1 ring-white/5 group-hover:ring-primary/50">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Minimalist modern architecture building facade with blue sky" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuANrtK4h3KCulRaM-RntTqtZQ0cqVX3-UEJyaipl8RgSMxlA8OLeebesARQeDQGri3ogKxKh45sHAKfEMav9VMHGGho-84r66CTdCFA8FP5-3MJp8xKVtXmSuybjPWkhlEDGQ9RrO9l_iNY3ZmrC94J4bzGf6Jk7h0SJJllcKgknlLsh_BG9liJPEviClRFAvOH7fAI6MKmETXGOwPMJ2XwtgbQW7_NCYPyKdMyXhnerKns3Em1Xg9lhH9xuO9am91lulaVfpGUwoYx");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
</div>
<div class="flex flex-col px-1">
<h3 class="text-slate-900 dark:text-white text-lg font-bold group-hover:text-primary transition-colors">Minimalist Lines</h3>
<p class="text-slate-500 dark:text-[#92adc9] text-sm">16 photos • Updated 2 weeks ago</p>
</div>
</div>
<!-- Card 5 -->
<div class="group flex flex-col gap-3 cursor-pointer">
<div class="relative aspect-[4/3] w-full overflow-hidden rounded-xl bg-surface-dark shadow-md hover:shadow-xl transition-all duration-300 ring-1 ring-white/5 group-hover:ring-primary/50">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Busy street market scene with people walking" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAk8cFboh9G7GM8hfUBWpzgTXGu2rGWCBsW6I6BknXHTOlSJnn7Jj45cR0S7e1bdwCOMpEE7P05z31VJOJ04SjY1olzdIqcx2Dsp9QZ3tQIhlaxCg5lpdB-yfzC0AgfLS_uq9gmiggeKq8zx8Dt4IHrENj__Km5ow61daB1SOal7KBeasDeY_OKSjfmbzcW9KUI0R8FkFNJfzwaqg1NYvQThT67X2JaRyn5ktVkvimtRozw5TGwnTWAcSxVaAPtTO7n7WbM6YJSVcZh");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
</div>
<div class="flex flex-col px-1">
<h3 class="text-slate-900 dark:text-white text-lg font-bold group-hover:text-primary transition-colors">Street Life</h3>
<p class="text-slate-500 dark:text-[#92adc9] text-sm">32 photos • Updated 3 weeks ago</p>
</div>
</div>
<!-- Card 6 -->
<div class="group flex flex-col gap-3 cursor-pointer">
<div class="relative aspect-[4/3] w-full overflow-hidden rounded-xl bg-surface-dark shadow-md hover:shadow-xl transition-all duration-300 ring-1 ring-white/5 group-hover:ring-primary/50">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Majestic mountain peaks covered in snow during sunset" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC1RKrWFPKHifCNjGBTCqX5_VW5PYZK6LhlfYgJnUxC5-9A4r9-7JebYcyH_LWFktcxvqiE838bpMEy5qN5FiiSkCwbGQ9qO8ZDkncruP4K07rOQPNnU6tcbQ_t2youB8Q8hm3bYWyTJqIODWZKP_kl-FEFNmdD8ydGbfXboCxf6CVNpl-Eb7UckHzXBXjhEjrM-hehJHoOakx_Hp5M2KR23dSdDW0FKX7yya1a8e5UnYKsUP4J22umRQiHZnCXOxu172WPirQCbs9l");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
</div>
<div class="flex flex-col px-1">
<h3 class="text-slate-900 dark:text-white text-lg font-bold group-hover:text-primary transition-colors">Mountain Peaks</h3>
<p class="text-slate-500 dark:text-[#92adc9] text-sm">9 photos • Updated 1 month ago</p>
</div>
</div>
<!-- Add New Card (Empty State) -->
<div class="group flex flex-col gap-3 cursor-pointer opacity-70 hover:opacity-100 transition-opacity">
<div class="relative aspect-[4/3] w-full overflow-hidden rounded-xl bg-surface-dark/50 border-2 border-dashed border-border-dark flex flex-col items-center justify-center gap-2 group-hover:border-primary/50 transition-colors">
<div class="p-3 rounded-full bg-surface-dark text-[#92adc9] group-hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[32px]">add</span>
</div>
<p class="text-[#92adc9] font-medium text-sm">Create New Album</p>
</div>
<div class="flex flex-col px-1 opacity-0">
<h3 class="text-lg font-bold">Placeholder</h3>
<p class="text-sm">Placeholder</p>
</div>
</div>
</div>

<div class="flex flex-col items-center justify-center py-12 gap-3 opacity-50">
<div class="size-8 border-2 border-primary border-t-transparent rounded-full animate-spin"></div>
<p class="text-xs font-bold tracking-widest uppercase text-slate-500 dark:text-[#92adc9]">Gathering more shots...</p>
</div>
</div>
<button class="fixed bottom-6 right-6 sm:hidden size-14 rounded-full bg-primary text-white shadow-2xl flex items-center justify-center z-50">
<span class="material-symbols-outlined text-3xl">add</span>
</button>
</main>
<aside class="w-80 shrink-0 border-l border-slate-200 dark:border-[#233648] bg-white dark:bg-background-dark p-6 overflow-y-auto hidden xl:flex flex-col gap-8">
<div>
<h3 class="text-sm font-extrabold uppercase tracking-widest text-slate-400 dark:text-[#92adc9] mb-4">Trending Tags</h3>
<div class="flex flex-wrap gap-2">
<a class="px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-[#233648] text-xs font-bold hover:bg-primary hover:text-white transition-all" href="#">#UrbanExplorer</a>
<a class="px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-[#233648] text-xs font-bold hover:bg-primary hover:text-white transition-all" href="#">#Cinematic</a>
<a class="px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-[#233648] text-xs font-bold hover:bg-primary hover:text-white transition-all" href="#">#B&amp;W</a>
<a class="px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-[#233648] text-xs font-bold hover:bg-primary hover:text-white transition-all" href="#">#Wildlife</a>
<a class="px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-[#233648] text-xs font-bold hover:bg-primary hover:text-white transition-all" href="#">#GoldenHour</a>
</div>
</div>
<div>
<div class="flex items-center justify-between mb-4">
<h3 class="text-sm font-extrabold uppercase tracking-widest text-slate-400 dark:text-[#92adc9]">Top Photographers</h3>
<a class="text-[10px] font-bold text-primary hover:underline" href="#">View All</a>
</div>
<div class="space-y-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-xl bg-center bg-cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDAdX9gpThQAhXto9QKPeFJ1Tsa_zZg0vqfSI2ALPrSqJry116Ql3_QFFu2km1Q7eC-yiGBOsDypv1yu032vzbEK9EHS3-hMqZnhFHnIPrfr7VjAWNeNKaefYISbUJrZXNBDOP76raHdAm71eDfh056jgZOIEiQx_GizqJB7GlPZMDHNllTNsfxYyv3oeBrXOFvR7sHgxlaMqrSE0AlZt-A0-dzcV6xVkfLa6g9wknLqjnjPg7bZetL7y-Nlcmv79bzVPLaofT8deyr");'></div>
<div class="flex-1">
<p class="text-xs font-bold">Liam G. Thompson</p>
<p class="text-[10px] text-slate-400 dark:text-[#92adc9]">2.4k followers</p>
</div>
<button class="size-8 rounded-lg bg-slate-100 dark:bg-[#233648] flex items-center justify-center hover:bg-primary group transition-all">
<span class="material-symbols-outlined text-sm group-hover:text-white">person_add</span>
</button>
</div>
<div class="flex items-center gap-3">
<div class="size-10 rounded-xl bg-center bg-cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDK6pun9JHNIk55Io6Rxw_8bt0Vw1govPqR-FUQwv_CtgbfVnd58WmHw1YBJJBFtYWEAn2pi5MJ54v8xW2b63UcjG2KmkW7UUs_m_lBoUZSrwl5LbkLLJFuSLzPB5rEkpkUdzDihQT_aCzRUWrci5jc4HHtzihsTM3N3c9XGgkVQMf181nIVcPfJ1bdxctd_-VuHGJFJxO-l8s_HRiAvotSxa6Qqkc8IuqpN3tMXxDE8nip9rEOz_2Ayaxpiyw0pJLgCXfFiT5EeTXD");'></div>
<div class="flex-1">
<p class="text-xs font-bold">Isabella Rossi</p>
<p class="text-[10px] text-slate-400 dark:text-[#92adc9]">5.1k followers</p>
</div>
<button class="size-8 rounded-lg bg-slate-100 dark:bg-[#233648] flex items-center justify-center hover:bg-primary group transition-all">
<span class="material-symbols-outlined text-sm group-hover:text-white">person_add</span>
</button>
</div>
</div>
</div>
<div class="mt-auto p-5 rounded-2xl bg-gradient-to-br from-primary/10 to-transparent border border-primary/20 relative overflow-hidden group">
<div class="relative z-10">
<p class="text-xs font-bold text-primary uppercase tracking-widest mb-1">Weekly Challenge</p>
<h4 class="text-sm font-bold mb-3">Reflections in the Rain</h4>
<p class="text-[11px] text-slate-500 dark:text-[#92adc9] mb-4">Share your best rainy street photography for a chance to be featured!</p>
<button class="w-full py-2 bg-primary text-white text-[11px] font-bold rounded-lg hover:opacity-90 transition-all">Join Challenge</button>
</div>
<span class="material-symbols-outlined absolute -right-2 -bottom-2 text-6xl text-primary/10 group-hover:scale-110 transition-transform">water_drop</span>
</div>
</aside>
</div>
</div>

</body></html>