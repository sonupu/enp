<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<a href="{{ route('role.create') }}"
   class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-white 
          bg-blue-600 rounded-lg shadow-md
          hover:bg-blue-700 focus:outline-none focus:ring-2 
          focus:ring-blue-400 focus:ring-offset-2
          transition duration-200">
    Create Role
</a>
              
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
              


                <div     class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                    <table class="w-full text-sm text-left rtl:text-right text-body">
                        <thead class="bg-neutral-secondary-soft border-b border-default">
                            <tr>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Permission
                                </th>
                  
                            </tr>   
                        </thead>
                        <tbody>
                            @foreach ($roles as $item)
                                <tr class="bg-neutral-primary border-b border-default">
                                    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                        {{ $item->name }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                         <span class="inline-flex items-center rounded-full bg-indigo-100 px-3 py-1 text-xs font-medium text-indigo-700">
                                        {{ $item->permissions->pluck('name')->join(', ') }}
                                         </span>
                                    </th>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
