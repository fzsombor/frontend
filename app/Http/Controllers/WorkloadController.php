<?php

namespace App\Http\Controllers;


use App\Models\Workload;
use Illuminate\Http\Request;

use ZanySoft\Zip\Zip;

class WorkloadController extends Controller
{
    public function display()
    {
        $workloads = Workload::all();

        return view('workloads')->with('data', $workloads);
    }

    public function store(Request $request)
    {

        $workload = new Workload();
        $workload->requires_impala = $request->requires_impala == "on";
        $workload->requires_spark = $request->requires_spark == "on";
        $workload->requires_hive = $request->requires_hive == "on";
        $workload->requires_kafka = $request->requires_kafka == "on";
        $workload->filepath = $request->filepath;
        $replace = array("\\", "/", " ", ".");
        $filename = str_replace($replace, "_", $request->name);
        $workload->name = $filename;


        $uploaded = $request->file('workload_file')->storeAs($request->filepath, $filename . '.zip', 'public');
        $zip = Zip::open(storage_path() . '/app/public/' . $uploaded);
        $zip->extract(storage_path() . '/app/public/' . $request->filepath);

        $workload->save();

        return redirect()->route('workloads');
    }

    public function delete(int $id)
    {
        Workload::destroy($id);

        return redirect()->route('workloads');
    }

}
