
$(function () {
    $('#modalButton').click(function () {
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
    });
});

$(document).ready(function() {
    $('dropdown-toggle').dropdown()
});

// $(document).on('ready pjax:success', function() {  // 'pjax:success' use if you have used pjax
//     $('.view').click(function(e){
//         e.preventDefault();
//         $('#pModal').modal('show')
//             .find('.modal-content')
//             .load($(this).attr('href'));
//     });
// });