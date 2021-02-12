<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start"
                        aria-label="Global">
                        <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">
                                    Jayson Cleofas
                                </a>
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button type="button"
                                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                        id="main-menu" aria-haspopup="true">
                                        <span class="sr-only">Open main menu</span>
                                        <!-- Heroicon name: outline/menu -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                            <a href="#projects" class="font-medium text-gray-500 hover:text-gray-900">Projects</a>

                            <a href="#about" class="font-medium text-gray-500 hover:text-gray-900">About</a>

                            <a href="#contact" class="font-medium text-gray-500 hover:text-gray-900">Contact</a>

                        </div>
                    </nav>
                </div>

                <!--
          Mobile menu, show/hide based on menu open state.
  
          Entering: "duration-150 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
                <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                    <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                            </div>
                            <div class="-mr-2">
                                <button type="button"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close main menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
                            <div class="px-2 pt-2 pb-3 space-y-1" role="none">
                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                                    role="menuitem">Pojects</a>

                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                                    role="menuitem">Features</a>

                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                                    role="menuitem">Marketplace</a>

                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
                                    role="menuitem">Company</a>
                            </div>
                            <div role="none">
                                <a href="#"
                                    class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100"
                                    role="menuitem">
                                    Log in
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Want to increase</span>
                            <span class="block text-indigo-600 xl:inline">your sales?</span>
                        </h1>
                        <p
                            class="mt-3 mt-2 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            You need a website to have a presense online. Your website is the online hub for your
                            business. It’s where prospects will go to look for additional information about you, find
                            your contact information, or contact you directly.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#contact"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Contact Me
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#projects"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                    View My Projects
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                alt="">
        </div>
    </div>


    <section class="bg-gray-50 text-gray-600 body-font" id="projects">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex items-center lg:w-full mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Projects
                </p>
            </div>
            <div class="flex items-center lg:w-full mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div
                    class="sm:w-2/5 sm:h-64 h-20 w-20 sm:mr-10 inline-flex items-center justify-center text-indigo-500 flex-shrink-0">
                    <img class="h-64 rounded w-full object-cover object-center mb-6"
                        src="{{ asset('images/Screenshot_116.png') }}" alt="">
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Saka Resort</h2>
                    <p class="mt-2 text-base text-gray-500">A reservation website and billing system for Saka Resort in
                        Tarlac.</p>
                    <div class="mt-5 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="https://sakaresort.com/" target="_blank"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                View Project
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="https://github.com/jaysoncleofas/saka/" target="_blank"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                View Source Code
                            </a>
                        </div>
                    </div>

                    <div
                        class="mt-5 flex-1 min-w-0 flex items-center justify-between sm:justify-start font-regular text-base md:text-lg leading-8 truncate">
                        <span class="hidden sm:flex flex-shrink-0 items-center rounded-full px-3 py-1 bg-gray-100 mr-2">
                            <span
                                class="text-xs leading-5 font-medium uppercase tracking-wider text-gray-500">Laravel</span>
                        </span>
                        <span class="hidden sm:flex flex-shrink-0 items-center rounded-full px-3 py-1 bg-gray-100 mr-2">
                            <span
                                class="text-xs leading-5 font-medium uppercase tracking-wider text-gray-500">Stisla</span>
                        </span>
                        <span class="hidden sm:flex flex-shrink-0 items-center rounded-full px-3 py-1 bg-gray-100 mr-2">
                            <span
                                class="text-xs leading-5 font-medium uppercase tracking-wider text-gray-500">Bootstrap</span>
                        </span>
                        <span class="hidden sm:flex flex-shrink-0 items-center rounded-full px-3 py-1 bg-gray-100 mr-2">
                            <span
                                class="text-xs leading-5 font-medium uppercase tracking-wider text-gray-500">MySQL</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex items-center lg:w-full mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Franco Manufacturing Inc</h2>
                    <p class="mt-2 text-base text-gray-500">A website for authentic licensed kids products featuring
                        favorite character designs.</p>
                    <div class="mt-5 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="https://francos-wondrous-project-2a374d.webflow.io/" target="_blank"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                View Project
                            </a>
                        </div>
                    </div>
                    <div
                        class="mt-5 flex-1 min-w-0 flex items-center justify-between sm:justify-start font-regular text-base md:text-lg leading-8 truncate">
                        <span class="hidden sm:flex flex-shrink-0 items-center rounded-full px-3 py-1 bg-gray-100 mr-2">
                            <span
                                class="text-xs leading-5 font-medium uppercase tracking-wider text-gray-500">Webflow</span>
                        </span>
                        <span class="hidden sm:flex flex-shrink-0 items-center rounded-full px-3 py-1 bg-gray-100 mr-2">
                            <span
                                class="text-xs leading-5 font-medium uppercase tracking-wider text-gray-500">Photoshop</span>
                        </span>
                        <span class="hidden sm:flex flex-shrink-0 items-center rounded-full px-3 py-1 bg-gray-100 mr-2">
                            <span
                                class="text-xs leading-5 font-medium uppercase tracking-wider text-gray-500">CSS</span>
                        </span>
                        <span class="hidden sm:flex flex-shrink-0 items-center rounded-full px-3 py-1 bg-gray-100 mr-2">
                            <span
                                class="text-xs leading-5 font-medium uppercase tracking-wider text-gray-500">Javascript</span>
                        </span>
                    </div>
                </div>
                <div
                    class="sm:w-2/5 sm:order-none order-first sm:h-64 h-20 w-20 sm:ml-10 inline-flex items-center justify-center flex-shrink-0">
                    <img class="h-64 rounded w-full object-cover object-center mb-6"
                        src="{{ asset('images/Screenshot_118.png') }}" alt="">
                </div>
            </div>
            <div class="flex items-center lg:w-full mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div
                    class="sm:w-2/5 sm:h-64 h-20 w-20 sm:mr-10 inline-flex items-center justify-center text-indigo-500 flex-shrink-0">
                    <img class="h-64 rounded w-full object-cover object-center mb-6"
                        src="{{ asset('images/Screenshot_117.png') }}" alt="">
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Lord of the Harvest Global Ministries</h2>
                    <p class="mt-2 text-base text-gray-500">A church website for lothgm.</p>
                    <div class="mt-5 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="https://lothgm.org/" target="_blank"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                View Project
                            </a>
                        </div>
                    </div>
                    <div
                        class="mt-5 flex-1 min-w-0 flex items-center justify-between sm:justify-start font-regular text-base md:text-lg leading-8 truncate">
                        <span class="hidden sm:flex flex-shrink-0 items-center rounded-full px-3 py-1 bg-gray-100 mr-2">
                            <span
                                class="text-xs leading-5 font-medium uppercase tracking-wider text-gray-500">Wordpress</span>
                        </span>
                        <span class="hidden sm:flex flex-shrink-0 items-center rounded-full px-3 py-1 bg-gray-100 mr-2">
                            <span
                                class="text-xs leading-5 font-medium uppercase tracking-wider text-gray-500">CSS</span>
                        </span>
                        <span class="hidden sm:flex flex-shrink-0 items-center rounded-full px-3 py-1 bg-gray-100 mr-2">
                            <span
                                class="text-xs leading-5 font-medium uppercase tracking-wider text-gray-500">Bootstrap</span>
                        </span>
                        <span class="hidden sm:flex flex-shrink-0 items-center rounded-full px-3 py-1 bg-gray-100 mr-2">
                            <span
                                class="text-xs leading-5 font-medium uppercase tracking-wider text-gray-500">Javascript</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font" id="about">
        <div class="container px-5 pt-24 mx-auto">
            <div class="flex items-center lg:w-full mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    About
                </p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 pb-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Jayson J. Cleofas</h1>
                <p class="mb-8 text-base text-gray-500">Forward thinking developer with experience in back end and front end web development.</p>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Skills</h1>
                <p class="mt-2 text-base text-gray-500">Backend: PHP, Laravel, REST APIs, Codeigniter, Moodle </p> 
                <p class="mt-2 text-base text-gray-500">Frontend: HTML and CSS, Javascript, Vue, Bulma, Material Design Bootstrap, Bootstrap, Tailwind</p> 
                <p class="mt-2 text-base text-gray-500">Datastores: MySQL, PostgreSQL</p> 
                <p class="mt-2 text-base text-gray-500">Infrastructure:  Linux, AWS, Heroku, DigitalOcean</p> 
                <p class="mt-2 text-base text-gray-500">Tools: Git, Bitbucket, Github, VS Code, Postman, Workbench, Forge, Envoyer, BigblueButton, Wordpress, Webflow</p> 
                <p class="mt-2 text-base text-gray-500">Practices: Agile, DevOps</p>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="{{ asset('images/117385339_3481207221929954_7427811395756214572_o.jpg') }}">
            </div>
        </div>
    </section>

    <section class="bg-white text-gray-600 body-font relative" id="contact">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Me</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Got a question? Let me know by filling out the form below.</p>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                            <textarea id="message" name="message"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <button
                            class="flex mx-auto px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                    </div>
                    <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                        <a class="text-indigo-500">jaysoncleofas22@gmail.com</a>
                        <br>
                        <span class="mt-5 inline-flex">
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-4 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-4 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                            </a>
                            <a class="ml-4 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <span class="ml-3 text-xl">Jayson Cleofas</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©
                2020 —
                <a href="https://github.com/jaysoncleofas" class="text-gray-600 ml-1" rel="noopener noreferrer"
                    target="_blank">@jaysoncleofas</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>
</body>

</html>
