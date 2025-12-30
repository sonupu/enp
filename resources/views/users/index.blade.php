<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('users.create') }}"
                 class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-white 
          bg-blue-600 rounded-lg shadow-md
          hover:bg-blue-700 focus:outline-none focus:ring-2 
          focus:ring-blue-400 focus:ring-offset-2
          transition duration-200">Create
                User</a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">



                <div
                    class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                    <table class="w-full text-sm text-left rtl:text-right text-body">
                        <thead class="bg-neutral-secondary-soft border-b border-default">
                            <tr>
                                <th class="px-6 py-3 font-medium">Name</th>
                                <th class="px-6 py-3 font-medium">Email</th>
                                <th class="px-6 py-3 font-medium">Role</th>
                                <th class="px-6 py-3 font-medium">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                                <tr class="bg-neutral-primary border-b border-default">
                                    <td class="px-6 py-4 font-medium text-heading">
                                        {{ $item->name }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $item->email }}
                                    </td>

                                    <td class="px-6 py-4">
                                        @foreach ($item->roles as $role)
                                            <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
                                                {{ $role->name }}
                                            </span>
                                        @endforeach
                                    </td>

                                    <td class="px-6 py-4">
                                            <a href="{{ route('users.edit', $item->id) }}"
                                                class="text-blue-600 hover:text-blue-800 font-medium">
                                                Edit
                                            </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
