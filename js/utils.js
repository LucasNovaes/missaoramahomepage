$(function () {
    document.getElementById("telefone").addEventListener("keyup", function (event) {
        event.target.value = mtel(event.target.value);
    }, true);
    // Phone mask
    function mtel(v) {
        v = v.replace(/\D/g, "");
        v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
        v = v.replace(/(\d)(\d{4})$/, "$1-$2");
        return v;
    }
});