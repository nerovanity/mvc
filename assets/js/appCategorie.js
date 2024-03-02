class CategorieApp {
  show(btn) {
    const id = btn.id;
    const data = { id: id };

    $.ajax({
      url: "/categories/show",
      type: "POST",
      dataType: "JSON",
      data: data,
      success: function (response) {
        $("#categorie_name").val(response.categorie_name);
        $("#id").val(id);
        $("#edit_mode").val("1");
        $("#modalCategorieForm").modal("show");
      },

      error: function (error) {
        console.warn("error " + error);
        $("#modalCategorieForm .alert-danger p").text("Error trying load");
        $("#modalCategorieForm .alert-danger").show();
      },
    });
  }

  confirm(btn) {
    const id = btn.id;

    $("#modalDelCategorie").modal("show");
    $("#id_del").val(id);
  }

  reloadGrid() {
    $.ajax({
      url: "/categories/load",
      type: "POST",
      dataType: "html",
      data: {},
      success: function (response) {
        if (response !== "") {
          $("#grid_container").html(response);
          $("#categories_grid").DataTable();
        }
      },
      error: function (error) {
        console.warn("error loading data");
      },
    });
  }

  save(btn) {
    const form = $("#categorieForm").serializeArray();

    if ($.trim($("#categorie_name").val()) === "" || 
        $.trim($("#id").val()) === "" ) {
      $("#modalCategorieForm .alert-danger p").text("All fields required");
      $("#modalCategorieForm .alert-danger").show();
    } else {
      const action = $("#edit_mode").val() === "1" ? "/edit" : "/add";

      $.ajax({
        url: "/categories" + action,
        type: "POST",
        dataType: "JSON",
        data: form,
        success: function (response) {
          if (response.success) {
            $("#id").val("");
            $("#edit_mode").val("0");
            $("#modalCategorieForm").modal("hide");
            Categorie.reloadGrid();
          }
        },
      });
    }
  }

  delete(btn) {
    const data = { id: $("#id_del").val() };

    $.ajax({
      url: "/categories/delete",
      type: "POST",
      dataType: "JSON",
      data: data,
      success: function (response) {
        if (response.success) {
          Categorie.reloadGrid();
          $("#modalDelCategorie").modal("hide");
        }
      },
    });
  }
}

const Categorie = new CategorieApp();

$(".modal").on("hidden.bs.modal", function (e) {
  $(this).find("form").trigger("reset");
  $(this).find(".alert").hide();
});

$("#categories-page").ready(function () {
  $("#categories_grid").DataTable();
});
