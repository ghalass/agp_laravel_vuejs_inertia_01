import Swal from 'sweetalert2'

export function showAlert(icon, text, title = '') {
    return Swal.fire({
        toast: true,
        icon: icon,
        title: title,
        animation: true,
        position: 'top-end',
        showConfirmButton: false,
        text: text,
        confirmButtonText: 'OK',
        timer: 4000
    })
}
