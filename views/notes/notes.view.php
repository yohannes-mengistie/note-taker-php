<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<?php require base_path('views/partial/head.php')?>
<?php require base_path('views/partial/banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <ul>
        <?php foreach ($notes as $note) : ?>
        <li> 
            <a href="/note?id=<?php echo $note['id'] ?>" class='text-blue-500 hover:underline'>
                <?php echo htmlspecialchars($note['body']) ?>
            </a>
        </li>
       <?php endforeach; ?>
      </ul>

      <p class="mt-10">
        <a href="/note/create" class="text-blue-500 hover:underline">Create Note</a>
      </p>
    </div>
  </main>
<?php require base_path('views/partial/footer.php') ?>


