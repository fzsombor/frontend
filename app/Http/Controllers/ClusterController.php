<?php

namespace App\Http\Controllers;

use App\Models\Cluster;
use App\Models\Workload;
use Illuminate\Http\Request;

class ClusterController extends Controller
{
    public function display()
    {
        $clusters = Cluster::all();

        return view('clusters')->with('data', $clusters);
    }

    public function store(Request $request)
    {
        $cluster = new Cluster();
        $cluster->name = $request->name;
        $cluster->cdh_version = $request->cdh_version;
        $cluster->hdp_version = $request->hdp_version;
        $cluster->capacity = $request->capacity;
        $cluster->ssh_host = $request->ssh_host;
        $cluster->ssh_user = $request->ssh_user;
        $cluster->ssh_password = $request->ssh_password;
        $cluster->scp_host = $request->scp_host;
        $cluster->scp_user = $request->scp_user;
        $cluster->scp_password = $request->scp_password;
        $cluster->impala_host = $request->impala_host;
        $cluster->impala_user = $request->impala_user;
        $cluster->impala_password = $request->impala_password;
        $cluster->hive_host = $request->hive_host;
        $cluster->hive_user = $request->hive_user;
        $cluster->hive_password = $request->hive_password;
        $cluster->hdfs_host = $request->hdfs_host;
        $cluster->hdfs_user = $request->hdfs_user;
        $cluster->hdfs_password = $request->hdfs_password;
        $cluster->spark_host = $request->spark_host;
        $cluster->spark_user = $request->spark_user;
        $cluster->spark_password = $request->spark_password;
        $cluster->kafka_brokers = $request->kafka_brokers;

        $cluster->save();

        return redirect()->route('clusters');
    }

    public function delete(int $id)
    {
        Cluster::destroy($id);
        return redirect()->route('clusters');
    }

}
