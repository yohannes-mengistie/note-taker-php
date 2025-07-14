<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<?php require base_path('views/partial/head.php') ?>
<?php require base_path('views/partial/banner.php') ?>

<main>
  <div class="mx-auto max-w-3xl px-4 py-10 sm:px-6 lg:px-8">

    <!-- Back to Notes -->
    <div class="mb-6">
      <a href="/notes" class="text-blue-600 hover:text-blue-800 text-sm font-medium inline-flex items-center">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        Back to Notes
      </a>
    </div>

    <!-- Note Content -->
    <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
      <p class="text-gray-800 text-lg leading-relaxed">
        <?= htmlspecialchars($note['body']) ?>
      </p>

      <!-- Actions -->
      <div class="mt-8 flex items-center space-x-4">
        <!-- Edit Button -->
        <a href="/note/edit?id=<?= $note['id'] ?>" class="inline-flex items-center px-4 py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 rounded-md text-sm font-medium transition">
          Edit
        </a>

        <!-- Delete Button -->
        <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this note?');">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="id" value="<?= $note['id'] ?>">
          <button class="inline-flex items-center px-4 py-2 border border-red-500 text-red-500 hover:bg-red-50 rounded-md text-sm font-medium transition">
            Delete
          </button>
        </form>
      </div>
    </div>
    
  </div>
</main>

<?php require base_path('views/partial/footer.php') ?>
