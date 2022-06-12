$(document).ready(function () {
  //   MENAMPILKAN DATA DARI DATABASE
  tampil_matkul();
  function tampil_matkul() {
    $("#tampil_matkul").html("");

    $.ajax({
      type: "GET",
      url: "controller/get_data.php",
      dataType: "JSON",
      success: function (result) {
        let i;
        let data = "";

        for (i = 0; i < result.length; i++) {
          data +=
            "<tr><td>" +
            (i + 1) +
            "</td><td>" +
            result[i].nama_matkul +
            "</td><td>" +
            result[i].sks +
            "</td></tr>";
        }

        $("#tampil_matkul").append(data);
      },
    });
  }

  //   MENAMBAHKAN DATA
  $("#btn-simpan").click(function () {
    tambah_matkul();
  });

  function tambah_matkul() {
    let nama_matkul = $("#nama_matkul").val();
    let sks = $("#sks").val();

    $.ajax({
      type: "POST",
      url: "controller/add_data.php",
      dataType: "JSON",
      data: "nama_matkul=" + nama_matkul + "&sks=" + sks,
      success: function (result) {
        if (result.status == "1") {
          alert(result.notif);
          tampil_matkul();
          reset_form();
        } else {
          alert(result.notif);
          tampil_matkul();
          reset_form();
        }
      },
    });
  }

  //   REFRESH FORM
  function reset_form() {
    $("#nama_matkul").val("");
    $("#sks").val("");
  }
});
