<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Update Employee
            </h2>
            <p class="mb-4">Edit: {{$employee->first_name}} {{$employee->last_name}}</p>
        </header>

        <form method="POST" action="/employees/{{$employee->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label
                    for="first_name"
                    class="inline-block text-lg mb-2"
                    >First Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="first_name"
                    value="{{$employee->first_name}}"
                />

                @error('first_name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="middle_name" class="inline-block text-lg mb-2"
                    >Middle Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="middle_name"
                    value="{{$employee->middle_name}}"
                />

                @error('middle_name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="last_name" class="inline-block text-lg mb-2"
                    >Last Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="last_name"
                    value="{{$employee->last_name}}"
                />

                @error('last_name')
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
                    value="{{$employee->email}}"
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
                    value="{{$employee->phone}}"
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
                    value="{{$employee->address}}"
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
                    name="position"
                    value="{{$employee->position}}"
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
                    name="department"
                    value="{{$employee->department}}"
                />

                @error('department')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="rank" class="inline-block text-lg mb-2"
                    >Rank Position</label
                >
                <select name="rank" class="border border-gray-200 rounded p-2 w-full" value="{{$employee->rank}}"> 
                    <option value="Rank and File">Rank and File</option> 
                    <option value="Supervisory">Supervisory</option> 
                    <option value="Department Head">Department Head</option> 
                </select>

                @error('rank')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="picture" class="inline-block text-lg mb-2">
                    Employee's Picture
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="picture"
                />

                <img
                    class="w-48 mr-6 mb-6"
                    src="{{$employee->picture ? asset('storage/' . $employee->picture) : asset('/images/no-image.png')}}"
                    alt=""
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
                    {{$employee->remark}}
                </textarea>

                @error('remark')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <button
                    class="bg-myColor text-white rounded py-2 px-4 hover:bg-black"
                >
                    Done
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
</x-card>
</x-layout>