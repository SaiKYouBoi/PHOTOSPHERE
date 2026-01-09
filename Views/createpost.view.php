<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8" />
    <title>PhotoSphere Upload</title>

    <!-- Tailwind CDN (for demo only) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
</head>

<body class="bg-slate-200 dark:bg-slate-900">

<div class="model bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white antialiased overflow-hidden"
     id="model">

    <!-- Modal Overlay -->
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm p-4">

        <!-- Modal Card -->
        <div class="flex flex-col w-full max-w-[640px] max-h-[90vh] bg-white dark:bg-[#192633] rounded-xl shadow-2xl overflow-hidden">

            <!-- Header -->
            <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100 dark:border-[#324d67]">
                <h2 class="text-xl font-bold">Upload to PhotoSphere</h2>
            </div>

            <!-- Content -->
            <div class="flex-1 overflow-y-auto p-6 space-y-8">

                <!-- Title -->
                <div class="flex flex-col gap-2">
                    <label class="font-medium">Title</label>
                    <input class="rounded-lg border p-3 dark:bg-[#111a22]" type="text">
                </div>

                <!-- Description -->
                <div class="flex flex-col gap-2">
                    <label class="font-medium">Description</label>
                    <textarea class="rounded-lg border p-3 min-h-[120px] dark:bg-[#111a22]"></textarea>
                </div>

                <!-- Tags -->
                <div class="flex flex-col gap-2">
                    <label class="font-medium">Tags</label>

                    <div id="tags-container"
                         class="flex flex-wrap items-center gap-2 rounded-lg border p-2 dark:bg-[#111a22]">

                        <input
                            id="photo-tags"
                            class="flex-1 min-w-[120px] bg-transparent p-1.5 focus:outline-none"
                            placeholder="Add tags..."
                            type="text">
                    </div>

                    <div class="flex justify-between text-xs text-slate-500">
                        <span>Press Enter to add a tag</span>
                        <span id="tag-count">0 / 10</span>
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <div class="flex justify-end gap-3 px-6 py-5 bg-gray-50 dark:bg-[#111a22] border-t">
                <button class="px-6 py-2.5 rounded-lg border">Cancel</button>
                <button class="px-6 py-2.5 rounded-lg bg-blue-600 text-white">Publish</button>
            </div>
        </div>
    </div>
</div>

<!-- ================= TAG LOGIC ================= -->
<script>
const tagInput = document.getElementById("photo-tags");
const tagsContainer = document.getElementById("tags-container");
const tagCount = document.getElementById("tag-count");

const MAX_TAGS = 10;
let tags = [];

tagInput.addEventListener("keydown", function (e) {
    if (e.key !== "Enter") return;

    e.preventDefault();

    const value = tagInput.value.trim().toLowerCase();

    if (!value) return;
    if (tags.includes(value)) return;
    if (tags.length >= MAX_TAGS) {
        alert("Maximum 10 tags allowed");
        return;
    }

    addTag(value);
    tagInput.value = "";
});

function addTag(tag) {
    tags.push(tag);
    updateCounter();

    const chip = document.createElement("div");
    chip.className =
        "flex items-center gap-1 rounded-md bg-blue-100 dark:bg-[#233648] px-2 py-1";

    chip.innerHTML = `
        <span class="text-sm font-medium text-blue-800 dark:text-blue-100">#${tag}</span>
        <button type="button"
                class="flex h-4 w-4 items-center justify-center rounded-full
                       text-blue-800 dark:text-blue-100 hover:bg-blue-200 dark:hover:bg-[#324d67]">
            <span class="material-symbols-outlined text-[14px]">close</span>
        </button>
    `;

    chip.querySelector("button").addEventListener("click", () => {
        tags = tags.filter(t => t !== tag);
        chip.remove();
        updateCounter();
    });

    tagsContainer.insertBefore(chip, tagInput);
}

function updateCounter() {
    tagCount.textContent = `${tags.length} / ${MAX_TAGS}`;
}
</script>

</body>
</html>
