<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracasts Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <img src="https://www.gravatar.com/avatar/000000000000?d=mp"
                        alt="avatar" class="w-10 h-10 rounded-full" />
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex" >
            <div class="w-70 mr-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium facere porro vero quidem perferendis soluta exercitationem sequi libero fuga quibusdam, quasi, numquam modi nemo deserunt ipsum eum aperiam assumenda autem rerum voluptates voluptate. Impedit dolores, at harum praesentium aperiam explicabo corporis ut quibusdam in suscipit. Consequatur nobis soluta magnam quam, deleniti repudiandae voluptatem hic ab corrupti libero perferendis quod officiis quia voluptas ducimus et quae sapiente iure molestias vel recusandae! Asperiores consequuntur, distinctio unde error facilis aut molestiae voluptatum, ipsam similique ex odit voluptatibus sint reiciendis fuga rem sapiente quas omnis vitae. Aspernatur magnam laborum quaerat id at optio saepe!
            </div>
            <div class="w-175">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, asperiores delectus! Veritatis rem illum placeat nihil. Facilis doloremque voluptatibus obcaecati consequatur perferendis corrupti dolore nam, ipsam autem aut hic enim rerum deserunt atque ex omnis magni consectetur, fugit voluptates nobis inventore quibusdam quos quo iste! Mollitia culpa nesciunt ut iusto, cumque, aperiam consectetur vel omnis dolore ducimus ex recusandae fuga adipisci, reprehenderit veritatis nostrum sequi. Quaerat repellat voluptate tempora itaque earum distinctio, autem impedit quam. Aut possimus mollitia asperiores dicta quas consequatur deserunt voluptatum iure ducimus placeat beatae culpa, facilis in sapiente tempora neque dolore nesciunt laboriosam tenetur quasi! Voluptatibus at quisquam nemo nesciunt quam autem sit eum numquam, perferendis ex dolor sed, quia repellat totam iusto, iste animi delectus suscipit aliquam saepe. Iste, ipsum itaque quam quae cum et beatae dolores excepturi magni blanditiis, ab accusamus! Itaque voluptatum reprehenderit dolores porro esse voluptates delectus distinctio est quidem consequuntur cupiditate qui placeat necessitatibus quam, enim deleniti numquam eos! Repellat quo aliquam fuga neque minima tempora eligendi minus accusantium, magnam vel nostrum. Veritatis dolores assumenda iste qui id rerum, odit facilis iusto doloribus. Deleniti, nobis rem quis dicta facilis velit facere doloribus voluptate consectetur exercitationem ex inventore delectus voluptatum modi cum!
            </div>
        </main>
    </body>
</html>
