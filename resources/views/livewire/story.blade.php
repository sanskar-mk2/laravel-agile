@section('title', 'Stories')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="mx-auto h-16 w-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-center text-3xl font-extrabold leading-9 text-gray-900">
            Stories
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white px-4 py-8 shadow sm:rounded-lg sm:px-10">
            {{-- All Stories --}}
            <form wire:submit.prevent="add">
                <x-text-input-with-label name="title" />
                <p class="mt-2 text-sm text-green-600">{{ $success_message }}</p>
                <x-submit-button text="Add" />
            </form>
            @foreach($stories as $story)
                <div class="bg-yellow-200 mt-4 p-4 rounded-md">
                {{ $story->title }}
                </div>
            @endforeach
        </div>

    </div>
</div>
