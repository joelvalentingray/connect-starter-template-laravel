@extends("layout")

@section('content')
    <main>
        <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

            <!-- WELCOME BANNER -->
            <div class="relative bg-gray-200  p-4 sm:p-6 rounded-sm overflow-hidden mb-8">
                <div class="relative">
                    <h1 class="text-2xl md:text-3xl text-slate-800 font-bold mb-1 ">Hello, {{ Request::get('user')['firstName'] . ' ' . Request::get('user')['lastName'] }} 👋</h1>
                    <p>Welcome to your new project.</p>
                </div>
            </div>

            <!-- CARDS -->
            <div class="grid">
                <div class="bg-white shadow-lg rounded-sm border border-slate-200">
                    <header class="border-b border-slate-100">
                        <h2 class="font-semibold text-slate-800 p-4">New table</h2>
                    </header>
                    <div class="p-3">
                        <!-- TABLE -->
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <!-- TABLE HEADER -->
                                <thead class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm">
                                <tr>
                                    <th class="p-2">
                                        <div class="font-semibold">Name</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold">ID</div>
                                    </th>
                                    <th>Website URL</th>
                                    <th class="p-2">
                                        <div class="font-semibold ">Date</div>
                                    </th>
                                </tr>
                                </thead>
                                <!-- TABLE BODY -->
                                <tbody class="text-sm font-medium divide-y divide-slate-100">
                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="p-2">
                                        <div class="text-slate-800 flex justify-center">Gray TV</div>
                                    </td>
                                    <td class="p-2 flex justify-center">
                                        1235546
                                    </td>
                                    <td class="p-2">
                                        <div class="flex justify-center">
                                          local/test
                                        </div>
                                    </td>
                                    <td class="p-2 flex justify-center">
                                        11/9/22
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
