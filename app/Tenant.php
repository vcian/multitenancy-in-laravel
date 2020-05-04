<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Tenant extends Model
{
    protected $connection  = 'landlord';

    protected $guarded = [];

    public function configure() {
        config([
            'database.connections.tenant.database' =>$this->database,
        ]);
        DB::purge('tenant');
        DB::reconnect('tenant');
        Schema::connection('tenant')->getConnection()->reconnect();
        return $this;
    }

    public function use() {
        app()->forgetInstance('tenant');
        app()->instance('tenant',$this);
        return $this;
    }
}
