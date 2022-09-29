<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.reservations.index')}}" 
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">reservation index</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form enctype="multipart/form-data">
                    <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Name</label>
                        <div class="mt-1">
                            <input type="text" id="title" wire:model.lazy="title" name="title"
                                class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 ">

                        </div>
                    </div>
                    <div class="sm:col-span-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="multiple_files">Upload multiple files</label>
                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple="">
                    </div>
                    <div class="sm:col-span-6">
                        <div class="flex justify-center">
                  <div class="mb-3 xl:w-96">
                    <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700"
                      >Example textarea</label
                    >
                    <textarea
                      class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                      "
                      id="exampleFormControlTextarea1"
                      rows="3"
                      placeholder="Your message"
                    ></textarea>
                  </div>
                </div>
                      </div>
                      <div class="mt-6 p-4">
                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-500 rounded-lg">store</button>

                      </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>