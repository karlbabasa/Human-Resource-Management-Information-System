<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                New Employee
            </h2>
            <p class="mb-4">Kindly complete the form</p>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label
                    for="firstName"
                    class="inline-block text-lg mb-2"
                    >First Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="firstName"
                    value="{{old('firstName')}}"
                />

                @error('firstName')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="middleName" class="inline-block text-lg mb-2"
                    >Middle Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="middleName"
                    value="{{old('middleName')}}"
                />

                @error('middleName')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="lastName" class="inline-block text-lg mb-2"
                    >Last Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="middleName"
                    value="{{old('lastName')}}"
                />

                @error('lastName')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                    >Contact Email</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    value="{{old('email')}}"
                />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="phone" class="inline-block text-lg mb-2"
                    >Contact Number</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="phone"
                    value="{{old('email')}}"
                />

                @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label
                    for="address"
                    class="inline-block text-lg mb-2"
                    >Complete Address</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="address"
                    placeholder="Example: Remote, Boston MA, etc"
                    value="{{old('location')}}"
                />

                @error('address')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="position" class="inline-block text-lg mb-2"
                    >Job Position</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="middleName"
                    value="{{old('position')}}"
                />

                @error('position')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="department" class="inline-block text-lg mb-2"
                    >Department</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="middleName"
                    value="{{old('department')}}"
                />

                @error('department')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            {{-- <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc"
                    value="{{old('tags')}}"
                />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div> --}}

            <div class="mb-6">
                <label for="picture" class="inline-block text-lg mb-2">
                    Employee's Picture
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="picture"
                />

                @error('picture')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="remark"
                    class="inline-block text-lg mb-2"
                >
                    Remarks
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="remark"
                    rows="10"
                    placeholder="Include tasks, requirements, salary, etc">
                    {{old('remark')}}
                </textarea>

                @error('remark')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <button
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Done
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
</x-card>
</x-layout>