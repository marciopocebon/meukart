$(function() {
    $('.button-group button').click(function() {
        $(this).addClass('active').siblings().removeClass('active');

        return false;
    });

    $('select.chosen').chosen({
        no_results_text: "Nada encontrado para "
    });

    // sweetAlert({
    //   title: "Are you sure?",
    //   text: "You will not be able to recover this imaginary file!",
    //   type: "warning",
    //   showCancelButton: true,
    //   confirmButtonColor: "#DD6B55",
    //   confirmButtonText: "Yes, delete it!",
    //   closeOnConfirm: false,
    //   html: false
    // }, function(){
    //   swal("Deleted!",
    //   "Your imaginary file has been deleted.",
    //   "success");
    // });
});