function addContact() {
    var email = $('#email').val();
    var sub = $('#subject').val();
    var comment = $('#comment').val();
    $.post(
        '../admin/ajax/addContact.php',
        {
            email: email,
            sub: sub,
            comment: comment
        }

    )
}