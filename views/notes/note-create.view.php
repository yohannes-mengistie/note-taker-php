<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<?php require base_path('views/partial/head.php') ?>
<?php require base_path('views/partial/banner.php') ?>

<main>
  <div class="mx-auto max-w-3xl px-4 py-10 sm:px-6 lg:px-8">

    <!-- Page Title -->
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create a New Note</h2>

    <!-- Note Form -->
    <form action="/notes" method="POST" class="bg-white p-6 rounded-lg shadow-md space-y-6">

      <!-- Note Body -->
      <div>
        <label for="body" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea
          name="body"
          id="body"
          rows="5"
          required
          placeholder="Here is an idea for the note..."
          class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
        ><?= htmlspecialchars(trim($_POST['body'] ?? '')) ?></textarea>

        <?php if (isset($error['body'])) : ?>
          <p class="text-sm text-red-500 mt-1"><?= $error['body'] ?></p>
        <?php endif; ?>
      </div>

      <!-- Actions -->
      <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
        <a href="/notes" class="inline-block px-4 py-2 text-sm font-medium text-gray-600 hover:text-black hover:bg-gray-100 border border-gray-300 rounded-md transition">
          Cancel
        </a>
        <button type="submit" class="inline-block px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-sm font-medium text-white rounded-md transition">
          Save Note
        </button>
      </div>
    </form>

  </div>
</main>

<?php require base_path('views/partial/footer.php') ?>
