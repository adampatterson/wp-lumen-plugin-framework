<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WpUserMeta extends Model
{

    protected $table;
    public $timestamps = false;

    public function __construct()
    {
        global $wpdb;
        $this->table = $wpdb->base_prefix.'usermeta';

        parent::__construct();
    }

    public function meta()
    {
        return $this->hasOne(WpUser::class, 'user_id', 'ID');
    }
}
