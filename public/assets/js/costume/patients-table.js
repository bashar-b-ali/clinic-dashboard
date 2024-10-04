$(document).ready(function() {
    var table = $('#myDataTable').DataTable({
        searching: true,
        lengthChange: false,
        autoWidth: false,
        columnDefs: [
            { orderable: false, targets: 4 }
        ],
        order: [
            [0, "desc"]
        ], // Order by the first column descending
        pageLength: 6, // Set initial page length to 6
        responsive: true // Enable responsive behavior
    });

    $('#myDataTable').on('click', '.create-patient', function() {
        // Clear previous values
        $('#a-id').val('');
        $('#a-name').val('');
        $('#a-dob').val('');
        $('#a-phone').val('');
        $('#a-email').val('');

    });

    // Handle Edit Patient
    $('#myDataTable').on('click', '.edit-patient', function() {
        // Clear previous values
        $('#e-id').val('');
        $('#e-name').val('');
        $('#e-dob').val('');
        $('#e-phone').val('');
        $('#e-email').val('');

        // Get the data attributes from the clicked button
        const id = $(this).data('id');
        const name = $(this).data('name');
        const dob = $(this).data('dob');
        const phone = $(this).data('phone');
        const email = $(this).data('email');

        // Populate the modal fields with new values
        $('#e-id').val(id);
        $('#e-name').val(name);
        $('#e-dob').val(dob);
        $('#e-phone').val(Number(phone));
        $('#e-email').val(email);

    });

    // Handle Delete Patient
    $('#myDataTable').on('click', '.delete-patient', function() {
        const id = $(this).data('id');

        // Set the patient ID in the hidden input of the delete modal
        $('#d-id').val(id);

    });

});