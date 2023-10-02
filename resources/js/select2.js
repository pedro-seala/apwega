import $ from "jquery";

import select2 from "select2";

select2();

$(document).ready(function () {
    $('#classes').select2({
        width: "100%",
        theme: "classic",
        placeholder: "Selecione uma classe"
    });
});

$(document).ready(function () {
    $('#courses').select2({
        width: "100%",
        theme: "classic",
        placeholder: "Selecione um curso"
    });
});

$(document).ready(function () {
    $('#subjects').select2({
        width: "100%",
        theme: "classic",
        placeholder: "Selecione um disciplina"
    });
});

$(document).ready(function () {
    $('#subject-category    ').select2({
        width: "100%",
        theme: "classic",
        placeholder: "Selecione um disciplina"
    });
});
