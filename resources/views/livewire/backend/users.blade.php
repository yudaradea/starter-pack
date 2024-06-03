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
            <div class="relative my-8 overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Role</th>
                            <th scope="col" class="px-6 py-3">Created At</th>
                            <th scope="col" class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr
                                class="text-gray-700 border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 dark:border-gray-700"
                            >
                                <td class="px-6 py-4">{{ $user->name }}</td>
                                <td class="px-6 py-4">{{ $user->email }}</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="{{ $user->hasRole('admin') ? 'bg-green-100 text-green-800 text-xs font-medium px-2.5 pb-1.5 py-0.5 rounded-full' : '' }}"
                                    >
                                        {{ $user->roles->pluck('name')[0] ?? '' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">{{ $user->created_at->format('d M Y') }}</td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
