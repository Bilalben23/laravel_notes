<x-app-layout title="Edit Notes">


    <h2>Edit Your Note</h2>
    <section>
        <form action="{{ route('note.update', ['note' => $note]) }}" method="POST" class="form-box">
            @csrf
            @method('PUT')
            <div>
                <textarea name="note" id="note" cols="30" rows="10"
                    style="@error('note') border: 2px solid #de0446fd; @enderror" onfocus="this.style.border='2px solid #fff'">{{ $note->note }}</textarea>
                <x-form-error record="note" />
            </div>
            <div class="btns-box">
                <a href="{{ route('note.show', ['note' => $note]) }}">Cancel</a>
                <button type="submit">Update</button>

            </div>

        </form>
    </section>

</x-app-layout>
