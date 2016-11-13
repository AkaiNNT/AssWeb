function showUser() {
    $.post(
        'ajax/showUser.php',
        {},
        function(data) {
            $('#carTable').html(data);
        }
    );
}

function addCar() {
    var car_id = $('#car_id').val();
    var car_name = $('#car_name').val();
    var car_year = $('#car_year').val();

    $.post(
        'ajax/addCar.php',
        {
            car_id: car_id,
            car_name: car_name,
            car_year: car_year
        },
        function(data, status) {
            $('#modal-add-car').modal('hide');

            showCars();

            $('#car_id').val('');
            $('#car_name').val('');
            $('#car_year').val('');

        }
    )
}

function deleteCar(car_id) {
    var x = confirm('Are you sure?');
    if (x == true) {
        $.post(
            'ajax/deleteCar.php',
            {
                car_id: car_id
            },
            function(data, status) {
                showCars();
            }
        );
    }
}

function editCar(car_id) {
    $('#car_id_to_edit').val(car_id);
    $.post(
        'ajax/editCar.php',
        {
            car_id: car_id
        },
        function (data, status) {
            var car = JSON.parse(data);
            
            $("#edit_car_id").val(car.id);
            $("#edit_car_name").val(car.name);
            $("#edit_car_year").val(car.year);
        }
    );
    $("#modal-edit-car").modal("show");
}

function saveEditCar() {
    var carID = $('#car_id_to_edit').val();
    var edit_car_id = $("#edit_car_id").val();
    var edit_car_name = $("#edit_car_name").val();
    var edit_car_year = $("#edit_car_year").val();
  
    $.post(
        'ajax/saveEditCar.php',
        {
            carID: carID,
            edit_car_id: edit_car_id,
            edit_car_name: edit_car_name,
            edit_car_year: edit_car_year
        },
        function (data, status) {
            $("#modal-edit-car").modal("hide");
            showUser();
        });
}


$(document).ready(function() {
    showUser();
});