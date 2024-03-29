<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Laravel x Tailwind CSS</title>
  @vite('resources/css/app.css')
</head>

<body class="antialiased">
  <div
    class="items-top relative flex min-h-screen justify-center bg-gray-100 py-4 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
      <div class="fixed right-0 top-0 hidden px-6 py-4 sm:block">
        @auth
          <a class="text-sm text-gray-700 underline dark:text-gray-500" href="{{ url('/home') }}">Home</a>
        @else
          <a class=" text-gray-700 underline text-sm dark:text-gray-500" href="{{ route('login') }}">Log in</a>
          @if (Route::has('register'))
            <a class="ml-4 text-sm text-gray-700 underline dark:text-gray-500" href="{{ route('register') }}">Register</a>
          @endif @endauth
        </div>
      @endif

      <div class="mx-auto max-w-6xl sm:px-6 lg:px-8">
        <div class="mt-4 flex justify-center sm:items-center sm:justify-between">
          <div class="ml-4 text-center text-2xl text-sky-500 sm:ml-0 sm:text-right">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} x Tailwind
            CSS <?php $packageJSON = json_decode(file_get_contents(base_path() . '/package.json'));
            $v = $packageJSON->devDependencies->tailwindcss;
            $out = str_replace('^', 'v', $v);
            echo $out; ?> (PHP v{{ PHP_VERSION }})
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>
