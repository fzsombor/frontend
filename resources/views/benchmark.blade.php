<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Benchmark') }}
        </h2>
    </x-slot>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                                <div class="mt-8 text-2xl">
                                    Run the benchmark
                                </div>

                                <div class="mt-6 text-gray-500">
                                    Description of doing the
                                </div>
                            </div>

                            <form class="w-full max-w-lg" method='post' action='add-cluster'>

                                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full p-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                Cluster details
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="name" type="text" placeholder="Cluster name" required>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mx-3 mb-6">
                                        <div class="w-full md:w-1/3 px-6 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="cdh_version">
                                                CDH Version
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                id="cdh_version" type="text" placeholder="6.3.3" required>
                                        </div>
                                        <div class="w-full md:w-1/3 px-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="hdp_version">
                                                HDP Version
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="hdp_version" type="text" placeholder="3.1.2" required>
                                        </div>
                                        <div class="w-full md:w-1/3 px-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="capacity">
                                                Capacity
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="capacity" type="text" placeholder="5000" required>
                                            <p class="text-gray-600 text-xs italic">Free storage space in GB</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full p-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                Impala Daemon host
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="impala_host" type="text" placeholder="impala.daemon.host.fqdn" required>
                                            <p class="text-gray-600 text-xs italic">An Impala Daemon must run on this host</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="impala_user">
                                                User
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                id="impala_user" type="text" placeholder="root" required>
                                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                        </div>
                                        <div class="w-full md:w-1/2 px-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="impala_user">
                                                Password
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="impala_user" type="password" placeholder="password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full p-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                SSH host
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="ssh_host" type="text" placeholder="ssh.host.fqdn" required>
                                            <p class="text-gray-600 text-xs italic">An SSH server must run on this host</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="ssh_user">
                                                User
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                id="ssh_user" type="text" placeholder="root" required>
                                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                        </div>
                                        <div class="w-full md:w-1/2 px-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="ssh_user">
                                                Password
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="ssh_user" type="password" placeholder="password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full p-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                HiveServer2 host
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="hive_host" type="text" placeholder="hive.host.fqdn" required>
                                            <p class="text-gray-600 text-xs italic">A HiveServer2 must run on this host</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="hive_user">
                                                User
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                id="hive_user" type="text" placeholder="root" required>
                                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                        </div>
                                        <div class="w-full md:w-1/2 px-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="hive_user">
                                                Password
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="hive_user" type="password" placeholder="password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full p-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                Spark Gateway host
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="spark_host" type="text" placeholder="spark.host.fqdn" required>
                                            <p class="text-gray-600 text-xs italic">A Spark Gateway must run on this host</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="spark_user">
                                                User
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                id="spark_user" type="text" placeholder="root" required>
                                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                        </div>
                                        <div class="w-full md:w-1/2 px-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="spark_user">
                                                Password
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="spark_user" type="password" placeholder="password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full p-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                HDFS client host
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="hdfs_host" type="text" placeholder="hdfs.host.fqdn" required>
                                            <p class="text-gray-600 text-xs italic">An HDFS client must run on this host connecting to its own Namenode</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="hdfs_user">
                                                User
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                id="hdfs_user" type="text" placeholder="root" required>
                                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                        </div>
                                        <div class="w-full md:w-1/2 px-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="hdfs_user">
                                                Password
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="hdfs_user" type="password" placeholder="password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full p-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                Impala Daemon host
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="impala_host" type="text" placeholder="impala.daemon.host.fqdn" required>
                                            <p class="text-gray-600 text-xs italic">An Impala Daemon must run on this host</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="impala_user">
                                                User
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                id="impala_user" type="text" placeholder="root" required>
                                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                        </div>
                                        <div class="w-full md:w-1/2 px-6">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                   for="impala_user">
                                                Password
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="impala_user" type="password" placeholder="password" required>
                                        </div>
                                    </div>
                                </div>
                            </form>



            </div>
        </div>
    </div>
</x-app-layout>
