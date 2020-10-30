<x-app-layout>
    <x-slot name="header">
        <div class="flex ">
            <div class="flex-1 font-semibold text-xl text-gray-800 text-left">
                {{ __('Clusters') }}
            </div>
            <div class="flex-1 f text-xl text-gray-800 text-right">
                <a id="add-cluster-button"
                   class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">+
                    Add Cluster</a>
            </div>
        </div>
    </x-slot>
    <script>
        $(document).ready(function () {
            $("#add-cluster-button").click(function () {
                $("#form-div").show();
            });
            $("#add-now").click(function () {
                $("#form-div").show();
            });
            $("#cancel-cluster").click(function () {
                $("#form-div").hide();
            });
        });
    </script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="form-div" class="bg-white overflow-hidden shadow-xl rounded-lg my-4 hidden">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Add a new cluster
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
                <form class="w-full max-w-7xl" method='post' action='{{ url('add-cluster') }}'>
                    @csrf
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="flex flex-wrap  mb-6">
                            <div class="w-full p-6">
                                <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Cluster name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="name" name="name" type="text" placeholder="Cluster 1">
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full md:w-1/3 px-6  md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="cdh_version">
                                    CDH Version
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="cdh_version" name="cdh_version" type="text" placeholder="6.3.3">
                            </div>
                            <div class="w-full md:w-1/3 px-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="hdp_version">
                                    HDP Version
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="hdp_version" name="hdp_version" type="text" placeholder="3.1.2">
                            </div>
                            <div class="w-full md:w-1/3 px-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="capacity">
                                    Capacity
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="capacity" name="capacity" type="text" placeholder="5000" required>
                                <p class="text-gray-600 text-xs italic">Free storage space in GB</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="flex flex-wrap  mb-6">
                            <div class="w-full p-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       FOR="scp_host">
                                    SCP host
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="scp_host" name="scp_host" type="text" placeholder="impala.daemon.host.fqdn">
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="scp_user">
                                    User
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="scp_user" name="scp_user" type="text" placeholder="root">
                            </div>
                            <div class="w-full md:w-1/2 px-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="scp_password">
                                    Password
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="scp_password" name="scp_password" type="password" placeholder="password">
                            </div>
                        </div>
                    </div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full p-6">
                                <label for="ssh_host" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    SSH host
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="ssh_host" name="ssh_host" type="text" placeholder="ssh.host.fqdn">
                                <p class="text-gray-600 text-xs italic">An SSH server must run on this host</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap  mb-6">
                            <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="ssh_user">
                                    User
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="ssh_user" name="ssh_user" type="text" placeholder="root">
                            </div>
                            <div class="w-full md:w-1/2 px-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="ssh_password">
                                    Password
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="ssh_password" name="ssh_password" type="password" placeholder="password">
                            </div>
                        </div>
                    </div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full p-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="hive_host">
                                    HiveServer2 host
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="hive_host" name="hive_host" type="text" placeholder="hive.host.fqdn">
                                <p class="text-gray-600 text-xs italic">A HiveServer2 must run on this host</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="hive_user">
                                    User
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="hive_user" name="hive_user" type="text" placeholder="root">
                            </div>
                            <div class="w-full md:w-1/2 px-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="hive_password">
                                    Password
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="hive_password" name="hive_password" type="password" placeholder="password">
                            </div>
                        </div>
                    </div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full p-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="spark_host">
                                    Spark Gateway host
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="spark_host" name="spark_host" type="text" placeholder="spark.host.fqdn">
                                <p class="text-gray-600 text-xs italic">A Spark Gateway must run on this host</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="spark_user">
                                    User
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="spark_user" name="spark_user" type="text" placeholder="root">

                            </div>
                            <div class="w-full md:w-1/2 px-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="spark_password">
                                    Password
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="spark_password" name="spark_password" type="password" placeholder="password">
                            </div>
                        </div>
                    </div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full p-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="hdfs_host">
                                    HDFS client host
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="hdfs_host" name="hdfs_host" type="text" placeholder="hdfs.host.fqdn">
                                <p class="text-gray-600 text-xs italic">An HDFS client must run on this host connecting
                                    to its own Namenode</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="hdfs_user">
                                    User
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="hdfs_user" name="hdfs_user" type="text" placeholder="root">

                            </div>
                            <div class="w-full md:w-1/2 px-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="hdfs_password">
                                    Password
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="hdfs_password" name="hdfs_password" type="password" placeholder="password">
                            </div>
                        </div>
                    </div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full p-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="impala_host">
                                    Impala Daemon host
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="impala_host" name="impala_host" type="text" placeholder="impala.daemon.host.fqdn">
                                <p class="text-gray-600 text-xs italic">An Impala Daemon must run on this host</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="impala_user">
                                    User
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="impala_user" name="impala_user" type="text" placeholder="root">
                            </div>
                            <div class="w-full md:w-1/2 px-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="impala_password">
                                    Password
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="impala_password" name="impala_password" type="password" placeholder="password">
                            </div>
                        </div>
                    </div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="flex flex-wrap mb-6">
                            <div class="w-full p-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="kafka_brokers">
                                    Kafka Brokers
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="kafka_brokers" name="kafka_brokers" type="text" placeholder="1.kafka.broker.fqdn,2.kafka.broker.fqdn">
                                <p class="text-gray-600 text-xs italic">Delimited with commas(,)</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap mb-6 p-3 justify-end">
                            <div class="flex-shrink-1 px-3">
                                <button
                                    class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none"
                                    type="submit" id="submit_btn" name="submit_btn">
                                    Add Cluster
                                </button>
                            </div>
                            <div class="flex-shrink-1 px-3">
                                <button id="cancel-cluster"
                                   class="px-5 py-2 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none">
                                    Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>


            <div class="p-6 bg-white rounded-lg shadow-xl">
                @if(count($data) === 0)
                    No cluster to show. <a href="#" id="add-now" class="text-blue-400 hover:text-blue-600 underline">Add
                        one now!</a>
                @else
                <div class="overflow-auto">
                    <table id="clusters-table"
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
    </div>
</x-app-layout>
