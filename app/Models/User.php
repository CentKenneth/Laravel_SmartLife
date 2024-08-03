<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'or_no',
        'email',
        'lastname',
        'firstname',
        'middle_name',
        'password',
        'role',
        'bday',
        'age',
        'place_of_birth',
        'gender',
        'civil_status',
        'employment_type',
        'occupation',
        'nationality',
        'religion',
        'height',
        'weight',
        'bloodtype',
        'present_address',
        'permanent_address',
        'contact_no',
        'spouse_name',
        'spouse_bday',
        'spouse_place_of_birth',
        'spouse_age',
        'prim_beneficiary_name',
        'prim_bday',
        'prim_age',
        'prim_contact',
        'sec_beneficiary_name',
        'sec_bday',
        'sec_age',
        'sec_contact'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        
    ];
    
    // The attributes that should be cast to native types.
    protected $casts = [
        'bday' => 'date',
        'spouse_bday' => 'date',
        'prim_bday' => 'date',
        'sec_bday' => 'date',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function transactions(): HasMany{
        return $this->hasMany(Transaction::class);
    }

    

   
}
