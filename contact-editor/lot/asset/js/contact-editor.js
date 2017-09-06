(function($, win, doc) {
    var id = $.id,
        source = id && doc.getElementById(id), parent, edit;
    source = source && source.content;
    if (!source) return;
    parent = source.parentNode;
    edit = new RTE(source, $.RTE || {});
    // Force message `type` to `HTML`
    var input = doc.createElement('input');
    input.name = 'type';
    input.type = 'hidden';
    input.value = 'HTML';
    parent.appendChild(input);
})(window.CONTACT || {}, window, document);