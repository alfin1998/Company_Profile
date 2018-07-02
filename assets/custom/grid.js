$(function() {
  $.ajax({
    type: "GET",
    url: "getAll/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "300px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getAll/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "add/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "update",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "delete/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "id",
          title: "id",
          type: "hidden",
          width: 10
        },
        {
          name: "username",
          title: "username",
          type: "text",
          width: 50
        },
         {
          name: "password",
          title: "password",
          type: "text",
          width: 50
        },
         {
          name: "level",
          title: "level",
          type: "text",
          width: 50
        },
      
        { type: "control" }
      ]
    });
  });
});
