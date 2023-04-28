export const alertSuccess = (message) => {
    Swal.fire(message, '', 'success')
}

export const alertConfirm = (msg, secMsg) => {
    /*
    return Swal.fire({
        title: msg,
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            alertSuccess(secMsg)
        }
    })
    */
    return Swal.fire({
        title: msg,
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    })
}