function htmlDecode(str) {
    const doc = new DOMParser().parseFromString(str, "text/html");
    return doc.documentElement.textContent;
}

$(document).ready(function() {
    // Path: public/js/htmldecode.js
    $('#story').text(htmlDecode($('#story').text()));
});