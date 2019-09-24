var currentURL = window.location;

$(document).ready(function() {
    //Autocomplete
    $(function() {
        $.ajax({
            type: 'GET',
            url: currentURL + 'welcome',
            success: function(response) {
                var partners = response;
                var genealogy = {};
                for (var i = 0; i < partners.length; i++) {
                    genealogy[partners[i].associateid + partners[i].associatename] = null;
                }
                $('input.autocomplete').autocomplete({
                    data: genealogy,
                });
            }
        });
    });
    // Data table Init
    $('#example').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    });
    reloadReport();
});

function showToast2(message) {
    M.toast({html: message, classes: 'rounded'});
}

$("input:checkbox").click(function(){
    var shcolumn = "." + $(this).attr("name");
    $(shcolumn).toggle();
});

$(function(){
    $('#addAsoc').submit(function(e){
        var _token = $("#_token").val();
        var associateid = $("#associated").val();
        var associated = $("#associated").val();
        associateid = associateid.split(" ");
        var tam = associateid.length;
        if(tam <= 1){
            showToast2('THE ABI CODE DOES NOT CORRESPOND TO YOUR GENEALOGY!!');
        }
        else{
            associateid = associateid[0];
            var idAssoc = {_token: _token, associated: associateid};
            $.ajax({
                type: 'GET',
                url: '/watchlist/addAsoc',
                data: idAssoc,
                success: function(Response){
                    if(Response){
                        $('#addAsoc').trigger('reset');
                        showToast2(associated + ' ADDED CORRECTLY!!');
                    }
                    else{
                        showToast2('THE ASSOCIATE IS ALREADY ADDED!!');
                        $("#associated").focus();
                    }
                }
            })
        }
        e.preventDefault();
    })
});

function reloadReport(){
    var table = $('#example').DataTable({
        destroy: true,
        ajax: 'http://watchlist.test/watchlist/reloadtab',
        deferRender: true,
        columns: [
            {
                data: null,
                className: "center",
                defaultContent: '<a href="javascript:void(0)" onclick="deleteRow(this.parentNode.parentNode.id)">' + 
                    '<i class="material-icons">delete</i>' + 
                '</a>'
            },
            { data: 'Line' },
            { data: 'Level' },
            { data: 'associatename' },
            { data: 'associateid' },
            { data: 'email' },
            { data: 'mobile_number' },
            { data: 'alternative_number' },
            { data: 'country' },
            { data: 'PayRank' },
        ],
        rowId: function(a) {
            return a.associateid;
        },
        select: true,
        dom: 'Bfrtip',
        lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        buttons: [
            'pageLength',
            {
                extend: 'print',
                text: 'Print Report',
                autoPrint: false,
                exportOptions: {
                    columns: ':visible',
                },
                customize: function (win) {
                    $(win.document.body).find('table').addClass('display').css('font-size', '9px');
                    $(win.document.body).find('tr:nth-child(odd) td').each(function(index){
                        $(this).css('background-color','#D0D0D0');
                    });
                    $(win.document.body).find('h1').css('text-align','center');
                }
            },
        ]
    });
}

function deleteRow(element){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })
      
    swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    })
    .then((result) => {
        if (result.value) {
          /*swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )*/
          $.ajax({
            type: 'GET',
            url: currentURL + 'delAsoc/{id}',
            data: { id: element },
            success: function(Response) {
                if(Response){
                    showToast2(element + ' DELETED CORRECTLY!!');
                    reloadReport();
                }
            }
        });
        } 
        else if (result.dismiss === Swal.DismissReason.cancel){
          swalWithBootstrapButtons.fire(
            'Cancelled',
            '',
            'error'
          )
        }
    })
}

$('.list_view input[type="checkbox"]').on('change', function(e) {
    var table = $('#example').DataTable(); 
    var col = table.column($(this).attr('data-target'));
    col.visible(!col.visible());
});