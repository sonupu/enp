<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">

                <form class="max-w-sm mx-auto" method="POST" action="{{ route('role.store') }}">
                    @csrf

                    <x-input label="Name" name="name" type="text" placeholder="Enter Role Name" />

                    <div class="mt-4 space-y-2">
                        @foreach ($permissions as $permission)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <span class="text-sm text-gray-700">
                                    {{ ucfirst($permission->name) }}
                                </span>
                            </label>
                        @endforeach

                    </div>

                    <div class="mt-6">
                        <x-primary-button>
                            Create
                        </x-primary-button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
