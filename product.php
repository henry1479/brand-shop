
<?php
    include "./php/models/dbGoods.php";
    include "./php/models/getAllFeedbacks.php";  

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>My shop - product</title>
</head>

<body>
    <header class="product-header">
        <div class="container">
            <div class="row product-header__wrapper">
                <div class=" col-6 product-header__controls">
                    <a href="index.html" class="product-header__logo-link">
                        <svg width="44" height="38" viewBox="0 0 44 38" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="44" height="38" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="scale(0.0227273 0.0263158)" />
                                </pattern>
                                <image id="image0" width="44" height="39"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </a>
                    <a href="#" class="product-header__link">
                        <i class="fas fa-search menu-icon"></i>
                    </a>
                </div>
                <div class=" col-6 product-header__controls product-header__navbar">
                    <button type="button" class="product-header__link product-header__button" id="headerButton">
                        <i class="fas fa-bars menu-icon"></i>
                    </button>
                    <a class="product-header__link product-header__person-link" href="registration.html">
                        <i class="fas fa-user menu-icon"></i>
                    </a>
                    <a class="product-header__link product-header__cart-link" href="cart.html">
                        <i class="fas fa-shopping-cart menu-icon"></i>
                        <span class="product-header__cart-link-counter">2</span>
                    </a>
                </div>
            </div>
        </div>

    </header>
    <main>
        <section class="product-offer">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slider-woman.png" class="d-block m-auto w-597 img-mobile-size"
                            alt="women clothes">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider-woman.png" class="d-block m-auto w-597 img-mobile-size"
                            alt="women clothes">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider-woman.png" class="d-block m-auto w-597 img-mobile-size"
                            alt="women clothes">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <i class="fas fa-chevron-left prev-arrow"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <i class="fas fa-chevron-right next-arrow"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="product-description container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <p class="product-description__pretitle">women collection</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="product-description__title-stripe">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="product-description__title">
                        moschino cheap and chic
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <p class="product-description__text">Compellingly actualize fully researched processes before
                        proactive outsourcing. Progressively syndicate collaborative architectures before
                        cutting-edge services. Completely visualize parallel core competencies rather than
                        exceptional portals. </p>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <p class="product-description__price">
                        $561
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="product-description__text-stripe">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle dropdown-link" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            choose color
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle dropdown-link" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            choose size
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle dropdown-link" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            quantity
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <button type="button" class="product-description__button cart">
                        <i class="fas fa-shopping-cart cart-icon"></i>
                        <span>Add to Cart</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="product-products container">
            <h2 class="product-products__heading visually-hidden">Fetured Items</h2>
            <ul class="product-products__list row">
            <?php $goods = getAllGoods($link);
                
                foreach($goods as $good):?>
                <li class="product-products__item col-3">
                    <div class="product-products__overlay-wrapper">
                        <div class="product-products__overlay">
                            <button type="button" class="cart">
                                <svg width="25" height="23" viewBox="0 0 33 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.199 29C26.5512 28.9738 25.9396 28.6948 25.4952 28.2227C25.0509 27.7506 24.8094 27.1232 24.8225 26.475C24.8356 25.8269 25.1023 25.2097 25.5653 24.7559C26.0283 24.3022 26.6508 24.048 27.2991 24.048C27.9474 24.048 28.5697 24.3022 29.0327 24.7559C29.4957 25.2097 29.7624 25.8269 29.7755 26.475C29.7886 27.1232 29.5471 27.7506 29.1028 28.2227C28.6585 28.6948 28.0468 28.9738 27.399 29H27.199ZM7.75098 26.32C7.75098 25.79 7.90815 25.2718 8.20264 24.8311C8.49712 24.3904 8.91569 24.0469 9.4054 23.844C9.8951 23.6412 10.434 23.5881 10.9539 23.6915C11.4737 23.7949 11.9512 24.0502 12.326 24.425C12.7009 24.7998 12.9562 25.2773 13.0596 25.7972C13.163 26.317 13.1098 26.8559 12.907 27.3456C12.7041 27.8353 12.3606 28.2539 11.9199 28.5483C11.4792 28.8428 10.9611 29 10.431 29C10.0789 29.0003 9.73017 28.9311 9.40479 28.7966C9.0794 28.662 8.78374 28.4646 8.53467 28.2158C8.28559 27.9669 8.08805 27.6713 7.95325 27.3461C7.81844 27.0208 7.74902 26.6721 7.74902 26.32H7.75098ZM11.551 20.686C11.2916 20.6868 11.039 20.6024 10.8322 20.4457C10.6253 20.2891 10.4756 20.0689 10.406 19.819L5.573 2.36401H2.18005C1.86657 2.36401 1.56591 2.23947 1.34424 2.01781C1.12257 1.79614 0.998047 1.49549 0.998047 1.18201C0.998047 0.868519 1.12257 0.567873 1.34424 0.346205C1.56591 0.124537 1.86657 5.81268e-06 2.18005 5.81268e-06H6.46106C6.72055 -0.00080736 6.97309 0.0837201 7.17981 0.240568C7.38653 0.397416 7.53589 0.617884 7.60498 0.868006L12.438 18.323H25.616L29.999 8.27501H15.399C15.2409 8.27961 15.0834 8.25242 14.9359 8.19507C14.7884 8.13771 14.6539 8.05134 14.5404 7.94108C14.4269 7.83082 14.3366 7.69891 14.275 7.55315C14.2134 7.40739 14.1816 7.25075 14.1816 7.0925C14.1816 6.93426 14.2134 6.77762 14.275 6.63186C14.3366 6.4861 14.4269 6.35419 14.5404 6.24393C14.6539 6.13367 14.7884 6.0473 14.9359 5.98994C15.0834 5.93259 15.2409 5.90541 15.399 5.91001H31.812C32.0077 5.90996 32.2003 5.95866 32.3724 6.05172C32.5446 6.14478 32.6908 6.27926 32.798 6.44301C32.9058 6.60729 32.9714 6.79569 32.9889 6.99145C33.0063 7.18721 32.9752 7.38424 32.8981 7.565L27.493 19.977C27.4007 20.1876 27.249 20.3668 27.0565 20.4927C26.864 20.6186 26.6391 20.6858 26.4091 20.686H11.551Z"
                                        fill="#E8E8E8" />
                                </svg>
                                <span>Add to Cart</span>
                            </button>
                        </div>
                        <img src="img/<?=$good['image']?>" alt="style-1" class="product-products__item-image" width="360"
                            height="420">
                    </div>
                    <h3 class="product-products__item-heading"><?=$good['name']?></h3>
                    <p class="product-products__item-text"><?=$good['description']?></p>
                    <p class="product-products__item-price"><?=$good['price']?></p>
                </li>
               <?php endforeach; ?>
            </ul>
            <div class="row d-flex justify-content-center">
                <a href="#" class="product-products__button">Browse All Product</a>
            </div>
        </section>
        <section class="product-contacts">
            <div class="container">
                <h2 class="visually-hidden">Follow us</h2>
                <div class="product-contacts__wrapper row">
                    <div class="product-contacts__feedback col-9 col-md-6">
                        <img src="img/smile.png" alt="smile" width="96" height="96">
                        <p class="product-contacts__feedback-text">“Vestibulum quis porttitor dui! Quisque viverra nunc
                            mi, a
                            pulvinar purus condimentum“</p>
                    </div>
                    <div class="product-contacts__form col-9 col-md-6">
                        <p class="product-contacts__form-title">subscribe
                        </p>
                        <p class="product-contacts__form-text">for our newletter and promotion
                        </p>
                        <form action="handler.php" class="product-contacts__form-content">
                            <input type="email" name="email" placeholder="Enter Your Email"
                                class="product-contacts__form-email">
                            <button type="submit" class="product-contacts__form-button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="product-footer">
        <div class="container">
            <div class="product-footer__wrapper row">
                <p class="product-footer__text col-10 col-sm-6">© 2021 Brand All Rights Reserved.</p>
                <div class="product-footer__icons-wrapper col-10 col-sm-4">
                    <a href="#" class="product-footer__link">
                        <svg width="13" height="16" viewBox="0 0 13 16" xmlns="http://www.w3.org/2000/svg"
                            class="product-footer__icon">
                            <path
                                d="M6.74032 0.203125C3.55564 0.203125 0.408203 2.34063 0.408203 5.8C0.408203 8 1.63738 9.25 2.38233 9.25C2.68963 9.25 2.86655 8.3875 2.86655 8.14375C2.86655 7.85313 2.13091 7.23438 2.13091 6.025C2.13091 3.5125 4.03055 1.73125 6.4889 1.73125C8.60271 1.73125 10.1671 2.94062 10.1671 5.1625C10.1671 6.82187 9.50597 9.93437 7.36422 9.93437C6.59133 9.93437 5.93018 9.37187 5.93018 8.56563C5.93018 7.38438 6.74963 6.24062 6.74963 5.02187C6.74963 2.95312 3.835 3.32812 3.835 5.82812C3.835 6.35313 3.90018 6.93437 4.13298 7.4125C3.70463 9.26875 2.82931 12.0344 2.82931 13.9469C2.82931 14.5375 2.91311 15.1188 2.96899 15.7094C3.07452 15.8281 3.02175 15.8156 3.18316 15.7563C4.74757 13.6 4.69169 13.1781 5.3994 10.3562C5.78119 11.0875 6.76826 11.4812 7.55046 11.4812C10.8469 11.4812 12.3275 8.24688 12.3275 5.33125C12.3275 2.22813 9.66427 0.203125 6.74032 0.203125Z" />
                        </svg>
                    </a>
                    <a href="#" class="product-footer__link">
                        <svg width="17" height="14" viewBox="0 0 17 14" xmlns="http://www.w3.org/2000/svg"
                            class="product-footer__icon">
                            <path
                                d="M14.417 3.74052C14.427 3.88264 14.427 4.0248 14.427 4.16692C14.427 8.50192 11.1498 13.4969 5.15986 13.4969C3.31448 13.4969 1.60022 12.9588 0.158203 12.0248C0.420396 12.0552 0.67247 12.0654 0.944752 12.0654C2.46741 12.0654 3.8691 11.5476 4.98843 10.6644C3.5565 10.6339 2.3565 9.68977 1.94305 8.39027C2.14475 8.4207 2.34642 8.44102 2.5582 8.44102C2.85063 8.44102 3.14308 8.40039 3.41533 8.32936C1.92291 8.02477 0.803551 6.70498 0.803551 5.11108V5.07048C1.23715 5.31414 1.74139 5.46642 2.2758 5.4867C1.39849 4.89786 0.823727 3.8928 0.823727 2.75573C0.823727 2.14661 0.985041 1.58823 1.26741 1.10092C2.87077 3.09077 5.28086 4.39023 7.98334 4.53239C7.93293 4.28873 7.90266 4.03495 7.90266 3.78114C7.90266 1.97402 9.35477 0.501953 11.1598 0.501953C12.0976 0.501953 12.9446 0.897891 13.5396 1.53748C14.2757 1.39536 14.9816 1.12123 15.6068 0.745609C15.3648 1.50705 14.8505 2.14664 14.1749 2.5527C14.8304 2.48167 15.4657 2.29889 16.0505 2.04511C15.6069 2.69483 15.0522 3.27348 14.417 3.74052Z" />
                        </svg>

                    </a>
                    <a href="#" class="product-footer__link">
                        <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg"
                            class="product-footer__icon">
                            <path
                                d="M8.13897 3.68159C6.02383 3.68159 4.31774 5.38491 4.31774 7.49663C4.31774 9.60835 6.02383 11.3117 8.13897 11.3117C10.2541 11.3117 11.9602 9.60835 11.9602 7.49663C11.9602 5.38491 10.2541 3.68159 8.13897 3.68159ZM8.13897 9.9769C6.77211 9.9769 5.65467 8.8646 5.65467 7.49663C5.65467 6.12866 6.76878 5.01636 8.13897 5.01636C9.50915 5.01636 10.6233 6.12866 10.6233 7.49663C10.6233 8.8646 9.50583 9.9769 8.13897 9.9769ZM13.0078 3.52554C13.0078 4.02026 12.6087 4.41538 12.1165 4.41538C11.621 4.41538 11.2252 4.01694 11.2252 3.52554C11.2252 3.03413 11.6243 2.63569 12.1165 2.63569C12.6087 2.63569 13.0078 3.03413 13.0078 3.52554ZM15.5386 4.42866C15.4821 3.23667 15.2094 2.18081 14.3347 1.31089C13.4634 0.440967 12.4058 0.168701 11.2119 0.108936C9.9814 0.039209 6.29321 0.039209 5.0627 0.108936C3.8721 0.165381 2.81453 0.437646 1.93987 1.30757C1.06522 2.17749 0.795836 3.23335 0.735973 4.42534C0.666134 5.65386 0.666134 9.33608 0.735973 10.5646C0.79251 11.7566 1.06522 12.8124 1.93987 13.6824C2.81453 14.5523 3.86878 14.8246 5.0627 14.8843C6.29321 14.9541 9.9814 14.9541 11.2119 14.8843C12.4058 14.8279 13.4634 14.5556 14.3347 13.6824C15.2061 12.8124 15.4788 11.7566 15.5386 10.5646C15.6085 9.33608 15.6085 5.65718 15.5386 4.42866ZM13.949 11.8828C13.6895 12.5335 13.1874 13.0349 12.5322 13.2972C11.5511 13.6857 9.22314 13.596 8.13897 13.596C7.05479 13.596 4.72348 13.6824 3.74573 13.2972C3.09389 13.0382 2.59171 12.5369 2.32898 11.8828C1.93987 10.9033 2.02967 8.57905 2.02967 7.49663C2.02967 6.41421 1.9432 4.08667 2.32898 3.1105C2.58838 2.45972 3.09056 1.95835 3.74573 1.69604C4.7268 1.30757 7.05479 1.39722 8.13897 1.39722C9.22314 1.39722 11.5545 1.31089 12.5322 1.69604C13.184 1.95503 13.6862 2.4564 13.949 3.1105C14.3381 4.08999 14.2483 6.41421 14.2483 7.49663C14.2483 8.57905 14.3381 10.9066 13.949 11.8828Z" />
                        </svg>
                    </a>
                    <a href="#" class="product-footer__link">
                        <svg width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg"
                            class="product-footer__icon">
                            <path
                                d="M8.08836 8.28L8.50686 5.61602H5.89022V3.88729C5.89022 3.15847 6.25574 2.44806 7.42765 2.44806H8.61722V0.179975C8.61722 0.179975 7.53772 0 6.50561 0C4.35073 0 2.9422 1.27593 2.9422 3.5857V5.61602H0.546875V8.28H2.9422V14.72H5.89022V8.28H8.08836Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>