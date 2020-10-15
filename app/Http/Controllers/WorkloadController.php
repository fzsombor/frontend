<?php

namespace App\Http\Controllers;

use App\Models\Cluster;
use App\Models\Workload;
use Illuminate\Http\Request;

class WorkloadController extends Controller
{
    public function display()
    {
        $workloads = Cluster::all();

        return view('workloads')->with('data', $workloads);
    }

    public function store(Request $request)
    {

        $workload = new Workload();

        $workload->name = $request->name;
        $workload->requires_impala = $request->requires_impala;
        $workload->requires_spark = $request->requires_spark;
        $workload->requires_hive = $request->requires_hive;
        $workload->path = $request->path;

        $workload->save();

        $this->display();
    }

}
