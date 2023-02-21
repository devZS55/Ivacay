<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MembershipPlanModel;

class MembershipModel extends Model
{
    protected $table= "member_ships";
    use HasFactory;

    public function getUser()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function getMembershipPlan()
    {
        return $this->belongsTo('App\Models\MembershipPlanModel','membership_id');
    }
}
