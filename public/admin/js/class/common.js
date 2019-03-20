window.noticeWrong=()=>{
    Swal.fire({
        type: 'warning',
        title: 'Notice',
        text: 'Something Wrong!',
        showConfirmButton: false,
        timer: 1500
    })
};

window.showNotice=function (err,obj) {
    $.each(err, function (i, val) {
        console.log(val);
        $(obj).find('[name=' + i + ']').next().text(val).closest('.form-group').addClass('has-error');
    })
};
