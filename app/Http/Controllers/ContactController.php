<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Handle contact form submission for all services
     */
    public function submit(Request $request)
    {
        // Validate the request using the Contact model's validation rules
        $validator = Validator::make($request->all(), Contact::validationRules(), Contact::validationMessages());

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please correct the errors below and try again.',
                    'errors' => $validator->errors()
                ], 422);
            }
            
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please correct the errors below and try again.');
        }

        try {
            // Create contact record with service_type to identify the source
            $contact = Contact::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'), 
                'country_code' => $request->input('country_code'), 
                'query' => $request->input('query'),
                'service_type' => $request->input('service_type'),
                'status' => 'active'
            ]);

            // Return success response
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for your inquiry! We will contact you soon.',
                    'data' => $contact
                ]);
            }

            return redirect()->back()->with('success', 'Thank you for your inquiry! We will contact you soon.');

        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Contact form submission error: ' . $e->getMessage());
            
            // Return error response
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry, there was an error submitting your request. Please try again later.'
                ], 500);
            }
            
            return redirect()->back()
                ->withInput()
                ->with('error', 'Sorry, there was an error submitting your request. Please try again later.');
        }
    }
}