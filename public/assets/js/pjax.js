// $(document).on('click', 'a[data-pjax], [data-a-pjax] a, .pagination a, td a', function(e) {

//   var href;
//   if ($(this).attr("href") === "#") {
//     return false;
//   }
//   if ($(this).attr("data-no-pjax")) {
//     return;
//   }
//   href = $(this).attr("href") + " #pjax-content";

  
//   // FancyUI.spin();
//   if (history.pushState) {
//     history.pushState(null, null, $(this).attr("href"));
//   }
  
//   $('#pjax-container').load(href, function() {
//     return FancyUI.refresh();
//   });

//   return e.preventDefault();
// });

// $(document).on('submit', '[data-form-pjax] form', function(event) {
//   var confirmed, method, msg;
//   method = $(this).children('input[name="_method"]').val();
//   msg = "Are you sure you want to proceed? This action can not be reverted.";
//   if (method === "DELETE") {
//     confirmed = window.confirm(msg);
//     if (!confirmed) {
//       event.preventDefault();
//       return false;
//     }
//   }
//   // $.pjax.submit(event, '#pjax-container');
//   var $form = $(this);
//   var action = $form.attr('action');
//   var data = $form.serialize();
//   method = $form.attr('method') || "GET";

//   console.log(method);

//   $.ajax({
//     url: action,
//     data: data,
//     method: method,
//     success: function(res){
//       var $res = $(res);
//       var html = $res.find('#pjax-container').html();
//       $("#pjax-container").html(html);

//       return FancyUI.refresh();
//     }
//   })

//   event.preventDefault();
// });

// $(document).on('pjax:send', function() {

// });

// $(document).on('pjax:complete', function() {
//   return FancyUI.refresh();
// });