<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WpCommentMeta extends Model
{

    protected $table;
    protected $primaryKey = 'comment_ID';
    public $timestamps = false;

    //ToDo: Implement WpComment Meta Model

    public function __construct()
    {
        global $wpdb;
        $this->table = $wpdb->prefix.'comments';

        parent::__construct();
    }
}
