<script src="FE/products/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function addTocart(event){
        event.preventDefault();
        let url = $(this).data('url');
        $.ajax({
            type:"GET",
            url:url,
            dataType:'json',
            success:function(data){
                if(data.code === 200){
                    alert('Added to cart');
                }
            },
            error:function(){

            }    
        });
    }
    $(function(){
        $('.add_to_cart').on('click',addTocart);
    });
</script>

<script>
    function cartUpdate(event){
        event.preventDefault();
        let updateCartUrl = $('.update_cart_url').data('url');
        let id = $(this).data('id');
        let quantity = $(this).parents('tr').find('input').val();
        $.ajax({
            type:"GET",
            url:updateCartUrl,
            data:{id:id , quantity: quantity},
            success:function(data){
                if(data.code === 200){
                    $('.cart_wrapper').html(data.showCart);
                    alert('Cập nhật sản phẩm thành công !!!');
                }
            },
            error:function(){

            }    
        });
    }   
    
    function cartDelete(event){
        event.preventDefault();
        let deleteCartUrl = $('.delete_cart_url').data('url');
        let id = $(this).data('id');
        $.ajax({
            type:"GET",
            url:deleteCartUrl,
            data:{id:id},
            success:function(data){
                if(data.code === 200){
                    $('.cart_wrapper').html(data.showCart);
                    alert('Cập nhật sản phẩm thành công !!!');
                }
            },
            error:function(){

            }    
        });
    }
    $(function(){
        $(document).on('click','.cart_update',cartUpdate);
        $(document).on('click','.cart_delete',cartDelete);
    })
</script>



<script>
    function handleSort(value) {
    var currentUrl = new URL(window.location.href);
        switch(value) {
            case 'price_asc':
                currentUrl.searchParams.set('sort', 'price');
                currentUrl.searchParams.set('order', 'asc');
                break;
            case 'price_desc':
                currentUrl.searchParams.set('sort', 'price');
                currentUrl.searchParams.set('order', 'desc');
                break;
            case 'special_price':
                currentUrl.searchParams.set('sort', 'discount');
                currentUrl.searchParams.set('order', 'desc');
                break;
            case 'created_at_desc':
                currentUrl.searchParams.set('sort', 'created_at');
                currentUrl.searchParams.set('order', 'desc');
                break;
            default:
                currentUrl.searchParams.delete('sort');
                currentUrl.searchParams.delete('order');
        }

        window.location.href = currentUrl.href;
    }
    function sortProductsByPriceDesc() {
    var currentUrl = new URL(window.location.href);
    currentUrl.searchParams.set('sort', 'price');
    currentUrl.searchParams.set('order', 'desc');
    window.location.href = currentUrl.href;
    }
    function sortProductsByPriceAsc() {
    var currentUrl = new URL(window.location.href);
    currentUrl.searchParams.set('sort', 'price');
    currentUrl.searchParams.set('order', 'asc');
    window.location.href = currentUrl.href;
}
</script>