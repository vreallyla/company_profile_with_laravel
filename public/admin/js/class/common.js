const pagePrev = '&laquo; <span class="hidden-sm hidden-md hidden-lg">Previous</span>',
    pageNext = '<span class="hidden-sm hidden-md hidden-lg">Next</span> &raquo;';

window.noticeWrong = () => {
    Swal.fire({
        type: 'warning',
        title: 'Notice',
        text: 'Something Wrong!',
        showConfirmButton: false,
        timer: 1500
    })
};

window.showNotice = function (err, obj) {
    $.each(err, function (i, val) {
        obj.find('[name=' + i + ']').next().text(val).closest('.form-group').addClass('has-error');
    })
};

window.redirectLogin = function () {
    location.href = '/admin/login';
};

window.msgWeird = function () {
    Swal.fire(
        'Notice',
        "Something wrong!",
        'warning'
    );
};

window.setPagination = function (obj, max, curr) {
    maxTable = max = parseInt(max);
    currentTable = curr = parseInt(curr);
    let nextPagination = '<li class="next"><a href="javascript:void(0);">' + pageNext + '</a></li>',
        prevPagination = '<li class="previous"><a href="javascript:void(0);">' + pagePrev + '</a></li>',
        subNextPagination = '<li class="sub-next-page"><a href="javascript:void(0);">\n' + '...' +
            '</a></li>',
        subPrevPagination = '<li class="sub-prev-page"><a href="javascript:void(0);">\n' + '...' +
            '</a></li>',
        maxPagination = '<li class="page"><a href="javascript:void(0);">\n' + max +
            '</a></li>',
        minPagination = '<li class="page"><a href="javascript:void(0);">\n' + 1 +
            '</a></li>', paginationFill = '';

    if (max === 1) {
        obj.hide();
    } else {
        if (7 > max) {
            paginationFill = loopPaginate(1, max, curr);

        } else if (5 > curr) {
            paginationFill += loopPaginate(1, 4, curr);
            paginationFill += subNextPagination + maxPagination;

        } else if ((max - 3) < curr) {
            paginationFill = minPagination + subPrevPagination;
            paginationFill += loopPaginate((curr - 2), max, curr);
        } else if (5 <= curr) {
            paginationFill = minPagination + subPrevPagination;
            paginationFill += loopPaginate((curr - 2), (curr + 2), curr);
            paginationFill += subNextPagination + maxPagination;
        }
        obj.fadeIn(500);
        obj.empty().append(prevPagination + paginationFill + nextPagination);
    }

};

const loopPaginate = function (start, end, curr) {
    let paginationFill = '';
    for (let i = start; i <= end; i++) {
        paginationFill += i === curr ? '<li class="active"><a href="javascript:void(0);">\n' + i +
            '</a></li>' : '<li class="page"><a href="javascript:void(0);">\n' + i +
            '</a></li>';
    }
    return paginationFill;
};

window.msgChangeData = function () {
    Swal.fire(
        'Notice',
        "Some data changes",
        'warning'
    );
};

window.msgDoble = function (nameN) {
    Swal.fire(
        'Notice',
        "The " + nameN + " is selected",
        'warning'
    );
};

window.faLoad=function () {
    return '<i class="fa fa-circle-o-notch fa-spin"></i>';
};

window.faSearch=function () {
    return '<i class="fa fa-search"></i>';
};

window.notFoundIt=function () {
  return '<center><img src="/img/code/404.svg" alt="" style="margin-top: 5%;width: 40%"></center>';
};
