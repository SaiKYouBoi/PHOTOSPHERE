<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PhotoSphere Login</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
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
                        "background-dark": "#111a22", // Adjusted to match snippet background
                        "surface-dark": "#192633", // Input bg from snippets
                        "border-dark": "#324d67", // Border color from snippets
                        "text-secondary": "#92adc9", // Secondary text from snippets
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
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
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-gray-900 dark:text-white antialiased">
<div class="flex min-h-screen w-full">
<!-- Left Side: Visual/Hero -->
<div class="hidden lg:flex lg:w-1/2 relative bg-gray-900 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Dark moody artistic workspace with camera lenses and photography prints" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBODl2ukHYjpKgrexfUAv6SG2WsStZlNDvB3Z0kcq7dCwaZk8llBiCyZYrRy0-sG7ZZbqcERAgk4RtOMljsZC4HCQKrmwr2NlQ7QCEZDpJZzB-5mxZ8oB8uga5Mu5J8-3XcLqdDF-JlpGj1LBmh2WgzobIfYTCstYPPrQ62-WXvcJScK1JLrf9PNieAmarMutCqmcSUbB9OohewnISH1Du_ApmRAPKTgGAcjX29PeDwoT4k1ORPWmoibjpIYcPpJPfb6rhB4aBy3nLK');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-background-dark/90 via-background-dark/40 to-transparent"></div>
<div class="relative z-10 flex flex-col justify-end p-16 h-full">
<div class="flex items-center gap-3 text-white mb-6">
<div class="size-10 text-primary">
<svg class="w-full h-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill="currentColor"></path>
<path clip-rule="evenodd" d="M7.24189 26.4066C7.31369 26.4411 7.64204 26.5637 8.52504 26.3738C9.59462 26.1438 11.0343 25.5311 12.7183 24.4963C14.7583 23.2426 17.0256 21.4503 19.238 19.238C21.4503 17.0256 23.2426 14.7583 24.4963 12.7183C25.5311 11.0343 26.1438 9.59463 26.3738 8.52504C26.5637 7.64204 26.4411 7.31369 26.4066 7.24189C26.345 7.21246 26.143 7.14535 25.6664 7.1918C24.9745 7.25925 23.9954 7.5498 22.7699 8.14278C20.3369 9.32007 17.3369 11.4915 14.4142 14.4142C11.4915 17.3369 9.32007 20.3369 8.14278 22.7699C7.5498 23.9954 7.25925 24.9745 7.1918 25.6664C7.14534 26.143 7.21246 26.345 7.24189 26.4066ZM29.9001 10.7285C29.4519 12.0322 28.7617 13.4172 27.9042 14.8126C26.465 17.1544 24.4686 19.6641 22.0664 22.0664C19.6641 24.4686 17.1544 26.465 14.8126 27.9042C13.4172 28.7617 12.0322 29.4519 10.7285 29.9001L21.5754 40.747C21.6001 40.7606 21.8995 40.931 22.8729 40.7217C23.9424 40.4916 25.3821 39.879 27.0661 38.8441C29.1062 37.5904 31.3734 35.7982 33.5858 33.5858C35.7982 31.3734 37.5904 29.1062 38.8441 27.0661C39.879 25.3821 40.4916 23.9425 40.7216 22.8729C40.931 21.8995 40.7606 21.6001 40.747 21.5754L29.9001 10.7285ZM29.2403 4.41187L43.5881 18.7597C44.9757 20.1473 44.9743 22.1235 44.6322 23.7139C44.2714 25.3919 43.4158 27.2666 42.252 29.1604C40.8128 31.5022 38.8165 34.012 36.4142 36.4142C34.012 38.8165 31.5022 40.8128 29.1604 42.252C27.2666 43.4158 25.3919 44.2714 23.7139 44.6322C22.1235 44.9743 20.1473 44.9757 18.7597 43.5881L4.41187 29.2403C3.29027 28.1187 3.08209 26.5973 3.21067 25.2783C3.34099 23.9415 3.8369 22.4852 4.54214 21.0277C5.96129 18.0948 8.43335 14.7382 11.5858 11.5858C14.7382 8.43335 18.0948 5.9613 21.0277 4.54214C22.4852 3.8369 23.9415 3.34099 25.2783 3.21067C26.5973 3.08209 28.1187 3.29028 29.2403 4.41187Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-3xl font-bold tracking-tight">PhotoSphere</h2>
</div>
<blockquote class="text-xl font-medium leading-relaxed text-gray-200">
                    "Photography is the story I fail to put into words."
                </blockquote>
<p class="mt-4 text-text-secondary">Join a community of visual storytellers without the noise.</p>
</div>
</div>
<!-- Right Side: Login Form -->
<div class="flex w-full lg:w-1/2 flex-col justify-center px-4 py-12 sm:px-6 lg:px-20 xl:px-24 bg-background-light dark:bg-background-dark">
<div class="mx-auto w-full max-w-sm lg:w-96">
<!-- Mobile Logo (Visible only on small screens) -->
<div class="lg:hidden flex items-center gap-3 text-white mb-8">
<div class="size-8 text-primary">
<svg class="w-full h-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill="currentColor"></path>
<path clip-rule="evenodd" d="M7.24189 26.4066C7.31369 26.4411 7.64204 26.5637 8.52504 26.3738C9.59462 26.1438 11.0343 25.5311 12.7183 24.4963C14.7583 23.2426 17.0256 21.4503 19.238 19.238C21.4503 17.0256 23.2426 14.7583 24.4963 12.7183C25.5311 11.0343 26.1438 9.59463 26.3738 8.52504C26.5637 7.64204 26.4411 7.31369 26.4066 7.24189C26.345 7.21246 26.143 7.14535 25.6664 7.1918C24.9745 7.25925 23.9954 7.5498 22.7699 8.14278C20.3369 9.32007 17.3369 11.4915 14.4142 14.4142C11.4915 17.3369 9.32007 20.3369 8.14278 22.7699C7.5498 23.9954 7.25925 24.9745 7.1918 25.6664C7.14534 26.143 7.21246 26.345 7.24189 26.4066ZM29.9001 10.7285C29.4519 12.0322 28.7617 13.4172 27.9042 14.8126C26.465 17.1544 24.4686 19.6641 22.0664 22.0664C19.6641 24.4686 17.1544 26.465 14.8126 27.9042C13.4172 28.7617 12.0322 29.4519 10.7285 29.9001L21.5754 40.747C21.6001 40.7606 21.8995 40.931 22.8729 40.7217C23.9424 40.4916 25.3821 39.879 27.0661 38.8441C29.1062 37.5904 31.3734 35.7982 33.5858 33.5858C35.7982 31.3734 37.5904 29.1062 38.8441 27.0661C39.879 25.3821 40.4916 23.9425 40.7216 22.8729C40.931 21.8995 40.7606 21.6001 40.747 21.5754L29.9001 10.7285ZM29.2403 4.41187L43.5881 18.7597C44.9757 20.1473 44.9743 22.1235 44.6322 23.7139C44.2714 25.3919 43.4158 27.2666 42.252 29.1604C40.8128 31.5022 38.8165 34.012 36.4142 36.4142C34.012 38.8165 31.5022 40.8128 29.1604 42.252C27.2666 43.4158 25.3919 44.2714 23.7139 44.6322C22.1235 44.9743 20.1473 44.9757 18.7597 43.5881L4.41187 29.2403C3.29027 28.1187 3.08209 26.5973 3.21067 25.2783C3.34099 23.9415 3.8369 22.4852 4.54214 21.0277C5.96129 18.0948 8.43335 14.7382 11.5858 11.5858C14.7382 8.43335 18.0948 5.9613 21.0277 4.54214C22.4852 3.8369 23.9415 3.34099 25.2783 3.21067C26.5973 3.08209 28.1187 3.29028 29.2403 4.41187Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-2xl font-bold tracking-tight">PhotoSphere</h2>
</div>
<div class="mb-8">
<p class="text-3xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white">Welcome back</p>
<p class="mt-2 text-sm text-text-secondary">Enter your details below to access your gallery.</p>
</div>
<!-- Social Login -->
<div class="grid grid-cols-2 gap-3">
<button class="flex items-center justify-center w-full gap-2 rounded-lg bg-surface-dark border border-border-dark px-4 py-3 text-sm font-medium text-white hover:bg-[#233342] transition-colors focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:ring-offset-background-dark" type="button">
<svg aria-hidden="true" class="h-5 w-5" viewbox="0 0 24 24">
<path d="M12.0003 20.45c4.6667 0 8.5834-3.1555 9.9778-7.5555h-3.4111c-1.0223 2.5889-3.5334 4.4444-6.5667 4.4444-3.8667 0-7-3.1333-7-7s3.1333-7 7-7c1.7889 0 3.4222 0.6778 4.6778 1.7889l2.2111-2.2111C16.9669 1.1111 14.6114 0 12.0003 0 5.3781 0 0 5.3778 0 12s5.3781 12 12.0003 12z" fill="#fff" fill-opacity="0.2"></path>
<path d="M12 24c6.627 0 12-5.373 12-12h-12v12z" fill="none"></path>
<path d="M23.4667 12.2778c0.1259-0.963.1889-1.9482.1889-2.9445H12v5.6778h6.4667c-0.2963 1.4815-1.1259 2.7667-2.2556 3.6556l3.5889 2.8333C21.9444 19.5222 23.4667 16.2 23.4667 12.2778z" fill="#4285F4"></path>
<path d="M12 24c3.0889 0 5.9222-1.0556 8.0889-2.8111l-3.5889-2.8333c-0.9667 0.6778-2.3222 1.1333-4.5 1.1333-3.0333 0-5.5444-1.8556-6.5667-4.4444H1.8111V17.8C4.0667 21.6 8.2889 24 12 24z" fill="#34A853"></path>
<path d="M5.4333 15.0444c-0.2667-0.7889-0.4222-1.6333-0.4222-2.5111s0.1556-1.7222 0.4222-2.5111V7.2778H1.8111C0.8556 9.0667 0.3333 11.1222 0.3333 13.5333s0.5222 4.4667 1.4778 6.2556l3.6222-2.7445z" fill="#FBBC05"></path>
<path d="M12 4.4444c1.6889 0 3.2 0.6 4.3889 1.6667l3.2222-3.1556C17.6556 1.1667 15.0222 0 12 0 8.2889 0 4.0667 2.4 1.8111 6.2L5.4333 8.9444C6.4556 6.3556 8.9667 4.4444 12 4.4444z" fill="#EA4335"></path>
</svg>
<span>Google</span>
</button>
<button class="flex items-center justify-center w-full gap-2 rounded-lg bg-surface-dark border border-border-dark px-4 py-3 text-sm font-medium text-white hover:bg-[#233342] transition-colors focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:ring-offset-background-dark" type="button">
<svg aria-hidden="true" class="h-5 w-5 text-white" fill="currentColor" viewbox="0 0 24 24">
<path d="M16.9953 14.898c-0.0384 2.8091 2.3792 3.8155 2.4226 3.8347-0.0192 0.0577-0.3804 1.2585-1.2295 2.469-0.7397 1.0567-1.5082 2.1133-2.7187 2.1422-1.1816 0.0192-1.5706-0.6965-2.9252-0.6965-1.3547 0-1.7918 0.6965-2.9109 0.7445-1.1577 0.0336-2.0318-1.1431-2.7667-2.1853-1.5129-2.1278-2.6658-6.0429-1.1144-8.6752 0.7685-1.3066 2.147-2.1326 3.6366-2.1566 1.1432-0.0192 2.2205 0.7589 2.9156 0.7589 0.6918 0 1.9901-0.9366 3.3527-0.8021 0.5716 0.024 2.1853 0.2257 3.2037 1.6811-0.0817 0.048-1.9132 1.1047-1.8652 4.3853zM14.9493 2.6565c0.6196-0.7397 1.0423-1.7725 0.927-2.6565-0.8934 0.0384-1.9709 0.586-2.6123 1.321-0.562 0.6388-1.0518 1.6669-0.9174 2.6277 1.0039 0.0769 2.0285-0.5187 2.6027-1.2922z"></path>
</svg>
<span>Apple</span>
</button>
</div>
<div class="relative mt-8">
<div aria-hidden="true" class="absolute inset-0 flex items-center">
<div class="w-full border-t border-border-dark"></div>
</div>
<div class="relative flex justify-center text-sm font-medium leading-6">
<span class="bg-background-light dark:bg-background-dark px-6 text-text-secondary">Or continue with email</span>
</div>
</div>
<form action="#" class="mt-8 space-y-6" method="POST">
<!-- Email Field -->
<div>
<label class="block text-sm font-medium leading-6 text-gray-900 dark:text-white" for="email">Email address</label>
<div class="mt-2">
<input autocomplete="email" class="block w-full rounded-lg border-0 bg-white dark:bg-surface-dark py-3.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-border-dark placeholder:text-gray-400 dark:placeholder:text-[#92adc9] focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 pl-4" id="email" name="email" placeholder="name@example.com" required="" type="email"/>
</div>
</div>
<!-- Password Field -->
<div>
<div class="flex items-center justify-between">
<label class="block text-sm font-medium leading-6 text-gray-900 dark:text-white" for="password">Password</label>
<div class="text-sm">
<a class="font-medium text-primary hover:text-blue-400" href="#">Forgot password?</a>
</div>
</div>
<div class="mt-2 relative rounded-lg shadow-sm">
<input autocomplete="current-password" class="block w-full rounded-lg border-0 bg-white dark:bg-surface-dark py-3.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-border-dark placeholder:text-gray-400 dark:placeholder:text-[#92adc9] focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 pl-4 pr-10" id="password" name="password" placeholder="Enter your password" required="" type="password"/>
<div class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer text-text-secondary hover:text-white transition-colors">
<span class="material-symbols-outlined" style="font-size: 20px;">visibility_off</span>
</div>
</div>
</div>
<!-- Submit Button -->
<div>
<button class="flex w-full justify-center rounded-lg bg-primary px-3 py-3.5 text-sm font-bold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary transition-all" type="submit">
                            Log In
                        </button>
</div>
</form>
<p class="mt-8 text-center text-sm text-text-secondary">
                    Don't have an account?
                    <a class="font-bold leading-6 text-primary hover:text-blue-400" href="#">Sign up</a>
</p>
</div>
</div>
</div>
</body></html>