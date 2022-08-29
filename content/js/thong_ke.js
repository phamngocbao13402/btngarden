function mucGia(objSelect) {
    var list_tr = document.querySelectorAll("table tbody tr");
    console.log(list_tr);
    switch (objSelect.value) {
        case "0":
            for (var i = 0; i < list_tr.length; i++) {
                list_tr[i].style.display = "table-row";
            }
            break;

        case "1":
            for (var i = 0; i < list_tr.length; i++) {
                var td_donGia = list_tr[i].children[2].innerHTML;
                if (Number(td_donGia) < 100) {
                    list_tr[i].style.display = "table-row";
                } else {
                    list_tr[i].style.display = "none";
                }
            }
            break;

        case "2":
            for (var i = 0; i < list_tr.length; i++) {
                var td_donGia = list_tr[i].children[2].innerHTML;
                if (Number(td_donGia) >= 100 && Number(td_donGia) < 500) {
                    list_tr[i].style.display = "table-row";
                } else {
                    list_tr[i].style.display = "none";
                }
            }
            break;

        case "3":
            for (var i = 0; i < list_tr.length; i++) {
                var td_donGia = list_tr[i].children[2].innerHTML;
                if (Number(td_donGia) >= 500) {
                    list_tr[i].style.display = "table-row";
                } else {
                    list_tr[i].style.display = "none";
                }
            }
            break;

        default:
            for (var i = 0; i < list_tr.length; i++) {
                list_tr[i].style.disabled = "none";
            }
            break;
    }
}