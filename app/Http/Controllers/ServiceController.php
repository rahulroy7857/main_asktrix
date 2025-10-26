<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class ServiceController extends Controller
{
    /**
     * Common data for all service pages
     */
    protected function getCommonData()
    {
        return [
            'companyName' => 'Asktrix',
            'companyTagline' => 'Accurate BookKeeping, Empowered Growth, Enhanced Compliances, Strong Finances, Strong Future',
            'contactInfo' => [
                'address' => '4/1, 4th Block, 1st Main, MMDA Colony, Maduravoyal, Chennai Tamil Nadu, India, 600095',
                'phone' => '+91 7004670611'
            ]
        ];
    }

    /**
     * Get service-specific data
     */
    abstract protected function getServiceData();

    /**
     * Show the service page
     */
    public function index()
    {
        $data = array_merge($this->getCommonData(), $this->getServiceData());
        return view($this->getViewName(), $data);
    }

    /**
     * Get the view name for the service
     */
    abstract protected function getViewName();

    /**
     * Handle contact form submission
     */
    public function contact(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'query' => 'required|string|max:1000'
        ]);

        // Here you would typically save to database or send email
        // For now, we'll just return a success message
        
        return back()->with('success', 'Thank you for your query. We will get back to you soon!');
    }
}