<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nicolas Kojima</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            .post-b{
                margin-bottom: 40px;
                display: grid;
                grid-template-columns: 18% 4% 78%;
                margin-right: 2vw;
            }

            .read-more {
                right: 0;
                top:0;
                position: relative;
            }

            .blog-post-grid {
                width: 100%;
                display: grid;
                grid-template-columns: 80% 20%;
            }

            .header{
                font-size: 40px;
                margin-left: 2vw;
                margin-bottom: 100px;
            }

            
        </style>

        @vite('resources/css/app.css')

    </head>
    <body class="antialiased">
        @include ('components.navbar')
        <div class="background"> 
            <div class="flex flex-col min-h-screen"><header class="flex items-center justify-between px-4 py-2 border-b">
                <a class="flex items-center gap-2 font-semibold" href="#"></a>
                    <nav class="flex gap-4">
                        <a class="hover:underline" href="#"></a>
                        <a class="hover:underline" href="#"></a>
                        <a class="hover:underline" href="#"></a>
                    </nav>
                </header>
                <main class="flex flex-col md:flex-row flex-1 gap-4 p-4">
                    <div class="blog-post-grid">
                        <div class="flex-1 space-y-6">
                            <p class="header"> Current Studies / Interests <h1>
                            @foreach ($blogcontents->reverse() as $blogcontent)
                                @if ($blogcontent->category == 'studies')
                                    <article>
                                        <div class="text-gray-700 post-b post-background">
                                            <div class="blog-post-class1">
                                                <img src="{{ asset('storage/' . $blogcontent->image) }}" alt="IMAGE" class="blogpost-picture">
                                            </div>
                                            <div></div>
                                            <div>
                                                <div class="blog-post-class2">
                                                    <div class="description-div1">
                                                        <h2 class="text-2xl font-bold">{{ $blogcontent->title }}</h2>
                                                        <p class="text-sm text-gray-500">
                                                            By Nicolas Kojima | {{ $blogcontent->created_at->format('M d, Y') }}
                                                        </p>
                                                    </div>    
                                                    <div class="description-div2">
                                                        {{-- Star Rating --}}
                                                        @php
                                                            $filledStars = 0;
                                                            switch ($blogcontent->rating) {
                                                                case 1:
                                                                case 2:
                                                                    $filledStars = 1;
                                                                    break;
                                                                case 3:
                                                                case 4:
                                                                    $filledStars = 2;
                                                                    break;
                                                                case 5:
                                                                case 6:
                                                                    $filledStars = 3;
                                                                    break;
                                                                case 7:
                                                                case 8:
                                                                    $filledStars = 4;
                                                                    break;
                                                                case 9:
                                                                case 10:
                                                                    $filledStars = 5;
                                                                    break;
                                                            }
                                                        @endphp

                                                        {{-- Display filled stars --}}
                                                        @for ($i = 1; $i <= $filledStars; $i++)
                                                            <span class="star">&#9733;</span>
                                                        @endfor

                                                        {{-- Display empty stars --}}
                                                        @for ($i = $filledStars + 1; $i <= 5; $i++)
                                                            <span class="star">&#9734;</span>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <p class="blog-description">
                                                    {{ $blogcontent->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                @endif
                            @endforeach
                        </div>
                        <aside class="w-full md:w-80 space-y-4">
                            <div>
                                <h3 class="font-semibold" style="margin-bottom: 30px; font-size: 30px;"">Categories</h3>
                                <ul class="space-y-1 mt-2">
                                    <li class="category-menu">
                                        <img src="{{ asset('storage/icons/book-icon.png') }}" alt="IMAGE" style="width: 40px; height:40px;">
                                        <a class="hover:underline" href="bookblog">Book Blog</a>
                                    </li>
                                    <li class="category-menu">
                                        <img src="{{ asset('storage/icons/robot-icon.png') }}" alt="IMAGE" style="width: 40px; height:40px;">
                                        <a class="hover:underline" href="projectsblog">Projects Blog</a>
                                    </li>
                                    <li class="category-menu">
                                        <img src="{{ asset('storage/icons/home-icon.png') }}" alt="IMAGE" style="width: 40px; height:40px;">
                                        <a class="hover:underline" href="studiesblog">Blog Home</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </main>
            <footer class="flex items-center justify-between px-4 py-2 border-t">
                <div class="flex gap-4"><a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                    </svg>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                        <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                    </svg>
                </a>
            </div>
            <p class="text-sm text-gray-500">
            © 2024 BlogLogo. All rights reserved.
            </p></footer></div>
        </div>
        
    </body>
</html>

I wrote this code <img src="example-image-2.jpg" alt="IMAGE" > in a blade file located in /resources/views/welcome.blade.php and i am trying to call the image from /storage/app/public/image/ how do i do this 