<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    // Show form to add new candidate
    public function create()
    {
        return view('candidate'); 
    }

    // Store new candidate
    public function store(Request $req)
    {
        $candidate = new Candidate();
        $candidate->name = $req->name;
        $candidate->email = $req->email;
        $candidate->save();

        return $candidate ? redirect('list') : "Operation Failed";
    }

    // Show all candidates (with optional search)
    public function index(Request $req)
    {
        $query = Candidate::query();

        if ($req->filled('search')) {
            $query->where('name', 'like', '%' . $req->search . '%')
                  ->orWhere('email', 'like', '%' . $req->search . '%');
        }

        $data = $query->paginate(3)->appends(['search' => $req->search]);

        return view('listcandidate', ['candidates' => $data, 'search' => $req->search ?? '']);
    }

    // Delete single candidate
    public function destroy($id)
    {
        $isDeleted = Candidate::destroy($id);
        return $isDeleted ? redirect('list') : "Delete Failed";
    }

    // Show edit form
    public function edit($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('candidateedit', ['data' => $candidate]);
    }

    // Update candidate
    public function update(Request $req, $id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->name = $req->name;
        $candidate->email = $req->email;

        return $candidate->save() ? redirect('list') : "Candidate is not updated";
    }

    // Delete multiple candidates
    public function delete_multi(Request $req)
    {
        $result = Candidate::destroy($req->ids);
        return $result ? redirect('list') : "Student data not deleted";
    }
}
