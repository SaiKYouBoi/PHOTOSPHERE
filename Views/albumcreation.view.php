<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Create Album - PhotoSphere</title>
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
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
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "sans": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        /* Custom scrollbar for dark theme feel */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #111a22;
        }
        ::-webkit-scrollbar-thumb {
            background: #324d67;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #4a6fa5;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display antialiased selection:bg-primary/30">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<!-- Navigation -->
<header class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-[#233648] bg-background-light dark:bg-[#111a22] px-6 py-3 lg:px-10">
<div class="flex items-center gap-4">
<div class="size-8 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-3xl">shutter_speed</span>
</div>
<h2 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">PhotoSphere</h2>
</div>
<div class="flex items-center gap-4 sm:gap-8">
<nav class="hidden md:flex items-center gap-9">
<a class="text-slate-600 dark:text-slate-200 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Gallery</a>
<a class="text-slate-600 dark:text-slate-200 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Community</a>
<a class="text-slate-600 dark:text-slate-200 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Profile</a>
</nav>
<div class="flex items-center gap-4">
<button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-9 px-4 bg-primary hover:bg-blue-600 transition-colors text-white text-sm font-bold leading-normal tracking-[0.015em] shadow-md shadow-primary/20">
<span class="truncate">Upload</span>
</button>
<div class="bg-center bg-no-repeat bg-cover rounded-full size-9 ring-2 ring-slate-200 dark:ring-[#233648]" data-alt="User profile picture placeholder with abstract gradient" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCK_VNrRJqRujj37TLWxf-BYSBU199Bhp8MDTMYK2joBzzf3LNORuL_9acD288BW09EuDT2o9PeUpiENPSW_e4HiiwjlZs6kWt3j0hpd7CKLduAleNN9igeT122AeShK5f82d0zAHVyh3598xYJL42aApiqV1paeLTsIOjo8KBHi_FI0rYbkxlrsbHKbs4iaNlDIfbAYnT8afcolno_CMycGhb7LGLk9oSPyUePBK3ixBbjLaJXX9m6qX081M13GnpobhY0IgOP90m9");'>
</div>
</div>
</div>
</header>
<!-- Main Content -->
<main class="flex-1 flex justify-center py-8 px-4 sm:px-6">
<div class="flex flex-col max-w-[640px] w-full gap-6">
<!-- Page Heading -->
<div class="flex flex-col gap-2 pt-4">
<div class="flex items-center gap-2 text-slate-500 dark:text-[#92adc9] text-sm font-medium mb-2 cursor-pointer hover:text-primary transition-colors">
<span class="material-symbols-outlined text-lg">arrow_back</span>
<span>Back to Gallery</span>
</div>
<h1 class="text-slate-900 dark:text-white tracking-tight text-3xl md:text-[32px] font-bold leading-tight">Create New Album</h1>
<p class="text-slate-500 dark:text-[#92adc9] text-sm md:text-base font-normal leading-normal">Curate your stories and organize your photos into a new collection.</p>
</div>
<!-- Form Card -->
<form class="flex flex-col gap-6 bg-white dark:bg-[#151f28] rounded-xl p-6 md:p-8 shadow-sm border border-slate-200 dark:border-[#233648]">
<!-- Cover Photo Upload -->
<div class="flex flex-col gap-2">
<p class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Cover Photo</p>
<div class="group relative flex w-full flex-col items-center justify-center min-h-[160px] rounded-lg border-2 border-dashed border-slate-300 dark:border-[#324d67] bg-slate-50 dark:bg-[#192633] p-6 transition-all hover:border-primary dark:hover:border-primary cursor-pointer">
<div class="flex flex-col items-center gap-3 text-slate-400 dark:text-[#92adc9] group-hover:text-primary transition-colors">
<span class="material-symbols-outlined text-4xl">add_photo_alternate</span>
<div class="text-center">
<p class="text-sm font-medium">Click to upload cover</p>
<p class="text-xs opacity-70 mt-1">SVG, PNG, JPG or GIF (max. 3MB)</p>
</div>
</div>
<input class="absolute inset-0 opacity-0 cursor-pointer" type="file"/>
</div>
</div>
<!-- Album Name -->
<label class="flex flex-col gap-2">
<p class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Album Name</p>
<input class="form-input flex w-full min-w-0 resize-none overflow-hidden rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-[#92adc9] focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324d67] bg-slate-50 dark:bg-[#192633] focus:border-primary dark:focus:border-primary h-12 px-4 text-base font-normal leading-normal transition-all" placeholder="e.g., Summer in Kyoto" type="text" value=""/>
</label>
<!-- Description -->
<label class="flex flex-col gap-2">
<p class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Description <span class="text-slate-400 font-normal ml-1">(Optional)</span></p>
<textarea class="form-textarea flex w-full min-w-0 resize-y overflow-hidden rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-[#92adc9] focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-[#324d67] bg-slate-50 dark:bg-[#192633] focus:border-primary dark:focus:border-primary min-h-[120px] px-4 py-3 text-base font-normal leading-normal transition-all" placeholder="Tell the story behind these photos..."></textarea>
</label>
<!-- Privacy Settings -->
<div class="flex flex-col gap-3">
<p class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Privacy</p>
<div class="flex flex-col gap-3">
<label class="group relative flex items-start gap-4 rounded-lg border border-solid border-slate-300 dark:border-[#324d67] bg-slate-50 dark:bg-[#192633] p-4 cursor-pointer hover:border-primary dark:hover:border-primary transition-colors">
<div class="flex items-center h-5">
<input checked="" class="h-5 w-5 border-slate-400 dark:border-[#4a6fa5] text-primary focus:ring-primary/50 bg-transparent" name="privacy" type="radio"/>
</div>
<div class="flex grow flex-col">
<div class="flex items-center gap-2 mb-0.5">
<span class="material-symbols-outlined text-lg text-slate-600 dark:text-slate-300">public</span>
<p class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Public</p>
</div>
<p class="text-slate-500 dark:text-[#92adc9] text-sm font-normal leading-normal">Visible to everyone in the community and searchable.</p>
</div>
</label>
<label class="group relative flex items-start gap-4 rounded-lg border border-solid border-slate-300 dark:border-[#324d67] bg-slate-50 dark:bg-[#192633] p-4 cursor-pointer hover:border-primary dark:hover:border-primary transition-colors">
<div class="flex items-center h-5">
<input class="h-5 w-5 border-slate-400 dark:border-[#4a6fa5] text-primary focus:ring-primary/50 bg-transparent" name="privacy" type="radio"/>
</div>
<div class="flex grow flex-col">
<div class="flex items-center gap-2 mb-0.5">
<span class="material-symbols-outlined text-lg text-slate-600 dark:text-slate-300">lock</span>
<p class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Private</p>
</div>
<p class="text-slate-500 dark:text-[#92adc9] text-sm font-normal leading-normal">Visible only to you. You can change this later.</p>
</div>
</label>
</div>
</div>
<!-- Action Buttons -->
<div class="flex items-center justify-end gap-4 pt-4 border-t border-slate-200 dark:border-[#233648]">
<button class="px-6 py-2.5 rounded-lg text-sm font-semibold text-slate-600 dark:text-[#92adc9] hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-[#192633] transition-all" type="button">
                            Cancel
                        </button>
<button class="px-6 py-2.5 rounded-lg bg-primary hover:bg-blue-600 text-white text-sm font-bold shadow-lg shadow-primary/25 transition-all transform active:scale-95 flex items-center gap-2" type="submit">
<span class="material-symbols-outlined text-lg">add_circle</span>
                            Create Album
                        </button>
</div>
</form>
</div>
</main>
</div>
</body></html>