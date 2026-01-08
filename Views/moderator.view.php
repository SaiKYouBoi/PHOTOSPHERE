<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PhotoSphere Moderation Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
              "card-dark": "#1e293b",
              "dark-lighter": "#233648",
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
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display overflow-hidden">
<div class="flex h-screen w-full">
<!-- Side Navigation -->
<aside class="hidden md:flex flex-col w-64 bg-background-dark border-r border-slate-800 shrink-0 h-full overflow-y-auto">
<div class="p-6 flex flex-col h-full justify-between">
<div class="flex flex-col gap-8">
<!-- Brand -->
<div class="flex gap-3 items-center">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 bg-primary flex items-center justify-center text-white" data-alt="PhotoSphere logo placeholder" style="background-image: linear-gradient(135deg, #137fec 0%, #0b4e96 100%);">
<span class="material-symbols-outlined text-[20px]">shutter_speed</span>
</div>
<div class="flex flex-col">
<h1 class="text-white text-base font-bold leading-normal">PhotoSphere</h1>
<p class="text-[#92adc9] text-xs font-normal leading-normal">Moderator Panel</p>
</div>
</div>
<!-- Navigation -->
<nav class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 transition-colors text-[#92adc9] hover:text-white group" href="#">
<span class="material-symbols-outlined group-hover:text-primary transition-colors">photo_library</span>
<span class="text-sm font-medium leading-normal">Gallery</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 transition-colors text-[#92adc9] hover:text-white group" href="#">
<span class="material-symbols-outlined group-hover:text-primary transition-colors">photo_album</span>
<span class="text-sm font-medium leading-normal">Albums</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 transition-colors text-[#92adc9] hover:text-white group" href="#">
<span class="material-symbols-outlined group-hover:text-primary transition-colors">person</span>
<span class="text-sm font-medium leading-normal">Profile</span>
</a>
<!-- Divider -->
<div class="h-px bg-slate-800 my-2 mx-3"></div>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary text-white shadow-lg shadow-primary/20" href="#">
<span class="material-symbols-outlined fill-1">admin_panel_settings</span>
<span class="text-sm font-medium leading-normal">Admin Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-slate-800 transition-colors text-[#92adc9] hover:text-white group" href="#">
<span class="material-symbols-outlined group-hover:text-primary transition-colors">settings</span>
<span class="text-sm font-medium leading-normal">Settings</span>
</a>
</nav>
</div>
<!-- Footer/User -->
<div class="flex items-center gap-3 px-3 py-3 rounded-xl bg-slate-800/50 mt-auto">
<div class="relative">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="User profile picture of moderator" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCSeyQyHox7M9T1D_cigfSZeAtTC7_fwGpbgGiLFLJxbMYp78KhZ0_4rDJge1L7ygBQTy3DEW2gF0zwrkJlvuWnaKr9jFMFC2ihmBE40P-6CibVgBZOPD5NyuFJJOjLkswHJWNQMABOW5Fj0YT1Oj1MET-JwJ2_aJqbAThkPWk0mOrDwNZI3X6o2t2jcZib-85rDpCo7CvVNohSHsvwXxENcKWc92KEKhCHMh02wioLBA6Lrxw6ht7gubgBzQwCf7umGUto03_ZQkNu");'></div>
<div class="absolute bottom-0 right-0 size-3 bg-green-500 border-2 border-[#101922] rounded-full"></div>
</div>
<div class="flex flex-col">
<p class="text-white text-sm font-medium">Alex M.</p>
<p class="text-xs text-[#92adc9]">Senior Mod</p>
</div>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 h-full overflow-y-auto bg-background-light dark:bg-background-dark relative">
<div class="max-w-[1600px] mx-auto p-4 md:p-8 flex flex-col gap-6">
<!-- Page Heading -->
<header class="flex flex-col md:flex-row md:items-end justify-between gap-4 pb-2">
<div class="flex flex-col gap-1">
<h1 class="text-slate-900 dark:text-white text-3xl font-black tracking-tight">Moderation Dashboard</h1>
<p class="text-slate-500 dark:text-[#92adc9] text-base">Manage community reports, audit logs, and user safety.</p>
</div>
<div class="flex items-center gap-3 bg-white dark:bg-card-dark px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 shadow-sm">
<span class="material-symbols-outlined text-emerald-500 text-lg">check_circle</span>
<span class="text-sm font-medium text-slate-700 dark:text-slate-200">Auto-Mod Online</span>
<span class="w-px h-4 bg-slate-300 dark:bg-slate-600 mx-1"></span>
<span class="text-xs text-slate-500 dark:text-slate-400 font-mono">Queue updated 1m ago</span>
</div>
</header>
<!-- Stats Row -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="flex flex-col gap-1 rounded-xl p-5 bg-white dark:bg-card-dark border border-slate-200 dark:border-slate-700 shadow-sm relative overflow-hidden group">
<div class="absolute right-0 top-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-primary">flag</span>
</div>
<p class="text-slate-500 dark:text-[#92adc9] text-sm font-medium uppercase tracking-wider">Pending Reports</p>
<div class="flex items-end gap-3 mt-1">
<p class="text-slate-900 dark:text-white text-3xl font-bold">42</p>
<span class="text-emerald-500 text-sm font-medium flex items-center mb-1 bg-emerald-500/10 px-1.5 py-0.5 rounded">
<span class="material-symbols-outlined text-base mr-0.5">trending_up</span> +12%
                            </span>
</div>
</div>
<div class="flex flex-col gap-1 rounded-xl p-5 bg-white dark:bg-card-dark border border-slate-200 dark:border-slate-700 shadow-sm relative overflow-hidden group">
<div class="absolute right-0 top-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-red-500">block</span>
</div>
<p class="text-slate-500 dark:text-[#92adc9] text-sm font-medium uppercase tracking-wider">Banned Users (24h)</p>
<div class="flex items-end gap-3 mt-1">
<p class="text-slate-900 dark:text-white text-3xl font-bold">15</p>
<span class="text-emerald-500 text-sm font-medium flex items-center mb-1 bg-emerald-500/10 px-1.5 py-0.5 rounded">
<span class="material-symbols-outlined text-base mr-0.5">trending_flat</span> +5%
                            </span>
</div>
</div>
<div class="flex flex-col gap-1 rounded-xl p-5 bg-white dark:bg-card-dark border border-slate-200 dark:border-slate-700 shadow-sm relative overflow-hidden group">
<div class="absolute right-0 top-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-blue-400">smart_toy</span>
</div>
<p class="text-slate-500 dark:text-[#92adc9] text-sm font-medium uppercase tracking-wider">Auto-Mod Actions</p>
<div class="flex items-end gap-3 mt-1">
<p class="text-slate-900 dark:text-white text-3xl font-bold">128</p>
<span class="text-emerald-500 text-sm font-medium flex items-center mb-1 bg-emerald-500/10 px-1.5 py-0.5 rounded">
<span class="material-symbols-outlined text-base mr-0.5">trending_up</span> +3%
                            </span>
</div>
</div>
</section>
<!-- Dashboard Grid -->
<div class="grid grid-cols-1 xl:grid-cols-12 gap-6 h-full min-h-[500px]">
<!-- Main Column: Reported Content -->
<div class="xl:col-span-8 flex flex-col gap-4">
<div class="flex items-center justify-between">
<h2 class="text-xl font-bold text-slate-900 dark:text-white">Reported Content Queue</h2>
<div class="flex gap-2">
<button class="flex items-center gap-2 px-3 py-1.5 bg-white dark:bg-card-dark border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors text-slate-700 dark:text-slate-300">
<span class="material-symbols-outlined text-lg">filter_list</span> Filter
                                </button>
<button class="flex items-center gap-2 px-3 py-1.5 bg-primary text-white rounded-lg text-sm font-medium hover:bg-blue-600 transition-colors shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-lg">done_all</span> Resolve All
                                </button>
</div>
</div>
<!-- Table Container -->
<div class="@container w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-card-dark overflow-hidden shadow-sm flex-1">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead class="bg-slate-50 dark:bg-[#192633]">
<tr>
<th class="px-4 py-3 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-[#92adc9] border-b border-slate-200 dark:border-slate-700">User / Audit</th>
<th class="px-4 py-3 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-[#92adc9] border-b border-slate-200 dark:border-slate-700 w-24">Context</th>
<th class="px-4 py-3 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-[#92adc9] border-b border-slate-200 dark:border-slate-700">Reason</th>
<th class="px-4 py-3 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-[#92adc9] border-b border-slate-200 dark:border-slate-700 w-32">Time</th>
<th class="px-4 py-3 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-[#92adc9] border-b border-slate-200 dark:border-slate-700 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-200 dark:divide-slate-700">
<!-- Row 1 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
<td class="px-4 py-3 align-top">
<div class="flex items-center gap-3">
<div class="relative">
<div class="bg-center bg-no-repeat bg-cover rounded-full size-10 ring-2 ring-red-500/30" data-alt="Profile picture of reported user" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCs7aRGoZaZrM7uEs27_l6APXupOC94rtFlynRrl0k8rsvKyuO4Zwwnm8dRQzSbtSjydBXf60LRWRQf8mV__hFwMeAHKZucz7PKy2Lw_1cpmqyAB82NXQC5m4FFT8o6utU_nBbxaOJp-SzbVcmvdj0qdtbkDmni2-v0LCCANz0xrawDhHzSZhp7_ZZrBv3oQ8_WUb4AX77Ry4JYz5vL-NARMSSTN-mT_bCzQt_FJIJGHvdCHJYudX8tjRye9fzmLcq8StrxuBU1Bejv");'></div>
<span class="absolute -bottom-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 text-[10px] text-white font-bold">!</span>
</div>
<div>
<p class="text-sm font-medium text-slate-900 dark:text-white">@user_photo_guy</p>
<div class="flex gap-1 mt-1">
<span class="inline-flex items-center rounded-full bg-orange-100 dark:bg-orange-500/20 px-1.5 py-0.5 text-[10px] font-medium text-orange-700 dark:text-orange-200 ring-1 ring-inset ring-orange-600/20">3 Reports</span>
<span class="inline-flex items-center rounded-full bg-slate-100 dark:bg-slate-700 px-1.5 py-0.5 text-[10px] font-medium text-slate-600 dark:text-slate-300">User</span>
</div>
</div>
</div>
</td>
<td class="px-4 py-3 align-top">
<div class="group/img relative w-16 h-16 rounded-lg overflow-hidden cursor-pointer border border-slate-200 dark:border-slate-600">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Thumbnail of reported landscape photo" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC12cOh9uTRlRdF5UePhD-4CL1pPrPm7DSI4Tb5qrSQoqsgsnBll7Z3VxJK2KHmw9CGHVu85GKYXWv4Rdm_4g8P2Uwxzu__NcYZ92bh9no2ybn_H7yx5pMalKc9nqXm9lwYYmxXH6e1grDFPysls_fg_hf24RFo2UnYLoVNC4IuGqn18nBd5GfvmilsRw_i9GvqviYPQcTNoUosKyE51HAhjkVDJfiap4CQX0YCu6i7LGVqJJJQTblBdQ0buM-wiYuN8PHJD0VMj1oE");'></div>
<div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover/img:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-white text-lg">visibility</span>
</div>
</div>
</td>
<td class="px-4 py-3 align-top">
<div class="flex flex-col gap-1">
<span class="text-sm font-semibold text-red-600 dark:text-red-400">Harassment</span>
<p class="text-xs text-slate-600 dark:text-slate-400 line-clamp-2 italic">"Your photos are terrible and you should quit..."</p>
</div>
</td>
<td class="px-4 py-3 text-sm text-slate-500 dark:text-[#92adc9] align-top whitespace-nowrap">2m ago</td>
<td class="px-4 py-3 align-top text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-2 text-slate-400 hover:text-emerald-500 hover:bg-emerald-500/10 rounded-lg transition-colors" title="Approve">
<span class="material-symbols-outlined">check</span>
</button>
<button class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-500/10 rounded-lg transition-colors" title="Delete &amp; Warn">
<span class="material-symbols-outlined">delete</span>
</button>
<button class="px-3 py-1.5 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-200 text-xs font-semibold rounded-lg hover:bg-primary hover:text-white transition-colors">
                                                        Review
                                                    </button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
<td class="px-4 py-3 align-top">
<div class="flex items-center gap-3">
<div class="relative">
<div class="bg-center bg-no-repeat bg-cover rounded-full size-10 ring-2 ring-purple-500/30" data-alt="Profile picture of a bot account" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC4Wj1isH1RxUDbo4P6jOMyyX0CfVNjT-hZbhgs7fx6ekwWr03G9PP_hfgr-YYG25qN_m65IshpCg8vMdo9egyHIIbePLQ_cmAQ4ZO5zwzUZac7ck2rWiCYqQaic96uGxtBDwKC7krX--3lesuq6cxdNej_HCB2sflyuWMAISLNZROHL0HLCQ3Cx_cQfVKdDzfOccCfLlGVbT2b69c4zyPkps_kFxeON_n3FjPJBta592B9mfKIeG0ZPF7qUun53oJhXo-1VJKxn9rT");'></div>
</div>
<div>
<p class="text-sm font-medium text-slate-900 dark:text-white">@crypto_bot_99</p>
<div class="flex gap-1 mt-1">
<span class="inline-flex items-center rounded-full bg-purple-100 dark:bg-purple-500/20 px-1.5 py-0.5 text-[10px] font-medium text-purple-700 dark:text-purple-200 ring-1 ring-inset ring-purple-600/20">AI Flagged</span>
</div>
</div>
</div>
</td>
<td class="px-4 py-3 align-top">
<div class="w-16 h-16 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-400 border border-slate-200 dark:border-slate-600">
<span class="material-symbols-outlined">chat_bubble</span>
</div>
</td>
<td class="px-4 py-3 align-top">
<div class="flex flex-col gap-1">
<span class="text-sm font-semibold text-blue-600 dark:text-blue-400">Spam Link</span>
<p class="text-xs text-slate-600 dark:text-slate-400 line-clamp-2">"Make $5000 a day easily visit..."</p>
</div>
</td>
<td class="px-4 py-3 text-sm text-slate-500 dark:text-[#92adc9] align-top whitespace-nowrap">5m ago</td>
<td class="px-4 py-3 align-top text-right">
<div class="flex items-center justify-end gap-2">
<button class="px-3 py-1.5 bg-red-500/10 text-red-600 dark:text-red-400 border border-red-500/20 text-xs font-semibold rounded-lg hover:bg-red-500 hover:text-white transition-colors">
                                                        Ban User
                                                    </button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
<td class="px-4 py-3 align-top">
<div class="flex items-center gap-3">
<div class="relative">
<div class="bg-center bg-no-repeat bg-cover rounded-full size-10" data-alt="Profile picture of angry critic" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD5Y8PHKwZi6exm8X2UqL01ZlYYU_1fZ7pJGfa1GlriJybCNFOiR_OXqInJD8oli1of2tm1q-GLsWEnGG70OGLhNhG8J-rtxCGcZjlouybT2_ISwJ1tzo-4iHe5uyOJX2mkQE7DSfPD3cgVxGNJeZL4bQndo4et8VLDr5wISwKLmtHnmdkA-7b9U18fAQPkqr3zFNfTyNS3Sr3ys9Iv13vVYz3A9u2Nrrmyzp9UWw-GJm3ZiPQoLqMTS-sfX0dFkY2hwsYOOaECy92X");'></div>
</div>
<div>
<p class="text-sm font-medium text-slate-900 dark:text-white">@angry_critic</p>
<div class="flex gap-1 mt-1">
<span class="inline-flex items-center rounded-full bg-slate-100 dark:bg-slate-700 px-1.5 py-0.5 text-[10px] font-medium text-slate-600 dark:text-slate-300">Trusted User</span>
</div>
</div>
</div>
</td>
<td class="px-4 py-3 align-top">
<div class="group/img relative w-16 h-16 rounded-lg overflow-hidden cursor-pointer border border-slate-200 dark:border-slate-600">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Thumbnail of reported abstract photo" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCUV6CjNREVhFjREM68ZD-MKONVqOM0DEEbLCf_fg2mo2kXn305R4unKGFiJLpW5qJHWlngu-DdEbvT_00q0DvqykUn76dl_jY8T7BEBz_8tv0vhVuj60SxzJNzZv5-4ThhektLcmSnJkC7nhIEcU3t58Rs7g1OtwkDFtWBZfj9qVSHRBG2aCr_AHhxO6eyrkdPPwLCnfJ8bCQ4CLYqcUB4Dff3nmSglkqVHKzykLxHj2MYtS3nXVOTPTXZFgQOPVYLF2TooXchYGNW");'></div>
</div>
</td>
<td class="px-4 py-3 align-top">
<div class="flex flex-col gap-1">
<span class="text-sm font-semibold text-yellow-600 dark:text-yellow-400">Nudity (Maybe)</span>
<p class="text-xs text-slate-600 dark:text-slate-400 line-clamp-2">Automated scan detected skin tones...</p>
</div>
</td>
<td class="px-4 py-3 text-sm text-slate-500 dark:text-[#92adc9] align-top whitespace-nowrap">12m ago</td>
<td class="px-4 py-3 align-top text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-2 text-slate-400 hover:text-emerald-500 hover:bg-emerald-500/10 rounded-lg transition-colors" title="Approve">
<span class="material-symbols-outlined">check</span>
</button>
<button class="px-3 py-1.5 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-200 text-xs font-semibold rounded-lg hover:bg-primary hover:text-white transition-colors">
                                                        Review
                                                    </button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="px-4 py-3 border-t border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-[#192633] flex items-center justify-between">
<p class="text-xs text-slate-500 dark:text-[#92adc9]">Showing <span class="font-medium text-slate-900 dark:text-white">1-3</span> of <span class="font-medium text-slate-900 dark:text-white">42</span></p>
<div class="flex gap-1">
<button class="p-1 text-slate-400 hover:text-slate-900 dark:hover:text-white"><span class="material-symbols-outlined">chevron_left</span></button>
<button class="p-1 text-slate-400 hover:text-slate-900 dark:hover:text-white"><span class="material-symbols-outlined">chevron_right</span></button>
</div>
</div>
</div>
</div>
<!-- Right Column: Activity Feed & User Search -->
<div class="xl:col-span-4 flex flex-col gap-6">
<!-- User Lookup -->
<div class="rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-card-dark p-4 shadow-sm">
<h3 class="text-sm font-bold uppercase tracking-wider text-slate-500 dark:text-[#92adc9] mb-3">Quick User Lookup</h3>
<div class="relative">
<span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined text-[20px]">search</span>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-lg py-2.5 pl-10 pr-4 text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-primary placeholder-slate-400 dark:placeholder-slate-500" placeholder="Search by username or ID..." type="text"/>
</div>
</div>
<!-- Suspicious Activity Feed -->
<div class="rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-card-dark flex flex-col shadow-sm overflow-hidden flex-1">
<div class="px-4 py-3 border-b border-slate-200 dark:border-slate-700 flex justify-between items-center bg-slate-50 dark:bg-[#192633]">
<h3 class="text-sm font-bold text-slate-900 dark:text-white">Live Activity Monitor</h3>
<div class="size-2 rounded-full bg-red-500 animate-pulse"></div>
</div>
<div class="overflow-y-auto max-h-[500px] flex flex-col p-2 space-y-1">
<!-- Feed Item: Critical -->
<div class="flex gap-3 p-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors border-l-2 border-transparent hover:border-red-500">
<div class="mt-1 flex-shrink-0">
<span class="material-symbols-outlined text-red-500 text-[20px]">warning</span>
</div>
<div class="flex flex-col gap-0.5">
<div class="flex justify-between items-start w-full">
<p class="text-sm font-medium text-slate-900 dark:text-white">Multiple Failed Logins</p>
<span class="text-[10px] text-slate-400 whitespace-nowrap ml-2">Just now</span>
</div>
<p class="text-xs text-slate-500 dark:text-[#92adc9]">IP 192.168.1.1 tried 10 times in 30s.</p>
</div>
</div>
<!-- Feed Item: Warning -->
<div class="flex gap-3 p-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors border-l-2 border-transparent hover:border-yellow-500">
<div class="mt-1 flex-shrink-0">
<span class="material-symbols-outlined text-yellow-500 text-[20px]">speed</span>
</div>
<div class="flex flex-col gap-0.5">
<div class="flex justify-between items-start w-full">
<p class="text-sm font-medium text-slate-900 dark:text-white">Rapid Posting Detected</p>
<span class="text-[10px] text-slate-400 whitespace-nowrap ml-2">1m ago</span>
</div>
<p class="text-xs text-slate-500 dark:text-[#92adc9]"><span class="text-primary hover:underline cursor-pointer">@spammer_01</span> posted 15 comments in 1m.</p>
</div>
</div>
<!-- Feed Item: Info -->
<div class="flex gap-3 p-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors border-l-2 border-transparent hover:border-blue-500">
<div class="mt-1 flex-shrink-0">
<span class="material-symbols-outlined text-blue-400 text-[20px]">person_add</span>
</div>
<div class="flex flex-col gap-0.5">
<div class="flex justify-between items-start w-full">
<p class="text-sm font-medium text-slate-900 dark:text-white">New User Registration</p>
<span class="text-[10px] text-slate-400 whitespace-nowrap ml-2">3m ago</span>
</div>
<p class="text-xs text-slate-500 dark:text-[#92adc9]">Email verified for <span class="text-primary hover:underline cursor-pointer">@landscape_lover</span>.</p>
</div>
</div>
<!-- Feed Item: Info -->
<div class="flex gap-3 p-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors border-l-2 border-transparent hover:border-emerald-500">
<div class="mt-1 flex-shrink-0">
<span class="material-symbols-outlined text-emerald-500 text-[20px]">gavel</span>
</div>
<div class="flex flex-col gap-0.5">
<div class="flex justify-between items-start w-full">
<p class="text-sm font-medium text-slate-900 dark:text-white">User Banned</p>
<span class="text-[10px] text-slate-400 whitespace-nowrap ml-2">8m ago</span>
</div>
<p class="text-xs text-slate-500 dark:text-[#92adc9]">Moderator <span class="text-white">Alex M.</span> banned <span class="text-white">@troll_123</span>.</p>
</div>
</div>
<!-- Feed Item: Info -->
<div class="flex gap-3 p-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors border-l-2 border-transparent hover:border-slate-500">
<div class="mt-1 flex-shrink-0">
<span class="material-symbols-outlined text-slate-400 text-[20px]">flag</span>
</div>
<div class="flex flex-col gap-0.5">
<div class="flex justify-between items-start w-full">
<p class="text-sm font-medium text-slate-900 dark:text-white">New Report Filed</p>
<span class="text-[10px] text-slate-400 whitespace-nowrap ml-2">12m ago</span>
</div>
<p class="text-xs text-slate-500 dark:text-[#92adc9]">Reason: Harassment. Context: Comment.</p>
</div>
</div>
</div>
<div class="p-3 border-t border-slate-200 dark:border-slate-700 text-center">
<button class="text-xs font-medium text-primary hover:text-blue-400 transition-colors">View All Activity Log</button>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>