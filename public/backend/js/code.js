//=====Sweetalert2 - Hiển thị PopUp xoá dữ liệu - 24/06/2021 =====//
$(function () {
    $(document).on("click", "#delete", function (e) {
        //Link nào muốn xoá thì thêm id="delete"
        e.preventDefault();
        var link = $(this).attr("href");

        // Copy mẫu từ trang sweetalert2
        Swal.fire({
            title: "Bạn có chắc?",
            text: "Xoá dữ liệu này?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Có, Xoá dữ liệu!",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire("Đã xoá!", "Dữ liệu của bạn đã được xoá.", "success");
            }
        });
        // End Copy mẫu từ trang sweetalert2
    });
});
//=====End: Sweetalert2 - Hiển thị PopUp xoá dữ liệu - 24/06/2021 =====//

//=====Sweetalert2 - Admin Confirm Order - 20/07/2021 =====//
$(function () {
    $(document).on("click", "#comfirm", function (e) {
        //Link nào muốn xoá thì thêm id="delete"
        e.preventDefault();
        var link = $(this).attr("href");

        // Copy mẫu từ trang sweetalert2
        Swal.fire({
            title: "Bạn có chắc muốn xác nhận?",
            text: "Khi đã xác nhận, bạn không thể chuyển đơn hàng về trạng thái chờ (pending)?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Có, Xác nhận!",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire(
                    "Đã xác nhận!",
                    "Đơn hàng đã được xác nhận.",
                    "success"
                );
            }
        });
        // End Copy mẫu từ trang sweetalert2
    });
});
//=====End: Sweetalert2 - Admin Confirm Order - 20/07/2021 =====//

//=====Sweetalert2 - Admin Processing Order - 20/07/2021 =====//
$(function () {
    $(document).on("click", "#processing", function (e) {
        //Link nào muốn xoá thì thêm id="delete"
        e.preventDefault();
        var link = $(this).attr("href");

        // Copy mẫu từ trang sweetalert2
        Swal.fire({
            title: "Bạn có chắc muốn Xử lý đơn hàng này?",
            text: "Khi đã chuyển trạng thái, bạn không thể chuyển đơn hàng về trạng thái trước đó (confirmed)?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Có, Xử lý đơn hàng!",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire(
                    "Đã chuyển trạng thái!",
                    "Đơn hàng đã được chuyển trạng thái.",
                    "success"
                );
            }
        });
        // End Copy mẫu từ trang sweetalert2
    });
});
//=====End: Sweetalert2 - Admin Processing Order - 20/07/2021 =====//

//=====Sweetalert2 - Admin Pick Order - 20/07/2021 =====//
$(function () {
    $(document).on("click", "#picked", function (e) {
        //Link nào muốn xoá thì thêm id="delete"
        e.preventDefault();
        var link = $(this).attr("href");

        // Copy mẫu từ trang sweetalert2
        Swal.fire({
            title: "Bạn có chắc muốn nhận đơn hàng này?",
            text: "Khi đã nhận, bạn không thể chuyển đơn hàng về trạng thái trước đó (processing)?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Có, nhận đơn hàng!",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire(
                    "Đã nhận đơn hàng!",
                    "Đơn hàng đã được chấp nhận.",
                    "success"
                );
            }
        });
        // End Copy mẫu từ trang sweetalert2
    });
});
//=====End: Sweetalert2 - Admin Pick Order - 20/07/2021 =====//

//=====Sweetalert2 - Admin Shipped Order - 20/07/2021 =====//
$(function () {
    $(document).on("click", "#shipped", function (e) {
        //Link nào muốn xoá thì thêm id="delete"
        e.preventDefault();
        var link = $(this).attr("href");

        // Copy mẫu từ trang sweetalert2
        Swal.fire({
            title: "Bạn có chắc đã giao cho NVC?",
            text: "Khi đã chuyển trạng thái, bạn không thể chuyển đơn hàng về trạng thái trước đó (picked)?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Có, đã giao cho NVC!",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire(
                    "Đã chuyển trạng thái!",
                    "Đơn hàng đã giao cho NVC.",
                    "success"
                );
            }
        });
        // End Copy mẫu từ trang sweetalert2
    });
});
//=====End: Sweetalert2 - Admin Shipped Order - 20/07/2021 =====//

//=====Sweetalert2 - Admin Cancel Order - 20/07/2021 =====//
$(function () {
    $(document).on("click", "#cancel", function (e) {
        //Link nào muốn xoá thì thêm id="delete"
        e.preventDefault();
        var link = $(this).attr("href");

        // Copy mẫu từ trang sweetalert2
        Swal.fire({
            title: "Bạn có chắc muốn từ chối đơn hàng?",
            text: "Khi đã chuyển trạng thái, bạn không thể chuyển đơn hàng về trạng thái trước đó (processing)?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Có, từ chối đơn hàng!",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire(
                    "Đã từ chối!",
                    "Từ chối đơn hàng thành công.",
                    "success"
                );
            }
        });
        // End Copy mẫu từ trang sweetalert2
    });
});
//=====End: Sweetalert2 - Admin Cancel Order - 20/07/2021 =====//

//=====Sweetalert2 - Admin Delivered Order - 20/07/2021 =====//
$(function () {
    $(document).on("click", "#delivered", function (e) {
        //Link nào muốn xoá thì thêm id="delete"
        e.preventDefault();
        var link = $(this).attr("href");

        // Copy mẫu từ trang sweetalert2
        Swal.fire({
            title: "Bạn có chắc đã giao cho người mua?",
            text: "Khi đã chuyển trạng thái, bạn không thể chuyển đơn hàng về trạng thái trước đó (shipped)?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Có, đã giao cho người mua!",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire(
                    "Đã chuyển trạng thái!",
                    "Đơn hàng đã giao cho người mua.",
                    "success"
                );
            }
        });
        // End Copy mẫu từ trang sweetalert2
    });
});
//=====End: Sweetalert2 - Admin Delivered Order - 20/07/2021 =====//
