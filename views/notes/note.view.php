<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<?php require base_path('views/partial/head.php')?>
<?php require base_path('views/partial/banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      
    <p class="mb-10"><a href="/notes" class="text-blue-500 underline">Go Back to Notes </a></p>
    <p class="mb-10"><?php echo htmlspecialchars($note['body']) ?></p> 

    <a href="/note/edit?id=<?= $note['id'] ?>" class="rounded text-gray-900 px-2 py-1 border border-current" >Edit</a href="/note/edit">

    <form action="" method="POST" class="mt-10">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="id" value = "<?php echo $note['id'] ?>">
      <button class="text-xs text-red-500">Delete</button>
    </form>
        
    </div>
  </main>
<?php require base_path('views/partial/footer.php') ?>


