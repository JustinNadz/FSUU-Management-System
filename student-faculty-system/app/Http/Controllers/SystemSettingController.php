<?php

namespace App\Http\Controllers;

use App\SystemSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SystemSettingController extends Controller
{
    public function index()
    {
        $settings = SystemSetting::with('updatedBy')->paginate(15);
        return view('system-settings.index', compact('settings'));
    }

    public function create()
    {
        return view('system-settings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'setting_name' => 'required|string|max:50|unique:system_settings',
            'setting_value' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'data_type' => 'required|in:string,number,boolean,date'
        ]);

        SystemSetting::create([
            'setting_name' => $request->setting_name,
            'setting_value' => $request->setting_value,
            'description' => $request->description,
            'data_type' => $request->data_type,
            'updated_by' => Auth::id(),
            'last_updated' => now()
        ]);

        return redirect()->route('system-settings.index')->with('success', 'System setting created successfully.');
    }

    public function show(SystemSetting $systemSetting)
    {
        $systemSetting->load('updatedBy');
        return view('system-settings.show', compact('systemSetting'));
    }

    public function edit(SystemSetting $systemSetting)
    {
        return view('system-settings.edit', compact('systemSetting'));
    }

    public function update(Request $request, SystemSetting $systemSetting)
    {
        $request->validate([
            'setting_value' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'data_type' => 'required|in:string,number,boolean,date'
        ]);

        $systemSetting->update([
            'setting_value' => $request->setting_value,
            'description' => $request->description,
            'data_type' => $request->data_type,
            'updated_by' => Auth::id(),
            'last_updated' => now()
        ]);

        return redirect()->route('system-settings.index')->with('success', 'System setting updated successfully.');
    }

    public function destroy(SystemSetting $systemSetting)
    {
        $systemSetting->delete();
        return redirect()->route('system-settings.index')->with('success', 'System setting deleted successfully.');
    }

    public function getSetting($name)
    {
        $setting = SystemSetting::where('setting_name', $name)->first();
        return response()->json($setting);
    }

    public function updateSetting(Request $request, $name)
    {
        $request->validate([
            'setting_value' => 'required|string|max:255'
        ]);

        $setting = SystemSetting::where('setting_name', $name)->first();
        
        if (!$setting) {
            return response()->json(['error' => 'Setting not found'], 404);
        }

        $setting->update([
            'setting_value' => $request->setting_value,
            'updated_by' => Auth::id(),
            'last_updated' => now()
        ]);

        return response()->json(['message' => 'Setting updated successfully']);
    }
} 