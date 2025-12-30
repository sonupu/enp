<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">

                <form class="max-w-sm mx-auto" method="POST" action="{{ route('product.store') }}">
                    @csrf

                    <x-input
                        label="Title"
                        name="title"
                        type="text"
                        placeholder="Enter Title" />
                    <x-input
                        label="Description"
                        name="description"
                        type="text"
                        placeholder="Enter description" />

             

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
