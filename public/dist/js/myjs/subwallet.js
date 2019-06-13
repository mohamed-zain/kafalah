$(document).ready(function(){
    /*****get wallet data*****/
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#wallet_Id').change(function(){

        console.log('gvhgv');
        var SubID = $(this).val();
        var token = "{{ csrf_token() }}";
        if(MosqueID){
            $.ajax({
                type:"POST",
                url:"{{route('get-products-list')}}",
                data : {
                    "SubID":SubID,
                    "_token":token,
                },
                success:function(res){
                    if(res){
                        $("#Course").empty();
                        $("#Course").append('<option>Select</option>');
                        $.each(res,function(key,value){
                            $("#Course").append('<option value="'+key+'">'+value+'</option>');
                        });

                    }else{
                        $("#Course").empty();
                    }
                },
                complete: function(){
                    $('#load').hide();
                }
            });
        }else{
            $("#Mosque").empty();
            $("#Course").empty();
        }
    });
});