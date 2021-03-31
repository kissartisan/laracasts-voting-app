<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>
    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">12</div>
                <div class="text-gray-500">Votes</div>
            </div>
            <div class="mt-8">
                <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400
                                transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote
                </button>
            </div>
        </div>
        <div class="flex flex-1 px-2 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ut, quaerat voluptatum provident
                    temporibus distinctio labore expedita fugiat reiciendis sunt dolorem corporis saepe quibusdam hic
                    alias
                    blanditiis voluptates veritatis cum.
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercasae leading-none
                                        rounded-fill text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button class=" relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7
                                        py-2 px-3 transition duration-150 ease-in">
                            <svg fill="currentColor" width="24" height="6">
                                <path
                                    d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                                    <ul
                                        class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                        <li>
                                            <a href="#" class="hover:bg-gray-100 block px-5 py-3
                                                        transition duration-150 ease-in">Mark as spam</a>
                                        </li>
                                        <li>
                                            <a href="#" class="hover:bg-gray-100 px-5 py-3 block
                                                        transition duration-150 ease-in">Delete Post</a>
                                        </li>
                                    </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end of idea-container -->
</x-app-layout>
