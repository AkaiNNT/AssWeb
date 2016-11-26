function showContact() {
    $.post(
        'ajax/showContact.php',
        {},
        function(data) {
            $('#contactTable').html(data);
        }
    );
}


$(document).ready(function() {
    showContact();
});