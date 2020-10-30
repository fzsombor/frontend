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
            $table->string("cdh_version")->nullable()->default(null);
            $table->string("hdp_version")->nullable()->default(null);
            $table->integer("capacity");
            $table->string("ssh_host")->nullable()->default(null);
            $table->string("ssh_user")->nullable()->default(null);
            $table->string("ssh_password")->nullable()->default(null);
            $table->string("scp_host")->nullable()->default(null);
            $table->string("scp_user")->nullable()->default(null);
            $table->string("scp_password")->nullable()->default(null);
            $table->string("impala_host")->nullable()->default(null);
            $table->string("impala_user")->nullable()->default(null);
            $table->string("impala_password")->nullable()->default(null);
            $table->string("hive_host")->nullable()->default(null);
            $table->string("hive_user")->nullable()->default(null);
            $table->string("hive_password")->nullable()->default(null);
            $table->string("hdfs_host")->nullable()->default(null);
            $table->string("hdfs_user")->nullable()->default(null);
            $table->string("hdfs_password")->nullable()->default(null);
            $table->string("spark_host")->nullable()->default(null);
            $table->string("spark_user")->nullable()->default(null);
            $table->string("spark_password")->nullable()->default(null);
            $table->string("kafka_brokers")->nullable()->default(null);
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
