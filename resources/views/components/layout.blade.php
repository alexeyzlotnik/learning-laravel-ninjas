@props([
    'pageName' => 'Page Name',
    'title' => 'Page name',
    'description' => 'Page description'
])

<?php
   $appName = "Ninjas App";
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ $pageName }} | {{ $appName }}</title>
    <meta name="description" content="{{ $description }}">
    @vite('resources/css/app.css')
</head>
<body>
   <header>
      <nav>
         <span class="text-2xl font-bold text-red-500">{{ $appName }}</span>
         <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('ninjas.index') }}">Ninjas</a></li>
            <li><a href="{{ route('ninjas.create') }}">Create a ninja</a></li>
         </ul>
      </nav>
   </header>

   <main class="container">
      <h1>{{ $title }}</h1>
      {{ $slot}}
   </main>
</body>

<footer>
   <p>Copyright {{ date('Y') }} {{ $appName }}</p>
</footer>
</html>
