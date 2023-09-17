<x-layout>
    <x-card class="p-10">
        <header>
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Employees
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tr>
                <th class="bg-gray-300 text-xl">Full Name</th>
                <th class="bg-gray-300 text-xl">Department</th>
                <th class="bg-gray-300 text-xl">Job Position</th>
                <th class="bg-gray-300 text-xl">Complete Address</th>
                <th class="bg-gray-300 text-xl">E-mail</th>
                <th class="bg-gray-300 text-xl">Contact Number</th>
                <th class="bg-gray-300 text-xl">Action</th>
            </tr>
            <tbody>
                @unless($employees->isEmpty())
                @foreach ($employees as $employee)

                <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-r border-l border-b border-gray-300 text-lg"
                    >
                        <a href="show.html">
                            {{$employee->first_name}} {{$employee->last_name}}
                        </a>
                    </td>

                    <td
                        class="px-4 py-8 border-t border-r border-b border-gray-300 text-lg"
                    >
                        <a href="show.html">
                            {{$employee->department}}
                        </a>
                    </td>

                    <td
                        class="px-4 py-8 border-t border-r border-b border-gray-300 text-lg"
                    >
                        <a href="show.html">
                            {{$employee->position}}
                        </a>
                    </td>

                    <td
                        class="px-4 py-8 border-t border-r border-b border-gray-300 text-lg"
                    >
                        <a href="show.html">
                            {{$employee->address}}
                        </a>
                    </td>

                    <td
                        class="px-4 py-8 border-t border-r border-b border-gray-300 text-lg"
                    >
                        <a href="show.html">
                            {{$employee->email}}
                        </a>
                    </td>

                    <td
                        class="px-4 py-8 border-t border-r border-b border-gray-300 text-lg"
                    >
                        <a href="show.html">
                            {{$employee->phone}}
                        </a>
                    </td>

                    <td class="px-4 py-8 border-t border-r border-b border-gray-300 text-lg">
                        <a
                            href="#"
                            class="text-blue-400 px-6 py-2 rounded-xl"
                            ><i
                                class="fa-solid fa-pen-to-square"
                            ></i>
                            Edit</a
                        >
                    
                        <form method="POST" action="#">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 px-6 py-2"><i class="fa-solid fa-trash"></i>Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
                @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">No Employee Found</p>
                    </td>
                </tr>
                @endunless
            </tbody>
        </table>
    </x-card>
</x-layout>