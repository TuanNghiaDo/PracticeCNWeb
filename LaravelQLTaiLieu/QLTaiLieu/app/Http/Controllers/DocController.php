<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use Illuminate\Http\Request;
use App\Models\DocType;

class DocController extends Controller
{
    public function index()
    {
        $docs = Doc::with('doctype')->get();
        return view('docs.index', compact('docs'));
    }


    public function create()
    {
        $docTypes = DocType::all();
        return view('docs.create', compact('docTypes'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'doc_name' => 'required|string|max:255',
            'doc_type_id' => 'required|exists:doctype,doc_type_id',
        ]);

        Doc::create([
            'doc_name' => $request->doc_name,
            'doc_type_id' => $request->doc_type_id,
        ]);

        return redirect()->route('docs.index')->with('success', 'Document created successfully.');
    }


    public function show(Doc $doc)
    {
        return view('docs.show', compact('doc'));
    }


    public function edit(Doc $doc)
    {
        $docTypes = DocType::all();
        return view('docs.update', ['doc' => $doc, 'docTypes' => $docTypes]);
    }


    public function update(Request $request, Doc $doc)
    {
        $request->validate([
            'doc_name' => 'required|string|max:255',
            'doc_type_id' => 'required|exists:doctype,doc_type_id',
        ]);

        $doc->update([
            'doc_name' => $request->doc_name,
            'doc_type_id' => $request->doc_type_id,
        ]);

        return redirect()->route('docs.index')->with('success', 'Document updated successfully.');
    }

    public function confirmDelete($id)
    {
        $doc = Doc::findOrFail($id);
        // Assuming you want to pass the doc to the confirmation view
        return view('docs.confirm_delete', compact('doc'));
    }

    public function destroy(Doc $doc)
    {
        $doc->delete();
        return redirect()->route('docs.index')->with('success', 'Document deleted successfully.');
    }
}
