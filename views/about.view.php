<!DOCTYPE html>
<html lang="en" class="h-full bg-gradient-to-br from-gray-50 to-gray-100">
<?php require base_path('views/partial/head.php')?>
<body class="h-full font-sans antialiased">
  <?php require base_path('views/partial/banner.php') ?>
  
  <main class="min-h-[calc(100vh-160px)]">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
      <!-- Hero Section -->
      <div class="text-center mb-16">
        <div class="inline-flex items-center justify-center bg-indigo-100 rounded-full p-4 mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
          </svg>
        </div>
        <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl lg:text-6xl">
          About <span class="text-indigo-600">NotesApp</span>
        </h1>
        <p class="mt-6 text-xl text-gray-600 max-w-3xl mx-auto">
          Your thoughts, organized. Capture ideas instantly and access them anywhere.
        </p>
      </div>

      <!-- Features Section -->
      <div class="mb-20">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Why Choose NotesApp?</h2>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <!-- Feature 1 -->
          <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-100 text-green-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
              </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900">Instant Editing</h3>
            <p class="mt-2 text-sm text-gray-600">Edit your notes in real-time with our intuitive interface. Changes save automatically.</p>
          </div>
          
          <!-- Feature 2 -->
          <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 text-blue-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900">Secure Storage</h3>
            <p class="mt-2 text-sm text-gray-600">Your notes are encrypted and protected. Your thoughts stay private.</p>
          </div>
          
          <!-- Feature 3 -->
          <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 text-purple-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
              </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900">Cross-Device Sync</h3>
            <p class="mt-2 text-sm text-gray-600">Access your notes anywhere, on any device. Always in sync.</p>
          </div>
        </div>
      </div>

      <!-- How It Works -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-20">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">How NotesApp Works</h2>
        <div class="grid gap-8 md:grid-cols-3">
          <div class="flex flex-col items-center text-center">
            <div class="flex items-center justify-center h-16 w-16 rounded-full bg-indigo-100 text-indigo-600 mb-4 text-xl font-bold">1</div>
            <h3 class="text-lg font-medium text-gray-900">Create</h3>
            <p class="mt-2 text-sm text-gray-600">Start a new note with a single click. No distractions, just a clean writing space.</p>
          </div>
          <div class="flex flex-col items-center text-center">
            <div class="flex items-center justify-center h-16 w-16 rounded-full bg-indigo-100 text-indigo-600 mb-4 text-xl font-bold">2</div>
            <h3 class="text-lg font-medium text-gray-900">Organize</h3>
            <p class="mt-2 text-sm text-gray-600">Add tags, categories, or notebooks to keep everything tidy.</p>
          </div>
          <div class="flex flex-col items-center text-center">
            <div class="flex items-center justify-center h-16 w-16 rounded-full bg-indigo-100 text-indigo-600 mb-4 text-xl font-bold">3</div>
            <h3 class="text-lg font-medium text-gray-900">Access</h3>
            <p class="mt-2 text-sm text-gray-600">Find what you need instantly with powerful search and filters.</p>
          </div>
        </div>
      </div>

      <!-- Testimonials -->
      <div class="mb-20">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">What Our Users Say</h2>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <div class="flex items-center mb-4">
              <div class="h-10 w-10 rounded-full bg-gray-200 mr-4"></div>
              <div>
                <h4 class="font-medium text-gray-900">Sarah K.</h4>
                <p class="text-sm text-gray-500">Product Manager</p>
              </div>
            </div>
            <p class="text-gray-600 italic">"NotesApp has completely replaced my scattered sticky notes and random text files. Everything is in one place now."</p>
          </div>
          <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <div class="flex items-center mb-4">
              <div class="h-10 w-10 rounded-full bg-gray-200 mr-4"></div>
              <div>
                <h4 class="font-medium text-gray-900">Michael T.</h4>
                <p class="text-sm text-gray-500">Student</p>
              </div>
            </div>
            <p class="text-gray-600 italic">"The quick editing and organization features save me hours when studying for exams."</p>
          </div>
          <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <div class="flex items-center mb-4">
              <div class="h-10 w-10 rounded-full bg-gray-200 mr-4"></div>
              <div>
                <h4 class="font-medium text-gray-900">Priya M.</h4>
                <p class="text-sm text-gray-500">Writer</p>
              </div>
            </div>
            <p class="text-gray-600 italic">"I capture ideas as they come and develop them later. The clean interface keeps me focused."</p>
          </div>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="bg-indigo-600 rounded-2xl p-8 text-center">
        <h2 class="text-2xl font-bold text-white mb-4">Ready to organize your thoughts?</h2>
        <p class="text-indigo-100 mb-6 max-w-2xl mx-auto">Join thousands of users who are already capturing, editing, and organizing their ideas with NotesApp.</p>
        <a href="/register" class="inline-flex items-center px-6 py-3 bg-white rounded-lg text-indigo-600 font-medium hover:bg-gray-50 transition-colors duration-300">
          Get Started
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
          </svg>
        </a>
      </div>
    </div>
  </main>
  
  <?php require base_path('views/partial/footer.php') ?>
</body>
</html>