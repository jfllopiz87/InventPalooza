<?php

namespace Bican\Roles\Models;

use Bican\Roles\Traits\SlugableTrait;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Model;
use Bican\Roles\Traits\PermissionTrait;
use Bican\Roles\Contracts\PermissionContract;

class Permission extends Model implements PermissionContract
{
    use PermissionTrait, SlugableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'model'];

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     * @return mixed
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        if ($connection = Config::get('roles.connection')) {
            $this->connection = $connection;
        }
    }
}
