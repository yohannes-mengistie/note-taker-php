<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<?php require base_path('views/partial/head.php') ?>
<?php require base_path('views/partial/banner.php') ?>

<main>
  <div class="mx-auto max-w-3xl px-4 py-10 sm:px-6 lg:px-8">
    
    <!-- ✅ Toast -->
    <?php if (isset($_GET['success'])) : ?>
      <div id="toast" class="mb-6 bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-md shadow transition-opacity duration-300">
        ✅ Note updated successfully.
      </div>
      <script>
        setTimeout(() => document.getElementById('toast')?.remove(), 3000);
      </script>
    <?php endif; ?>

    <!-- Page Title -->
    <div class="flex items-center gap-2 mb-6">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5m-5-5l5 5m-5-5v4a2 2 0 002 2h4" />
      </svg>
      <h2 class="text-2xl font-semibold text-gray-800">Edit Note</h2>
    </div>

    <!-- Form -->
    <form action="/note" method="POST" class="bg-white p-6 rounded-lg shadow-md space-y-6">
      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">

      <!-- Markdown Toggle -->
      <div class="flex items-center justify-between">
        <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
        <label class="flex items-center gap-2 text-sm text-indigo-600 cursor-pointer">
          <input type="checkbox" id="toggle-preview" class="accent-indigo-500">
          Preview
        </label>
      </div>

      <!-- Textarea -->
      <textarea
        name="body"
        id="body"
        rows="5"
        required
        placeholder="Update your note here..."
        class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
      ><?= htmlspecialchars($note['body']) ?></textarea>

      <?php if (isset($error['body'])) : ?>
        <p class="text-sm text-red-500"><?= $error['body'] ?></p>
      <?php endif; ?>

      <!-- Markdown Preview -->
      <div id="preview" class="prose max-w-none hidden mt-4 border border-dashed border-gray-300 p-4 bg-gray-50 rounded"></div>

      <!-- Buttons -->
      <div class="flex justify-end gap-4 border-t border-gray-200 pt-4">
        <a href="/note?id=<?= $note['id'] ?>" class="inline-block px-4 py-2 text-sm font-medium text-gray-600 hover:text-black hover:bg-gray-100 border border-gray-300 rounded-md transition">
          Cancel
        </a>
        <button type="submit" class="flex items-center gap-2 px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-sm font-medium text-white rounded-md transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
          Update Note
        </button>
      </div>
    </form>
  </div>
</main>

<?php require base_path('views/partial/footer.php') ?>

<!-- Optional Markdown & Autosave Script -->
<script>
  const textarea = document.getElementById('body');
  const preview = document.getElementById('preview');
  const togglePreview = document.getElementById('toggle-preview');

  togglePreview?.addEventListener('change', () => {
    preview.classList.toggle('hidden', !togglePreview.checked);
    if (togglePreview.checked) updatePreview();
  });

  let timeout;
  textarea?.addEventListener('input', () => {
    clearTimeout(timeout);
    timeout = setTimeout(() => {
      if (togglePreview.checked) updatePreview();
      localStorage.setItem('autosave-note-' + <?= json_encode($note['id']) ?>, textarea.value);
    }, 400);
  });

  function updatePreview() {
    preview.innerHTML = textarea.value
      .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')  // bold
      .replace(/\*(.*?)\*/g, '<em>$1</em>')              // italic
      .replace(/\n/g, '<br>');
  }

  // Restore autosave
  const saved = localStorage.getItem('autosave-note-' + <?= json_encode($note['id']) ?>);
  if (saved && !textarea.value.trim()) {
    textarea.value = saved;
  }
</script>
