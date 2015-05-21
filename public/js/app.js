$(function() {
    $('.button-group button').click(function() {
        $(this).addClass('active').siblings().removeClass('active');

        return false;
    });

    $('select.chosen').chosen({
        no_results_text: "Nada encontrado para "
    });
});