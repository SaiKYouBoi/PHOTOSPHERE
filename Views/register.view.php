<!DOCTYPE html>
<?php
session_start();

$errors = $_SESSION['errors'] ?? [];
$old    = $_SESSION['old'] ?? [];

unset($_SESSION['errors'], $_SESSION['old']);
?>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PhotoSphere - Registration</title>
    <!-- Fonts and Icons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Theme Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#111a22",
                        "surface-dark": "#192633",
                        "border-dark": "#324d67",
                        "text-secondary": "#92adc9",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-white antialiased selection:bg-primary selection:text-white">
    <div class="flex min-h-screen w-full flex-row overflow-hidden">
        <!-- Left Side: Hero Image & Branding -->
        <div class="hidden lg:flex w-1/2 relative bg-surface-dark flex-col justify-between p-12">
            <!-- Background Image -->
            <div class="absolute inset-0 z-0">
                <img alt="A dramatic mountain landscape with moody lighting"
                    class="h-full w-full object-cover opacity-60" data-alt="Dramatic mountain landscape photography"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBClkoc5WuWFL-d-r4Px-z1nBcWlDfKOW_EaKL9-JKMb6D4UVF_-9h2Wesav4w4VOfTxaof0URK6TuBKfisk-xkaCZfUDDSCyGdgXyL6_S5s4HicDS-xorMwLUbRHQ17vO9Z0rWJ-K9z4wVM-QW845yFrQguU0Nebne_SNjZPIFJQhU9aT5yMDzf4ZLuE5Jqt17xC2HXaQiird4GSjoHjc_7f48V6PNAKPbr12Xf2HfheOkVHExSc1-XIl7RkWphJfRG1oKDyAaCiW1" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent opacity-90">
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-background-dark/40 to-transparent"></div>
            </div>
            <!-- Header Content -->
            <div class="relative z-10">
                <div class="flex items-center gap-3 text-white mb-8">
                    <div class="size-8 text-primary">
                        <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_6_543)">
                                <path
                                    d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z"
                                    fill="currentColor"></path>
                                <path clip-rule="evenodd"
                                    d="M7.24189 26.4066C7.31369 26.4411 7.64204 26.5637 8.52504 26.3738C9.59462 26.1438 11.0343 25.5311 12.7183 24.4963C14.7583 23.2426 17.0256 21.4503 19.238 19.238C21.4503 17.0256 23.2426 14.7583 24.4963 12.7183C25.5311 11.0343 26.1438 9.59463 26.3738 8.52504C26.5637 7.64204 26.4411 7.31369 26.4066 7.24189C26.345 7.21246 26.143 7.14535 25.6664 7.1918C24.9745 7.25925 23.9954 7.5498 22.7699 8.14278C20.3369 9.32007 17.3369 11.4915 14.4142 14.4142C11.4915 17.3369 9.32007 20.3369 8.14278 22.7699C7.5498 23.9954 7.25925 24.9745 7.1918 25.6664C7.14534 26.143 7.21246 26.345 7.24189 26.4066ZM29.9001 10.7285C29.4519 12.0322 28.7617 13.4172 27.9042 14.8126C26.465 17.1544 24.4686 19.6641 22.0664 22.0664C19.6641 24.4686 17.1544 26.465 14.8126 27.9042C13.4172 28.7617 12.0322 29.4519 10.7285 29.9001L21.5754 40.747C21.6001 40.7606 21.8995 40.931 22.8729 40.7217C23.9424 40.4916 25.3821 39.879 27.0661 38.8441C29.1062 37.5904 31.3734 35.7982 33.5858 33.5858C35.7982 31.3734 37.5904 29.1062 38.8441 27.0661C39.879 25.3821 40.4916 23.9425 40.7216 22.8729C40.931 21.8995 40.7606 21.6001 40.747 21.5754L29.9001 10.7285ZM29.2403 4.41187L43.5881 18.7597C44.9757 20.1473 44.9743 22.1235 44.6322 23.7139C44.2714 25.3919 43.4158 27.2666 42.252 29.1604C40.8128 31.5022 38.8165 34.012 36.4142 36.4142C34.012 38.8165 31.5022 40.8128 29.1604 42.252C27.2666 43.4158 25.3919 44.2714 23.7139 44.6322C22.1235 44.9743 20.1473 44.9757 18.7597 43.5881L4.41187 29.2403C3.29027 28.1187 3.08209 26.5973 3.21067 25.2783C3.34099 23.9415 3.8369 22.4852 4.54214 21.0277C5.96129 18.0948 8.43335 14.7382 11.5858 11.5858C14.7382 8.43335 18.0948 5.9613 21.0277 4.54214C22.4852 3.8369 23.9415 3.34099 25.2783 3.21067C26.5973 3.08209 28.1187 3.29028 29.2403 4.41187Z"
                                    fill="currentColor" fill-rule="evenodd"></path>
                            </g>
                            <defs>
                                <clippath id="clip0_6_543">
                                    <rect fill="white" height="48" width="48"></rect>
                                </clippath>
                            </defs>
                        </svg>
                    </div>
                    <h2 class="text-white text-2xl font-bold leading-tight tracking-[-0.015em]">PhotoSphere</h2>
                </div>
            </div>
            <!-- Footer/Quote Content -->
            <div class="relative z-10 max-w-lg">
                <blockquote class="text-2xl font-medium text-white mb-4">
                    "Photography is the story I fail to put into words."
                </blockquote>
                <p class="text-text-secondary text-sm font-medium">
                    Photo by Destin Spark — PhotoSphere Community Member
                </p>
            </div>
        </div>
        <!-- Right Side: Registration Form -->
        <div
            class="w-full lg:w-1/2 flex flex-col items-center justify-center p-6 sm:p-12 lg:p-24 overflow-y-auto bg-background-light dark:bg-background-dark">
            <div class="w-full max-w-md space-y-8">
                <!-- Form Header -->
                <div class="flex flex-col gap-2">
                    <div class="flex lg:hidden items-center gap-2 text-slate-900 dark:text-white mb-4">
                        <div class="size-6 text-primary">
                            <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_6_543_mob)">
                                    <path
                                        d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z"
                                        fill="currentColor"></path>
                                    <path clip-rule="evenodd"
                                        d="M7.24189 26.4066C7.31369 26.4411 7.64204 26.5637 8.52504 26.3738C9.59462 26.1438 11.0343 25.5311 12.7183 24.4963C14.7583 23.2426 17.0256 21.4503 19.238 19.238C21.4503 17.0256 23.2426 14.7583 24.4963 12.7183C25.5311 11.0343 26.1438 9.59463 26.3738 8.52504C26.5637 7.64204 26.4411 7.31369 26.4066 7.24189C26.345 7.21246 26.143 7.14535 25.6664 7.1918C24.9745 7.25925 23.9954 7.5498 22.7699 8.14278C20.3369 9.32007 17.3369 11.4915 14.4142 14.4142C11.4915 17.3369 9.32007 20.3369 8.14278 22.7699C7.5498 23.9954 7.25925 24.9745 7.1918 25.6664C7.14534 26.143 7.21246 26.345 7.24189 26.4066ZM29.9001 10.7285C29.4519 12.0322 28.7617 13.4172 27.9042 14.8126C26.465 17.1544 24.4686 19.6641 22.0664 22.0664C19.6641 24.4686 17.1544 26.465 14.8126 27.9042C13.4172 28.7617 12.0322 29.4519 10.7285 29.9001L21.5754 40.747C21.6001 40.7606 21.8995 40.931 22.8729 40.7217C23.9424 40.4916 25.3821 39.879 27.0661 38.8441C29.1062 37.5904 31.3734 35.7982 33.5858 33.5858C35.7982 31.3734 37.5904 29.1062 38.8441 27.0661C39.879 25.3821 40.4916 23.9425 40.7216 22.8729C40.931 21.8995 40.7606 21.6001 40.747 21.5754L29.9001 10.7285ZM29.2403 4.41187L43.5881 18.7597C44.9757 20.1473 44.9743 22.1235 44.6322 23.7139C44.2714 25.3919 43.4158 27.2666 42.252 29.1604C40.8128 31.5022 38.8165 34.012 36.4142 36.4142C34.012 38.8165 31.5022 40.8128 29.1604 42.252C27.2666 43.4158 25.3919 44.2714 23.7139 44.6322C22.1235 44.9743 20.1473 44.9757 18.7597 43.5881L4.41187 29.2403C3.29027 28.1187 3.08209 26.5973 3.21067 25.2783C3.34099 23.9415 3.8369 22.4852 4.54214 21.0277C5.96129 18.0948 8.43335 14.7382 11.5858 11.5858C14.7382 8.43335 18.0948 5.9613 21.0277 4.54214C22.4852 3.8369 23.9415 3.34099 25.2783 3.21067C26.5973 3.08209 28.1187 3.29028 29.2403 4.41187Z"
                                        fill="currentColor" fill-rule="evenodd"></path>
                                </g>
                                <defs>
                                    <clippath id="clip0_6_543_mob">
                                        <rect fill="white" height="48" width="48"></rect>
                                    </clippath>
                                </defs>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold tracking-tight">PhotoSphere</h2>
                    </div>
                    <h1 class="text-3xl font-black leading-tight tracking-[-0.033em] text-slate-900 dark:text-white">
                        Join the Gallery</h1>
                    <p class="text-slate-500 dark:text-text-secondary text-base font-normal leading-normal">
                        Connect with photographers worldwide without the noise.
                    </p>
                </div>
                <!-- Social Login -->
                <div class="grid grid-cols-2 gap-4">
                    <button
                        class="flex items-center justify-center gap-2 rounded-lg bg-white dark:bg-surface-dark border border-slate-200 dark:border-border-dark py-3 px-4 text-sm font-medium text-slate-900 dark:text-white hover:bg-slate-50 dark:hover:bg-border-dark/30 transition-colors">
                        <span aria-hidden="true" class="material-symbols-outlined text-lg">grid_view</span>
                        <span class="truncate">Google</span>
                    </button>
                    <button
                        class="flex items-center justify-center gap-2 rounded-lg bg-white dark:bg-surface-dark border border-slate-200 dark:border-border-dark py-3 px-4 text-sm font-medium text-slate-900 dark:text-white hover:bg-slate-50 dark:hover:bg-border-dark/30 transition-colors">
                        <span aria-hidden="true" class="material-symbols-outlined text-lg">smartphone</span>
                        <span class="truncate">Apple</span>
                    </button>
                </div>
                <!-- Divider -->
                <div class="relative flex items-center py-2">
                    <div class="grow border-t border-slate-200 dark:border-border-dark"></div>
                    <span class="mx-4 text-xs font-medium text-slate-500 dark:text-text-secondary uppercase">Or register
                        with email</span>
                    <div class="grow border-t border-slate-200 dark:border-border-dark"></div>
                </div>
                <!-- The Form -->
                <form class="space-y-5" method="POST" action="../App/Controllers/register.php">

                    <!-- Username -->
                    <label class="flex flex-col gap-1.5">
                        <span class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Username</span>
                        <div class="relative">
                            <input name="username"
                                class="form-input flex w-full rounded-lg border-slate-200 dark:border-border-dark bg-white dark:bg-surface-dark text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 placeholder:text-slate-400 dark:placeholder:text-text-secondary/70 text-base transition-colors"
                                placeholder="Choose a unique handle" type="text" />
                            <?php if (!empty($errors['username'])): ?>
                                <div class="error mt-2 text-[14px] text-red-500/80">
                                    <?= htmlspecialchars($errors['username']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </label>
                    <!-- Email -->
                    <label class="flex flex-col gap-1.5">
                        <span class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Email
                            Address</span>
                        <div class="relative">
                            <input name="email"
                                class="form-input flex w-full rounded-lg border-slate-200 dark:border-border-dark bg-white dark:bg-surface-dark text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 placeholder:text-slate-400 dark:placeholder:text-text-secondary/70 text-base transition-colors"
                                placeholder="name@example.com" type="email" />
                            <?php if (!empty($errors['email'])): ?>
                                <div class="error mt-2 text-[14px] text-red-500/80">
                                    <?= htmlspecialchars($errors['email']) ?>
                                </div>
                            <?php endif; ?>
                        </div>

                    </label>
                    <!-- Password -->
                    <label class="flex flex-col gap-1.5">
                        <span class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Password</span>
                        <div class="relative group">
                            <input name="password"
                                class="form-input flex w-full rounded-lg border-slate-200 dark:border-border-dark bg-white dark:bg-surface-dark text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 pl-4 pr-12 placeholder:text-slate-400 dark:placeholder:text-text-secondary/70 text-base transition-colors"
                                placeholder="Create a password" type="password" />
                            <?php if (!empty($errors['password'])): ?>
                                <div class="error mt-2 text-[14px] text-red-500/80">
                                    <?= htmlspecialchars($errors['password']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </label>
                    <!-- Password Strength Meter -->
                    <div class="flex flex-wrap gap-3 mt-1">
                        <div class="flex items-center gap-1.5 text-primary text-xs font-medium">
                            <span class="material-symbols-outlined" style="font-size: 14px;">check_circle</span>
                            <span>8+ chars</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-slate-400 dark:text-slate-600 text-xs font-medium">
                            <span class="material-symbols-outlined"
                                style="font-size: 14px;">radio_button_unchecked</span>
                            <span>1 number</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-slate-400 dark:text-slate-600 text-xs font-medium">
                            <span class="material-symbols-outlined"
                                style="font-size: 14px;">radio_button_unchecked</span>
                            <span>1 symbol</span>
                        </div>
                    </div>
                    <!-- Confirm Password -->
                    <label class="flex flex-col gap-1.5">
                        <span class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Confirm
                            Password</span>
                        <div class="relative">
                            <input name="confirm_password"
                                class="form-input flex w-full rounded-lg border-slate-200 dark:border-border-dark bg-white dark:bg-surface-dark text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 placeholder:text-slate-400 dark:placeholder:text-text-secondary/70 text-base transition-colors"
                                placeholder="Re-enter password" type="password" />
                            <?php if (!empty($errors['confirm_password'])): ?>
                                <div class="error mt-2 text-[14px] text-red-500/80">
                                    <?= htmlspecialchars($errors['confirm_password']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </label>

                    <!-- Bio -->
                    <label class="flex flex-col gap-1.5">
                        <span class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Biography
                        </span>
                        <div class="relative">
                            <textarea name="bio" rows="3"
                                class="form-input flex w-full rounded-lg border-slate-200 dark:border-border-dark bg-white dark:bg-surface-dark text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary  px-4 placeholder:text-slate-400 dark:placeholder:text-text-secondary/70 text-base transition-colors"
                                placeholder="wrtie a biography" type="text"> </textarea>
                                <?php if (!empty($errors['bio'])): ?>
                                <div class="error mt-2 text-[14px] text-red-500/80">
                                    <?= htmlspecialchars($errors['bio']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </label>
                    <!-- Terms Checkbox -->
                    <div class="flex items-start gap-3 pt-2">
                        <div class="flex h-6 items-center">
                            <input
                                class="h-4 w-4 rounded border-slate-300 dark:border-border-dark bg-white dark:bg-surface-dark text-primary focus:ring-primary/40 focus:ring-offset-0"
                                id="terms" name="terms" type="checkbox" />
                        </div>
                        <div class="text-sm leading-6">
                            <label class="font-medium text-slate-500 dark:text-text-secondary" for="terms">
                                I agree to the <a class="font-semibold text-primary hover:text-blue-400" href="#">Terms
                                    of Service</a> and <a class="font-semibold text-primary hover:text-blue-400"
                                    href="#">Privacy Policy</a>.
                            </label>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <button
                        class="flex w-full cursor-pointer items-center justify-center rounded-lg h-12 px-4 bg-primary hover:bg-blue-600 active:bg-blue-700 text-white text-base font-bold leading-normal tracking-[0.015em] transition-all shadow-lg shadow-blue-500/20 dark:shadow-blue-900/30 mt-4">
                        <span class="truncate">Create Account</span>
                    </button>
                </form>


                <!-- Footer Link -->
                <p class="text-center text-sm text-slate-500 dark:text-text-secondary">
                    Already have an account?
                    <a class="font-bold text-primary hover:text-blue-400 transition-colors" href="./login.view.php">Log In</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>