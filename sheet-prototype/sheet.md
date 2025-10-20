1. Structure for a Prototype

1.1 app/http/
├── controller/
│ └── ControllerServices.php
├── service/
│ └── DevelopServices.php
├── home.blade.php
├── about.blade.php
└── dashboard.blade.php

1.2 resources/views/
├── layouts/
│ └── app.blade.php
│  
 └── home.blade.php

App/Routes/
│  
 ├── web.php
└── console.php

---

2. Maquette

2.1 navbar layouts/
└── app.blade.php

<div>
<nav class="relative bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="h-8 w-auto" />
        </div>
        <div class="hidden sm:ml-6 sm:block">
    </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 text-white">
            <h2>Web developer</h2>
      </div>
    </div>
</div>
</nav>
</div>

2.2 resources/views/
│  
 └── home.blade.php

<div class="bg-white p-6  rounded-lg shadow-md max-w-lg mx-auto text-start mt-10">
    <h1 class="text-3xl font-bold mb-2">Mehdi Bentaleb</h1>
    <p class="text-xl text-gray-600 mb-4">Web developer </p>
    <p class="mb-4">My name mehdi bentaleb i have a 2 to years Experince </p>
    <a href="#" class="text-blue-500 hover:underline">Mehdibentaleb548@gmail.com</a>
</div>
  