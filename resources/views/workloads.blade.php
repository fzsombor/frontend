<x-app-layout>
    <x-slot name="header">
        <div class="flex ">
            <div class="flex-1 font-semibold text-xl text-gray-800 text-left">
                {{ __('Workloads') }}
            </div>
            <div class="flex-1 f text-xl text-gray-800 text-right">
                <a id="add-workload-button"
                   class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">+
                    Add Workload</a>
            </div>
        </div>
    </x-slot>
    <script>
        $(document).ready(function () {
            $("#add-workload-button").click(function () {
                $("#form-div").show();
            });
            $("#add-now").click(function () {
                $("#form-div").show();
            });
            $("#cancel-add-workload").click(function () {
                $("#form-div").hide();
            });
        });
    </script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="form-div" class="bg-white overflow-hidden shadow-xl rounded-lg my-4 ">

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-8 text-2xl">
                        Add a new workload
                    </div>

                    <div class="mt-6 text-gray-500">
                        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application.
                        Laravel is designed
                        to help you build your application using a development environment that is simple, powerful, and
                        enjoyable. We believe
                        you should love expressing your creativity through programming, so we have spent time carefully
                        crafting the Laravel
                        ecosystem to be a breath of
                    </div>
                </div>
                <form class="w-full max-w-7xl" method='post' action='{{ url('add-workload') }}' enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                        <div class="flex flex-wrap mb-6">
                            <div class="w-full md:w-1/3 px-6  md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="name">
                                    Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="name" name="name" type="text" placeholder="TPC-DS" required>
                            </div>
                            <div class="w-full md:w-1/3 px-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="filepath">
                                    File path
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="filepath" name="filepath" type="text" placeholder="workloads/synthetic/tpcds" required>
                            </div>
                            <div class="w-full md:w-1/3 px-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="file">
                                    Workload archive
                                </label>
                                <input type="file" id="workload_file" name="workload_file"
                                       class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>

                        </div>
                        <div class="flex flex-wrap mb-6 justify-start px-6">
                            <div class="md:w-1/3 px-2">
                                <label class="md:w-2/3 block text-gray-500 font-bold">
                                    <input id="requires_impala" name="requires_impala" class="mr-2 leading-tight" type="checkbox">
                                    <span class="text-md">Requires Impala</span>
                                </label>
                            </div>
                            <label class="md:w-2/3 block text-gray-500 font-bold px-6">
                                <input id="requires_hive" name="requires_hive" class="mr-2 leading-tight" type="checkbox">
                                <span class="text-md">Requires Hive</span>
                            </label>
                            <div class="md:w-1/3 px-2">
                                <label class="md:w-2/3 block text-gray-500 font-bold">
                                    <input id="requires_spark" name="requires_spark" class="mr-2 leading-tight" type="checkbox">
                                    <span class="text-md">Requires Spark</span>
                                </label>
                            </div>
                            <label class="md:w-2/3 block text-gray-500 font-bold px-6">
                                <input id="requires_kafka" name="requires_kafka" class="mr-2 leading-tight" type="checkbox">
                                <span class="text-md">Requires Kafka</span>
                            </label>


                        </div>


                        <div class="flex flex-wrap mb-6 p-3 justify-end">
                            <div class="flex-shrink-1 px-3">
                                <button type="submit"
                                    class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">
                                    Add Workload
                                </button>
                            </div>
                            <div class="flex-shrink-1 px-3">
                                <button id="cancel-add-workload"
                                   class="px-5 py-2 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <div class="p-6 bg-white rounded-lg shadow-xl">
                @if(count($data) === 0)
                    No workload to show. <a href="#" id="add-now" class="text-blue-400 hover:text-blue-600 underline">Add
                        one now!</a>
                @else
                    <div class="overflow-auto">
                        <table id="workloads-table "
                               class="border-collapse w-full whitespace-no-wrap">
                            <thead class="">
                            <tr class="">
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Name
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Filepath
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Requires Impala
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Requires Spark
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Requires Hive
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Requires Kafka
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Remove
                                </th>
                            </tr>
                            </thead>
                            <tbody class="">
                            @foreach($data as $workload)
                                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$workload->name}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$workload->filepath}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{($workload->requires_impala)?'✓':'✗'}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{($workload->requires_spark)?'✓':'✗'}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{($workload->requires_hive)?'✓':'✗'}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{($workload->requires_kafka)?'✓':'✗'}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                        <a href="workloads/delete/{{$workload->id}}"
                                           class="px-5 py-2 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none">Remove</a>
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
            </div>

            <div class="p-6 bg-white rounded-lg shadow overflow-auto hidden">
                <table class=" border-collapse w-full">
                    <thead class="whitespace-no-wrap">
                    <tr>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Company name
                        </th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Company name
                        </th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Company name
                        </th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Company name
                        </th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Company name
                        </th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Company name
                        </th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Company name
                        </th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Country
                        </th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Status
                        </th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                            KnobHome
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                            German
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                            <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">deleted</span>
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                            <a href="#" class="text-blue-400 hover:text-blue-600 underline">Edit</a>
                            <a href="#" class="text-blue-400 hover:text-blue-600 underline pl-6">Remove</a>
                        </td>
                    </tr>
                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                            Squary
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                            Schweden
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                            <span class="rounded bg-green-400 py-1 px-3 text-xs font-bold">active</span>
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                            <a href="#" class="text-blue-400 hover:text-blue-600 underline">Edit</a>
                            <a href="#" class="text-blue-400 hover:text-blue-600 underline pl-6">Remove</a>
                        </td>
                    </tr>
                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                            ghome
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                            Switzerland
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                            <span class="rounded bg-yellow-400 py-1 px-3 text-xs font-bold">inactive</span>
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                            <a href="#" class="text-blue-400 hover:text-blue-600 underline">Edit</a>
                            <a href="#" class="text-blue-400 hover:text-blue-600 underline pl-6">Remove</a>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>


        </div>
    </div>
    </div>
</x-app-layout>
