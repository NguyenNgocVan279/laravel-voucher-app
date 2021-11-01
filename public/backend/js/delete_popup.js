//=====Sweetalert2 - Hiển thị PopUp xoá dữ liệu - 31/10/2021 =====//
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
//=====End: Sweetalert2 - Hiển thị PopUp xoá dữ liệu - 31/10/2021 =====//
