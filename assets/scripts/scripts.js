/**
 * HTMX boost 404 handling
 */
document.addEventListener('htmx:responseError', function(e) {
    let xhr = e.detail.xhr

    if(e.detail.failed && xhr.status == 404) {
        window.location.href = '/404/'
    }
})

/**
 * Copy plaintext
 */
function copyPlaintext() {
    document.querySelector('#pasteContent').select()
    document.execCommand('copy')
}