<x-app-layout title="Notes">

    <div class="notes-number">
        <p>{{ $notesNumber }}</p>
        <h2>Your Notes</h2>
    </div>


    @if (count($notes) > 3)
        <form action="{{ route('note.destroy', ['note' => 'delete_all']) }}" method="POST" class="delete_all">
            @csrf
            @method('DELETE')
            <button type="submit">Delete All</button>
        </form>
    @endif
    <section>
        <div class="notes-container">
            @forelse ($notes as $note)
                <div class="note-box">
                    <div>
                        <p>{{ Str::words($note->note, 20) }}</p>
                    </div>
                    <div id="note-btns-box">
                        <a href="{{ route('note.show', ['note' => $note]) }}">View</a>
                        <a href="{{ route('note.edit', ['note' => $note]) }}">Edit</a>
                        <form action="{{ route('note.destroy', ['note' => $note->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="no-notes-notification">
                    <p>No Notes Have Been added Yet!</p>
                    <span>
                        <i class='bx bx-wink-smile'></i>
                    </span>
                </div>
            @endforelse
            <x-create-note />
        </div>
        <div>
            {{ $notes->links() }}
        </div>
    </section>


</x-app-layout>
