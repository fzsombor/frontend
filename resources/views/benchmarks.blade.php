<x-app-layout>
    <x-slot name="header">
        <div class="flex ">
            <div class="flex-1 font-semibold text-xl text-gray-800 text-left">
                {{ __('Benchmarks') }}
            </div>
            <div class="flex-1 f text-xl text-gray-800 text-right">
                <a id="add-benchmark-button"
                   class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">+
                    Add Benchmark</a>
            </div>
        </div>
    </x-slot>
    <script>
        $(document).ready(function () {
            $("#add-benchmark-button").click(function () {
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
            <div id="form-div" class="bg-white overflow-hidden shadow-xl rounded-lg my-4 hidden">

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Create and run the benchmark
                    </div>

                    <div class="mt-6 text-gray-500">
                        Description of doing the
                    </div>
                </div>

                <form class="w-full max-w-7xl" method='post' action='{{ url('add-benchmark') }}'
                      enctype="multipart/form-data">
                    @csrf
                    <input id="num-of-workloads" name="num-of-workloads" type="hidden" value=1>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full md:w-1/3 px-6  md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="name">
                                    Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="name" name="name" type="text" placeholder="TPC-DS runs" required>
                            </div>
                            <div class="w-full md:w-1/3 px-6  md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="size">
                                    Size
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="size" name="size" type="text" placeholder="500" required>
                            </div>
                            <div class="w-full md:w-1/3 px-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="cluster">
                                    Cluster
                                </label>
                                @if(count($clusters) === 0)
                                    <div class="py-1">
                                        No clusters available.
                                        <a href="clusters" class="text-blue-400 hover:text-blue-600 underline">Add
                                            one now!</a>
                                    </div>
                                @else
                                    <div class="relative">
                                        <select id="cluster" name="cluster"
                                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                required>
                                            @foreach($clusters as $cluster)
                                                <option value="{{$cluster->id}}">{{$cluster->name . ' (' . rtrim(((($cluster->hive_host === null)?'':'Hive, ') . (($cluster->spark_host === null)?'':'Spark, ') . (($cluster->impala_host === null)?'':'Impala, ') . (($cluster->kafka_host === null)?'':'Kafka')), ', ') . ') ' . $cluster->capacity . ' GB'}}</option>
                                            @endforeach
                                        </select>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 20 20">
                                                <path
                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                            </svg>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div id="workloads-wrapper">

                        <div id="workload-row-0">
                            <div class="p-6 sm:px-20 bg-white ">
                                <div class="flex flex-wrap mb-6">
                                    <div class="w-full md:w-1/3 px-6">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="workload-0">
                                            Workload
                                        </label>
                                        @if(count($workloads) === 0)
                                            <div class="py-1">
                                                No workload available.
                                                <a href="workloads"
                                                   class="text-blue-400 hover:text-blue-600 underline">Add
                                                    one now!</a>
                                            </div>
                                        @else
                                            <div class="relative">
                                                <select id="workload-0" name="workload-0"
                                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        required>
                                                    @foreach($workloads as $workload)
                                                        <option value="{{$workload->id}}" }}>{{$workload->name . rtrim((' (' . rtrim((((!$workload->requires_hive)?'':'Hive, ') . ((!$workload->requires_spark)?'':'Spark, ') . ((!$workload->requires_impala)?'':'Impala, ') . ((!$workload->requires_kafka)?'':'Kafka')), ', ') . ')'), "(") }}</option>
                                                    @endforeach
                                                </select>
                                                <div
                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 20 20">
                                                        <path
                                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="w-full md:w-1/3 px-6  md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="duration-0">
                                            Duration
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            id="duration-0" name="duration-0" type="text" placeholder="600" required>
                                        <p class="text-gray-600 text-xs italic">In seconds</p>
                                    </div>
                                    <div class="w-full md:w-1/3 px-6  md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="format-0">
                                            Format
                                        </label>
                                        <div class="relative">
                                            <select id="format-0" name="format-0"
                                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                    required>

                                                <option value="text">Text</option>
                                                <option value="hbase">HBase</option>
                                                <option value="parquet">Parquet</option>
                                                <option value="orc">ORC</option>
                                                <option value="kudu">Kudu</option>


                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-12 sm:px-20 bg-white ">

                                <div class="flex flex-wrap mb-6">
                                    <div class="w-5/6 px-6">
                                        <input type="range" min="1" max="100" value="50" id="percentage-0" class="slider"
                                               name="percentage-0"
                                               style="width:100%">
                                        <div class="text-gray-800 -mb-6 text-left">1</div>
                                        <div class="text-gray-800 -mb-6 text-right">100</div>
                                    </div>
                                    <div class="w-1/6 px-6">
                                        <div id="percentage-0-value" class="flex-1 font-semibold text-xl text-gray-800 text-center">50%</div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <script>
                        $(document).ready(function () {
                            var x = 0;

                            $('#add-workload').click(function (e) {
                                e.preventDefault();
                                x++;
                                $('#num-of-workloads').val(x+1)
                                appendRow();
                                $('#delete-workload-box').show();
                                $('.slider').on('input', function() {
                                    var output = $('#'+ this.id +'-value')
                                    output[0].innerHTML = this.value + "%";


                                });

                            });

                            $('#delete-workload').click(function (e) {
                                e.preventDefault();
                                $('div[id=workload-row-' + x + ']').remove();
                                x--;
                                $('#num-of-workloads').val(x+1)
                                if (x == 0) {
                                    $('#delete-workload-box').hide();
                                }

                            });

                            function appendRow() {
                                var $model = $('#model').html();
                                var $insert = $model.replace(/00replace00/g, x);
                                $('#workloads-wrapper').append($insert)

                            }
                        });


                        $('.slider').on('input', function() {
                                 var output = $('#'+ this.id +'-value')
                                output[0].innerHTML = this.value + "%";


                        });



                    </script>


                    <div class="flex flex-wrap p-6 justify-center">
                        <div id="delete-workload-box" class="px-3 hidden">
                            <button id="delete-workload" type="button"
                                    class="px-5 py-2 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none">
                                Delete Workload
                            </button>
                        </div>
                        <div class="px-3">
                            <button id="add-workload" type="button"
                                    class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">
                                Add Another Workload
                            </button>
                        </div>
                    </div>


                    <div class="flex flex-wrap p-6 justify-end">
                        <div class="flex-shrink-1 px-3">
                            <button type="submit" type="button"
                                    class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">
                                Create and Run Benchamrk
                            </button>
                        </div>
                        <div class="flex-shrink-1 px-3">
                            <button id="cancel-add-workload" type="button"
                                    class="px-5 py-2 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>


            </div>


            <div class="p-6 bg-white rounded-lg shadow-xl">
                @if(count($benchmarks) === 0)
                    No benchmark to show. <a href="#" id="add-now" class="text-blue-400 hover:text-blue-600 underline">Add
                        one now!</a>
                @else
                    <div class="overflow-auto">
                        <table id="benchmarks-table"
                               class="border-collapse w-full whitespace-no-wrap">
                            <thead class="">
                            <tr class="">
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Name
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Distribution
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Version
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Capacity
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    SSH Host
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    SSH User
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    SCP Host
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    SCP User
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Spark Host
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Spark User
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Hive Host
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Hive User
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Impala Host
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Impala User
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    HDFS Host
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    HDFS User
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Kafka Brokers
                                </th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                    Remove
                                </th>
                            </tr>
                            </thead>
                            <tbody class="">
                            @foreach($data as $cluster)
                                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{Illuminate\Support\Str::limit($cluster->name, 35)}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{($cluster->cdh_version != null)? 'CDH':'HDP'}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{($cluster->cdh_version != null)? $cluster->cdh_version:$cluster->hdp_version}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->capacity}}
                                        GB
                                    </td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->ssh_host}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->ssh_user}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->scp_host}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->scp_user}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->spark_host}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->spark_user}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->hive_host}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->hive_user}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->impala_host}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->impala_user}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->hdfs_host}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->hdfs_user}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">{{$cluster->kafka_brokers}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                        <a href="clusters/delete/{{$cluster->id}}"
                                           class="px-5 py-2 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none">Remove</a>
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    <div id="model" hidden>
        <div id="workload-row-00replace00">
            <div class="p-6 sm:px-20 bg-white ">
                <div class="flex flex-wrap mb-6">
                    <div class="w-full md:w-1/3 px-6">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="workload-00replace00">
                            Workload
                        </label>
                        @if(count($workloads) === 0)
                            <div class="py-1">
                                No workload available.
                                <a href="workloads"
                                   class="text-blue-400 hover:text-blue-600 underline">Add
                                    one now!</a>
                            </div>
                        @else
                            <div class="relative">
                                <select id="workload-00replace00" name="workload-00replace00"
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        required>
                                    @foreach($workloads as $workload)
                                        <option value="{{$workload->id}}">{{$workload->name . rtrim((' (' . rtrim((((!$workload->requires_hive)?'':'Hive, ') . ((!$workload->requires_spark)?'':'Spark, ') . ((!$workload->requires_impala)?'':'Impala, ') . ((!$workload->requires_kafka)?'':'Kafka')), ', ') . ')'), "(") }}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                    </svg>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="w-full md:w-1/3 px-6  md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="duration-00replace00">
                            Duration
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="duration-00replace00" name="duration-00replace00" type="text" placeholder="600"
                            required>
                        <p class="text-gray-600 text-xs italic">In seconds</p>
                    </div>
                    <div class="w-full md:w-1/3 px-6  md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="format-00replace00">
                            Format
                        </label>
                        <div class="relative">
                            <select id="format-00replace00" name="format-00replace00"
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    required>

                                <option value="text">Text</option>
                                <option value="hbase">HBase</option>
                                <option value="parquet">Parquet</option>
                                <option value="orc">ORC</option>
                                <option value="kudu">Kudu</option>


                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-12 sm:px-20 bg-white ">

                <div class="flex flex-wrap mb-6">
                    <div class="w-5/6 px-6">
                        <input type="range" min="1" max="100" value="50" id="percentage-00replace00" class="slider"
                               name="percentage-00replace00"
                               style="width:100%">
                        <div class="text-gray-800 -mb-6 text-left">1</div>
                        <div class="text-gray-800 -mb-6 text-right">100</div>
                    </div>
                    <div class="w-1/6 px-6">
                        <div id="percentage-00replace00-value"
                             class="flex-1 font-semibold text-xl text-gray-800 text-center">
                            50%
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
