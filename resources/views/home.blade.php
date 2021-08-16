<x-app-layout>
    <div class="container jumbotron">
        <h3>Welcome, {{ auth()->user()->first_name  . ' ' . auth()->user()->last_name }}</h3>
    </div>
</x-app-layout>
