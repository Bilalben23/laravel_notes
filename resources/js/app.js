import './bootstrap';

// * for make the cursor pointer in the end of the textarea text:
window.onload = function () {
    let textarea = document.getElementById('note');
    textarea.focus();
    textarea.setSelectionRange(textarea.value.length, textarea.value.length + 1);
};

// *===============
