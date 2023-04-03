<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WpComment extends Model
{

    protected $table;
    protected $primaryKey = 'comment_ID';
    protected $hidden = [];

    //ToDo: Implement WpComment Model
    public function __construct()
    {
        global $wpdb;
        $this->table = $wpdb->prefix.'comments';

        parent::__construct();
    }
}
