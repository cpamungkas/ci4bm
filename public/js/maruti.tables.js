$(document).ready(function () {
  // var table = $("#tablestoresetup").dataTable();


  $(".data-table").dataTable({
    bJQueryUI: true,
    sPaginationType: "full_numbers",
    sDom: '<""l>t<"F"fp>',
    sOrder: [[1, 'asc']],
    select: true
  });

  // $(".data-table tbody").on('click', 'tr', function () {
  //   if ($(this).hasClass('selected')) {
  //     $(this).removeClass('selected');
  //   } else {
  //     $(".data-table").('tr.selected').removeClass('selected');
  //     $(this).addClass('selected');
  //   }
  // });


  $("input[type=checkbox],input[type=radio],input[type=file]").uniform();

  $("select").select2();

  $("span.icon input:checkbox, th input:checkbox").click(function () {
    var checkedStatus = this.checked;
    var checkbox = $(this)
      .parents(".widget-box")
      .find("tr td:first-child input:checkbox");
    checkbox.each(function () {
      this.checked = checkedStatus;
      if (checkedStatus == this.checked) {
        $(this).closest(".checker > span").removeClass("checked");
        // alert('checked');
      }
      if (this.checked) {
        $(this).closest(".checker > span").addClass("checked");
        // alert('checked bro');
      }
    });
  });

});
