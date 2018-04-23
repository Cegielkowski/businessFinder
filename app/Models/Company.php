<?php
    namespace App\Models;
    use Eloquent; 
    use DB;   
    use Illuminate\Database\Eloquent\SoftDeletes;
    
    class Company extends Eloquent
    {
        use SoftDeletes;
        protected $dates = ['deleted_at'];
        protected $guarded = [];
    }