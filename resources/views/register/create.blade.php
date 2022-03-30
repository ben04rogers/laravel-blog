<x-layout>
    <section class="px-6 py-8">
       <main class="max-w-lg mx-auto mt-1 bg-gray-100 p-6 rounded-xl border border-gray-200">
           <h1 class="text-center text-xl font-bold">Register</h1>
           <form action="/register"  method="POST" class="mt-10">

               @csrf
               <div class="mb-6">
                   <label class="black mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                       Name
                   </label>

                   <input type="text" name="name" class="border border-gray-400 p-2 w-full" id="name" required>
               </div>

               <div class="mb-6">
                   <label class="black mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                       Username
                   </label>

                   <input type="text" name="username" class="border border-gray-400 p-2 w-full" id="username" required>
               </div>

               <div class="mb-6">
                   <label class="black mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                       Email
                   </label>

                   <input type="email" name="email" class="border border-gray-400 p-2 w-full" id="email" required>
               </div>

               <div class="mb-6">
                   <label class="black mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                       Password
                   </label>

                   <input type="password" name="password" class="border border-gray-400 p-2 w-full" id="password" required>
               </div>

               <div class="mb-6">
                   <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
               </div>
           </form>
       </main>
    </section>
</x-layout>
