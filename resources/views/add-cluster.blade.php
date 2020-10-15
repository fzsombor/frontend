<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clusters') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-8 text-2xl">
                        Welcome to your Jetstream application!
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

            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                            <path
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a
                                href="https://laravel.com/docs">Documentation</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            Laravel has wonderful documentation covering every aspect of the framework. Whether you're
                            new to the framework or have previous experience, we recommend reading all of the
                            documentation from beginning to end.
                        </div>

                        <a href="https://laravel.com/docs">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Explore the documentation</div>

                                <div class="ml-1 text-indigo-500">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd"
                                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                            <path
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laracasts.com">Laracasts</a>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
                            Check them out, see for yourself, and massively level up your development skills in the
                            process.
                        </div>

                        <a href="https://laracasts.com">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Start watching Laracasts</div>

                                <div class="ml-1 text-indigo-500">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd"
                                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                            <path
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a
                                href="https://tailwindcss.com/">Tailwind</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            Laravel Jetstream is built with Tailwind, an amazing utility first CSS framework that
                            doesn't get in your way. You'll be amazed how easily you can build and maintain fresh,
                            modern designs with this wonderful framework at your fingertips.
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 md:border-l">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                            <path
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Authentication</div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            Authentication and registration views are included with Laravel Jetstream, as well as
                            support for user email verification and resetting forgotten passwords. So, you're free to
                            get started what matters most: building your application.
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
</x-app-layout>
