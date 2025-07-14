<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<?php require base_path('views/partial/head.php') ?>
<?php require base_path('views/partial/banner.php') ?>

<main>
  <div class="mx-auto max-w-4xl px-4 py-10 sm:px-6 lg:px-8">
    <div class="mb-8 flex justify-between items-center">
      <h1 class="text-3xl font-bold text-gray-800">My Notes</h1>
      <a href="/note/create" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700 transition">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
        </svg>
        New Note
      </a>
    </div>

    <?php if (empty($notes)): ?>
      <div class="text-center text-gray-500 mt-10">
        <p>You have no notes yet.</p>
      </div>
    <?php else: ?>
      <ul class="space-y-4">
        <?php foreach ($notes as $note): ?>
          <li>
            <a href="/note?id=<?= $note['id'] ?>" class="block bg-white shadow-sm hover:shadow-md transition rounded-lg px-4 py-3 border border-gray-200 hover:border-blue-400">
              <p class="text-gray-800"><?= htmlspecialchars($note['body']) ?></p>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</main>

<?php require base_path('views/partial/footer.php') ?>
