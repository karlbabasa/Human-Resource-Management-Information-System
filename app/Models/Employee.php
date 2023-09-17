<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'middle_name', 'last_name', 'email', 'phone', 'address', 'position', 'department', 'started_date', 'picture', 'remark', 'rank'];

    public function scopeFilter($query, array $filters) {
 
         if($filters['search'] ?? false) {
             $query->where('first_name', 'like', '%' . request('search') . '%')
             ->orWhere('middle_name', 'like', '%' . request('search') . '%')
             ->orWhere('last_name', 'like', '%' . request('search') . '%')
             ->orWhere('email', 'like', '%' . request('search') . '%')
             ->orWhere('phone', 'like', '%' . request('search') . '%')
             ->orWhere('address', 'like', '%' . request('search') . '%')
             ->orWhere('position', 'like', '%' . request('search') . '%')
             ->orWhere('department', 'like', '%' . request('search') . '%')
             ->orWhere('rank', 'like', '%' . request('search') . '%');
         }
     }
 
     // Relationship To User
     public function user() {
         return $this->belongsTo(User::class, 'user_id');
     }
 }
