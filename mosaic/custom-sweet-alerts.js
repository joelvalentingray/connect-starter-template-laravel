// CUSTOM SWEET ALERTS 2
//https://sweetalert2.github.io/

function autoRefreshPage()
{
    window.location = window.location.href;
}

function sweetAlertDelete (id, route){
    Swal.fire({
        title: 'Are you sure you want to delete this distributor?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            axios
                .delete(route)
                .then((response) => {})
                .catch((err) => {});
            Swal.fire(
                'Deleted!',
                'Your distributor has been deleted.',
                'success'
            )
            setInterval('autoRefreshPage()', 2000);
        }
    })
}

//GET VALUE FROM USER AND POST DATA TO LARAVEl ROUTE
function sweetAlertFailedJobs (route){
    Swal.fire({
        title: 'Retry Failed Job',
        text: "Insert Failed Job #UUID",
        input: 'text',
        inputAttributes: {
            autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Submit',
    }).then((result) => {
        if (result.isConfirmed) {
            axios
                .post(route, {
                    failed_job : result.value
                })
                .then((response) => {})
                .catch((err) => {});
            setInterval('autoRefreshPage()', 100);
        }
    })
}
