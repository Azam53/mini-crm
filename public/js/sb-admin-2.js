$(function() {
    $('#side-menu').metisMenu();
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        var topOffset = 50;
        var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    // var element = $('ul.nav a').filter(function() {
    //     return this.href == url;
    // }).addClass('active').parent().parent().addClass('in').parent();
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent();

    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }
});


                 // date picker

                   $(function() {
                        $( "#datepicker_start" ).datepicker();
                        $( "#datepicker_end" ).datepicker();
                    }); 


  $(document).ready(function() {
                    src = "/searchajax";
                     $("#search_text").autocomplete({
                        source: function(request, response) {
                            $.ajax({
                                url: src,
                                type: 'GET',
                                dataType: "json",
                                data: {
                                    term : request.term
                                },
                                headers: {
                                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                                },
                                success: function(data) {
                                    response(data);
                                   
                                }
                            });
                        },
                        minLength: 3,
                       
                    });
             
                  });

                   $(document).ready(function() {
                    urlCompany = "/searchcompany";
                     $("#search_company").autocomplete({
                        source: function(request, response) {
                            $.ajax({
                                url: urlCompany,
                                type: 'GET',
                                dataType: "json",
                                data: {
                                    term : request.term
                                },
                                headers: {
                                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                                },
                                success: function(data) {
                                    response(data);
                                   
                                }
                            });
                        },
                        minLength: 3,
                       
                    });
             
                  }); 

                   $(document).ready(function() {
                    urlService = "/searchservice";
                     $("#search_service").autocomplete({
                        source: function(request, response) {
                            $.ajax({
                                url: urlService,
                                type: 'GET',
                                dataType: "json",
                                data: {
                                    term : request.term
                                },
                                headers: {
                                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                                },
                                success: function(data) {
                                    response(data);
                                   
                                }
                            });
                        },
                        minLength: 3,
                       
                    });
             
                  });    


// for adding rate column in service form

  $(function() {
       $("#addrate").click(function(){
               $("#rate").removeClass("hidden");
               $('#addrate').remove();
        });
  });

// to add prices for quote form in company module

   $(function() {
       $(".quotePrice").click(function(){
               
               var price = 0;

               $('input.quotePrice:checkbox:checked').each(function () {
                price = parseInt(price) + parseInt($(this).attr('price'));
               });
             
               $('#total').val(price);
        });


  });


 // for adding datatable for service
 
 $(document).ready(function() {
    
    $('#service').DataTable({

        "order": [[ 0, "desc" ]],

         "columnDefs": [
                         { orderable: false, targets: 2 }
                      ]
    });

    $('#company').DataTable({

        "order": [[ 0, "desc" ]],

        "columnDefs": [
                         { orderable: false, targets: 2 }
                      ]
    });

     $('#subscribe').DataTable({

        "order": [[ 0, "desc" ]],

         "columnDefs": [
                         { orderable: false, targets: 3 }
                      ]
    });

} );  