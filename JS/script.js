$(document).ready(function (){
  /**
   * This function adds a particular task in database.
   */
  $(".addBtn").click(function(){
    var input = $("#myInput").val();
    $.ajax({
      url:"ajax-insert.php",
      type:"post",
      data: {
        input: $('#myInput').val()
      },
      success:function(res){
        // It shows the recently added task on UI.
        $(".table-data").html(res);
        // Sets the input field blank.
        $("#myInput").val("");
      }
    })
  })
/**
 * This function works when user clicks on delete button and it deleted a parti
 * cular task.
 */
  $(document).on('click','.delete',function () {
    let id = $(this).data('id');
    $.ajax({
      url: "ajax-delete.php",
      type: "post",
      data: {
        id: id
      },
      success: function (res) {
        $(".table-data").html(res);
      }
    })
  })
/**
 * It show strike marks on a particular task when user marks it as done.
 */
  $(document).on('click', '.mark', function () {
    let parent = $(this).parent();
    let grand = parent.parent();
    // Added strike class when user marked it as done.
    grand.addClass("strike");
  })

/**
 * This function edit a particular task when user clicks on edit button.
 */
  $(document).on('click', '.edit', function () {
    $(".edit-div").show();
    let id = $(this).data('id');
    $(document).on('click', '.editBtn', function () {
      let edit = $(".edit-field").val();
      $.ajax({
        url: "ajax-update.php",
        type: "post",
        data: {
          id: id,
          edit: edit
        },
        success: function (res) {
          $(".table-data").html(res);
          // Sets input field empty.
          $(".edit-field").val("")
        }
      })
      $(".edit-div").hide();
    })
  })
})
