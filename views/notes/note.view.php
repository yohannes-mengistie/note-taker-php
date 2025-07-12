<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<?php require base_path('views/partial/head.php')?>
<?php require base_path('views/partial/banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      
    <p class="mb-10"><a href="/notes" class="text-blue-500 underline">Go Back to Notes </a></p>
    <p><?php echo htmlspecialchars($note['body']) ?></p> 
        
    </div>
  </main>
<?php require base_path('views/partial/footer.php') ?>


