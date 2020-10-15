<?php

namespace App\Http\Controllers;

use App\Models\Cluster;
use App\Models\Workload;
use Illuminate\Http\Request;

class BenchmarkController extends Controller
{
    public function display()
    {
        //$data['clusters'] =  Cluster::all();
        //$data['workloads'] = Workload::all();

        return view('benchmark')/*->with('data', $data)*/ ;
    }

    public function benchmark(Request $request)
    {

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
