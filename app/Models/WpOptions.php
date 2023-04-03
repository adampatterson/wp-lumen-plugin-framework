<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WpOptions extends Model
{

    protected $table;
    protected $primaryKey = 'option_id';
    public $timestamps = false;

    //ToDo: Implement WpOptions Model

    public function __construct()
    {
        global $wpdb;
        $this->table = $wpdb->prefix.'options';

        parent::__construct();
    }
}
