<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PhotoSphere Dashboard</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Config -->
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#137fec",
              "background-light": "#f6f7f8",
              "background-dark": "#101922",
              "surface-dark": "#1c2936",
              "border-dark": "#233648",
            },
            fontFamily: {
              "display": ["Inter", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
        /* Custom scrollbar for dark theme */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #111a22; 
        }
        ::-webkit-scrollbar-thumb {
            background: #233648; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #324d67; 
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display overflow-hidden h-screen flex flex-col antialiased selection:bg-primary/30">
<!-- Top Navbar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-border-dark bg-[#111a22] px-6 py-3 z-20 shrink-0">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3 text-white">
<div class="size-8 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_6_543)">
<path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill="currentColor"></path>
<path clip-rule="evenodd" d="M7.24189 26.4066C7.31369 26.4411 7.64204 26.5637 8.52504 26.3738C9.59462 26.1438 11.0343 25.5311 12.7183 24.4963C14.7583 23.2426 17.0256 21.4503 19.238 19.238C21.4503 17.0256 23.2426 14.7583 24.4963 12.7183C25.5311 11.0343 26.1438 9.59463 26.3738 8.52504C26.5637 7.64204 26.4411 7.31369 26.4066 7.24189C26.345 7.21246 26.143 7.14535 25.6664 7.1918C24.9745 7.25925 23.9954 7.5498 22.7699 8.14278C20.3369 9.32007 17.3369 11.4915 14.4142 14.4142C11.4915 17.3369 9.32007 20.3369 8.14278 22.7699C7.5498 23.9954 7.25925 24.9745 7.1918 25.6664C7.14534 26.143 7.21246 26.345 7.24189 26.4066ZM29.9001 10.7285C29.4519 12.0322 28.7617 13.4172 27.9042 14.8126C26.465 17.1544 24.4686 19.6641 22.0664 22.0664C19.6641 24.4686 17.1544 26.465 14.8126 27.9042C13.4172 28.7617 12.0322 29.4519 10.7285 29.9001L21.5754 40.747C21.6001 40.7606 21.8995 40.931 22.8729 40.7217C23.9424 40.4916 25.3821 39.879 27.0661 38.8441C29.1062 37.5904 31.3734 35.7982 33.5858 33.5858C35.7982 31.3734 37.5904 29.1062 38.8441 27.0661C39.879 25.3821 40.4916 23.9425 40.7216 22.8729C40.931 21.8995 40.7606 21.6001 40.747 21.5754L29.9001 10.7285ZM29.2403 4.41187L43.5881 18.7597C44.9757 20.1473 44.9743 22.1235 44.6322 23.7139C44.2714 25.3919 43.4158 27.2666 42.252 29.1604C40.8128 31.5022 38.8165 34.012 36.4142 36.4142C34.012 38.8165 31.5022 40.8128 29.1604 42.252C27.2666 43.4158 25.3919 44.2714 23.7139 44.6322C22.1235 44.9743 20.1473 44.9757 18.7597 43.5881L4.41187 29.2403C3.29027 28.1187 3.08209 26.5973 3.21067 25.2783C3.34099 23.9415 3.8369 22.4852 4.54214 21.0277C5.96129 18.0948 8.43335 14.7382 11.5858 11.5858C14.7382 8.43335 18.0948 5.9613 21.0277 4.54214C22.4852 3.8369 23.9415 3.34099 25.2783 3.21067C26.5973 3.08209 28.1187 3.29028 29.2403 4.41187Z" fill="currentColor" fill-rule="evenodd"></path>
</g>
<defs>
<clippath id="clip0_6_543"><rect fill="white" height="48" width="48"></rect></clippath>
</defs>
</svg>
</div>
<h2 class="text-white text-xl font-bold leading-tight tracking-[-0.015em]">PhotoSphere</h2>
</div>
<label class="hidden md:flex flex-col min-w-40 !h-10 max-w-64">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full">
<div class="text-[#92adc9] flex border-none bg-surface-dark items-center justify-center pl-4 rounded-l-lg border-r-0">
<span class="material-symbols-outlined text-[24px]">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border-none bg-surface-dark focus:border-none h-full placeholder:text-[#92adc9] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" placeholder="Search albums..." value=""/>
</div>
</label>
</div>
<div class="flex flex-1 justify-end gap-6 items-center">
<button class="group flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 w-10 bg-surface-dark hover:bg-[#324d67] text-white transition-colors">
<span class="material-symbols-outlined text-[22px] group-hover:text-primary transition-colors">notifications</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-surface-dark cursor-pointer hover:border-primary transition-colors" data-alt="User profile picture of a smiling man outdoors" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDEvERymEBLjlr7JTqm41jYUqW6l1Gyj8r_4fmbLKdBDuntx8rlWrIreWWENwG3jtFY7OfgIIl1Dv4KLai_miqN-2ZzsfHtW9_wVbMv6jU8GyLwyJBZB5fazg5kpwpmB5HEUS17T9P7_9wLXoqS2Pqi8dMM0xoNf4nDXhboZ5MGHYUlQ4pZNh8T3gVI5_vpGW7o_yKMmEfluoZ1xhBuSr3xBDQYki6m5NEATZSUzJJF53IKsFrxtOC5MQIsSPJN07gA3a2v3_l9vIgo");'></div>
</div>
</header>
<div class="flex flex-1 overflow-hidden">
<!-- Left Sidebar -->
<aside class="w-72 bg-[#111a22] border-r border-border-dark flex flex-col justify-between p-4 hidden md:flex shrink-0">
<div class="flex flex-col gap-6">
<!-- Navigation -->
<div class="flex flex-col gap-2">
<p class="px-3 text-xs font-bold text-[#92adc9] uppercase tracking-wider mb-1">Discover</p>
<a class="flex items-center gap-3 px-3 py-2 text-white hover:bg-surface-dark rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined text-[24px] text-[#92adc9]">newspaper</span>
<p class="text-sm font-medium leading-normal">My Feed</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-white hover:bg-surface-dark rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined text-[24px] text-[#92adc9]">explore</span>
<p class="text-sm font-medium leading-normal">Explore</p>
</a>
</div>
<div class="flex flex-col gap-2">
<p class="px-3 text-xs font-bold text-[#92adc9] uppercase tracking-wider mb-1">Library</p>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-surface-dark border-l-4 border-primary shadow-sm" href="#">
<span class="material-symbols-outlined text-[24px] text-primary fill-1">photo_library</span>
<p class="text-white text-sm font-bold leading-normal">Public Albums</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-white hover:bg-surface-dark rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined text-[24px] text-[#92adc9]">favorite</span>
<p class="text-sm font-medium leading-normal">Favorites</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-white hover:bg-surface-dark rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined text-[24px] text-[#92adc9]">lock</span>
<p class="text-sm font-medium leading-normal">Private Vault</p>
</a>
</div>
</div>
<!-- Upload Widget -->
<div class="flex flex-col gap-4 p-4 rounded-xl bg-surface-dark border border-border-dark shadow-sm">
<div class="flex flex-col gap-3">
<div class="flex gap-2 justify-between items-end">
<p class="text-white text-xs font-bold uppercase tracking-wider">Monthly Uploads</p>
<p class="text-primary text-xs font-bold">70%</p>
</div>
<!-- Progress Bar -->
<div class="rounded-full bg-[#111a22] h-2.5 overflow-hidden">
<div class="h-full rounded-full bg-primary" style="width: 70%;"></div>
</div>
<p class="text-[#92adc9] text-xs font-medium leading-normal">7 / 10 uploads used</p>
</div>
<!-- Upload Button -->
<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary hover:bg-blue-600 text-white text-sm font-bold leading-normal tracking-[0.015em] transition-colors shadow-lg shadow-blue-900/20 group">
<span class="material-symbols-outlined mr-2 text-[20px] group-hover:animate-bounce">cloud_upload</span>
<span class="truncate">Upload Photo</span>
</button>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col overflow-y-auto bg-background-light dark:bg-background-dark relative">
<!-- Content Container -->
<div class="p-6 md:p-10 max-w-7xl mx-auto w-full flex flex-col gap-8">
<!-- Page Heading & Filters -->
<div class="flex flex-wrap items-center justify-between gap-4">
<div class="flex flex-col gap-1">
<h1 class="text-slate-900 dark:text-white text-[32px] font-bold leading-tight">Public Albums</h1>
<p class="text-slate-500 dark:text-[#92adc9] text-sm">Manage and share your photography collections.</p>
</div>
<div class="flex gap-3">
<button class="flex items-center justify-center rounded-lg h-9 px-3 bg-white dark:bg-[#233648] border border-slate-200 dark:border-transparent text-slate-700 dark:text-white text-sm font-medium hover:bg-slate-50 dark:hover:bg-[#324d67] transition-colors">
<span class="material-symbols-outlined mr-2 text-[18px]">sort</span>
                            Newest First
                        </button>
<button class="hidden sm:flex items-center justify-center rounded-lg h-9 px-4 bg-primary/10 hover:bg-primary/20 text-primary text-sm font-bold transition-colors">
<span class="material-symbols-outlined mr-2 text-[18px]">add_photo_alternate</span>
                            Create Album
                        </button>
</div>
</div>
<!-- Albums Grid -->
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
</div>
</main>
</div>
</body></html>