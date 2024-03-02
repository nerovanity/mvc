class CommercialApp {
  show(btn) {
    const id = btn.id;
    const data = { id: id };

    $.ajax({
      url: "/commercials/show",
      type: "POST",
      dataType: "JSON",
      data: data,
      success: function (response) {
        $("#commercial_name").val(response.commercial_name);
        $("#id").val(id);
        $("#edit_mode").val("1");
        $("#modalCommercialForm").modal("show");
      },

      error: function (error) {
        console.warn("error " + error);
        $("#modalCommercialForm .alert-danger p").text("Error trying load");
        $("#modalCommercialForm .alert-danger").show();
      },
    });
  }

  confirm(btn) {
    const id = btn.id;

    $("#modalDelCommercial").modal("show");
    $("#id_del").val(id);
  }

  reloadGrid() {
    $.ajax({
      url: "/commercials/load",
      type: "POST",
      dataType: "html",
      data: {},
      success: function (response) {
        if (response !== "") {
          $("#grid_container").html(response);
          $("#commercials_grid").DataTable();
        }
      },
      error: function (error) {
        console.warn("error loading data");
      },
    });
  }

  save(btn) {
    const form = $("#commercialForm").serializeArray();

    if ($.trim($("#commercial_name").val()) === "") {
      $("#modalCommercialForm .alert-danger p").text("All fields required");
      $("#modalCommercialForm .alert-danger").show();
    } else {
      const action = $("#edit_mode").val() === "1" ? "/edit" : "/add";

      $.ajax({
        url: "/commercials" + action,
        type: "POST",
        dataType: "JSON",
        data: form,
        success: function (response) {
          if (response.success) {
            $("#id").val("");
            $("#edit_mode").val("0");
            $("#modalCommercialForm").modal("hide");
            Commercial.reloadGrid();
          }
        },
      });
    }
  }

  delete(btn) {
    const data = { id: $("#id_del").val() };

    $.ajax({
      url: "/commercials/delete",
      type: "POST",
      dataType: "JSON",
      data: data,
      success: function (response) {
        if (response.success) {
          Commercial.reloadGrid();
          $("#modalDelCommercial").modal("hide");
        }
      },
    });
  }
}

const Commercial = new CommercialApp();

$(".modal").on("hidden.bs.modal", function (e) {
  $(this).find("form").trigger("reset");
  $(this).find(".alert").hide();
});

$("#commercials-page").ready(function () {
  $("#commercials_grid").DataTable();
});
