<div>
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-3  sm:grid-cols-1 my-6">
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs ">
            <div class="p-3 mr-4 text-blue-500  bg-blue-100 rounded-full ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                  </svg>

            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 ">

                    Total Tasks
                </p>
                <p class="text-lg font-semibold text-gray-700 ">
                    {{ $tasks->count() }}
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
            <div class="p-3 mr-4 text-orange-500  bg-orange-100 rounded-full ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                  </svg>

            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 ">

                    Total Pending Tasks
                </p>
                <p class="text-lg font-semibold text-gray-700">
                    {{ $tasks->where('status', 0)->count() }}
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs ">
            <div class="p-3 mr-4  text-green-500 bg-green-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                  </svg>

            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 ">
                    Total Completed
                </p>
                <p class="text-lg font-semibold text-gray-700">
                    {{ $tasks->where('status', 1)->count() }}
                </p>
            </div>
        </div>

    </div>
    <div class="container px-6 mx-auto bg-white rounded">
        <div class="container flex flex-wrap items-center justify-between h-full px-6 mx-auto text-purple-600 py-4 ">
            <div class="my-2">
                <select wire:model="filterVal"
                    class="block w-full px-4 py-2 pr-8 mt-2 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                    @foreach ($statusFilter as $item)
                        <option value="{{ $item }}">
                            {{ strtoupper($item) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <!-- Search input -->
            <div class="flex my-2">
                <div class="flex justify-center flex-1 lg:mx-12 text-purple-600">
                    <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                        <div class="absolute inset-y-0 flex items-center pl-2 ">
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input
                            class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-slate-200 border-0 rounded-md focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                            type="text" wire:model='searched' placeholder="Search for a task" aria-label="Search" />
                    </div>
                </div>
            </div>

            <div class="my-2">
                <button wire:click="openModal"
                    class="px-4 mr-2 my-2 py-2 font-normal text-purple-700 bg-transparent border border-purple-500 rounded hover:bg-purple-500 hover:text-white hover:border-transparent">
                    Add Task
                </button>
            </div>

        </div>

        {{-- Edit Modal --}}
        <x-jet-dialog-modal wire:model="edit">
            <x-slot name="title">
                Add task
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent="createCourse" ,method='POST'>
                    @csrf
                    <div>
                        <x-jet-label class="text-lg font-semibold" for="title" value="{{ __('Title') }}" />
                        <x-jet-input wire:model=title id='title' class="block w-full px-2 py-2 mt-1 border" />
                        <x-jet-input-error for='title' />
                    </div>
                    <div class="mt-4">
                        <x-jet-label class="text-lg font-semibold" for="description" value="{{ __('Description') }}" />
                        <textarea
                            class="'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm px-2 block mt-1 w-full border py-2"
                            wire:model=description id='description' type='text'></textarea>

                        <x-jet-input-error for='description' />
                    </div>

                    <div class="mt-4">
                        <x-jet-label class="text-lg font-semibold" for="due_date" value="{{ __('Due Date') }}" />
                        <x-jet-input type=date wire:model=due_date id='due_date' min="{{ now() }}"
                            class="block w-full px-2 py-2 mt-1 border" />
                        <x-jet-input-error for='due_date' />
                    </div>


                </form>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('edit')" wire:loading.attr="disabled">
                    Nevermind
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="createTask" wire:loading.attr="enabled">
                    @if ($task != null)
                        Edit
                    @else
                        Create
                    @endif
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
        {{-- Edit Modal End --}}
        {{-- Delete Modal --}}
        <x-jet-confirmation-modal wire:model="delete">
            <x-slot name="title">
                Delete Task
            </x-slot>

            <x-slot name="content">
                Are you sure you want to delete @if ($task)
                    <span class="text-red-500">{{ $task->title }}</span>
                @endif? Once a task is deleted, all of
                its resources and data will be permanently deleted.
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('delete')" wire:loading.attr="disabled">
                    Nevermind
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteTask" wire:loading.attr="disabled">
                    Delete Task
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
        {{-- Delete Modal End --}}
        {{-- statusUpdate Modal --}}
        <x-jet-confirmation-modal wire:model="statusUpdate">
            <x-slot name="title">
                Update Task
            </x-slot>

            <x-slot name="content">
                Are you sure you want to set the status of task @if ($task)
                    <span class="text-gren-500">{{ $task->title }}</span>
                @endif to
                {{ $task != null ? ($task->status == true ? 'incomplete' : ' complete') : '' }} ?
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('delete')" wire:loading.attr="disabled">
                    Nevermind
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="updateStatusOfTask" wire:loading.attr="disabled">
                    Update Task
                </x-jet-button>
            </x-slot>
        </x-jet-confirmation-modal>
        {{-- statusUpdate Modal End --}}

        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto space-y-2">

                <div class="mx-auto container py-20 px-6">
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-6">
                        @forelse ($tasks as $task)
                            <div
                                class="{{ $task->status == false ? 'w-full h-64 flex flex-col justify-between  bg-white rounded-lg border border-gray-400 mb-6 py-5 px-4' : 'w-full h-64 flex flex-col justify-between  bg-green-300 rounded-lg border border-gray-400 mb-6 py-5 px-4 line-through' }}">
                                <div>
                                    <h4 class="text-gray-800  font-bold mb-3 ">{{ $task->title }}</h4>
                                    <p class="text-gray-800  text-sm ">{{ $task->description }}</p>

                                </div>
                                <div>
                                    <div class="flex items-center justify-between text-gray-800">
                                        <p class="text-sm">{{ $task->due_date }}</p>
                                        <div class="flex space-x-1">
                                            <button
                                                class="{{ $task->status ? 'w-8 h-8 rounded-full bg-red-300   text-red-600 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black' : 'w-8 h-8 rounded-full bg-green-400   text-green-900 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black' }}"
                                                aria-label="edit note" role="button"
                                                wire:click="updateStatus({{ $task }})">

                                                @if ($task->status == false)
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                                    </svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 15l-6 6m0 0l-6-6m6 6V9a6 6 0 0112 0v3" />
                                                    </svg>
                                                @endif
                                            </button>

                                            <button
                                                class="w-8 h-8 rounded-full bg-gray-800 dark:bg-gray-100 dark:text-gray-800 text-white flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black"
                                                aria-label="edit note" role="button"
                                                wire:click="populateEdit({{ $task }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>

                                            </button>
                                            <button
                                                class="w-8 h-8 rounded-full bg-red-100  text-red-800 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black"
                                                aria-label="edit note" role="button"
                                                wire:click="confirmDeletion({{ $task }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>

                                            </button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @empty
                            No Tasks. Yet!W
                        @endforelse
                    </div>
                </div>
                <div
                    class=" px-4 py-3 text-xs font-semibold tracking-wide text-white uppercase border-t  bg-gray sm:grid-cols-9 ">
                    {{ $tasks->links() }}
                </div>
            </div>

        </div>
    </div>
</div>
