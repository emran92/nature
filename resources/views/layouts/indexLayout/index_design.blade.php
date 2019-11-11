<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Welcome to Nature Home</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="{{asset('assets/css/-Filterable-Cards-.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/best-carousel-slide.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Card-Group-Classic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Dark-NavBar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Footer-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Paralax-Hero-Banner.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9" defer></script>

</head>

<body>

@include('layouts.indexLayout.index_header')

@yield('carousel')

<section>
    <div class="container">
        <div class="row">
            @include('layouts.indexLayout.index_sidebar')
            @yield('content')

        </div><!-- row -->
    </div><!-- container -->
</section>

@include('layouts.indexLayout.index_footer')

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/-Filterable-Cards-.js')}}"></script>
<script src="{{asset('assets/js/Paralax-Hero-Banner.js')}}"></script>


<script>
    $( document ).ready(function() {
        var Chef = {
            init: function() {
                this.productImagePreview();
                this.menuToggle();
                this.misc();
            },

            productImagePreview: function() {
                $(document).on("click", ".product-images li", function() {
                    if (!$(this).hasClass("preview")) {
                        var src = $(this)
                            .find("img")
                            .attr("src");
                        $(".product-images .preview img").attr("src", src);
                    }
                });
            },

            menuToggle: function() {
                $(document).on("click", "#menu .trigger", function() {
                    // Toggle open and close icons
                    $(this)
                        .find("img")
                        .each(function() {
                            if ($(this).hasClass("hidden")) {
                                $(this).removeClass("hidden");
                            } else {
                                $(this).addClass("hidden");
                            }
                        });

                    // Toggle menu links
                    $(this)
                        .siblings(".links")
                        .stop(true, true)
                        .slideToggle(200);

                    // Toggle open class
                    $("#menu").toggleClass("open");
                });
            },

            misc: function() {
                // Misc stuff

                for (var i = 1; i <= 3; i++) {
                    $(".product")
                        .parent()
                        .eq(0)
                        .clone()
                        .appendTo(".product-list");
                }
            }
        };

        $(function() {
            Chef.init();
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(document).on('click','.deleteProduct',function(){
            var id = $(this).attr('rel');
            var deleteFunction = $(this).attr('rel1');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this product!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                confirmButtonColor: '#d61610',
                cancelButtonText: 'No, keep it'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Deleted!',
                        'Your product has been deleted.',
                        'success'
                    );
                    window.location.href="/product/"+deleteFunction+"/"+id;
                    // For more information about handling dismissals please visit
                    // https://sweetalert2.github.io/#handling-dismissals
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        'Your product is safe :)',
                        'error'
                    )
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(document).on('click','.deleteCategory',function(){
            var id = $(this).attr('rel');
            var deleteFunction = $(this).attr('rel1');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this category!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                confirmButtonColor: '#d61610',
                cancelButtonText: 'No, keep it'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Deleted!',
                        'Your category has been deleted.',
                        'success'
                    );
                    window.location.href="/category/"+deleteFunction+"/"+id;
                    // For more information about handling dismissals please visit
                    // https://sweetalert2.github.io/#handling-dismissals
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        'Your category is safe :)',
                        'error'
                    )
                }
            });
        });
    });
</script>

<script>
    $( document ).ready(function() {
        /* Set rates + misc */
        var taxRate = 0.15;
        var shippingRate = 50.0;
        var fadeTime = 300;

        /* Assign actions */
        $(".products-quantity input").change(function() {
            updateQuantity(this);
        });

        $(".products-removal button").click(function() {
            removeItem(this);
        });

        /* Recalculate cart */
        function recalculateCart() {
            var subtotal = 0;

            /* Sum up row totals */
            $(".products").each(function() {
                subtotal += parseFloat(
                    $(this)
                        .children(".products-line-price")
                        .text()
                );
            });

            /* Calculate totals */
            var tax = subtotal * taxRate;
            var shipping = subtotal > 0 ? shippingRate : 0;
            var total = subtotal + tax + shipping;

            /* Update totals display */
            $(".totals-value").fadeOut(fadeTime, function() {
                $("#cart-subtotal").html(subtotal.toFixed(2));
                $("#cart-tax").html(tax.toFixed(2));
                $("#cart-shipping").html(shipping.toFixed(2));
                $("#cart-total").html(total.toFixed(2));
                if (total == 0) {
                    $(".checkout").fadeOut(fadeTime);
                } else {
                    $(".checkout").fadeIn(fadeTime);
                }
                $(".totals-value").fadeIn(fadeTime);
            });
        }

        /* Update quantity */
        function updateQuantity(quantityInput) {
            /* Calculate line price */
            var productRow = $(quantityInput)
                .parent()
                .parent();
            var price = parseFloat(productRow.children(".products-price").text());
            var quantity = $(quantityInput).val();
            var linePrice = price * quantity;

            /* Update line price display and recalc cart totals */
            productRow.children(".products-line-price").each(function() {
                $(this).fadeOut(fadeTime, function() {
                    $(this).text(linePrice.toFixed(2));
                    recalculateCart();
                    $(this).fadeIn(fadeTime);
                });
            });
        }

        /* Remove item from cart */
        function removeItem(removeButton) {
            /* Remove row from DOM and recalc cart total */
            var productRow = $(removeButton)
                .parent()
                .parent();
            productRow.slideUp(fadeTime, function() {
                productRow.remove();
                recalculateCart();
            });
        }
    });
</script>
</body>

</html>