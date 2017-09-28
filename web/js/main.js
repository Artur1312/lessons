//for viewing button

$(document).on('ready pjax:success', function() {  // 'pjax:success' use if you have used pjax
    $('.view').click(function(e){
        e.preventDefault();
        $('#pModal').modal('show')
            .find('.modal-content')
            .load($(this).attr('href'));
    });
});

//for creating button

$(function () {
    $('#modalButton').click(function () {
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
    });
});

//dropdown toggle for mobile version

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

