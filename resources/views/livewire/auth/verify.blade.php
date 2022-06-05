@section('title', 'Verify your email address')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="mx-auto h-16 w-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-center text-3xl font-extrabold leading-9 text-gray-900">
            Verify your email address
        </h2>

        <p class="max-w mt-2 text-center text-sm leading-5 text-gray-600">
            Or
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:underline focus:outline-none">
                sign out
            </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white px-4 py-8 shadow sm:rounded-lg sm:px-10">
            @if (session('resent'))
                <div class="mb-6 flex items-center rounded bg-green-500 px-4 py-3 text-sm text-white shadow"
                    role="alert">
                    <svg class="mr-3 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <p>A fresh verification link has been sent to your email address.</p>
                </div>
            @endif

            <div class="text-sm text-gray-700">
                <p>Before proceeding, please check your email for a verification link.</p>

                <p class="mt-3">
                    If you did not receive the email, <a wire:click="resend"
                        class="cursor-pointer text-indigo-700 transition duration-150 ease-in-out hover:text-indigo-600 focus:underline focus:outline-none">click
                        here to request another</a>.
                </p>
            </div>
        </div>
    </div>
</div>
