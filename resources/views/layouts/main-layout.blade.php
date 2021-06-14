<!DOCTYPE html>
<html lang="en">
    {{-- HEAD --}}
    @include('partials.head')
<body class="d-flex flex-column">
        {{-- HEADER --}}
        @include('partials.header')
        
        {{-- MAIN --}}
        <main class="flex-grow-1">
        @yield('content')
        </main>

        {{-- FOOTER --}}
        @include('partials.footer')
</body>
</html>