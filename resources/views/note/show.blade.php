<x-app-layout title="Show Your Note">


    <h2>Your Note</h2>
    <div class="go-back-btn" title="All My Notes">
        <a href="{{ route('note.index') }}">
            <i class='bx bx-arrow-back'></i>
        </a>
    </div>
    <section class="note-container">
        <div class="btns-box">
            <a href="{{ route('note.edit', ['note' => $note]) }}">Edit</a>
            <form action="{{ route('note.destroy', ['note' => $note->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

        </div>
        <div class="note">
            <p class="created-at">Created At: {{ date('d M Y | H:i:s a', strtotime($note->created_at)) }}</p>
            <p>{{ $note->note }}</p>
        </div>
        <x-create-note />
    </section>

</x-app-layout>
