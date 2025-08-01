<?php

namespace App\Http\Controllers;

use App\AcademicYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AcademicYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academicYears = AcademicYear::orderBy('start_date', 'desc')->get();
        return response()->json($academicYears);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'year_name' => 'required|string|max:255|unique:academic_years',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'is_current' => 'boolean',
            'status' => 'required|in:active,inactive,archived'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $academicYear = AcademicYear::create($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Academic year created successfully',
                'data' => $academicYear
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating academic year: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AcademicYear  $academicYear
     * @return \Illuminate\Http\Response
     */
    public function show(AcademicYear $academicYear)
    {
        return response()->json($academicYear);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AcademicYear  $academicYear
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcademicYear $academicYear)
    {
        $validator = Validator::make($request->all(), [
            'year_name' => 'required|string|max:255|unique:academic_years,year_name,' . $academicYear->year_id . ',year_id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'is_current' => 'boolean',
            'status' => 'required|in:active,inactive,archived'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $academicYear->update($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Academic year updated successfully',
                'data' => $academicYear
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating academic year: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AcademicYear  $academicYear
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicYear $academicYear)
    {
        try {
            // Prevent deletion of current academic year
            if ($academicYear->is_current) {
                return response()->json([
                    'success' => false,
                    'message' => 'Cannot delete the current academic year'
                ], 400);
            }

            $academicYear->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Academic year deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting academic year: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Set the current academic year
     *
     * @param  \App\AcademicYear  $academicYear
     * @return \Illuminate\Http\Response
     */
    public function setCurrent(AcademicYear $academicYear)
    {
        try {
            // Update all academic years to not be current
            AcademicYear::where('is_current', true)->update(['is_current' => false]);
            
            // Set this academic year as current
            $academicYear->update(['is_current' => true]);
            
            return response()->json([
                'success' => true,
                'message' => 'Academic year set as current successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error setting current academic year: ' . $e->getMessage()
            ], 500);
        }
    }
}
