import $ from "jquery";

import select2 from "select2";

select2();


$(document).ready(function () {
    $('.select2').select2({
        width: "100%",
        theme: "classic",
        placeholder: "Selecione uma opção",

        language: {
            errorLoading: function () {
                return 'Os resultados não puderam ser carregados.';
            },
            inputTooLong: function (args) {
                var overChars = args.input.length - args.maximum;

                var message = 'Por favor apague ' + overChars + ' ';

                message += overChars != 1 ? 'caracteres' : 'caractere';

                return message;
            },
            inputTooShort: function (args) {
                var remainingChars = args.minimum - args.input.length;

                var message = 'Introduza ' + remainingChars + ' ou mais caracteres';

                return message;
            },
            loadingMore: function () {
                return 'A carregar mais resultados…';
            },
            maximumSelected: function (args) {
                var message = 'Apenas pode seleccionar ' + args.maximum + ' ';

                message += args.maximum != 1 ? 'itens' : 'item';

                return message;
            },
            noResults: function () {
                return 'Sem resultados';
            },
            searching: function () {
                return 'A procurar…';
            },
            removeAllItems: function () {
                return 'Remover todos os itens';
            }
        }
    });
});


$(document).ready(function () {
    $('#students').select2({
        width: "100%",
        theme: "classic",

        ajax: {
            url: "/search/students",
            type: 'get',
            dataType: 'json',
            delay: 250,

            data: function (params) {
                return {
                    searchItem: params.term,
                    page: params.page
                }
            },

            processResults: function (data, params) {
                params.page = params.page || 1;

                return {
                    results: data.data,
                    pagination: {
                        more: data.last_page != params.page
                    }
                }
            }
        },

        templateResult: templateResult,
        templateSelection: templateSelection,

        language: {
            errorLoading: function () {
                return 'Os resultados não puderam ser carregados.';
            },
            inputTooLong: function (args) {
                var overChars = args.input.length - args.maximum;

                var message = 'Por favor apague ' + overChars + ' ';

                message += overChars != 1 ? 'caracteres' : 'caractere';

                return message;
            },
            inputTooShort: function (args) {
                var remainingChars = args.minimum - args.input.length;

                var message = 'Introduza ' + remainingChars + ' ou mais caracteres';

                return message;
            },
            loadingMore: function () {
                return 'A carregar mais resultados…';
            },
            maximumSelected: function (args) {
                var message = 'Apenas pode seleccionar ' + args.maximum + ' ';

                message += args.maximum != 1 ? 'itens' : 'item';

                return message;
            },
            noResults: function () {
                return 'Sem resultados';
            },
            searching: function () {
                return 'A procurar…';
            },
            removeAllItems: function () {
                return 'Remover todos os itens';
            }
        }
    });
});


function templateResult(data) {
    if (data.loading) {
        return data.text;
    }
    return data.name;
}


function templateSelection(data) {
    return data.name;
}
