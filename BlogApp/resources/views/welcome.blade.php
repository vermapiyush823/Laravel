<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased">
            <h1 class="text-center text-[30px] mt-10 font-semibold">Welcome to our app</h1>
            <div class="flex flex-col w-full justify-center align-middle">
                <form class="flex flex-col w-1/2 justify-center items-center gap-2 self-center"
                    onsubmit={{$submitFunction}}
                >
                    <input type="text"  
                        class=" h-8  w-[200px] border"
                    placeholder="Enter name" />
                    <input type="email"
                    class=" h-8  w-[200px] border"
                    
                    placeholder="Enter email" />
                    <button type="submit"
                    class=" h-8 bg-slate-300 w-[200px] border"
                    
                    >
                        Submit
                    </button>
                </form>
            </div>
    </body>
</html>
