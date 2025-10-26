<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'country_code',
        'query',
        'service_type',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Validation rules for contact form
     *
     * @return array
     */
    public static function validationRules()
    {
        return [
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20|min:10',
            'country_code' => 'nullable|string|max:5',
            'query' => 'required|string|min:10|max:2000',
        ];
    }

    /**
     * Custom validation messages
     *
     * @return array
     */
    public static function validationMessages()
    {
        return [
            'name.required' => 'Name is required.',
            'name.min' => 'Name must be at least 2 characters.',
            'name.max' => 'Name cannot exceed 255 characters.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'mobile.required' => 'Mobile number is required.',
            'mobile.min' => 'Mobile number must be at least 10 digits.',
            'mobile.max' => 'Mobile number cannot exceed 20 characters.',
            'query.required' => 'Query is required.',
            'query.min' => 'Query must be at least 10 characters.',
            'query.max' => 'Query cannot exceed 2000 characters.',
        ];
    }
}
