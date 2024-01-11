<?php

namespace App\Http\Controllers\Cases;

use MediaService;
use App\Models\Cases;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CasesContoller extends Controller
{

    protected $mediaService;

    public function __construct(MediaService $mediaService)
    {
        $this->mediaService = $mediaService;
    }

    public function index()
    {
        $cases = Cases::all();
        return view('cases.index', compact('cases'));
    }

    public function create()
    {
        return view('cases.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust based on your requirements
        ]);

        $case = Cases::create([
            'content' => $request->input('content'),
            'title' => $request->input('title'),
        ]);

        if ($request->hasFile('image')) {
            $this->mediaService->createOrUpdateMedia($case, $request->file('image'));
        }

        return redirect()->route('cases.index')->with('success', 'Case created successfully.');
    }

    public function show($id)
    {
        $case = Cases::findOrFail($id);
        return view('cases.show', compact('case'));
    }

    public function edit($id)
    {
        $case = Cases::findOrFail($id);
        return view('cases.edit', compact('case'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'content' => 'required',
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust based on your requirements
        ]);

        $case = Cases::findOrFail($id);
        $case->update([
            'content' => $request->input('content'),
            'title' => $request->input('title'),
        ]);

        if ($request->hasFile('image')) {
            $this->mediaService->createOrUpdateMedia($case, $request->file('image'));
        }

        return redirect()->route('cases.index')->with('success', 'Case updated successfully.');
    }

    public function destroy($id)
    {
        $case = Cases::findOrFail($id);
        $this->mediaService->deleteMedia($case->id);
        $case->delete();

        return redirect()->route('cases.index')->with('success', 'Case deleted successfully.');
    }
}
