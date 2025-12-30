<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">


                <form class="max-w-sm mx-auto" method="POST" action="{{route("users.store")}}">
                    @csrf
                    <x-input label="Name" name="name" type="text" placeholder="Enter user name" />
                    <x-input label="Email Address" name="email" type="email" placeholder="Enter user email" />
                    <x-input label="Password" name="password" type="password" placeholder="Enter password" />

                    <x-primary-button> Save </x-primary-button>

                </form>


            </div>
        </div>
    </div>
</x-app-layout>
