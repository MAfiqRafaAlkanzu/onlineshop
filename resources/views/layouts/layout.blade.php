<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/index.min.css')}}">
    <title>Online Shop</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="navbar-container">
                <h1 class="navbar-logo"><a href="#">LOGO</a></h1>
            <div class="navbar-category">
                <form>
                    <i class="bi bi-search search-icon"></i>
                    <input type="text" name="search" placeholder="Search.." class="search-input">
                  </form>
            </div>
            <div class="navbar-buttons">
                <i class="bi bi-bag badge cart-button" value="5" id="cartBtn"></i>
                <i class="bi bi-bell"></i>                
            </div>
            <span class="divider"></span>
            <div class="navbar-shop">
                <img src={{asset('storage/img.jpg')}} alt="shop-img" class="shop-img">
                <span>Shop</span>
            </div>
            <span class="divider"></span>
            <div class="navbar-user">
                <img src={{asset('storage/img.jpg')}} alt="user-img" class="user-img">
                <span>User</span>
            </div>
        </div>
        <span class="background" id="background"></span>
        <div class="cart-sidebar" id="cartSidebar">
            <h1><i class="bi bi-x" id="cartClose"></i></h1>
            <div class="cart-contents">
                <div class="cart-items">
                    <img src={{asset('storage/tshirt.jpg')}} alt="">
                    <div class="cart-element">
                        <h2 class="cart-name">T-Shirt</h2>
                        <p class="cart-price">$<span class="item-price">1200</span></p>
                        <div class="cart-button">
                            <div class="value-button decrease" id="decrease" value="Decrease Value">-</div>
                            <input type="text" class="cart-count" id="cartCount" value="1" disabled>
                            <div class="value-button increase" id="increase" value="Increase Value">+</div>
                        </div>
                    </div>
                </div>
                <div class="cart-items">
                    <img src={{asset('storage/tshirt.jpg')}} alt="">
                    <div class="cart-element">
                        <h2 class="cart-name">T-Shirt</h2>
                        <p class="cart-price">$<span class="item-price">1200</span></p>
                        <div class="cart-button">
                            <div class="value-button decrease" id="decrease" value="Decrease Value">-</div>
                            <input type="text" class="cart-count" id="cartCount" value="1" disabled>
                            <div class="value-button increase" id="increase" value="Increase Value">+</div>
                        </div>
                    </div>
                </div>
                <div class="cart-items">
                    <img src={{asset('storage/tshirt.jpg')}} alt="">
                    <div class="cart-element">
                        <h2 class="cart-name">T-Shirt</h2>
                        <p class="cart-price">$<span class="item-price">1200</span></p>
                        <div class="cart-button">
                            <div class="value-button decrease" id="decrease" value="Decrease Value">-</div>
                            <input type="text" class="cart-count" id="cartCount" value="1" disabled>
                            <div class="value-button increase" id="increase" value="Increase Value">+</div>
                        </div>
                    </div>
                </div>
                <div class="cart-items">
                    <img src={{asset('storage/tshirt.jpg')}} alt="">
                    <div class="cart-element">
                        <h2 class="cart-name">T-Shirt</h2>
                        <p class="cart-price">$<span class="item-price">1200</span></p>
                        <div class="cart-button">
                            <div class="value-button decrease" id="decrease" value="Decrease Value">-</div>
                            <input type="text" class="cart-count" id="cartCount" value="1" disabled>
                            <div class="value-button increase" id="increase" value="Increase Value">+</div>
                        </div>
                    </div>
                </div>
                <div class="cart-items">
                    <img src={{asset('storage/tshirt.jpg')}} alt="">
                    <div class="cart-element">
                        <h2 class="cart-name">T-Shirt</h2>
                        <p class="cart-price">$<span class="item-price">1200</span></p>
                        <div class="cart-button">
                            <div class="value-button decrease" id="decrease" value="Decrease Value">-</div>
                            <input type="text" class="cart-count" id="cartCount" value="1" disabled>
                            <div class="value-button increase" id="increase" value="Increase Value">+</div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="cart-checkout">
                    <div class="cart-total">
                        Total : 
                        <span>1000$</span>
                    </div>
                <button class="cart-checkout-button">Check Out</button>
            </div>
            </div>
        </div>
    </div>


    @yield('content')

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
    <script>
        $(document).ready(function (event) {

            $('.increase').on('click', function (event) {
                increaseCart(event, $(this));
                updateTotalPrice();
            });
            $('.decrease').on('click', function (event) {
                decreaseCart(event, $(this));
                updateTotalPrice();
            });

            $("#cartBtn").on("click", function () {
                $("#cartSidebar").css("transform", "translateX(0)").fadeIn();
                $("#background").css("display", "block");
            });

            $("#cartClose").on("click", function () {
                $("#cartSidebar").css("transform", "translateX(100%)").fadeOut();
                $("#background").css("display", "none");
            });

            $(".background").on("click", function () {
                $("#cartSidebar").css("transform", "translateX(100%)").fadeOut();
                $("#background").css("display", "none");
            });

            function increaseCart(event, button) {
                event.preventDefault();
                event.stopPropagation();

                var input = button.siblings('.cart-count').first();
                var value = parseInt(input.val());
                if (isNaN(value)) {
                    input.val(1);
                    return;
                }

                value++;
                input.val(value);

                updateItemTotal(button.closest('.cart-items'));
            }

            function decreaseCart(event, button) {
                event.preventDefault();
                event.stopPropagation();

                var input = button.siblings('.cart-count').first();
                var value = parseInt(input.val());

                if (isNaN(value)) {
                    input.val(1);
                    return;
                }

                if (value <= 1) {
                    var cartItem = button.closest('.cart-items');
                    cartItem.slideUp(300, function() { 
                        cartItem.remove(); // Removes the item from the DOM
                        updateTotalPrice();
                    });
                    return;
                }

                value--;
                input.val(value);

                updateItemTotal(button.closest('.cart-items'));
            }

            function updateItemTotal(cartItem) {
                var priceElement = cartItem.find('.item-price');
                var originalPrice = parseFloat(priceElement.data('original-price'));
                var countElement = cartItem.find('.cart-count');
                var count = parseInt(countElement.val());

                if (!originalPrice) {
                    originalPrice = parseFloat(priceElement.text().replace(',', ''));
                    priceElement.data('original-price', originalPrice);
                }

                var itemTotal = (originalPrice * count).toFixed(2);

                priceElement.text(itemTotal.toLocaleString());
            }

            function updateTotalPrice() {
                var total = 0;

                $('.cart-items').each(function () {
                    var itemPrice = parseFloat($(this).find('.item-price').text().replace(',', ''));
                    total += itemPrice;
                });

                $('.cart-total span').text('$' + total.toFixed(2).toLocaleString());
            }

            // Initialize the total price on page load
            updateTotalPrice();
        });
    </script>

    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '#image-slider', {
                cover      : true,
                type: "loop",
                autoplay: 'start',
                heightRatio: 0.35,
            }).mount();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const countdownDuration = moment.duration(7, 'hours');
            const endTime = moment().add(countdownDuration);

            requestAnimationFrame(updateTime);

            function updateTime() {
                const now = moment();
                const timeLeft = moment.duration(endTime.diff(now));

                if (timeLeft.asSeconds() >= 0) {
                    document.documentElement.style.setProperty('--timer-hours', "'" + timeLeft.hours() + "'");
                    document.documentElement.style.setProperty('--timer-minutes', "'" + timeLeft.minutes() + "'");
                    document.documentElement.style.setProperty('--timer-seconds', "'" + timeLeft.seconds() + "'");
                } else {
                    // Handle when the countdown reaches zero (optional)
                    document.documentElement.style.setProperty('--timer-hours', "'0'");
                    document.documentElement.style.setProperty('--timer-minutes', "'0'");
                    document.documentElement.style.setProperty('--timer-seconds', "'0'");
                }

                requestAnimationFrame(updateTime);
            }
        });
    </script>
</body>
</html>