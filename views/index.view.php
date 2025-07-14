<!DOCTYPE html>
<html lang="en" class="h-full bg-gradient-to-br from-gray-50 to-gray-100">
<?php require base_path('views/partial/head.php')?>
<body class="h-full font-sans antialiased">
  <?php require base_path('views/partial/banner.php') ?>
  
  <main class="min-h-[calc(100vh-160px)]">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
      <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="p-8 sm:p-10">
          <div class="flex items-center space-x-4">
            <div class="bg-indigo-100 p-3 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h1 class="text-3xl font-bold text-gray-900">Welcome back, <span class="text-indigo-600"><?= $_SESSION['user']['email'] ?? 'Guest' ?></span></h1>
              <p class="mt-1 text-gray-600">We're glad to see you here</p>
            </div>
          </div>
          
          <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Feature Card 1 -->
            <div class="bg-gradient-to-br from-indigo-50 to-blue-50 p-6 rounded-xl hover:shadow-md transition-all duration-300">
              <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 text-indigo-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>
              </div>
              <h3 class="mt-4 text-lg font-medium text-gray-900">Quick Actions</h3>
              <p class="mt-2 text-sm text-gray-600">Get started with our most popular features</p>
            </div>
            
            <!-- Feature Card 2 -->
            <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-6 rounded-xl hover:shadow-md transition-all duration-300">
              <div class="flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 text-purple-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <h3 class="mt-4 text-lg font-medium text-gray-900">Recent Activity</h3>
              <p class="mt-2 text-sm text-gray-600">Check what's been happening in your account</p>
            </div>
            
            <!-- Feature Card 3 -->
            <div class="bg-gradient-to-br from-green-50 to-teal-50 p-6 rounded-xl hover:shadow-md transition-all duration-300">
              <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-100 text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <h3 class="mt-4 text-lg font-medium text-gray-900">Security</h3>
              <p class="mt-2 text-sm text-gray-600">Manage your account security settings</p>
            </div>
          </div>
          
          <div class="mt-12">
            <button class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-blue-600 rounded-lg text-white font-medium hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
              Explore Dashboard
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  <?php require base_path('views/partial/footer.php') ?>
</body>
</html>