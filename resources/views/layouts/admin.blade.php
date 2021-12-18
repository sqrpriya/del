<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    </head>
    <body>
        <nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
            <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button"><i class="fas fa-bars"></i></button><a class="md:block text-left md:pb-2 text-gray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="#/">Admin</a>
                <ul class="md:hidden items-center flex flex-wrap list-none">
                    <li class="inline-block relative">
                        <a class="text-gray-500 block py-1 px-3" href="#pablo"><i class="fas fa-bell"></i></a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1 min-w-48">
                            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Something else here</a>
                            <div class="h-0 my-2 border border-solid border-gray-100"></div>
                            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Seprated link</a>
                        </div>
                    </li>
                    <li class="inline-block relative">
                        <a class="text-gray-500 block" href="#pablo">
                            <div class="items-center flex"><span class="w-12 h-12 text-sm text-white bg-gray-200 inline-flex items-center justify-center rounded-full"><img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="/notus-react/static/media/team-1-800x800.fa5a7ac2.jpg"></span></div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48">
                            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Something else here</a>
                            <div class="h-0 my-2 border border-solid border-gray-100"></div>
                            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Seprated link</a>
                        </div>
                    </li>
                </ul>
                <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden">
                    <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-200">
                        <div class="flex flex-wrap">
                            <div class="w-6/12"><a class="md:block text-left md:pb-2 text-gray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="#/">Admin</a></div>
                            <div class="w-6/12 flex justify-end"><button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"><i class="fas fa-times"></i></button></div>
                        </div>
                    </div>
                    <form class="mt-6 mb-4 md:hidden">
                        <div class="mb-3 pt-0"><input type="text" placeholder="Search" class="border-0 px-3 py-2 h-12 border border-solid  border-gray-500 placeholder-gray-300 text-gray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"></div>
                    </form>
                    <hr class="my-4 md:min-w-full">
                    <h6 class="md:min-w-full text-gray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">Admin Layout Pages</h6>
                    <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                        <li class="items-center"><a class="text-xs uppercase py-3 font-bold block text-blue-500 hover:text-blue-600" href="{{ config('app.url') }}admin/dashboard"><i class="fas fa-tv mr-2 text-sm opacity-75"></i> Dashboard</a></li>
                        <li class="items-center"><a class="text-xs uppercase py-3 font-bold block text-gray-700 hover:text-gray-500" href="{{ config('app.url') }}admin/exam-categories"><i class="fas fa-tools mr-2 text-sm text-gray-300"></i> Exam Categories</a></li>
                        <li class="items-center"><a class="text-xs uppercase py-3 font-bold block text-gray-700 hover:text-gray-500" href="{{ config('app.url') }}admin/tables"><i class="fas fa-table mr-2 text-sm text-gray-300"></i> Tables</a></li>
                        <li class="items-center"><a class="text-xs uppercase py-3 font-bold block text-gray-700 hover:text-gray-500" href="{{ config('app.url') }}admin/maps"><i class="fas fa-map-marked mr-2 text-sm text-gray-300"></i> Maps</a></li>
                    </ul>
                    <hr class="my-4 md:min-w-full">
                    <h6 class="md:min-w-full text-gray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">Auth Layout Pages</h6>
                    <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                        <li class="items-center"><a class="text-gray-700 hover:text-gray-500 text-xs uppercase py-3 font-bold block" href="#/auth/login"><i class="fas fa-fingerprint text-gray-400 mr-2 text-sm"></i> Login</a></li>
                        <li class="items-center"><a class="text-gray-700 hover:text-gray-500 text-xs uppercase py-3 font-bold block" href="#/auth/register"><i class="fas fa-clipboard-list text-gray-300 mr-2 text-sm"></i> Register</a></li>
                    </ul>
                    <hr class="my-4 md:min-w-full">
                    <h6 class="md:min-w-full text-gray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">No Layout Pages</h6>
                    <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                        <li class="items-center"><a class="text-gray-700 hover:text-gray-500 text-xs uppercase py-3 font-bold block" href="#/landing"><i class="fas fa-newspaper text-gray-400 mr-2 text-sm"></i> Landing Page</a></li>
                        <li class="items-center"><a class="text-gray-700 hover:text-gray-500 text-xs uppercase py-3 font-bold block" href="#/profile"><i class="fas fa-user-circle text-gray-400 mr-2 text-sm"></i> Profile Page</a></li>
                    </ul>
                    <hr class="my-4 md:min-w-full">
                    <h6 class="md:min-w-full text-gray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">Documentation</h6>
                    <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                        <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/react/colors/notus" class="text-gray-700 hover:text-gray-500 text-sm block mb-4 no-underline font-semibold"><i class="fas fa-paint-brush mr-2 text-gray-300 text-base"></i>Styles</a></li>
                        <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/react/alerts/notus" class="text-gray-700 hover:text-gray-500 text-sm block mb-4 no-underline font-semibold"><i class="fab fa-css3-alt mr-2 text-gray-300 text-base"></i>CSS Components</a></li>
                        <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/angular/overview/notus" class="text-gray-700 hover:text-gray-500 text-sm block mb-4 no-underline font-semibold"><i class="fab fa-angular mr-2 text-gray-300 text-base"></i>Angular</a></li>
                        <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/js/overview/notus" class="text-gray-700 hover:text-gray-500 text-sm block mb-4 no-underline font-semibold"><i class="fab fa-js-square mr-2 text-gray-300 text-base"></i>Javascript</a></li>
                        <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/nextjs/overview/notus" class="text-gray-700 hover:text-gray-500 text-sm block mb-4 no-underline font-semibold"><i class="fab fa-react mr-2 text-gray-300 text-base"></i>NextJS</a></li>
                        <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/react/overview/notus" class="text-gray-700 hover:text-gray-500 text-sm block mb-4 no-underline font-semibold"><i class="fab fa-react mr-2 text-gray-300 text-base"></i>React</a></li>
                        <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/svelte/overview/notus" class="text-gray-700 hover:text-gray-500 text-sm block mb-4 no-underline font-semibold"><i class="fas fa-link mr-2 text-gray-300 text-base"></i>Svelte</a></li>
                        <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/vue/overview/notus" class="text-gray-700 hover:text-gray-500 text-sm block mb-4 no-underline font-semibold"><i class="fab fa-vuejs mr-2 text-gray-300 text-base"></i>VueJS</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="relative md:ml-64 bg-gray-100">
            <nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                    <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="#pablo">Dashboard</a>
                    <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
                        <div class="relative flex w-full flex-wrap items-stretch"><span class="z-10 h-full leading-snug font-normal absolute text-center text-gray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i class="fas fa-search"></i></span><input type="text" placeholder="Search here..." class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10"></div>
                    </form>
                    <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                        <a class="text-gray-500 block" href="#pablo">
                            <div class="items-center flex"><span class="w-12 h-12 text-sm text-white bg-gray-200 inline-flex items-center justify-center rounded-full"><img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="/notus-react/static/media/team-1-800x800.fa5a7ac2.jpg"></span></div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48">
                            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Something else here</a>
                            <div class="h-0 my-2 border border-solid border-gray-100"></div>
                            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Seprated link</a>
                        </div>
                    </ul>
                </div>
            </nav>
            @yield('content')
        </div>
    </body>
</html>