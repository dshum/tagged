<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tagged</title>
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/magic-grid/dist/magic-grid.min.js"></script>
</head>
<body>

<nav class="bg-white shadow-sm py-2">
    <div class="w-full px-4">
        <div class="flex justify-between">
            <div class="">
                <a href="#" class="flex items-center space-x-4">
                    <svg class="h-10 w-10 bg-yellow-400 text-white rounded-md px-1 py-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <span class="font-medium text-gray-600">Tagged</span>
                </a>
            </div>

            <div class="hidden md:flex w-1/4">
                <form method="GET" class="w-full">
                    <div class="relative w-full text-gray-600 focus-within:text-gray-400">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                            <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </button>
                        </span>
                        <input type="text" name="q" class="w-full py-2 pl-14 pr-4 bg-gray-100 rounded-md focus:outline-none focus:shadow-md focus:bg-white focus:text-gray-900" placeholder="Search" autocomplete="off">
                    </div>
                </form>
            </div>

            <div class="hidden md:flex items-center space-x-3 text-sm">
                <a href="" class="py-2 px-2 text-gray-500 font-medium rounded hover:bg-yellow-400 hover:text-white transition duration-300">Log In</a>
                <a href="" class="py-2 px-2 text-gray-500 font-medium rounded hover:bg-yellow-400 hover:text-white transition duration-300">Sign Up</a>
            </div>

            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-gray-500 hover:text-orange-500"
                         fill="none"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         stroke-width="2"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<div class="flex mt-4 w-full space-x-4">
    <div class="md:w-96 hidden md:block mobile-menu py-2 pl-0 pr-16 text-sm text-gray-700 font-medium">
        <ul>
            <li class="active">
                <a href="/" class="flex items-center space-x-4 bg-orange-100 rounded-tr-full rounded-br-full py-4 px-4">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                        <line x1="7" y1="7" x2="7.01" y2="7"/>
                    </svg>
                    <span>All</span>
                </a>
            </li>
            <li>
                <a href="/" class="flex items-center space-x-4 hover:bg-gray-100 hover:rounded-tr-full hover:rounded-br-full py-4 px-4">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                        <line x1="7" y1="7" x2="7.01" y2="7"/>
                    </svg>
                    <span>CRM</span>
                </a>
            </li>
            <li>
                <a href="/" class="flex items-center space-x-4 hover:bg-gray-100 hover:rounded-tr-full hover:rounded-br-full py-4 px-4">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                        <line x1="7" y1="7" x2="7.01" y2="7"/>
                    </svg>
                    <span>Books</span>
                </a>
            </li>
            <li>
                <a href="/" class="flex items-center space-x-4 hover:bg-gray-100 hover:rounded-tr-full hover:rounded-br-full py-4 px-4">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                        <line x1="7" y1="7" x2="7.01" y2="7"/>
                    </svg>
                    <span>Phone</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="md:w-full py-2 px-24">
        <div class="cards">
            <div class="max-h-128 w-64 text-ellipsis overflow-hidden shadow-md hover:shadow-lg rounded-lg p-4 bg-red-200">
                <h3 class="font-medium text-lg">Update empty customers.last_trade field</h3>
                <div class="">
                    <p class="py-2">--Find customers + last trade date where last_trade is null --
                        select distinct customers.id, customers.last_trade, customers.created_at,
                        (select created_at from cfd_positions where customer_id = customers.id order by id desc limit 1) as cfd_last_trade
                        from customers
                        inner join cfd_positions on cfd_positions.customer_id = customers.id
                        where customers.last_trade is null order by customers.id desc;</p>
                </div>
                <div class="flex space-x-2 mt-2">
                    <div class="backdrop-grayscale-0 bg-black/10 rounded-full px-2 py-1 text-xs font-medium text-gray-800">CRM</div>
                    <div class="backdrop-grayscale-0 bg-black/10 rounded-full px-2 py-1 text-xs font-medium text-gray-800">Postgres</div>
                </div>
            </div>
            <div class="max-h-128 w-64 text-ellipsis overflow-hidden shadow-md hover:shadow-lg rounded-lg p-4 bg-slate-300">
                <h3 class="font-medium text-lg">Count of indexes</h3>
                <div class="max-h-96 text-ellipsis overflow-hidden">
                    <p class="py-2">select count(*) from pg_indexes where tablename not like 'pg%';</p>
                </div>
                <div class="flex space-x-2 mt-2">
                    <div class="backdrop-grayscale-0 bg-black/10 rounded-full px-2 py-1 text-xs font-medium text-gray-800">Postgres</div>
                </div>
            </div>
            <div class="max-h-128 w-64 text-ellipsis overflow-hidden shadow-md hover:shadow-lg rounded-lg p-4 bg-white">
                <h3 class="font-medium text-lg">Count of indexes</h3>
                <div class="max-h-96 text-ellipsis overflow-hidden">
                    <p class="py-2">select count(*) from pg_indexes where tablename not like 'pg%';</p>
                </div>
                <div class="flex space-x-2 mt-2">
                    <div class="backdrop-grayscale-0 bg-black/10 rounded-full px-2 py-1 text-xs font-medium text-gray-800">Postgres</div>
                </div>
            </div>
            <div class="max-h-128 w-64 text-ellipsis overflow-hidden shadow-md hover:shadow-lg rounded-lg p-4 bg-white">
                <h3 class="font-medium text-lg">Count of indexes</h3>
                <div class="max-h-96 text-ellipsis overflow-hidden">
                    <p class="py-2">select count(*) from pg_indexes where tablename not like 'pg%';</p>
                </div>
                <div class="flex space-x-2 mt-2">
                    <div class="backdrop-grayscale-0 bg-black/10 rounded-full px-2 py-1 text-xs font-medium text-gray-800">Postgres</div>
                </div>
            </div>
            <div class="max-h-128 w-64 text-ellipsis overflow-hidden shadow-md hover:shadow-lg rounded-lg p-4 bg-yellow-200">
                <h3 class="font-medium text-lg">Sunny days test task</h3>
                <div class="">
                    <p class="py-2">Your task is to build one page web application. It will allow user to see length (in days) of continuous periods of sunshine in a given city:</p>
                    <p class="py-2">Historical longest period of sunny days in given city.
                        Longest period in current month.
                        Length of current period of sunshine.
                        Length of sunny days period is a number of consecutive days in a given city when the sun is shining (no overcast clouds, no precipitation).</p>
                    <p class="py-2">User can select city from dropdown list and frontend should request for data from backend without reloading the page (e.g. REST or smth. similar).
                        Request should be processed in less then 30ms (our service will be very popular!).</p>
                </div>
                <div class="flex space-x-2 mt-2">
                    <div class="backdrop-grayscale-0 bg-black/10 rounded-full px-2 py-1 text-xs font-medium text-black">CRM</div>
                    <div class="backdrop-grayscale-0 bg-black/10 rounded-full px-2 py-1 text-xs font-medium text-gray-800">Laravel</div>
                </div>
            </div>
            <div class="max-h-128 w-64 text-ellipsis overflow-hidden shadow-md hover:shadow-lg rounded-lg p-4 bg-white">
                <h3 class="font-medium text-lg">Count of indexes</h3>
                <div class="max-h-96 text-ellipsis overflow-hidden">
                    <p class="py-2">select count(*) from pg_indexes where tablename not like 'pg%';</p>
                </div>
                <div class="flex space-x-2 mt-2">
                    <div class="backdrop-grayscale-0 bg-black/10 rounded-full px-2 py-1 text-xs font-medium text-gray-800">Postgres</div>
                </div>
            </div>
            <div class="max-h-128 w-64 text-ellipsis overflow-hidden shadow-md hover:shadow-lg rounded-lg p-4 bg-green-200">
                <h3 class="font-medium text-lg">Count of indexes</h3>
                <div class="max-h-96 text-ellipsis overflow-hidden">
                    <p class="py-2">select count(*) from pg_indexes where tablename not like 'pg%';</p>
                </div>
                <div class="flex space-x-2 mt-2">
                    <div class="backdrop-grayscale-0 bg-black/10 rounded-full px-2 py-1 text-xs font-medium text-gray-800">Postgres</div>
                </div>
            </div>
            <div class="max-h-128 w-64 text-ellipsis overflow-hidden shadow-md hover:shadow-lg rounded-lg p-4 bg-white">
                <h3 class="font-medium text-lg">Count of indexes</h3>
                <div class="max-h-96 text-ellipsis overflow-hidden">
                    <p class="py-2">select count(*) from pg_indexes where tablename not like 'pg%';</p>
                </div>
                <div class="flex space-x-2 mt-2">
                    <div class="backdrop-grayscale-0 bg-black/10 rounded-full px-2 py-1 text-xs font-medium text-gray-800">Postgres</div>
                </div>
            </div>
            <div class="max-h-128 w-64 text-ellipsis overflow-hidden shadow-md hover:shadow-lg rounded-lg p-4 bg-white">
                <h3 class="font-medium text-lg">Count of indexes</h3>
                <div class="max-h-96 text-ellipsis overflow-hidden">
                    <p class="py-2">select count(*) from pg_indexes where tablename not like 'pg%';</p>
                </div>
                <div class="flex space-x-2 mt-2">
                    <div class="backdrop-grayscale-0 bg-black/10 rounded-full px-2 py-1 text-xs font-medium text-gray-800">Postgres</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelectorAll(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.forEach(function (item) {
            item.classList.toggle("hidden");
        });
    });

    let magicGrid = new MagicGrid({
        container: ".cards",
        animate: true,
        gutter: 30,
        static: true,
        useMin: true
    });

    magicGrid.listen();
</script>

</body>
</html>
