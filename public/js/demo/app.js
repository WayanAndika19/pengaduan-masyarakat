$(document).ready(function () {
    $("#dataTable").DataTable();
    $(".fail-alert").slideDown(1000);
    setTimeout(() => {
        $(".fail-alert").slideUp(1000);
    }, 4000);
    $(".send-report-button").attr("disabled", true);
    $(".photo-upload").attr("disabled", true);
    $(".reports-text-input").keyup(function () {
        let checkPhoto = $(".photo-upload").val().length;
        console.log($(this).val().length);
        if ($(this).val().length != 0) {
            $(".photo-upload").attr("disabled", false);
            if (checkPhoto != 0) {
                $(".send-report-button").attr("disabled", false);
                $(".photo-upload").attr("disabled", false);
            }
        } else {
            $(".send-report-button").attr("disabled", true);
            $(".photo-upload").attr("disabled", true);
            if (checkPhoto != 0) {
                $(".send-report-button").attr("disabled", false);
                $(".photo-upload").attr("disabled", false);
            }
            $(".send-report-button").attr("disabled", true);
        }
    });
});
function toggleReportsButton(e) {
    let imageValueCheck = $(e).val();
    if (imageValueCheck != null) {
        $(".send-report-button").attr("disabled", false);
    } else {
        $(".send-report-button").attr("disabled", true);
    }
}
$('.reset-reports-form').on('click', function () {
    $(".send-report-button").attr("disabled", true);
    $(".photo-upload").attr("disabled", true);
});

function zoomImage(e) {
    console.log(e)
    let currentImageUrl = $(e).attr('src');
    $('.image-zoom-modal').find('img').attr('src', currentImageUrl);
}

function deleteModal(e) {
    e = $(e);
    let url = e.attr('data');
    console.log(url);
    let modal = $('#confirmationModal');
    modal.find('.btn-danger').attr('href', url);
}