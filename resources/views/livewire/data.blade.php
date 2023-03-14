<div class="flex flex-col gap-4 w-full max-w-xs">
    <h1 class="text-2xl">Hello, my name is {{ $person->name }}</h1>
    <h2>My history</h2>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <div class="flex justify-between w-full gap-4">
        @if ($person->github)
            <a role="button" class="btn btn-outline flex-1" href="{{ $person->github }}">Github</a>
        @endif
        @if ($person->linkedin)
            <a role="button" class="btn btn-outline flex-1" href="{{ $person->linkedin }}">Linkedin</a>
        @endif
    </div>
</div>
