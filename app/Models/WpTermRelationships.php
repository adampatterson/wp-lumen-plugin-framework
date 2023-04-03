<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WpTermRelationships extends Model
{

    protected $table;
    protected $primaryKey = 'object_id';
    public $timestamps = false;

    public function __construct()
    {
        global $wpdb;
        $this->table = $wpdb->prefix.'term_relationships';

        parent::__construct();
    }
}
