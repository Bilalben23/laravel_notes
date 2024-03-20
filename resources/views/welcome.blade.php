<x-app-layout title="welcome">


    <h1>Notes App </h1>
    <div class="app-intro">
        <div>
            <p>
                Welcome to our note-taking app, where organizing your thoughts has never been easier. With our
                user-friendly
                interface and intuitive design, jotting down ideas, creating to-do lists, and capturing important
                moments is
                a
                breeze. Whether you're brainstorming for a project, keeping track of your daily tasks, or simply jotting
                down
                your thoughts, our app provides the perfect platform to streamline your note-taking process. Say goodbye
                to
                scattered sticky notes and disorganized notebooks – with our app, all your notes are neatly stored and
                easily
                accessible, allowing you to stay productive and focused. Start organizing your life today with our
                note-taking
                app!
            </p>
        </div>
        <div>
            <img src="https://blog.lulu.com/wp-content/uploads/2020/02/021120_NoteTaking-Blog.png" alt="note">
        </div>
        <div>
            <a href="{{ route('note.index') }}">Create Your Notes <i class='bx bx-chevrons-right'></i></a>
        </div>

    </div>


</x-app-layout>
