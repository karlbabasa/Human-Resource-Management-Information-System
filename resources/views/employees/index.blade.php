<x-layout>

    @include('partials._hero')
                                
    
    <div
                class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4"
            >
                <!-- Employee -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/employee.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/employee/list">Employees</a>
                            </h3>
                            <div class="text-2xl font-bold mb-4">
                
                                    {{count($employees)}}
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Department Head -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/managerial.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/employee/list?search=department+head">Department Heads</a>
                            </h3>
                            <div class="text-2xl font-bold mb-4">
                                {{count($employees->where('rank', 'like', "Department Head"))}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Supervisory -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/managerial.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/employee/list?search=supervisory">Supervisory</a>
                            </h3>
                            <div class="text-2xl font-bold mb-4">
                                {{count($employees->where('rank', 'like', "Supervisory"))}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Rank and File -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/rnf.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/employee/list?search=rank+and+file">Rank and File</a>
                            </h3>
                            <div class="text-2xl font-bold mb-4">
                                {{count($employees->where('rank', 'like', "Rank and File"))}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-layout>