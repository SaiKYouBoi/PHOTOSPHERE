<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PhotoSphere - Photo Detail</title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
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
                        "surface-dark": "#111a22",
                        "border-dark": "#233648",
                        "text-secondary": "#92adc9",
                    },
                    fontFamily: {
                        "display": ["Inter", "Noto Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        /* Custom scrollbar for dark theme consistency */
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
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display overflow-hidden flex flex-col h-screen">
<!-- TopNavBar -->
<header class="flex-none flex items-center justify-between whitespace-nowrap border-b border-solid border-b-border-dark bg-surface-dark px-4 md:px-10 py-3 z-50">
<div class="flex items-center gap-4 md:gap-8">
<div class="flex items-center gap-4 text-white cursor-pointer">
<div class="size-8 text-primary">
<svg class="w-full h-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill="currentColor"></path>
<path clip-rule="evenodd" d="M7.24189 26.4066C7.31369 26.4411 7.64204 26.5637 8.52504 26.3738C9.59462 26.1438 11.0343 25.5311 12.7183 24.4963C14.7583 23.2426 17.0256 21.4503 19.238 19.238C21.4503 17.0256 23.2426 14.7583 24.4963 12.7183C25.5311 11.0343 26.1438 9.59463 26.3738 8.52504C26.5637 7.64204 26.4411 7.31369 26.4066 7.24189C26.345 7.21246 26.143 7.14535 25.6664 7.1918C24.9745 7.25925 23.9954 7.5498 22.7699 8.14278C20.3369 9.32007 17.3369 11.4915 14.4142 14.4142C11.4915 17.3369 9.32007 20.3369 8.14278 22.7699C7.5498 23.9954 7.25925 24.9745 7.1918 25.6664C7.14534 26.143 7.21246 26.345 7.24189 26.4066ZM29.9001 10.7285C29.4519 12.0322 28.7617 13.4172 27.9042 14.8126C26.465 17.1544 24.4686 19.6641 22.0664 22.0664C19.6641 24.4686 17.1544 26.465 14.8126 27.9042C13.4172 28.7617 12.0322 29.4519 10.7285 29.9001L21.5754 40.747C21.6001 40.7606 21.8995 40.931 22.8729 40.7217C23.9424 40.4916 25.3821 39.879 27.0661 38.8441C29.1062 37.5904 31.3734 35.7982 33.5858 33.5858C35.7982 31.3734 37.5904 29.1062 38.8441 27.0661C39.879 25.3821 40.4916 23.9425 40.7216 22.8729C40.931 21.8995 40.7606 21.6001 40.747 21.5754L29.9001 10.7285ZM29.2403 4.41187L43.5881 18.7597C44.9757 20.1473 44.9743 22.1235 44.6322 23.7139C44.2714 25.3919 43.4158 27.2666 42.252 29.1604C40.8128 31.5022 38.8165 34.012 36.4142 36.4142C34.012 38.8165 31.5022 40.8128 29.1604 42.252C27.2666 43.4158 25.3919 44.2714 23.7139 44.6322C22.1235 44.9743 20.1473 44.9757 18.7597 43.5881L4.41187 29.2403C3.29027 28.1187 3.08209 26.5973 3.21067 25.2783C3.34099 23.9415 3.8369 22.4852 4.54214 21.0277C5.96129 18.0948 8.43335 14.7382 11.5858 11.5858C14.7382 8.43335 18.0948 5.9613 21.0277 4.54214C22.4852 3.8369 23.9415 3.34099 25.2783 3.21067C26.5973 3.08209 28.1187 3.29028 29.2403 4.41187Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em] hidden sm:block">PhotoSphere</h2>
</div>
<label class="flex flex-col min-w-40 h-10 max-w-64 hidden md:flex">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full">
<div class="text-text-secondary flex border-none bg-border-dark items-center justify-center pl-4 rounded-l-lg border-r-0">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border-none bg-border-dark focus:border-none h-full placeholder:text-text-secondary px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" placeholder="Search photos" value=""/>
</div>
</label>
</div>
<div class="flex flex-1 justify-end gap-8">
<div class="hidden lg:flex items-center gap-9">
<a class="text-white text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Explore</a>
<a class="text-white text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Albums</a>
<a class="text-white text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Community</a>
</div>
<div class="flex items-center gap-4">
<button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-blue-600 transition-colors">
<span class="material-symbols-outlined text-[20px] mr-2">cloud_upload</span>
<span class="truncate">Upload</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-border-dark cursor-pointer" data-alt="User profile picture showing a smiling person" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAWJdL2xQtie9YqAtojiaqPkbbriA05mqtphpBqdPIomtM4lRqXV1XRx4DDDUK1XRzLe5qqcmiWeU__2zxdyLh440R5NtpUyrEWE5zEPhNrByOsuW9Qm1H1mwMTQDURHFND1Zh9JX5qJ5oDG9eRA2ieXtr6gbDqz7OEgY6_vkxZZwCXZZcR-wle8m42TFPE-t0-OQPOwT7tbIJEHFG7mBwPuJ5AKC_Olu1qv2aR3FowrX58T4M3YooK2o-7wzs2_RpOuhXtPoODVd6f");'></div>
</div>
</div>
</header>
<!-- Main Content Area: Split View -->
<div class="flex-1 flex flex-col lg:flex-row overflow-hidden relative">
<!-- Left: Image Theater (Flexible Width) -->
<main class="flex-1 bg-[#0d1218] flex flex-col relative overflow-y-auto lg:overflow-hidden group/canvas">
<!-- Main Photo Canvas -->
<div class="flex-1 flex items-center justify-center p-4 lg:p-8 relative min-h-[400px]">
<!-- Ambient blur background for immersive effect -->
<div class="absolute inset-0 bg-cover bg-center opacity-20 blur-3xl scale-110 pointer-events-none" data-alt="Blurred background version of the marina sunset photo" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDmuyjSF2AD2dnTuYm-JL7WA_7gmOTT6jKw5rzsj4oHijFt_F4kd1zOxsZwo832nIdbZZtDoL9LpKo6XywVxJJt5P7vgx2QfXGSNzYAZsrgDZxztYnulunYG7E75FcAN2DCklPQQoubHS2hngQB7WPcrFpQUeofkp_MxcjNSqA_Yj54R6VKIuNVLpsxrLrzneJ7aNMvRHMRRPLR4mbPPoLScaQknCQfDIeiUtM3o6KTdEezpa-0K_3ZTIDPkDNZRpdmGxKizNlbKHlZ");'></div>
<!-- The Photo -->
<img alt="Golden Hour at the Marina with silhouetted sailboats" class="relative z-10 max-w-full max-h-full object-contain shadow-2xl rounded-sm" data-alt="Golden Hour at the Marina with silhouetted sailboats" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAaFM9PK5X_K15jWkbUyxeCvo_UOsRbV3oeKLwUL3GZjs10WfjWbfNo-EHPAaStXv5my1ScfnHA_zL5KlG_aLjQRLvoDsQEPku0UswmbFdLD_Y43sSLGTWnYwdLT_bJFFFcLvBCbSm7-7P6Aangon2HreAyDEI7hrtHQK_R7Fi_43aBTii-VqBBtQ1yLIIzamSGqfiMR9ra2N3cgKLyHJAioFNLq9fMEK-ZVNoYZqQZK-JaQMJI8eVr_oY4w_K-VPIyf37OO13lxayj"/>
<!-- Floating Canvas Actions (Top Right) -->
<div class="absolute top-6 right-6 z-20 opacity-0 group-hover/canvas:opacity-100 transition-opacity duration-300 flex gap-2">
<button class="bg-black/50 hover:bg-black/70 text-white p-2 rounded-lg backdrop-blur-md" title="Enter Fullscreen">
<span class="material-symbols-outlined">fullscreen</span>
</button>
</div>
</div>
<!-- "More from this Album" Strip (Bottom of Left Column) -->
<div class="h-auto w-full bg-[#0d1218]/90 border-t border-border-dark p-4 z-20 backdrop-blur-sm">
<div class="flex items-center justify-between mb-3">
<span class="text-text-secondary text-xs font-bold uppercase tracking-wider">More from "Coastal Vibes"</span>
<a class="text-primary text-xs font-bold hover:underline" href="#">View Album</a>
</div>
<div class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide">
<div class="flex-none w-24 aspect-square rounded-md bg-cover bg-center cursor-pointer ring-2 ring-primary ring-offset-2 ring-offset-[#0d1218]" data-alt="Thumbnail of the current marina photo" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBxCP1UBRMeC4sybdBLR8TKeDpxbjZ_s_U-cBGuS2l1fp_glmR9GehSOattBMVGhI9zLToSGk5A7G0J1VyvB_YkqNKwrF1SZsEaw8rXJYjJjP9fmR4R_fP-uvuY5ezoU0kZ509qk5ndUGS7tk0JULTQyx7HMRNjLKTuBfhhMwHZlwUZ-rrqbxrHwdOs_1UXSGJHIabMZ9sPUb0Y3dzqlC8sO3wFCAWReS0CuW9LJ6vyMhd92HoUh6Yfl5ITuRWEWDfWd67BDIdMzK5");'></div>
<div class="flex-none w-24 aspect-square rounded-md bg-cover bg-center cursor-pointer opacity-70 hover:opacity-100 transition-opacity" data-alt="Thumbnail of waves crashing on rocks" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAHtXTcTjrVKokA8vWoKPMjsLuDRdj-laX2lrDijIJDZaXlCHid6tLU9qz9WlGo7q0HjjMh73rTftbKRlGIKLmlj2cTYq1kLVunDxq4B6KrdTbDFDQSlANU4zlnty1D4SYv9iUgDkHoMnObYccBU9X6ftvWnqOimpb-7Twk1ZcISBnfnNjBpMJrOtJ8tdk_KBwNv_anBUDPZ3lHWfUkQ3LnWiIX5uKmzqpPOOTEXr9rvMITfvQ8yv8gksb1t8FZoqtrNKSfj5epaFsI");'></div>
<div class="flex-none w-24 aspect-square rounded-md bg-cover bg-center cursor-pointer opacity-70 hover:opacity-100 transition-opacity" data-alt="Thumbnail of a sandy beach at noon" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD7pB8gWXRlXEn18K3yun-L8o1OLWv5GGOMmu0MSBOTfzusb7O1qMPpd-Cf1Uft_yHCRjQSh-j7PMw08-ZViOZ_ZTfaLxLD-eaBD3Nn-4T8xkVUrST_H-q2Ftc2cYEEpS578BltmFCdqi2drOVkti4UsYi9dqvF-3z6sg3UoSXzwNefql8cfPWUUYu-xA59FXrL9aAzOy8TELChaeQzq-ZYdZcnhCaFH0VQShowdre2dkNuC7Yji3ha42CCqbhdwMC_bfW7ypLiJo7H");'></div>
<div class="flex-none w-24 aspect-square rounded-md bg-cover bg-center cursor-pointer opacity-70 hover:opacity-100 transition-opacity" data-alt="Thumbnail of a lighthouse in the distance" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBLdeOhKPbL5jPB6fPKphRUTBA_GCp3zfeRpfsNmHnGrBpp2mEF9E8V11aX7zIjyEdWQZyVvJef-MIeUgxC3jhfPrHxttmILUx57VOcPdKFk_tasZ0NnUu3LxkTcG0DtNu7_0obdwitGPEeQjCO05lfQkjsyqDJaBfHPelKKcIZhZGCf7AUCXMM3ZVQTKpvvHp76usOqQqTeekAmCm1D5CV6o4g-CChMkChSfmJ_NLiRx1-5YvN_y4VRbDtL5WTu33dtx9rTY7uiDM2");'></div>
<div class="flex-none w-24 aspect-square rounded-md bg-cover bg-center cursor-pointer opacity-70 hover:opacity-100 transition-opacity" data-alt="Thumbnail of a blue ocean horizon" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBNsfgbybjmjj88KBzDtX8A6hHOM2G-V0dgyghH5R5d5fXPd8NX2pg-UzJORue0lMw-3LscIKamYIrwaJ7k2gbAqhhG-8uX_6l59QwmYO9OpLtNhGB48bHO0VSHlZsdmL870AsgEWplqEOhdoLSQRcozLptZ9doWNwmUDROye_1MRTic7m19A0rgeuB0zlh73pnFmzwBAto7f3T4BUIawGzO-XI_NbqStAPuBp4A6Xt1qo5wWHn8ylpXLb3B6KllEIfKoh9fPN_-L4S");'></div>
</div>
</div>
</main>
<!-- Right: Sidebar (Fixed Width on Desktop) -->
<aside class="w-full lg:w-[420px] xl:w-[480px] bg-surface-dark border-l border-border-dark flex flex-col h-full overflow-y-auto z-30 shadow-xl">
<!-- User Profile Header -->
<div class="p-6 pb-4 border-b border-border-dark/50">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-full bg-cover bg-center ring-2 ring-border-dark" data-alt="Alex Shutter profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAnidSeAf9n-ZJ6aTMyfnpxYsMPAD40iZapZbY8MHg_wl-fGIMJDYah8vIWBCOln72RbRH2cwvyjQCCpXq8rRtasBhhTNcPJOikFzAhdItVUgtsBbglN7ihjZ1zqmzOhkCMFR_buGJz74fXvfqW7U1Do-_C7zUgV2S5XQHcpZHwLTvTDCRz4Ph965dRTxLkPNdjZpOyTHy6hsb1fSucdFWt7p5G5h3Lndv7ZH17NRkzPHvNi1e9nRYIOOYF_V4escNJcJd5Ov4bPpL7");'></div>
<div>
<h3 class="text-white font-bold text-lg leading-tight">Alex Shutter</h3>
<p class="text-text-secondary text-sm">Pro Member • San Francisco</p>
</div>
</div>
<button class="bg-border-dark hover:bg-[#324d67] text-white text-xs font-bold py-2 px-4 rounded-lg transition-colors tracking-wide">
                        Follow
                    </button>
</div>
</div>
<!-- Metadata & Actions -->
<div class="p-6 space-y-6 border-b border-border-dark/50">
<!-- Title & Date -->
<div>
<h1 class="text-2xl font-bold text-white mb-2 leading-tight">Golden Hour at the Marina</h1>
<div class="flex items-center text-text-secondary text-sm gap-4">
<span>Published on Oct 24, 2023</span>
<span class="w-1 h-1 rounded-full bg-text-secondary"></span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">visibility</span> 1.2k</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">favorite</span> 45</span>
</div>
</div>
<!-- Main Actions -->
<div class="flex gap-2">
<button class="flex-1 bg-primary hover:bg-blue-600 text-white h-10 rounded-lg font-bold text-sm flex items-center justify-center gap-2 transition-colors">
<span class="material-symbols-outlined text-[20px]">favorite_border</span>
                        Like
                    </button>
<button class="flex-1 bg-border-dark hover:bg-[#324d67] text-white h-10 rounded-lg font-bold text-sm flex items-center justify-center gap-2 transition-colors">
<span class="material-symbols-outlined text-[20px]">share</span>
                        Share
                    </button>
<button class="w-10 bg-border-dark hover:bg-[#324d67] text-white h-10 rounded-lg flex items-center justify-center transition-colors" title="Download">
<span class="material-symbols-outlined text-[20px]">download</span>
</button>
</div>
<!-- Description -->
<div class="text-gray-300 text-base leading-relaxed">
<p>Captured just as the sun dipped below the horizon, creating a perfect silhouette against the vibrant orange sky. The water was incredibly calm this evening.</p>
</div>
<!-- EXIF Grid -->
<div class="bg-[#0d1218] rounded-xl p-4 border border-border-dark">
<div class="grid grid-cols-2 gap-4">
<div class="flex items-center gap-3">
<div class="p-2 rounded-full bg-surface-dark text-text-secondary">
<span class="material-symbols-outlined text-[20px]">photo_camera</span>
</div>
<div>
<p class="text-xs text-text-secondary font-medium">Camera</p>
<p class="text-sm text-white font-semibold">Sony A7III</p>
</div>
</div>
<div class="flex items-center gap-3">
<div class="p-2 rounded-full bg-surface-dark text-text-secondary">
<span class="material-symbols-outlined text-[20px]">lens</span>
</div>
<div>
<p class="text-xs text-text-secondary font-medium">Lens</p>
<p class="text-sm text-white font-semibold">35mm f/1.4</p>
</div>
</div>
<div class="flex items-center gap-3">
<div class="p-2 rounded-full bg-surface-dark text-text-secondary">
<span class="material-symbols-outlined text-[20px]">shutter_speed</span>
</div>
<div>
<p class="text-xs text-text-secondary font-medium">Shutter</p>
<p class="text-sm text-white font-semibold">1/200s</p>
</div>
</div>
<div class="flex items-center gap-3">
<div class="p-2 rounded-full bg-surface-dark text-text-secondary">
<span class="material-symbols-outlined text-[20px]">iso</span>
</div>
<div>
<p class="text-xs text-text-secondary font-medium">ISO</p>
<p class="text-sm text-white font-semibold">100</p>
</div>
</div>
</div>
</div>
<!-- Tags -->
<div class="flex flex-wrap gap-2">
<a class="px-3 py-1 rounded-full bg-border-dark hover:bg-[#324d67] text-xs text-gray-300 transition-colors" href="#">#sunset</a>
<a class="px-3 py-1 rounded-full bg-border-dark hover:bg-[#324d67] text-xs text-gray-300 transition-colors" href="#">#marina</a>
<a class="px-3 py-1 rounded-full bg-border-dark hover:bg-[#324d67] text-xs text-gray-300 transition-colors" href="#">#silhouettes</a>
<a class="px-3 py-1 rounded-full bg-border-dark hover:bg-[#324d67] text-xs text-gray-300 transition-colors" href="#">#ocean</a>
<a class="px-3 py-1 rounded-full bg-border-dark hover:bg-[#324d67] text-xs text-gray-300 transition-colors" href="#">#goldenhour</a>
</div>
</div>
<!-- Comments Section -->
<div class="p-6 flex-1 bg-surface-dark">
<h3 class="text-white font-bold text-lg mb-4">Comments (12)</h3>
<!-- Comment Input -->
<div class="flex gap-3 mb-6">
<div class="w-8 h-8 rounded-full bg-cover bg-center shrink-0" data-alt="Current user avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA3K9CULl4nllIsgNzUSgujezmQ5paQBhoPm_8JX_L9l70gEXODjeGJ1P3xJWZ0gP30Rt9CGGR3chbbsG5j6suFA-Vgi1wVmPY4LajjRZft56uPVZEXnSS-XvtmNuDT8sAvMXpIOL-gTYx7E2iwpf5stKAJDZDOrYuk8N_b0pYVLVEu_8ihtZsPj6D-NVdfyi7aU15OBk3vb53jIDxRQQ9u7kr8JiFnk5o7Njm8bq5AVD9y-HkqZNmHWlAsNTrT9gldrLrEF-Ew7IT5");'></div>
<div class="flex-1">
<textarea class="w-full bg-[#0d1218] border border-border-dark rounded-lg p-3 text-sm text-white placeholder:text-text-secondary focus:ring-1 focus:ring-primary focus:border-primary resize-none h-20 transition-all" placeholder="Add a comment..."></textarea>
<div class="flex justify-end mt-2">
<button class="bg-primary hover:bg-blue-600 text-white text-xs font-bold py-2 px-4 rounded-lg transition-colors">
                                Post
                            </button>
</div>
</div>
</div>
<!-- Comments List -->
<div class="space-y-6">
<!-- Comment 1 -->
<div class="flex gap-3 group">
<div class="w-8 h-8 rounded-full bg-cover bg-center shrink-0 cursor-pointer" data-alt="Sarah Jenkins profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBoHhmhnIDQuIMIkd17CY8nniNeRvjotyYKd1F8wv31hDVHUdxYD3DmrRufH8L5ljnnDy2xOC_6G3jsprna2dvTJSkNgb9RrR-Io8ajZcexAsASbZrDChnrYdygl-V1L7lNBKRFMG0F6wIpOp1nZL9jx5ZFgUlLjwpYJLI_pGPQcJcyKGsJjakTMPce_ILCsh0rnvCQfY_SPtG6M3PWz5Crq8ibz9RhiQJ_0uchLRhi5pSYUk3pDLI-zlNrZ7B2ULi4sQwBrP_wQx22");'></div>
<div class="flex-1">
<div class="flex items-baseline justify-between">
<span class="text-white text-sm font-bold cursor-pointer hover:underline">Sarah Jenkins</span>
<span class="text-text-secondary text-xs">2h ago</span>
</div>
<p class="text-gray-300 text-sm mt-1">Incredible colors! Did you use a graduated filter for the sky?</p>
<div class="flex items-center gap-4 mt-2">
<button class="text-text-secondary hover:text-white text-xs font-medium flex items-center gap-1 transition-colors">
<span class="material-symbols-outlined text-[14px]">favorite</span> 3
                                </button>
<button class="text-text-secondary hover:text-white text-xs font-medium transition-colors">Reply</button>
</div>
</div>
</div>
<!-- Comment 2 (Threaded) -->
<div class="flex gap-3 group">
<div class="w-8 h-8 rounded-full bg-cover bg-center shrink-0 cursor-pointer" data-alt="Mike Chen profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDsswcBRQwGw35_EsYPvA6ib2Xpck9HmZ264FvGfAoJZOuXOE4IcPrqVQsusY1doS3Rl58cXeSMHqk37iJ35KamwfV4Gh1LNlcrR4iOwcMi9gs0EZLX3nuUOAJbtM3JxPHL7HG4X9oFe8uPaNPgms2-0Z-Xeizgm7fCghy7Q1osjFeDPpxm7CRsmXb69ZRpKAaqKsNt58mXIcINzi1Or5Wofo4xlltcCgFLpLezfatsRTwwLCDJ4Nwuf9cJ5Wxdu6vk62e4LqQkTKUK");'></div>
<div class="flex-1">
<div class="flex items-baseline justify-between">
<span class="text-white text-sm font-bold cursor-pointer hover:underline">Mike Chen</span>
<span class="text-text-secondary text-xs">5h ago</span>
</div>
<p class="text-gray-300 text-sm mt-1">Stunning composition. The framing with the boats is perfect.</p>
<div class="flex items-center gap-4 mt-2 mb-3">
<button class="text-text-secondary hover:text-white text-xs font-medium flex items-center gap-1 transition-colors">
<span class="material-symbols-outlined text-[14px]">favorite</span> 12
                                </button>
<button class="text-text-secondary hover:text-white text-xs font-medium transition-colors">Reply</button>
</div>
<!-- Nested Reply -->
<div class="pl-4 border-l-2 border-border-dark flex gap-3 mt-2">
<div class="w-6 h-6 rounded-full bg-cover bg-center shrink-0 cursor-pointer" data-alt="Alex Shutter profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDEVi_Erv1tmiSIEJ_NJAWww-0GYaWjUSDg0YtZDAwQ_lGJWttwD6ITHLD3qBW2eSBI-WuSMY_KpyVUi91CYBzcjhjcg47LuBzOrBKI4euwJtUUqdnl2IxjK0JbH5SxwrgnmO-cK43bo_wQBTyEsC3RvqDSq-7Uis5MJ-VC1sqEoNeiw7stmHX-i_lf-iq1hZ8RiaWPqkxRtkN-8g3E-jw7wuE05mlBVnlnd61u0ua7C2kX5yx10SF-vKDsAhYSUJ-PBR6VWcAyQkPM");'></div>
<div class="flex-1">
<div class="flex items-baseline justify-between">
<span class="text-white text-sm font-bold cursor-pointer hover:underline">Alex Shutter</span>
<span class="text-primary text-[10px] font-bold border border-primary px-1 rounded ml-2">Author</span>
<span class="text-text-secondary text-xs ml-auto">4h ago</span>
</div>
<p class="text-gray-300 text-sm mt-1">Thanks Mike! I waited about 20 minutes for that boat on the left to settle.</p>
</div>
</div>
</div>
</div>
</div>
<div class="mt-8 text-center">
<button class="text-text-secondary hover:text-white text-sm font-medium transition-colors">View all 12 comments</button>
</div>
</div>
</aside>
</div>
</body></html>