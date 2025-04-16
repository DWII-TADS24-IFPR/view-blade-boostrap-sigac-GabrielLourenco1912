<?php

namespace App\Models;

use Couchbase\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Permission extends Model
{
    use SoftDeletes;
    protected $table = 'permissions';
    protected $fillable =
        [
            'permission',
            'role_id',
            'resource_id'
        ];

    public function role()
    {
        return $this-> belongsTo(Role::class);
    }
    public function resource()
    {
        return $this-> belongsTo(Resource::class);
    }
}
