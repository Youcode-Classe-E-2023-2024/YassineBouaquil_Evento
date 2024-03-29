@extends('shared.layout')

@section('content')
    <div class="relative flex items-center justify-center min-h-screen overflow-hidden bg-gray-900">
        <div class="absolute inset-0">
            <svg class="absolute left-0 w-full h-full text-white transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
                <path d="M50 0H100L50 100H0L50 0Z"></path>
            </svg>
            <img
                class="object-cover w-full h-full opacity-40"
                src="BG.jpg"
            />
        </div>
        <div class="relative z-10 text-white">
            <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5 animate__animated animate__fadeIn animate__delay-1s">
                <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                    EVENTO
                </p>
                <h2 class="mb-5 font-sans text-6xl font-bold tracking-tight text-gray-100 sm:leading-none">
                    Everything you<br class="hidden md:block" />
                    can imagine
                    <span class="inline-block text-deep-purple-accent-400">is real</span>
                </h2>
                <p class="pr-5 mb-5 text-base text-gray-300 md:text-lg">
                    Evento is revolutionizing the way you discover and manage event tickets. Whether you're a participant seeking exciting experiences or an organizer aiming to host unforgettable events.
                </p>
                <div class="flex items-center">
                    <a
                        href="{{ route('register') }}"
                        class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 transform bg-black rounded shadow-md hover:scale-105 focus:shadow-outline focus:outline-none"
                    >
                        Register
                    </a>
                    <a href="{{ route('login') }}" aria-label="" class="inline-flex items-center justify-center h-12 px-6 gap-1 border border-solid border-black rounded font-semibold text-gray-800 transition-colors duration-200 transform hover:scale-105 text-deep-purple-accent-700 bg-pink-500 text-white border-[0]">
                        <span>
                            Login
                        </span>
                        <ion-icon class="text-xl" name="arrow-forward-outline"></ion-icon>
                    </a>


                </div>

            </div>

        </div>

    </div>
    <section class="px-5 py-10 dark:bg-gray-800 dark:text-gray-100">
        <div class="container grid grid-cols-12 mx-auto gap-y-6 md:gap-10">
            <div class="flex flex-col justify-between col-span-12 py-2 space-y-8 md:space-y-16 md:col-span-3">
                <div class="flex flex-col space-y-8 md:space-y-12">
                    <div class="flex flex-col space-y-2">
                        <h3 class="flex items-center space-x-2 dark:text-gray-400">
                            <span class="flex-shrink-0 w-2 h-2 uppercase rounded-full dark:bg-violet-400"></span>
                            <span class="text-xs font-bold tracki uppercase">Exclusive</span>
                        </h3>
                        <a rel="noopener noreferrer" href="#" class="font-serif hover:underline">Donec sed elit quis odio mollis dignissim eget et nulla.</a>
                        <p class="text-xs dark:text-gray-400">47 minutes ago by
                            <a rel="noopener noreferrer" href="#" class="hover:underline dark:text-violet-400">Leroy Jenkins</a>
                        </p>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <h3 class="flex items-center space-x-2 dark:text-gray-400">
                            <span class="flex-shrink-0 w-2 h-2 uppercase rounded-full dark:bg-violet-400"></span>
                            <span class="text-xs font-bold tracki uppercase">Exclusive</span>
                        </h3>
                        <a rel="noopener noreferrer" href="#" class="font-serif hover:underline">Ut fermentum nunc quis ipsum laoreet condimentum.</a>
                        <p class="text-xs dark:text-gray-400">2 hours ago by
                            <a rel="noopener noreferrer" href="#" class="hover:underline dark:text-violet-400">Leroy Jenkins</a>
                        </p>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <h3 class="flex items-center space-x-2 dark:text-gray-400">
                            <span class="flex-shrink-0 w-2 h-2 uppercase rounded-full dark:bg-violet-400"></span>
                            <span class="text-xs font-bold tracki uppercase">Exclusive</span>
                        </h3>
                        <a rel="noopener noreferrer" href="#" class="font-serif hover:underline">Nunc nec ipsum lobortis, pulvinar neque sed.</a>
                        <p class="text-xs dark:text-gray-400">4 hours ago by
                            <a rel="noopener noreferrer" href="#" class="hover:underline dark:text-violet-400">Leroy Jenkins</a>
                        </p>
                    </div>
                </div>
                <div class="flex flex-col w-full space-y-2">
                    <div class="flex w-full h-1 bg-opacity-10 dark:bg-violet-400">
                        <div class="w-1/2 h-full dark:bg-violet-400"></div>
                    </div>
                    <a rel="noopener noreferrer" href="#" class="flex items-center justify-between w-full">
                        <span class="text-xs font-bold tracki uppercase">See more exclusives</span>
                        <svg viewBox="0 0 24 24" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4 stroke-current dark:text-violet-400">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="relative flex col-span-12 bg-center bg-no-repeat bg-cover dark:bg-gray-500 xl:col-span-6 lg:col-span-5 md:col-span-9 min-h-96" style="background-image: url('https://source.unsplash.com/random/239x319');">
                <span class="absolute px-1 pb-2 text-xs font-bold uppercase border-b-2 left-6 top-6 dark:border-violet-400 dark:text-gray-100">paris, france</span>
                <a class="flex flex-col items-center justify-end p-6 text-center sm:p-8 group dark:via-transparent flex-grow-1 bg-gradient-to-b dark:from-gray-900 dark:to-gray-900">
				<span class="flex items-center mb-4 space-x-2 dark:text-violet-400">
					<span class="relative flex-shrink-0 w-2 h-2 rounded-full dark:bg-violet-400">
						<span class="absolute flex-shrink-0 w-3 h-3 rounded-full -left-1 -top-1 animate-ping dark:bg-violet-400"></span>
					</span>
					<span class="text-sm font-bold">Live</span>
				</span>
                    <h1 rel="noopener noreferrer" href="#" class="font-serif text-2xl font-semibold group-hover:underline dark:text-gray-100">Morbi mattis justo est, ac consectetur dui eleifend vitae. Donec venenatis?</h1>
                </a>
            </div>
            <div class="hidden py-2 xl:col-span-3 lg:col-span-4 md:hidden lg:block">
                <div class="mb-8 space-x-5 border-b-2 border-opacity-10 dark:border-violet-400">
                    <button type="button" class="pb-5 text-xs font-bold uppercase border-b-2 dark:border-violet-400">Latest</button>
                    <button type="button" class="pb-5 text-xs font-bold uppercase border-b-2 dark:border-transparent dark:text-gray-400">Popular</button>
                </div>
                <div class="flex flex-col divide-y dark:divide-gray-700">
                    <div class="flex px-1 py-4">
                        <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 dark:bg-gray-500" src="https://source.unsplash.com/random/244x324">
                        <div class="flex flex-col flex-grow">
                            <a rel="noopener noreferrer" href="#" class="font-serif hover:underline">Aenean ac tristique lorem, ut mollis dui.</a>
                            <p class="mt-auto text-xs dark:text-gray-400">5 minutes ago
                                <a rel="noopener noreferrer" href="#" class="block dark:text-blue-400 lg:ml-2 lg:inline hover:underline">Politics</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex px-1 py-4">
                        <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 dark:bg-gray-500" src="https://source.unsplash.com/random/245x325">
                        <div class="flex flex-col flex-grow">
                            <a rel="noopener noreferrer" href="#" class="font-serif hover:underline">Nulla consectetur efficitur.</a>
                            <p class="mt-auto text-xs dark:text-gray-400">14 minutes ago
                                <a rel="noopener noreferrer" href="#" class="block dark:text-blue-400 lg:ml-2 lg:inline hover:underline">Sports</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex px-1 py-4">
                        <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 dark:bg-gray-500" src="https://source.unsplash.com/random/246x326">
                        <div class="flex flex-col flex-grow">
                            <a rel="noopener noreferrer" href="#" class="font-serif hover:underline">Vitae semper augue purus tincidunt libero.</a>
                            <p class="mt-auto text-xs dark:text-gray-400">22 minutes ago
                                <a rel="noopener noreferrer" href="#" class="block dark:text-blue-400 lg:ml-2 lg:inline hover:underline">World</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex px-1 py-4">
                        <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 dark:bg-gray-500" src="https://source.unsplash.com/random/247x327">
                        <div class="flex flex-col flex-grow">
                            <a rel="noopener noreferrer" href="#" class="font-serif hover:underline">Suspendisse potenti.</a>
                            <p class="mt-auto text-xs dark:text-gray-400">37 minutes ago
                                <a rel="noopener noreferrer" href="#" class="block dark:text-blue-400 lg:ml-2 lg:inline hover:underline">Business</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


