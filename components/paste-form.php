<form 
    hx-boost="true" 
    action="/upload" 
    method="POST">
    
    <textarea 
        name="pasteContent" 
        id="pasteContent" 
        rows="12"
        class="w-full rounded bg-neutral-800 border border-neutral-600 focus:ring-teal-600 focus:border-teal-600"
    ></textarea>

    <button
        type="submit"
        class="py-2 px-4 bg-teal-600 rounded mt-6 hover:bg-teal-500">
        Create new paste
    </button>
</form>