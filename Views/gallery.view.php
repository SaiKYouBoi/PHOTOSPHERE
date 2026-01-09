<?php 
session_start();
         
require_once __DIR__ . '/../App/Repositories/PhotoRepository.php';
require_once __DIR__ . '/../App/Models/Post.php';

$photoRepo = new PhotoRepository();
$posts = $photoRepo->getAllPosts();

?>
<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PhotoSphere | Community Gallery</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
                    borderRadius: { "DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px" },
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
        <header
            class="flex h-16 shrink-0 items-center justify-between border-b border-solid border-slate-200 dark:border-[#233648] bg-white/80 dark:bg-background-dark/80 backdrop-blur-md px-6 z-50">
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
                        <input
                            class="w-full h-10 pl-10 pr-4 rounded-xl border-none bg-slate-100 dark:bg-[#233648] text-sm focus:ring-2 focus:ring-primary/50 placeholder:text-slate-500 dark:placeholder:text-[#92adc9]"
                            placeholder="Search photos, people, or albums" type="text" />
                    </label>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <nav class="hidden lg:flex items-center gap-6 mr-4">
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Explore</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Albums</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Challenges</a>
                </nav>
                <div class="flex items-center gap-3">
                    <button
                        class="hidden sm:flex items-center gap-2 px-4 h-10 rounded-xl bg-primary text-white hover:opacity-90 transition-all shadow-lg shadow-primary/20"
                        id="create_post">
                        <span class="material-symbols-outlined text-[20px]">add_circle</span>
                        <span class="text-sm font-bold">Create Post</span>
                    </button>
                    <button
                        class="flex items-center justify-center size-10 rounded-xl bg-slate-100 dark:bg-[#233648] hover:bg-slate-200 dark:hover:bg-[#324d67] transition-all">
                        <span class="material-symbols-outlined text-xl">notifications</span>
                    </button>
                </div>
                <div class="h-10 w-px bg-slate-200 dark:bg-[#233648] mx-1"></div>
                <div class="size-10 rounded-full border-2 border-primary/20 p-0.5 cursor-pointer">
                    <div class="size-full rounded-full bg-center bg-cover" data-alt="User profile avatar"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQOFTVNWQ_rTuyDLkyR7S6Dvf396HE4aL_QGUUVKBVVtZPG4AVt4_uEDJ0KnVD_paH-DDmDk_ZGbI84Vp4B3rjs6UZyBF3Tf5k2EJK6eTce-0qyBO6TreBMdOQLy8t77-sQ8ivSPb-VQ7SX5N_51wZnB6eb8CBWr4QMY7aD4ROflAK7URQD2cn39K6QHsrbiD1o-P_miqNOH3XMtSz8ZSg9i37pm_i8eCQcYi4jlrdvqEh2JDIgQ05RSDe-jUQdl_aO2J31nSLR1Nu");'>
                    </div>
                </div>
            </div>
        </header>
        <div class="flex flex-1 overflow-hidden">
            <aside
                class="w-64 shrink-0 flex-col justify-between border-r border-slate-200 dark:border-[#233648] bg-white dark:bg-background-dark p-4 hidden md:flex">
                <div class="flex flex-col gap-6">
                    <div class="space-y-1">
                        <p
                            class="px-3 pb-2 text-[10px] font-bold uppercase tracking-widest text-slate-400 dark:text-[#92adc9]">
                            Menu</p>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-[#233648] group transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-slate-500 group-hover:text-primary">home</span>
                            <span class="text-sm font-medium">Home</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-primary/10 text-primary transition-all"
                            href="/Views/gallery.view.php">
                            <span class="material-symbols-outlined fill-1">explore</span>
                            <span class="text-sm font-bold">Explore</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-[#233648] group transition-all"
                            href="/Views/basicuser.view.php">
                            <span
                                class="material-symbols-outlined text-slate-500 group-hover:text-primary">photo_library</span>
                            <span class="text-sm font-medium">Albums</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-[#233648] group transition-all"
                            href="#">
                            <span
                                class="material-symbols-outlined text-slate-500 group-hover:text-primary">favorite</span>
                            <span class="text-sm font-medium">Liked Photos</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-[#233648] group transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-slate-500 group-hover:text-primary">group</span>
                            <span class="text-sm font-medium">Following</span>
                        </a>
                    </div>
                    <div class="space-y-1">
                        <p
                            class="px-3 pb-2 text-[10px] font-bold uppercase tracking-widest text-slate-400 dark:text-[#92adc9]">
                            Your Library</p>
                        <a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-slate-100 dark:hover:bg-[#233648] transition-all"
                            href="#">
                            <div class="size-6 rounded bg-gradient-to-br from-indigo-500 to-purple-500"></div>
                            <span class="text-sm font-medium">Street Vibes</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-slate-100 dark:hover:bg-[#233648] transition-all"
                            href="#">
                            <div class="size-6 rounded bg-gradient-to-br from-emerald-500 to-teal-500"></div>
                            <span class="text-sm font-medium">Macro Nature</span>
                        </a>
                    </div>
                </div>
                <div
                    class="p-3 bg-slate-50 dark:bg-[#1a2632] rounded-2xl border border-slate-100 dark:border-[#233648]">
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-[11px] font-bold text-slate-500 dark:text-[#92adc9]">Storage</p>
                        <p class="text-[11px] font-bold text-primary">85%</p>
                    </div>
                    <div class="w-full h-1.5 bg-slate-200 dark:bg-[#233648] rounded-full overflow-hidden">
                        <div class="h-full bg-primary w-[85%]"></div>
                    </div>
                    <button
                        class="w-full mt-3 py-2 text-[11px] font-bold text-primary hover:text-primary/80 transition-colors uppercase tracking-wider">Upgrade
                        Space</button>
                </div>
            </aside>
            <main class="flex-1 overflow-y-auto custom-scrollbar bg-slate-50 dark:bg-background-dark relative">
                <div class="max-w-[1000px] mx-auto px-6 py-8">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                        <div>
                            <h1 class="text-3xl font-extrabold tracking-tight mb-2">Community Feed</h1>
                            <p class="text-slate-500 dark:text-[#92adc9]">Engage with the latest perspectives from our
                                community.</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <button
                                class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-[#233648] border border-slate-200 dark:border-transparent rounded-xl text-sm font-semibold shadow-sm hover:shadow-md transition-all">
                                <span class="material-symbols-outlined text-lg">filter_list</span>
                                <span>Filter Feed</span>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between border-b border-slate-200 dark:border-[#324d67] mb-6">
                        <div class="flex gap-8">
                            <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-slate-500 dark:text-[#92adc9] pb-[13px] pt-4 hover:text-primary transition-all"
                                href="#">
                                <p class="text-sm font-bold leading-normal tracking-wide">Latest</p>
                            </a>
                            <a class="flex flex-col items-center justify-center border-b-[3px] border-b-primary text-primary pb-[13px] pt-4"
                                href="#">
                                <p class="text-sm font-bold leading-normal tracking-wide">Trending</p>
                            </a>
                            <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-slate-500 dark:text-[#92adc9] pb-[13px] pt-4 hover:text-primary transition-all"
                                href="#">
                                <p class="text-sm font-bold leading-normal tracking-wide">Most Popular</p>
                            </a>
                        </div>
                        <div class="flex gap-2 pb-2">
                            <button
                                class="flex items-center justify-center size-8 rounded-lg text-slate-400 hover:bg-white dark:hover:bg-[#233648] transition-all">
                                <span class="material-symbols-outlined text-xl">view_agenda</span>
                            </button>
                            <button
                                class="flex items-center justify-center size-8 rounded-lg text-primary bg-white dark:bg-[#233648] shadow-sm transition-all">
                                <span class="material-symbols-outlined text-xl">grid_view</span>
                            </button>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-8 overflow-x-auto pb-2 no-scrollbar">
                        <button
                            class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-primary text-white px-5 shadow-lg shadow-primary/20 transition-all">
                            <span class="text-xs font-bold uppercase tracking-wider">All Posts</span>
                        </button>
                        <button
                            class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-white dark:bg-[#233648] px-5 border border-slate-200 dark:border-transparent hover:border-primary/50 transition-all">
                            <span
                                class="text-xs font-bold uppercase tracking-wider text-slate-600 dark:text-white">#Architecture</span>
                        </button>
                        <button
                            class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-white dark:bg-[#233648] px-5 border border-slate-200 dark:border-transparent hover:border-primary/50 transition-all">
                            <span
                                class="text-xs font-bold uppercase tracking-wider text-slate-600 dark:text-white">#StreetLife</span>
                        </button>
                        <button
                            class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-white dark:bg-[#233648] px-5 border border-slate-200 dark:border-transparent hover:border-primary/50 transition-all">
                            <span
                                class="text-xs font-bold uppercase tracking-wider text-slate-600 dark:text-white">#Nature</span>
                        </button>
                        <button
                            class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-white dark:bg-[#233648] px-5 border border-slate-200 dark:border-transparent hover:border-primary/50 transition-all">
                            <span
                                class="text-xs font-bold uppercase tracking-wider text-slate-600 dark:text-white">#Cinematic</span>
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <?php foreach($posts as $post): ?>
                        <div
                            class="flex flex-col bg-white dark:bg-[#1a2632] rounded-2xl overflow-hidden border border-slate-200 dark:border-[#233648] shadow-sm hover:shadow-xl transition-all">
                            <div class="p-4 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded-full bg-cover bg-center border-2 border-primary/10"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAZWL_GTarNb7edq0o0cqWV0MDLqH6pGTIhaJPs6eMotfuA_HZNZfv5jKOApJdkMNTuyzFOtI8OGkpYtQrWsjXKCgtx4R8WkKrJ8znpwLRws9cTNXZr_BUydUb60JpL8PuOTN9AKleU1D-GezZ-xO7ht4W9D-lxQEuLl5amZ-IgPzQ41K9ZstvaFtzC-8W07e1WtJ8G24-N3nxgIo5aXlNz2BlwEiYPt8y6nwZm5CXrAWUXAZ3wDa3IaVEAIaFxFoz2KK-QFqRt6qYO");'>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <p class="text-sm font-bold">Alex Rivera</p>
                                            <span class="size-1 rounded-full bg-slate-400"></span>
                                            <p class="text-[11px] font-medium text-slate-400 dark:text-[#92adc9]">2
                                                hours ago</p>
                                        </div>
                                        <p class="text-[10px] text-slate-500 dark:text-[#92adc9]">Switzerland</p>
                                    </div>
                                </div>
                                <button class="text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">more_horiz</span>
                                </button>
                            </div>
                            <div class="relative group">
                                <img alt="Mountain sunset" class="w-full aspect-[4/3] object-cover"
                                    src="./../assets/<?= htmlspecialchars($post->getFilePath())?>" />
                                <div
                                    class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity">
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-bold mb-2"><?= htmlspecialchars($post->getTitle()) ?></h3>
                                <p class="text-sm text-slate-600 dark:text-[#92adc9] line-clamp-2 mb-4"><?= htmlspecialchars($post->getDescription() ?? 'No description') ?>
                                </p>
                                <div
                                    class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-[#233648]">
                                    <div class="flex items-center gap-5">
                                        <button class="flex items-center gap-1.5 group">
                                            <span
                                                class="material-symbols-outlined text-[22px] text-slate-400 group-hover:text-red-500 group-hover:fill-1 transition-all">favorite</span>
                                            <span
                                                class="text-sm font-semibold text-slate-600 dark:text-[#92adc9]">1.2k</span>
                                        </button>
                                        <button class="flex items-center gap-1.5 group">
                                            <span
                                                class="material-symbols-outlined text-[22px] text-slate-400 group-hover:text-primary transition-all">chat_bubble</span>
                                            <span
                                                class="text-sm font-semibold text-slate-600 dark:text-[#92adc9]">84</span>
                                        </button>
                                        <button class="flex items-center group">
                                            <span
                                                class="material-symbols-outlined text-[22px] text-slate-400 group-hover:text-primary transition-all">share</span>
                                        </button>
                                    </div>
                                    <button
                                        class="size-8 flex items-center justify-center rounded-lg hover:bg-slate-100 dark:hover:bg-[#233648] text-slate-400 transition-colors">
                                        <span class="material-symbols-outlined text-[22px]">bookmark</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <div class="flex flex-col items-center justify-center py-12 gap-3 opacity-50">
                        <div class="size-8 border-2 border-primary border-t-transparent rounded-full animate-spin">
                        </div>
                        <p class="text-xs font-bold tracking-widest uppercase text-slate-500 dark:text-[#92adc9]">
                            Gathering more shots...</p>
                    </div>
                </div>
                <button
                    class="fixed bottom-6 right-6 sm:hidden size-14 rounded-full bg-primary text-white shadow-2xl flex items-center justify-center z-50">
                    <span class="material-symbols-outlined text-3xl">add</span>
                </button>
            </main>
            <aside
                class="w-80 shrink-0 border-l border-slate-200 dark:border-[#233648] bg-white dark:bg-background-dark p-6 overflow-y-auto hidden xl:flex flex-col gap-8">
                <div>
                    <h3
                        class="text-sm font-extrabold uppercase tracking-widest text-slate-400 dark:text-[#92adc9] mb-4">
                        Trending Tags</h3>
                    <div class="flex flex-wrap gap-2">
                        <a class="px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-[#233648] text-xs font-bold hover:bg-primary hover:text-white transition-all"
                            href="#">#UrbanExplorer</a>
                        <a class="px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-[#233648] text-xs font-bold hover:bg-primary hover:text-white transition-all"
                            href="#">#Cinematic</a>
                        <a class="px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-[#233648] text-xs font-bold hover:bg-primary hover:text-white transition-all"
                            href="#">#B&amp;W</a>
                        <a class="px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-[#233648] text-xs font-bold hover:bg-primary hover:text-white transition-all"
                            href="#">#Wildlife</a>
                        <a class="px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-[#233648] text-xs font-bold hover:bg-primary hover:text-white transition-all"
                            href="#">#GoldenHour</a>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-extrabold uppercase tracking-widest text-slate-400 dark:text-[#92adc9]">
                            Top Photographers</h3>
                        <a class="text-[10px] font-bold text-primary hover:underline" href="#">View All</a>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="size-10 rounded-xl bg-center bg-cover"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDAdX9gpThQAhXto9QKPeFJ1Tsa_zZg0vqfSI2ALPrSqJry116Ql3_QFFu2km1Q7eC-yiGBOsDypv1yu032vzbEK9EHS3-hMqZnhFHnIPrfr7VjAWNeNKaefYISbUJrZXNBDOP76raHdAm71eDfh056jgZOIEiQx_GizqJB7GlPZMDHNllTNsfxYyv3oeBrXOFvR7sHgxlaMqrSE0AlZt-A0-dzcV6xVkfLa6g9wknLqjnjPg7bZetL7y-Nlcmv79bzVPLaofT8deyr");'>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs font-bold">Liam G. Thompson</p>
                                <p class="text-[10px] text-slate-400 dark:text-[#92adc9]">2.4k followers</p>
                            </div>
                            <button
                                class="size-8 rounded-lg bg-slate-100 dark:bg-[#233648] flex items-center justify-center hover:bg-primary group transition-all">
                                <span class="material-symbols-outlined text-sm group-hover:text-white">person_add</span>
                            </button>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="size-10 rounded-xl bg-center bg-cover"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDK6pun9JHNIk55Io6Rxw_8bt0Vw1govPqR-FUQwv_CtgbfVnd58WmHw1YBJJBFtYWEAn2pi5MJ54v8xW2b63UcjG2KmkW7UUs_m_lBoUZSrwl5LbkLLJFuSLzPB5rEkpkUdzDihQT_aCzRUWrci5jc4HHtzihsTM3N3c9XGgkVQMf181nIVcPfJ1bdxctd_-VuHGJFJxO-l8s_HRiAvotSxa6Qqkc8IuqpN3tMXxDE8nip9rEOz_2Ayaxpiyw0pJLgCXfFiT5EeTXD");'>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs font-bold">Isabella Rossi</p>
                                <p class="text-[10px] text-slate-400 dark:text-[#92adc9]">5.1k followers</p>
                            </div>
                            <button
                                class="size-8 rounded-lg bg-slate-100 dark:bg-[#233648] flex items-center justify-center hover:bg-primary group transition-all">
                                <span class="material-symbols-outlined text-sm group-hover:text-white">person_add</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="mt-auto p-5 rounded-2xl bg-gradient-to-br from-primary/10 to-transparent border border-primary/20 relative overflow-hidden group">
                    <div class="relative z-10">
                        <p class="text-xs font-bold text-primary uppercase tracking-widest mb-1">Weekly Challenge</p>
                        <h4 class="text-sm font-bold mb-3">Reflections in the Rain</h4>
                        <p class="text-[11px] text-slate-500 dark:text-[#92adc9] mb-4">Share your best rainy street
                            photography for a chance to be featured!</p>
                        <button
                            class="w-full py-2 bg-primary text-white text-[11px] font-bold rounded-lg hover:opacity-90 transition-all">Join
                            Challenge</button>
                    </div>
                    <span
                        class="material-symbols-outlined absolute -right-2 -bottom-2 text-6xl text-primary/10 group-hover:scale-110 transition-transform">water_drop</span>
                </div>
            </aside>
        </div>
    </div>

    <!-- model for post creation -->

     <form action="../App/Controllers/createpost.php" method="POST" enctype="multipart/form-data" id="creationform">
    <div class="model hidden bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white antialiased overflow-hidden"
        id="model">

        <input type="hidden" name="tags" id="tags-hidden">

        <!-- Page Background Content (Simulated Gallery for Context) -->
        <div aria-hidden="true"
            class="relative h-screen w-full overflow-hidden opacity-100 blur-[2px] pointer-events-none select-none">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4">
                <div class="h-64 rounded-lg bg-gray-200 dark:bg-gray-800 animate-pulse"></div>
                <div class="h-64 rounded-lg bg-gray-200 dark:bg-gray-800 animate-pulse"></div>
                <div class="h-64 rounded-lg bg-gray-200 dark:bg-gray-800 animate-pulse"></div>
                <div class="h-64 rounded-lg bg-gray-200 dark:bg-gray-800 animate-pulse"></div>
                <div class="h-64 rounded-lg bg-gray-200 dark:bg-gray-800 animate-pulse"></div>
                <div class="h-64 rounded-lg bg-gray-200 dark:bg-gray-800 animate-pulse"></div>
            </div>
        </div>
        <!-- Modal Overlay -->
        <div
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm p-4 animate-in fade-in duration-200">
            <!-- Modal Card -->
            <div
                class="flex flex-col w-full max-w-[640px] max-h-[90vh] bg-white dark:bg-[#192633] rounded-xl shadow-2xl ring-1 ring-black/5 overflow-hidden">
                <!-- Header -->
                <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100 dark:border-[#324d67]">
                    <h2 class="text-xl font-bold leading-tight tracking-[-0.015em] text-slate-900 dark:text-white">
                        Upload to PhotoSphere
                    </h2>
                    <button
                        class="rounded-full p-2 text-slate-500 hover:bg-gray-100 dark:text-slate-400 dark:hover:bg-[#233648] transition-colors focus:outline-none focus:ring-2 focus:ring-primary" id="close_btn">
                        <span class="material-symbols-outlined text-[24px]">close</span>
                    </button>
                </div>
                <!-- Scrollable Content -->
                <div class="flex-1 overflow-y-auto custom-scrollbar">
                    <div class="p-6 space-y-8">
                        <!-- Drag & Drop Zone -->
                        <div class="flex flex-col group/dropzone">
                            <div
                                class="relative flex flex-col items-center gap-6 rounded-xl border-2 border-dashed border-gray-300 dark:border-[#324d67] bg-gray-50 dark:bg-[#111a22]/50 px-6 py-10 transition-colors hover:border-primary dark:hover:border-primary hover:bg-primary/5 dark:hover:bg-primary/5 cursor-pointer">
                                <div
                                    class="flex h-16 w-16 items-center justify-center rounded-full bg-blue-100/50 dark:bg-[#233648] text-primary">
                                    <span class="material-symbols-outlined text-[32px]">cloud_upload</span>
                                </div>
                                <div class="flex flex-col items-center gap-2 text-center">
                                    <p class="text-lg font-bold leading-tight text-slate-900 dark:text-white">Drag and
                                        drop your photo here</p>
                                    <p class="text-sm font-normal text-slate-500 dark:text-[#92adc9]">
                                        or <span class="text-primary hover:underline font-medium">Browse files</span>
                                        from your computer
                                    </p>
                                </div>
                                <!-- Hidden File Input -->
                                <input accept="image/png, image/jpeg" class="absolute inset-0 cursor-pointer opacity-0"
                                    type="file" name="photofile" max="1024" required />
                            </div>
                            <!-- Meta Validation Text -->
                            <div class="pt-3 text-center">
                                <p class="text-xs text-slate-500 dark:text-[#92adc9]">
                                    Supported formats: JPEG, PNG. Max size: 20MB.
                                </p>
                            </div>
                        </div>
                        <?php if (!empty($_SESSION['maxsize'])): ?>
                                <div class="error mt-2 text-[14px] text-red-500/80">
                                    <?= htmlspecialchars($_SESSION['maxsize']);
                                    unset($_SESSION['maxsize']);?>
                                    
                                </div>
                        <?php endif; ?>
                        <!-- Metadata Form -->
                        <div class="space-y-5">
                            <!-- Title Field -->
                            <div class="flex flex-col gap-2">
                                <label class="text-base font-medium leading-normal text-slate-900 dark:text-white"
                                    for="photo-title">
                                    Title
                                </label>
                                <input
                                    class="flex w-full rounded-lg border border-gray-300 dark:border-[#324d67] bg-white dark:bg-[#111a22] p-3.5 text-base text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-[#92adc9] focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary transition-shadow"
                                    id="photo-title" name="title" placeholder="e.g. Sunset in Kyoto" type="text" required/>
                            </div>
                            <!-- Description Field -->
                            <div class="flex flex-col gap-2">
                                <label class="text-base font-medium leading-normal text-slate-900 dark:text-white"
                                    for="photo-desc">
                                    Description <span
                                        class="text-sm font-normal text-slate-500 dark:text-[#92adc9] ml-1">(Optional)</span>
                                </label>
                                <textarea
                                    class="flex min-h-[120px] w-full resize-none rounded-lg border border-gray-300 dark:border-[#324d67] bg-white dark:bg-[#111a22] p-3.5 text-base text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-[#92adc9] focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary transition-shadow"
                                    id="photo-desc" name="description" placeholder="Tell the story behind this photo..." required></textarea>
                            </div>
                            <!-- Tags Field -->
                            <div class="flex flex-col gap-2">
                                <label class="text-base font-medium leading-normal text-slate-900 dark:text-white"
                                    for="photo-tags">
                                    Tags
                                </label>
                                <div
                                    id="tags-container"
                                    class="flex flex-wrap items-center gap-2 rounded-lg border border-gray-300 dark:border-[#324d67] bg-white dark:bg-[#111a22] p-2 focus-within:border-primary focus-within:ring-1 focus-within:ring-primary transition-shadow">

                                    <!-- Example Chip -->
                                    <div
                                        class="flex items-center gap-1 rounded-md bg-blue-100 dark:bg-[#233648] px-2 py-1">
                                        <span
                                            class="text-sm font-medium text-blue-800 dark:text-blue-100">#landscape</span>
                                        <button
                                            class="flex h-4 w-4 items-center justify-center rounded-full text-blue-800 dark:text-blue-100 hover:bg-blue-200 dark:hover:bg-[#324d67]">
                                            <span class="material-symbols-outlined text-[14px]">close</span>
                                        </button>
                                    </div>
                                    <input
                                        class="flex-1 min-w-[120px] bg-transparent p-1.5 text-base text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-[#92adc9] focus:outline-none"
                                        id="photo-tags" placeholder="Add tags..." type="text" />
                                </div>
                                <p class="text-xs text-slate-500 dark:text-[#92adc9]">Press Enter to add a tag.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Actions -->
                <div
                    class="flex flex-col sm:flex-row items-center justify-end gap-3 px-6 py-5 bg-gray-50 dark:bg-[#111a22] border-t border-gray-100 dark:border-[#324d67]">
                    <button
                        class="w-full sm:w-auto px-6 py-2.5 rounded-lg border border-gray-300 dark:border-[#324d67] text-sm font-bold text-slate-700 dark:text-white hover:bg-gray-100 dark:hover:bg-[#233648] focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 transition-colors">
                        Cancel
                    </button>
                    <button
                        class="w-full sm:w-auto flex items-center justify-center gap-2 px-6 py-2.5 rounded-lg bg-primary text-sm font-bold text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-[#192633] transition-colors shadow-sm" type="submit" >
                        <span class="material-symbols-outlined text-[20px]">publish</span>
                        Publish Photo
                    </button>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>

<script>
    modal = document.getElementById("model")
    closebtn =document.getElementById("close_btn")
    createbtn = document.getElementById("create_post")
    form = document.getElementById("creationform");

    createbtn.addEventListener("click", function() {
    modal.classList.remove('hidden');
});

    closebtn.addEventListener("click", function() {
    form.reset();
    modal.classList.add('hidden');
});

const tagInput = document.getElementById("photo-tags");
const tagsContainer = document.getElementById("tags-container");

const MAX_TAGS = 10;
let tags = [];

// Handle Enter key
tagInput.addEventListener("keydown", function (e) {
    if (e.key !== "Enter") return;

    e.preventDefault();

    const value = tagInput.value.trim().toLowerCase();

    if (!value) return;
    if (tags.includes(value)) return;

    if (tags.length >= MAX_TAGS) {
        alert("You can add up to 10 tags only.");
        return;
    }

    addTag(value);
    tagInput.value = "";
});

function addTag(tag) {
    tags.push(tag);

    const chip = document.createElement("div");
    chip.className =
        "flex items-center gap-1 rounded-md bg-blue-100 dark:bg-[#233648] px-2 py-1";

    chip.innerHTML = `
        <span class="text-sm font-medium text-blue-800 dark:text-blue-100">
            #${tag}
        </span>
        <button type="button"
            class="flex h-4 w-4 items-center justify-center rounded-full
                   text-blue-800 dark:text-blue-100
                   hover:bg-blue-200 dark:hover:bg-[#324d67]">
            <span class="material-symbols-outlined text-[14px]">close</span>
        </button>
    `;

    // Remove tag
    chip.querySelector("button").addEventListener("click", () => {
        tags = tags.filter(t => t !== tag);
        chip.remove();
    });

    // Insert before input
    tagsContainer.insertBefore(chip, tagInput);
}

document.querySelector("form").addEventListener("submit", () => {
    document.getElementById("tags-hidden").value = JSON.stringify(tags);
});

</script>

</html>