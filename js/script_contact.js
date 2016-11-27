function showContact() {
    $.post(
        'ajax/showContact.php',
        {},
        function(data) {
            $('#contactTable').html(data);
        }
    );
}
function deleteContact(contact_id) {
    var x = confirm('Are you sure?');
    if (x == true) {
        $.post(
            'ajax/deleteContact.php',
            {
                contact_id: contact_id
            },
            function(data, status) {
                showContact();
            }
        );
    }
}

$(document).ready(function() {
    showContact();
});