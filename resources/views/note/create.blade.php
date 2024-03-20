<x-app-layout title="Create Notes">


    <h2>Create New Note</h2>
    <form action="{{ route('note.store') }}" method="POST" class="form-box">
        @csrf
        <div>
            <textarea name="note" id="note" cols="30" rows="10" placeholder="Write your note here..."
                style="@error('note') border: 2px solid #de0446fd; @enderror" onfocus="this.style.border='2px solid #fff'"></textarea>
            <x-form-error record="note" />
        </div>
        <div class="btns-box">
            <a href="{{ route('note.index') }}">Cancel</a>
            <button type="submit">Create</button>
        </div>

    </form>


</x-app-layout>
