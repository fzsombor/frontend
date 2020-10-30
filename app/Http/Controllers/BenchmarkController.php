<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\Cluster;
use App\Models\Workload;
use Illuminate\Http\Request;

class BenchmarkController extends Controller
{
    public function display()
    {
        $benchmarks = Benchmark::all();
        $clusters = Cluster::all();
        $workloads = Workload::all();
        return view('benchmarks')->with('benchmarks', $benchmarks)->with('clusters', $clusters)->with('workloads', $workloads);
    }

    public function store(Request $request)
    {

        $num = $request->input('num-of-workloads');
        $benchmark = new Benchmark();
        $benchmark->name = $request->name;
        $benchmark->size = $request->size;
        $benchmark->cluster_id = $request->cluster;
        $workloads = [];
        for ($i = 0; $i < $num; $i++){

            $workload['workload_id'] =  $request->input('workload-'.$i);
            $workload['duration'] =  $request->input('duration-'.$i);
            $workload['format'] =  $request->input('format-'.$i);
            $workload['percentage'] =  $request->input('percentage-'.$i);

            $workloads[] = $workload;
        }

        dd($benchmark);


            $parameters = '';
        $parameters .= '-d ' . $request->duration . ' ';
        foreach ($request->workloads as $workload) {
            $parameters .= '-wl ' . $workload->path . '=' . $workload->percentage . ' ';
        }
        $parameters .= '-f ' . $request->fileformat . ' ';
        $parameters .= '-s' . $request->size;

        for ($i = 0; $i < $request->runs; $i++) {
            exec('framework.jar ' . $parameters);
        }

        $this->parseResults();

    }

    private function parseResults()
    {
        //
    }
}
