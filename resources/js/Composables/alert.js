import Swal from 'sweetalert2'

/**
 * Show SweetAlert2 Message
 * @param {string} icon - Type of alert ['success', 'error', 'warning', 'info'].
 * @param {*} text - Text of the alert
 * @param {*} title - Title of the alert (optional)
 * @returns
 *
 * @example showAlert('success', 'Ajouté avec succès!')
 */
export function showAlert(icon, text, title = '') {
    if (title == '') {
        switch (icon) {
            case 'info':
                title = 'Info!'
                break;
            case 'error':
                title = 'Error!'
                break;
            case 'success':
                title = 'Success!'
                break;
            case 'warning':
                title = 'Warning!'
                break;
            default:
                break;
        }
    }
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

// showAlert('info', 'Opération réussie!', 'Info!')
// showAlert('error', 'Opération réussie!', 'Error!')
// showAlert('success', 'Opération réussie!', 'Success!')
// showAlert('warning', 'Opération réussie!', 'Warning!')
