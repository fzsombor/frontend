<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClustersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clusters', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("cdh_Version");
            $table->string("hdp_version");
            $table->integer("capacity");
            $table->string("ssh_host");
            $table->string("ssh_user");
            $table->string("ssh_password");
            $table->string("scp_host");
            $table->string("scp_user");
            $table->string("scp_password");
            $table->string("impala_host");
            $table->string("impala_user");
            $table->string("impala_password");
            $table->string("hive_host");
            $table->string("hive_user");
            $table->string("hive_password");
            $table->string("hdfs_host");
            $table->string("hdfs_user");
            $table->string("hdfs_password");
            $table->string("spark_host");
            $table->string("spark_user");
            $table->string("spark_password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clusters');
    }
}
