$(function() {
    // Set up an event listener for all forms with the class 'ajax-form'
    $('.request-form').submit(function(event) {
        // Stop the browser from submitting the form.
        event.preventDefault();

        // Get the current form
        var form = $(this);

        // Get the corresponding messages div
        var formMessages = form.next('.form-response');

        // Create a FormData object
        var formData = new FormData(form[0]);

        // Submit the form using AJAX.
        $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json' // Expect a JSON response
            })
            .done(function(data) {
                // Handle success message
                formMessages.removeClass('alert-danger').addClass('alert-success');
                formMessages.text(data.responseText || 'Done!');
                formMessages.show();

                // Trigger success SweetAlert notification
                Swal.fire({
                    toast: true,
                    icon: "success",
                    position: "top-end",
                    title: "Success!",
                    text: data.responseText || 'Form submitted successfully!',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });

                // Handle create action
                if (data.action === 'create' && data.newData) {
                    // Assuming newData contains the necessary information for the new row
                    var table = $('#myDataTable').DataTable();
                    var newRow = [
                        data.newData.id,
                        `<div class="row align-items-center flex-nowrap">
                        <div class="col-auto"></div>
                        <div class="col ps-0">
                            <p class="mb-0 fw-medium">${data.newData.name}</p>
                            <p class="text-secondary small">DOB: ${data.newData.dob}</p>
                        </div>
                    </div>`,
                        `<p class="mb-0">${data.newData.phone}</p>
                     <p class="text-secondary small">${data.newData.email}</p>`,
                        `<p class="mb-0">9:10 AM - 9 June 2024</p>
                     <p class="text-secondary small">Allergies - Dr. Ryan Sylia</p>`,
                        `<span class="badge badge-light rounded-pill text-bg-warning">Pending</span>`,
                    ];
                    table.row.add(newRow).draw(); // Add the new row and redraw the table
                    $('#myDataTable')[0].reset();
                }

                // Handle delete action
                if (data.action === 'destroy' && data.id) {
                    var table = $('#myDataTable').DataTable();
                    table.rows().every(function() {
                        var rowData = this.data();
                        if (rowData[0] == data.id) {
                            this.remove(); // Remove the row
                        }
                    });
                    table.draw(); // Redraw the table
                }

                // Handle update action
                if (data.action === 'update' && data.id && data.updatedData) {
                    var table = $('#myDataTable').DataTable();
                    table.rows().every(function() {
                        var rowData = this.data();
                        if (rowData[0] == data.id) {
                            var updatedCells = [
                                data.updatedData.id,
                                `<div class="row align-items-center flex-nowrap">
                                <div class="col-auto"></div>
                                <div class="col ps-0">
                                    <p class="mb-0 fw-medium">${data.updatedData.name}</p>
                                    <p class="text-secondary small">DOB: ${data.updatedData.dob}</p>
                                </div>
                            </div>`,
                                `<p class="mb-0">${data.updatedData.phone}</p>
                             <p class="text-secondary small">${data.updatedData.email}</p>`,
                                `<p class="mb-0">9:10 AM - 9 June 2024</p>
                             <p class="text-secondary small">Allergies - Dr. Ryan Sylia</p>`,
                                `<span class="badge badge-light rounded-pill text-bg-warning">Pending</span>`
                            ];
                            this.data(updatedCells.concat(rowData.slice(-1))); // Keep the last cell unchanged
                        }
                    });
                    table.draw(); // Redraw the table
                }

                // Redirect if needed
                if (data.redirectUrl) {
                    setTimeout(function() {
                        window.location.href = data.redirectUrl;
                    }, 2000);
                }
            })
            .fail(function(jqXHR) {
                console.error('Error response:', jqXHR);
                formMessages.removeClass('alert-success').addClass('alert-danger');
                var message = jqXHR.responseJSON && jqXHR.responseJSON.responseText ?
                    jqXHR.responseJSON.responseText :
                    'Oops! An error occurred and your message could not be sent.';
                formMessages.text(message);
                formMessages.show();
                Swal.fire({
                    toast: true,
                    icon: "error",
                    position: "top-end",
                    title: "Error!",
                    text: message,
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });
            })
            .always(function() {
                // Optional: You can add any cleanup or additional logic here
            });
    });
});