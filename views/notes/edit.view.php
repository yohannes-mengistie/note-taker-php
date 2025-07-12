<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<?php require base_path('views/partial/head.php') ?>
<?php require base_path('views/partial/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form action="/note" method="POST" class="space-y-8 divide-y divide-gray-200">
            <input type="hidden" name="_method" value="PATCH">
            <div class="space-y-12">
                <div class="col-span-full">
                    <label for="body" class="block text-sm/6 font-medium text-gray-900">Description</label>
                    <div class="mt-2">
                        <textarea
                            name="body"
                            id="body"
                            rows="3"
                            cols ="50"
                            required
                            placeholder="Here is an idea for the note..."
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        ><?= $note['body'] ?></textarea>

                        <?php if (isset($error['body'])) : ?>
                            <p class="text-red-500 text-xs mt-2"><?php echo $error['body']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="id" value="<?= $note['id'] ?>">
                    <a href="/note?id=<?= $note['id'] ?>" class="rounded-md px-3 py-2 text-sm/6 font-semibold bg-black text-white">Back</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>
<?php require base_path('views/partial/footer.php') ?>

<!-- Optional: auto-resize script -->
<!-- <script>
    function autoResizeTextarea() {
        const textarea = document.getElementById('body');
        textarea.style.height = 'auto';
        textarea.style.height = textarea.scrollHeight + 'px';
    }

    window.addEventListener('DOMContentLoaded', autoResizeTextarea);
    document.getElementById('body').addEventListener('input', autoResizeTextarea);
</script> -->
