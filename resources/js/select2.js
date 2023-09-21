import $ from "jquery";

// import select2
import select2 from "select2";

// define select2
window.select2 = select2();

// initialize select2
$(document).ready(function () {
    $('.select2').select2({
        width: "100%",
        placeholder: "Selecione uma opção"
    });
});
