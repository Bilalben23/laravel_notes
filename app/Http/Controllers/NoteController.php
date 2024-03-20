<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;

use function Laravel\Prompts\alert;
use function Laravel\Prompts\confirm;

class NoteController extends Controller
{
    public function index()
    {
        $notesNumber = Note::where("user_id", 1)->count();
        $notes = Note::query()->orderByDesc("created_at")->paginate(15);
        return view("note.index")
        ->with(["notes"=> $notes, "notesNumber" => $notesNumber]);

    }

    public function create()
    {
        return view("note.create");
    }

    public function store(StoreNoteRequest $request)
    {
        $note = new Note();
        $note->note = $request->get("note");
        $note->user_id = 1;
        $note->save();

        return to_route("note.index")
            ->with("success", "Note created successfully");
    }

    public function show(Note $note)
    {
        return view("note.show", ["note" => $note]);
    }

    public function edit(Note $note)
    {
        return view("note.edit", ["note" => $note]);
    }

    public function update(UpdateNoteRequest $request, Note $note)
    {
        $update_note = Note::findOrFail($note->id);
        $update_note->note = $request->get("note");
        $update_note->user_id = 1;
        $update_note->save();
        return to_route("note.show", ["note" => $update_note])
            ->with("success", "Note has been updated successfully!");
    }

    public function destroy(int|string $note)
    {
        if($note === "delete_all") {
            Note::truncate();
        } else {
            Note::destroy($note);
        }

        return to_route("note.index")
                ->with("success", $note !== "delete_all"? "Note Deleted Successfully!": "All Notes Deleted Successfully!");
    }

}
