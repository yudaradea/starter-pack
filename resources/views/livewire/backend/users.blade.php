<div>
    <div class="card">
        <div class="card-body">
            <div class="flex items-center justify-between">
                <h1 class="font-semibold md:text-lg text-text-primary">Users List</h1>
                <button
                    class="px-6 py-2 text-sm text-white transition-colors duration-200 bg-blue-500 rounded-lg shadow-md hover:bg-blue-700"
                >
                    Add User
                </button>
            </div>
            <div>
                <section class="mt-8 mb-10">
                    <!-- Start coding here -->
                    <div class="dark:bg-gray-800 relative sm:rounded-lg overflow-hidden">
                        <div class="flex flex-col md:flex-row items-center justify-between d p-4 gap-4 md:gap-0">
                            <div class="flex items-center gap-4">
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor"
                                            viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </div>
                                    <input
                                        wire:model.live.debounce.300ms="search"
                                        type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2"
                                        placeholder="Search"
                                        required=""
                                    />
                                </div>

                                <div class="flex space-x-4 items-center w-24">
                                    <select
                                        wire:model.live="perPage"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                    >
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <div class="flex space-x-2 items-center">
                                    <label class="w-40 text-sm font-medium text-gray-900">User Type :</label>
                                    <select
                                        wire:model.live="shortRole"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    >
                                        <option value="">All</option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-4 py-3">name</th>
                                        <th scope="col" class="px-4 py-3">email</th>
                                        <th scope="col" class="px-4 py-3">Role</th>
                                        <th scope="col" class="px-4 py-3">Joined</th>
                                        <th scope="col" class="px-4 py-3">
                                            <span>Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr class="border-b dark:border-gray-700 odd:bg-white even:bg-gray-100">
                                            <th
                                                scope="row"
                                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                            >
                                                {{ $user->name }}
                                            </th>
                                            <td class="px-4 py-3">{{ $user->email }}</td>
                                            <td
                                                class="px-4 py-3 {{ $user->hasRole('admin') ? 'text-green-500' : 'text-blue-500' }}"
                                            >
                                                {{ $user->roles->pluck('name')[0] ?? '' }}
                                            </td>
                                            <td class="px-4 py-3">{{ $user->created_at->format('d M Y') }}</td>
                                            <td class="px-4 py-3 flex items-center gap-2">
                                                <i
                                                    class="ti ti-edit bg-blue-600 text-white p-2 rounded-md cursor-pointer"
                                                ></i>
                                                <i
                                                    class="ti ti-trash-x bg-red-600 text-white p-2 rounded-md cursor-pointer"
                                                ></i>
                                            </td>
                                        </tr>
                                    @empty
                                        {{-- <td class="py-3 px-4 text-red-600">Data Not Found</td> --}}
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="pt-8">
                            {{ $users->links() }}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
