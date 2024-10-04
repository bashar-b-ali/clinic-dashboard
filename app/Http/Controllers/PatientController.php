<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use App\Models\PatientFiles;
use App\Models\FinancialTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    
    public function index()
    {
        $patients = Patients::get();

        return view('pages.patient.patients')->with(["patients"=>$patients]);
    }

    public function addPatient()
    {
        return view('pages.patient.add-patient');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name',
            'phone',
            'email', 
            'dob', 
        ]);

        $exists = Patients::where('phone', $request->phone)->exists();
        if ($exists){
            return response()->json(
                ['responseText' => 'The phone number has already been taken. Please use a different phone.',
                ], 422);
            
        }
    
        // Check for email: if it is an empty string, set it to null
        $email = $request->input('email');
        if ($email === '') {
            $email = null;
        }
    
    
        // Create a new patient with specific attributes
        $patient = Patients::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $email, 
            'dob' => $request->input('dob'), 
        ]);

        
        return response()->json(
            ['responseText' => 'Patient Added Successfully',
             'action' => 'create',
             'newData'=> $patient
            ], 200);

    }

    public function show($id)
    {
        $patient = Patients::where('id', $id)->first();
        $files = PatientFiles::where('patient_id', $id)->get();
        return view('pages.patient.patient')->with(['patient'=>$patient, 'files'=>$files] );
    }

    // Show the form for creating a new patient
    public function create()
    {
        return view('patients.create');
    }

    // Update the specified patient in storage
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:patients,id', // Validate that the ID exists
            'name' => 'required|string|max:255',
            'email' => '' ,
            'phone' => 'required|string',
        ]);
    
        // Retrieve the patient by ID
        $patient = Patients::findOrFail($request->id);
    
        // Update the patient with the request data
        $patient->update($request->only('name', 'email', 'phone'));
        $patient = Patients::findOrFail($request->id);
        return response()->json([
            'responseText' => 'Patient Updated successfully.',
            'action' => "update",
            'id' => $patient->id,
            'updatedData' => $patient
        ], 200);
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $patient = Patients::findOrFail($id);
        $patient->delete(); // Delete the patient record

        return response()->json([
            'responseText' => 'Patient deleted successfully.',
            'action' => "destroy",
            'id' => $id,
        ], 200);
    }

    // Add a file to the patient's record
    public function addFile(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048', 
        ]);
  

        $path = $request->file('file')->store('patient_files', 'public');

        PatientFiles::create([
            'patient_id' => $request->id,
            'file' => $path,
            'file_type' => "image",

        ]);

        return response()->json([
            'responseText' => 'Image added successfully.',
            'action' => "",
        ], 200);
    }

    // View transactions for the patient
    public function transactions(Patients $patient)
    {
        $this->authorize('view-transactions', $patient);
        $transactions = FinancialTransaction::where('patient_id', $patient->id)->get();
        return view('patients.transactions', compact('patient', 'transactions'));
    }

    // Store a new transaction for the patient
    public function addTransaction(Request $request, Patients $patient)
    {
        $this->authorize('view-transactions', $patient);
    
        // Ensure that the patient belongs to the user's clinic
        $user = Auth::user();
        if ($user->role !== 'admin' && $patient->clinic_id !== $user->clinic_id) {
            return redirect()->back()->withErrors(['transaction' => 'You do not have permission to add transactions for this patient.']);
        }
    
        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
        ]);
    
        FinancialTransaction::create([
            'patient_id' => $patient->id,
            'amount' => $request->amount,
            'description' => $request->description,
        ]);
    
        return redirect()->back()->with('success', 'Transaction added successfully.');
    }
    
}