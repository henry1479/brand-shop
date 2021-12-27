<?php
    include "./php/models/dbGoods.php";
    include "./php/models/getAllFeedbacks.php";
    print_r($_GET);
    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/style.css">
    <title>My shop</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__controls">
                    <a href="index.html" class="header__logo-link">
                        <svg class="header__icon" width="44" height="38" viewBox="0 0 44 38" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="44" height="38" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="scale(0.0227273 0.0263158)" />
                                </pattern>
                                <image id="image0" width="44" height="39"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAmCAYAAAC/H3lnAAAAAXNSR0IArs4c6QAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAALKADAAQAAAABAAAAJgAAAACVFt04AAAKGElEQVRYCa2Ya5BURxXHT987M/uYfbJsdiG7hMhGXlYkSWnioyooIVR8hVKjlUSNBKgYTVmFFassTXzhBz9o+UyMFYGSsoxiJdGUHywqpYRoICEgWOERCG9YWFiWfc/uzNzb/s6dOzN3ZmdhoTi7/7l9u093nz59+pzT12Q3vypRMo4j6cPHxbs4IP7QiJh4TMSYKMsyXl6MVlBeBf5YqBtNib3z/WLnd4mkM4Xqa1FAmlKyvi+Jm24UPzUm2Z5e8bp7xGaYlIWEpH1q8i+Rulwx64lMnya2rVXEo3yNqSBFdFybzYpJxCUxZ5YkFqAl1y1pjr6EZRs8WaxUxcW/+8MizQ0iWd6vMVUUOJjDWrHjaXGbmyTeNVvs5bZWzSaTFduOZuuTQVlKLOnaSD7BJCYMi7bdxjoEbxRvaFjUxivS2LjIjZ3Y7u1otmAKc+G9BXSCZlAF0uAiOAJ2gONgynRZgS2adpK14rY0iTc4yMAVBTZ6MO27kCsRT8rY+H0wPgAWgjbglh1cqmxGrJyhsB+sA38HKXBJuqzA9DaYg43Nmile70Xxh0eiB1BE7TYeT/kP3uNg6w8g7Lfoo4LCxyLYEVYjBj7D4gPCVFBD3HedWfSfRf0ysXYnbT8EL+WYKv9eSuAuuqwBJ8GPg+75CYOX8EfrWpo6xHV+R82KwG5Nbhfc0TExfez+IIvE1amNswSxMaatTohbXyfS1CA+Nu+77m0I/VfwK8b5AegLZyh5VBL4eji+Bh4CMwGzyV/AYdGJysm34s/ueBK314yBB5p0ei+IOXxS7LkLYhE6OIy6E/kFYz4G7QfeRwXHDcY6Z0p2RqvxqxNfF9/Og3cFU3WXT1dBAnkCpq9EGJOUH2eARxPz58jYG3siTWFRhWUxTt+AOHsPiT1xWvzAqyCUCsa/xEpcI8OxM7qIkZR4w6fYxzMSw8PYeXMk2956tzVmI0x6Ds5FJ6x0gv4Aw0CUifJ97ORtZXWFV4PG3COnxNmyTfxDx8Sq/1Xf7TK8ujtFOeXr1euEfj576qzY13ZK/K2D4mSyS1jsWrpVR7tWEvg/MPwtykS5BTwS1iFNhNCcc+yU2O27xB8YzmmygnyRHpMXGcvHPXp79kv8v/vEHcusxNQ+G+1gynOJsHE+zzdBbYHZmBFC9KKx7btvYHtfZrsKTYXyZJrUg2vtUTqoX9QF1wM9K+8GE0k9CmfDVfNYNH+fn4h/FPPpUUYnmEwnjwpQ9I3FwaxNmljsG7HOGaL5RgnltzdaSZ1xna1oaBUm8TGaloBPgnuDsjH38Pw8eH6CyWAmFnPyDh6V2KFjC5Btef4sOKnr22QUIbyaanE8BCkK/jSDqWMvEJnbZ5yW5o8Eh6VQW1ZQxcfcFPa7BkE+wXgaFN4C2Qinch0Bm8D9QLddd6BILBgHKP7+w+L29q1G43FDBHVQN37RlbG2FkkTgvU9FPoAvTcWR6Bk7XQyMHV5lYnFmkSs16muWs5cPwdDlRlLajX/fB6o9neVtKBpf2RUnP2Hb3JHRu+K4cuLJgFnagbyJGsCXxp2/C3PqC/UQ9oUtpU+VFhcm6mp1sO5OVi06nHqtBfWlezKyZIumIbfc6Eh3n1uaeLiUGli4KSzkiHqpDrackLnDsr6kgEmfTHi1NX+wqmufsHBvDT3MA11YjUnLprZpL3Dht2BKzOGTiERjKx6jvN9C1lM0wS3prHfwywyTBaaxy/pime/BHlot6aq253WuIGnmNqaXMLE4mMtBMCimU0cRA+wIn9wfbuJBW4pMOIi9ZDbgaE7EPzWvMCNMHwVdOUYTc48mJik5Tx1P8vVT/JrSGUa6rY5DfV7eGpZHIR1yBMSszt0MbmUUw91AShRBZ3G1OyGkL6GGOCdk0bgCU0Kb6P+ucFmvRmxUIRP8XwKaMKhp/o3mMfRTENSsrXVUnu650+EyhXUvweUUmi7TlXVPq9f3WwpIZK4SaL7yJj43EYC0ny5fbrYGzpyobu0Cwux1ry+O7wEoGL1GFwmbHo8EFiDw8Nhn2k8vwlWgw2Yx3M2YXakG+u73fH0OtfzfkI9S59AaSdZQ5IxSYhDk/7tHUKSpPtb7BxosPxkMkY222CCcK1tOYGD+2HWv041rO5kMYiSeoI14At0eGmsveXp6vP9z7r9g1+k7tYoY1A2JsMBO19JXM2B0w31kkajhtvL5cm2SyLRFbn0Bl2CYMXCVeAFgCRASE4nUCs1KzGPz2Ua6/7sev5W0z90M1uUN6V8h2o/5s618djWvN2pAVo3JpnWZp5cONRep0YfEt9bVDDgfJ/coRzWib8HXgZqBveCBlBO9dbIqrHpTeNVvX2+cfRAIIAOouR5ruc4S8c7ZzwbRMtcbfF36m4tgWZXyMhIPHIvDMYJ5nSdnryXeJXaL4GlQA/fxLsV5mQdU5VpaUo4CdaZF0KFxtfa/sG7HGuX0DfXpu15BJVT+llBWP+4c/6iCIdMLwQBkQgFQSnm9ucFzo/2BoXHwC3gGRBkSDxzpLcLDQbYZDSf0GTcnDnf7I6lf43W1cSuhpZwvtaySpGzeNK0ChwOowuvivf5w6nT5QLnJ3qbwqNgMfgpOAECIS03aP86dSYRwkZ9LqjOie55CLyJlsWR1qkUH4RpI5fZVudMr5jT6IkAlqfw5r6FgLSzWJtvLX1qAvQ4WAa+C3o4EGSybXysqilqGbOwWn8Af39xcCFO/wV41QV2gkvRQhrXgfX0mWkwA8Ntw+qFNS+w7h6Bw21seM2pr02ZgbcPX2rA8jb1Go9wf3vIeeX1Ljl2OncNynMREGId7eK9773iEXQwm37s+J80vwIOglGgLlMTd1XCB0BSo5q6P4f7oiUHLghLo0ZGU1ezLz6784MmWTNwpQLrEHoHm25OdD9mtu16ghsxs4XGpramvrK9TeyiuZJtbcl5uclcmvbTKxZfSZ09B8Q/krO8wng6l7K0ta7EHNYHY2vdFZMxveb4qe+jPe715slCfxUAbWXPnhP330MS59OVP7tTvLraIOcuHiJ6sDiip5iD3WLfOSY+N+7crSJcvA6qWk8mn2NHN1i+aeiBLA8AyjY1GiTWeN6PUEEXHe4v6YTNeVzf1R4Nt+n4dKygqVGs5tr82XG+VZB3+L1YDONY9ekstIQQ1lRX7QDfhoEoxO5BVy9w7lDge4IQrlFSQ3yRaNcpbCol/glM9zj2npszdFdoUr9ZKMrTE/W7VYm95NWrEfRYcVDYoy9XWVZfrUHn9xX7q5no4lSD2GsALbMLJbYa6WyqYpsReDmKJaEqpWshsI7YD76MABp0jmvFFVOwMHOOxa0Fmu6+U2mMqzeJSqNpWDfyD1T3MFv5aVjmVWYrq3XMWWz7RcxjPUn6mxNMJMJ+rQXWoXHs9jto+xmEvpn3O9HYHTy7cEv11CObSWEoJ0gZt1P+F4Hhf3zeOmjIsC5H/wdL2rGKfdbDqAAAAABJRU5ErkJggg==" />
                            </defs>
                        </svg>
                    </a>
                    <a href="#" class="header__link">
                        <svg width="29" height="29" viewBox="0 0 27 28" class="header__icon"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.0596 17.6259C20.6713 15.8658 21.6282 13.6048 21.7698 11.2225C21.9113 8.84018 21.2288 6.48173 19.8369 4.54318C18.445 2.60463 16.4285 1.20404 14.126 0.576619C11.8234 -0.0508009 9.3751 0.13316 7.19217 1.09761C5.00923 2.06205 3.22463 3.74825 2.13804 5.87302C1.05145 7.9978 0.729054 10.4318 1.225 12.7661C1.72094 15.1005 3.00501 17.1932 4.86158 18.6927C6.71814 20.1922 9.03413 21.0072 11.4206 21.0009C13.673 21.004 15.8645 20.27 17.6606 18.9109L25.4086 26.7179C25.4941 26.807 25.5965 26.8781 25.7099 26.927C25.8232 26.9759 25.9452 27.0017 26.0686 27.0029C26.1923 27.0033 26.3148 26.9782 26.4283 26.9292C26.5419 26.8801 26.6441 26.8082 26.7286 26.7179C26.9025 26.537 26.9997 26.2958 26.9997 26.0449C26.9997 25.794 26.9025 25.5528 26.7286 25.3719L19.0596 17.6259ZM2.88662 10.5009C2.89946 8.81563 3.41094 7.17187 4.35659 5.77685C5.30224 4.38183 6.63972 3.29801 8.20044 2.662C9.76115 2.02599 11.4752 1.86627 13.1266 2.20298C14.7779 2.53969 16.2926 3.35775 17.4797 4.55404C18.6668 5.75033 19.4732 7.27129 19.7972 8.92519C20.1212 10.5791 19.9483 12.2919 19.3002 13.8476C18.6522 15.4034 17.5581 16.7325 16.1559 17.6674C14.7536 18.6023 13.1059 19.1011 11.4206 19.1009C9.14916 19.0901 6.97482 18.1784 5.37484 16.566C3.77486 14.9537 2.87998 12.7724 2.88662 10.5009Z" />
                        </svg>
                    </a>
                </div>
                <div class="header__controls">
                    <button type="button" class="header__link header__button" id="headerButton">
                        <svg width="29" height="29" viewBox="0 0 32 23" class="header__icon" id="buttonIcon"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 23V20.31H32V23H0ZM0 12.76V10.07H32V12.76H0ZM0 2.69V0H32V2.69H0Z" />
                        </svg>
                    </button>
                    <a class="header__link header__person-link" href="registration.html">
                        <svg width="29" height="29" viewBox="0 0 29 29" class="header__icon"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.5 19.937C19 19.937 22.656 15.464 22.656 9.968C22.656 4.472 19 0 14.5 0C13.3631 0.0217413 12.2463 0.303398 11.2351 0.823397C10.2239 1.34339 9.34507 2.08794 8.66602 3C7.12663 4.99573 6.30819 7.45381 6.34399 9.974C6.34399 15.465 10 19.937 14.5 19.937ZM14.5 1.813C18 1.813 20.844 5.472 20.844 9.969C20.844 14.466 17.998 18.125 14.5 18.125C11.002 18.125 8.15603 14.465 8.15503 9.969C8.15403 5.473 11 1.813 14.5 1.813ZM20.844 18.125C20.6036 18.125 20.373 18.2205 20.203 18.3905C20.033 18.5605 19.9375 18.7911 19.9375 19.0315C19.9375 19.2719 20.033 19.5025 20.203 19.6725C20.373 19.8425 20.6036 19.938 20.844 19.938C22.526 19.9399 24.1386 20.6088 25.3279 21.7982C26.5172 22.9875 27.1861 24.6 27.188 26.282C27.1875 26.5221 27.0918 26.7523 26.922 26.9221C26.7522 27.0918 26.5221 27.1875 26.282 27.188H2.71997C2.47985 27.1875 2.24975 27.0918 2.07996 26.9221C1.91016 26.7523 1.81449 26.5221 1.81396 26.282C1.81608 24.6001 2.48517 22.9877 3.67444 21.7985C4.86371 20.6092 6.47608 19.9401 8.15796 19.938C8.39824 19.938 8.62868 19.8425 8.79858 19.6726C8.96849 19.5027 9.06396 19.2723 9.06396 19.032C9.06396 18.7917 8.96849 18.5613 8.79858 18.3914C8.62868 18.2215 8.39824 18.126 8.15796 18.126C5.99541 18.1279 3.92201 18.9875 2.39258 20.5164C0.863144 22.0453 0.00264777 24.1185 0 26.281C0.000794067 27.0019 0.287502 27.693 0.797241 28.2027C1.30698 28.7125 1.99811 28.9992 2.71899 29H26.282C27.0027 28.9989 27.6936 28.7121 28.2031 28.2024C28.7126 27.6927 28.9992 27.0017 29 26.281C28.9974 24.1187 28.1372 22.0457 26.6083 20.5168C25.0793 18.9878 23.0063 18.1276 20.844 18.125Z" />
                        </svg>
                    </a>
                    <a class="header__link header__cart-link" href="cart.php">
                        <svg width="29" height="29" viewBox="0 0 33 29" class="header__icon"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.199 29C26.5512 28.9738 25.9396 28.6948 25.4952 28.2227C25.0509 27.7506 24.8094 27.1232 24.8225 26.475C24.8356 25.8269 25.1023 25.2097 25.5653 24.7559C26.0283 24.3022 26.6508 24.048 27.2991 24.048C27.9474 24.048 28.5697 24.3022 29.0327 24.7559C29.4957 25.2097 29.7624 25.8269 29.7755 26.475C29.7886 27.1232 29.5471 27.7506 29.1028 28.2227C28.6585 28.6948 28.0468 28.9738 27.399 29H27.199ZM7.75098 26.32C7.75098 25.79 7.90815 25.2718 8.20264 24.8311C8.49712 24.3904 8.91569 24.0469 9.4054 23.844C9.8951 23.6412 10.434 23.5881 10.9539 23.6915C11.4737 23.7949 11.9512 24.0502 12.326 24.425C12.7009 24.7998 12.9562 25.2773 13.0596 25.7972C13.163 26.317 13.1098 26.8559 12.907 27.3456C12.7041 27.8353 12.3606 28.2539 11.9199 28.5483C11.4792 28.8428 10.9611 29 10.431 29C10.0789 29.0003 9.73017 28.9311 9.40479 28.7966C9.0794 28.662 8.78374 28.4646 8.53467 28.2158C8.28559 27.9669 8.08805 27.6713 7.95325 27.3461C7.81844 27.0208 7.74902 26.6721 7.74902 26.32H7.75098ZM11.551 20.686C11.2916 20.6868 11.039 20.6024 10.8322 20.4457C10.6253 20.2891 10.4756 20.0689 10.406 19.819L5.573 2.36401H2.18005C1.86657 2.36401 1.56591 2.23947 1.34424 2.01781C1.12257 1.79614 0.998047 1.49549 0.998047 1.18201C0.998047 0.868519 1.12257 0.567873 1.34424 0.346205C1.56591 0.124537 1.86657 5.81268e-06 2.18005 5.81268e-06H6.46106C6.72055 -0.00080736 6.97309 0.0837201 7.17981 0.240568C7.38653 0.397416 7.53589 0.617884 7.60498 0.868006L12.438 18.323H25.616L29.999 8.27501H15.399C15.2409 8.27961 15.0834 8.25242 14.9359 8.19507C14.7884 8.13771 14.6539 8.05134 14.5404 7.94108C14.4269 7.83082 14.3366 7.69891 14.275 7.55315C14.2134 7.40739 14.1816 7.25075 14.1816 7.0925C14.1816 6.93426 14.2134 6.77762 14.275 6.63186C14.3366 6.4861 14.4269 6.35419 14.5404 6.24393C14.6539 6.13367 14.7884 6.0473 14.9359 5.98994C15.0834 5.93259 15.2409 5.90541 15.399 5.91001H31.812C32.0077 5.90996 32.2003 5.95866 32.3724 6.05172C32.5446 6.14478 32.6908 6.27926 32.798 6.44301C32.9058 6.60729 32.9714 6.79569 32.9889 6.99145C33.0063 7.18721 32.9752 7.38424 32.8981 7.565L27.493 19.977C27.4007 20.1876 27.249 20.3668 27.0565 20.4927C26.864 20.6186 26.6391 20.6858 26.4091 20.686H11.551Z" />
                        </svg>
                        <span class="header__cart-link-counter">2</span>
                    </a>
                </div>
            </div>
        </div>

    </header>
    <main>
        <section class="brand position-relative">
            <div class="brand__overlay-wrapper" id="overlayWrapper">
                <div class="brand__overlay-subwrapper">
                    <div class="brand__overlay"></div>
                    <nav class="brand__nav">
                        <div class="brand__button-wrapper">
                            <button class="brand__button" id="brandButton" type="button">
                                <svg width="13" height="13" viewBox="0 0 13 13" 
                                    xmlns="http://www.w3.org/2000/svg" >
                                    <path
                                        d="M7.4158 6.00409L11.7158 1.71409C11.9041 1.52579 12.0099 1.27039 12.0099 1.00409C12.0099 0.73779 11.9041 0.482395 11.7158 0.294092C11.5275 0.105788 11.2721 0 11.0058 0C10.7395 0 10.4841 0.105788 10.2958 0.294092L6.0058 4.59409L1.7158 0.294092C1.52749 0.105788 1.2721 -1.9841e-09 1.0058 0C0.739497 1.9841e-09 0.484102 0.105788 0.295798 0.294092C0.107495 0.482395 0.0017066 0.73779 0.0017066 1.00409C0.0017066 1.27039 0.107495 1.52579 0.295798 1.71409L4.5958 6.00409L0.295798 10.2941C0.20207 10.3871 0.127676 10.4977 0.0769072 10.6195C0.0261385 10.7414 0 10.8721 0 11.0041C0 11.1361 0.0261385 11.2668 0.0769072 11.3887C0.127676 11.5105 0.20207 11.6211 0.295798 11.7141C0.388761 11.8078 0.499362 11.8822 0.621222 11.933C0.743081 11.9838 0.873786 12.0099 1.0058 12.0099C1.13781 12.0099 1.26852 11.9838 1.39038 11.933C1.51223 11.8822 1.62284 11.8078 1.7158 11.7141L6.0058 7.41409L10.2958 11.7141C10.3888 11.8078 10.4994 11.8822 10.6212 11.933C10.7431 11.9838 10.8738 12.0099 11.0058 12.0099C11.1378 12.0099 11.2685 11.9838 11.3904 11.933C11.5122 11.8822 11.6228 11.8078 11.7158 11.7141C11.8095 11.6211 11.8839 11.5105 11.9347 11.3887C11.9855 11.2668 12.0116 11.1361 12.0116 11.0041C12.0116 10.8721 11.9855 10.7414 11.9347 10.6195C11.8839 10.4977 11.8095 10.3871 11.7158 10.2941L7.4158 6.00409Z"
                                        fill="#6F6E6E" />
                                </svg>
                            </button>
                        </div>
                        <h2 class="brand__nav-title">Menu</h2>
                        <ul class="brand__list">
                            <li class="brand__item">
                                <h3 class="brand__nav-subtitle">Man</h3>
                                <ul class="brand__sublist">
                                    <li class="brand__subitem"><a href="product.html" class="brand__link">Accessories</a></li>
                                    <li class="brand__subitem"><a href="product.html" class="brand__link">Bags</a></li>
                                    <li class="brand__subitem"><a href="product.html" class="brand__link">Denim</a></li>
                                    <li class="brand__subitem"><a href="product.html" class="brand__link">T-Shirts</a></li>
                                </ul>
                            </li>
                            <li class="brand__item">
                                <h3 class="brand__nav-subtitle">Woman</h3>
                                <ul class="brand__sublist">
                                    <li class="brand__subitem"><a href="#" class="brand__link"
                                            class="brand__link">Accessories</a></li>
                                    <li class="brand__subitem"><a href="#" class="brand__link"
                                            class="brand__link">Jackets &
                                            Coats</a></li>
                                    <li class="brand__subitem"><a href="#" class="brand__link"
                                            class="brand__link">Polos</a>
                                    </li>
                                    <li class="brand__subitem"><a href="#" class="brand__link"
                                            class="brand__link">T-Shirts</a></li>
                                </ul>

                            </li>
                            <li class="brand__item">
                                <h3 class="brand__nav-subtitle">Kids</h3>
                                <ul class="brand__sublist">
                                    <li class="brand__subitem"><a href="#" class="brand__link">Accessories</a></li>
                                    <li class="brand__subitem"><a href="#" class="brand__link">Jackets & Coats</a></li>
                                    <li class="brand__subitem"><a href="#" class="brand__link">T-Shirts</a></li>
                                    <li class="brand__subitem"><a href="#" class="brand__link">Shirts</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <img src="img/offer.png" alt="Brand" class="brand__image" width="800" height="765">
            <div class="brand__title-wrapper">
                <h1 class="brand__title">the brand <span class="brand__subtitle">of luxerious <span
                            class="brand__subtitle brand__subtitle--pink">fashion</span></span></h1>
            </div>
        </section>
        <section class="offers container">
            <h2 class="visually-hidden">Offers</h2>
            <ul class="offers__list">
                <li class="offers__item offers__item--woman">
                    <div>
                        <h3 class="offers__item-title">30% off</h3>
                        <p class="offers__item-text">for women</p>
                    </div>
                </li>
                <li class="offers__item offers__item--man">
                    <div>
                        <h3 class="offers__item-title">hot deal</h3>
                        <p class="offers__item-text">for men</p>
                    </div>
                </li>
                <li class="offers__item offers__item--kids">
                    <div>
                        <h3 class="offers__item-title">new arraivals</h3>
                        <p class="offers__item-text">for kids</p>
                    </div>
                </li>
                <li class="offers__item offers__item--accesories">
                    <div>
                        <h3 class="offers__item-title">luxerious & trendy</h3>
                        <p class="offers__item-text">accessories</p>
                    </div>
                </li>
            </ul>
        </section>
        <section class="products container">
            <h2 class="products__heading">Fetured Items</h2>
            <p class="products__text">Shop for items based on what we featured in this week</p>
            <ul class="products__list">
                <?php $goods = getAllGoods($link);
                // print_r($goods);
                foreach($goods as $good):?>
                <li class="products__item">
                    <div class="products__overlay-wrapper">
                        <div class="products__overlay">
                            <button type="button" class="cart" onClick="addToCart(<?=$good['id'];?>)">
                                <svg width="25" height="23" viewBox="0 0 33 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.199 29C26.5512 28.9738 25.9396 28.6948 25.4952 28.2227C25.0509 27.7506 24.8094 27.1232 24.8225 26.475C24.8356 25.8269 25.1023 25.2097 25.5653 24.7559C26.0283 24.3022 26.6508 24.048 27.2991 24.048C27.9474 24.048 28.5697 24.3022 29.0327 24.7559C29.4957 25.2097 29.7624 25.8269 29.7755 26.475C29.7886 27.1232 29.5471 27.7506 29.1028 28.2227C28.6585 28.6948 28.0468 28.9738 27.399 29H27.199ZM7.75098 26.32C7.75098 25.79 7.90815 25.2718 8.20264 24.8311C8.49712 24.3904 8.91569 24.0469 9.4054 23.844C9.8951 23.6412 10.434 23.5881 10.9539 23.6915C11.4737 23.7949 11.9512 24.0502 12.326 24.425C12.7009 24.7998 12.9562 25.2773 13.0596 25.7972C13.163 26.317 13.1098 26.8559 12.907 27.3456C12.7041 27.8353 12.3606 28.2539 11.9199 28.5483C11.4792 28.8428 10.9611 29 10.431 29C10.0789 29.0003 9.73017 28.9311 9.40479 28.7966C9.0794 28.662 8.78374 28.4646 8.53467 28.2158C8.28559 27.9669 8.08805 27.6713 7.95325 27.3461C7.81844 27.0208 7.74902 26.6721 7.74902 26.32H7.75098ZM11.551 20.686C11.2916 20.6868 11.039 20.6024 10.8322 20.4457C10.6253 20.2891 10.4756 20.0689 10.406 19.819L5.573 2.36401H2.18005C1.86657 2.36401 1.56591 2.23947 1.34424 2.01781C1.12257 1.79614 0.998047 1.49549 0.998047 1.18201C0.998047 0.868519 1.12257 0.567873 1.34424 0.346205C1.56591 0.124537 1.86657 5.81268e-06 2.18005 5.81268e-06H6.46106C6.72055 -0.00080736 6.97309 0.0837201 7.17981 0.240568C7.38653 0.397416 7.53589 0.617884 7.60498 0.868006L12.438 18.323H25.616L29.999 8.27501H15.399C15.2409 8.27961 15.0834 8.25242 14.9359 8.19507C14.7884 8.13771 14.6539 8.05134 14.5404 7.94108C14.4269 7.83082 14.3366 7.69891 14.275 7.55315C14.2134 7.40739 14.1816 7.25075 14.1816 7.0925C14.1816 6.93426 14.2134 6.77762 14.275 6.63186C14.3366 6.4861 14.4269 6.35419 14.5404 6.24393C14.6539 6.13367 14.7884 6.0473 14.9359 5.98994C15.0834 5.93259 15.2409 5.90541 15.399 5.91001H31.812C32.0077 5.90996 32.2003 5.95866 32.3724 6.05172C32.5446 6.14478 32.6908 6.27926 32.798 6.44301C32.9058 6.60729 32.9714 6.79569 32.9889 6.99145C33.0063 7.18721 32.9752 7.38424 32.8981 7.565L27.493 19.977C27.4007 20.1876 27.249 20.3668 27.0565 20.4927C26.864 20.6186 26.6391 20.6858 26.4091 20.686H11.551Z"
                                        fill="#E8E8E8" />
                                </svg>
                                <span>Add to Cart</span>
                            </button>
                        </div>
                        <img src="img/<?=$good['image']?>" alt="style-1" class="products__item-image" width="360" height="420">
                    </div>
                    <h3 class="products__item-heading"><?=$good['name']?></h3>
                    <p class="products__item-text"><?=$good['description']?>.</p>
                    <p class="products__item-price">$<?=$good['price']?></p>
                </li>
                <?php
                    endforeach;
                ?>
            </ul>
            <a href="./catalog.html" class="products__button">Browse All Product</a>
        </section>
        <section class="advantages">
            <div class="container">
                <h2 class="visually-hidden">Advantages</h2>
                <ul class="advantages__list">
                    <li class="advantages__item">
                        <div class="advantages__wrapper">
                            <svg width="46" height="32" viewBox="0 0 46 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.2873 27.2429H14.8103C14.6031 28.5509 13.936 29.742 12.929 30.6021C11.922 31.4621 10.6411 31.9346 9.31682 31.9346C7.99252 31.9346 6.71166 31.4621 5.70464 30.6021C4.69762 29.742 4.03052 28.5509 3.82332 27.2429H1.88631C1.39149 27.2397 0.918139 27.0404 0.570025 26.6887C0.221911 26.337 0.0274507 25.8618 0.0293142 25.3669V1.87695C0.0271852 1.38195 0.221516 0.906335 0.569658 0.554443C0.917801 0.202551 1.39131 0.00317363 1.88631 0H27.4373C27.9322 0.00317353 28.4056 0.202522 28.7536 0.554443C29.1016 0.906364 29.2957 1.38204 29.2933 1.87695V3.78198H36.4143C36.4947 3.78164 36.5747 3.79208 36.6523 3.81299C38.9523 4.01299 40.1093 5.2129 41.3293 7.2749L44.8883 13.3689C44.9732 13.5136 45.018 13.6782 45.0183 13.8459V26.304C45.0194 26.5515 44.9221 26.7892 44.7479 26.9651C44.5737 27.141 44.3369 27.2406 44.0893 27.2419H41.2753C41.0681 28.5499 40.401 29.741 39.394 30.6011C38.387 31.4611 37.1061 31.9336 35.7818 31.9336C34.4575 31.9336 33.1767 31.4611 32.1696 30.6011C31.1626 29.741 30.4955 28.5499 30.2883 27.2419L30.2873 27.2429ZM32.0653 26.304C32.0732 27.0369 32.2977 27.7511 32.7107 28.3567C33.1236 28.9623 33.7065 29.4322 34.3859 29.7073C35.0653 29.9824 35.811 30.0503 36.5289 29.9026C37.2469 29.7548 37.9051 29.398 38.4207 28.877C38.9363 28.3559 39.2862 27.6941 39.4265 26.9746C39.5667 26.2551 39.491 25.5103 39.2088 24.8337C38.9267 24.1572 38.4507 23.5794 37.8408 23.1729C37.2309 22.7663 36.5143 22.5491 35.7813 22.5488C34.791 22.5552 33.8436 22.9543 33.1469 23.6582C32.4503 24.3621 32.0613 25.3136 32.0653 26.304ZM5.60134 26.304C5.60923 27.0369 5.83376 27.7511 6.24669 28.3567C6.65962 28.9623 7.2425 29.4322 7.92192 29.7073C8.60135 29.9824 9.34697 30.0503 10.0649 29.9026C10.7829 29.7548 11.4411 29.398 11.9567 28.877C12.4723 28.3559 12.8222 27.6941 12.9625 26.9746C13.1027 26.2551 13.027 25.5103 12.7448 24.8337C12.4627 24.1572 11.9867 23.5794 11.3768 23.1729C10.7669 22.7663 10.0503 22.5491 9.31731 22.5488C8.32679 22.5549 7.37915 22.9537 6.6823 23.6577C5.98545 24.3617 5.59634 25.3134 5.60033 26.304H5.60134ZM41.2733 25.366H43.1593V19.7478H40.4233C40.3007 19.7473 40.1794 19.7227 40.0664 19.6753C39.9533 19.6279 39.8507 19.5585 39.7644 19.4714C39.6781 19.3843 39.6099 19.281 39.5635 19.1675C39.5172 19.054 39.4937 18.9324 39.4943 18.8098V16.9629C39.494 16.2423 39.7696 15.5488 40.2643 15.0249H33.8853C33.8081 15.0248 33.7312 15.015 33.6563 14.9958C32.9516 14.933 32.2961 14.6081 31.8194 14.0852C31.3428 13.5623 31.0798 12.8794 31.0823 12.1719V7.47192C31.0817 7.34927 31.1052 7.22758 31.1515 7.11401C31.1978 7.00044 31.2661 6.89725 31.3523 6.81006C31.4386 6.72286 31.5412 6.6535 31.6543 6.60596C31.7674 6.55841 31.8887 6.53361 32.0113 6.53296H38.4943C38.15 6.21428 37.7426 5.97123 37.2986 5.81982C36.8545 5.66842 36.3836 5.61187 35.9163 5.65381H29.2933V25.3618H30.2873C30.4945 24.0538 31.1616 22.8627 32.1687 22.0027C33.1757 21.1426 34.4565 20.6702 35.7808 20.6702C37.1051 20.6702 38.386 21.1426 39.393 22.0027C40.4 22.8627 41.0671 24.0538 41.2743 25.3618L41.2733 25.366ZM14.8093 25.366H27.4363V1.87598H1.88631V25.366H3.82332C4.03052 24.058 4.69762 22.8666 5.70464 22.0066C6.71166 21.1465 7.99252 20.6741 9.31682 20.6741C10.6411 20.6741 11.922 21.1465 12.929 22.0066C13.936 22.8666 14.6031 24.058 14.8103 25.366H14.8093ZM41.3513 16.9658V17.875H43.1593V16.0278H42.2803C42.0335 16.0294 41.7973 16.1288 41.6234 16.304C41.4495 16.4792 41.352 16.716 41.3523 16.9629L41.3513 16.9658ZM32.9383 12.1738C32.9372 12.4263 33.0363 12.6691 33.2139 12.8486C33.3914 13.0282 33.6328 13.13 33.8853 13.1318C33.9492 13.1316 34.0129 13.1384 34.0753 13.1519H42.6003L39.8343 8.41602H32.9343L32.9383 12.1738ZM33.0313 26.3059C33.0284 25.5734 33.3162 24.8695 33.8316 24.3489C34.3469 23.8283 35.0478 23.5333 35.7803 23.5288C36.0291 23.5288 36.2677 23.6278 36.4436 23.8037C36.6195 23.9796 36.7183 24.218 36.7183 24.4668C36.7183 24.7156 36.6195 24.9542 36.4436 25.1301C36.2677 25.306 36.0291 25.4048 35.7803 25.4048C35.602 25.4032 35.4272 25.4548 35.2782 25.5527C35.1291 25.6507 35.0125 25.7905 34.9432 25.9548C34.8738 26.1191 34.8548 26.3005 34.8887 26.4756C34.9225 26.6507 35.0076 26.8118 35.1331 26.9385C35.2586 27.0651 35.419 27.1516 35.5938 27.187C35.7686 27.2224 35.9499 27.2051 36.1149 27.1372C36.2798 27.0693 36.4208 26.9538 36.5201 26.8057C36.6193 26.6575 36.6723 26.4833 36.6723 26.3049C36.6723 26.0587 36.7701 25.8226 36.9443 25.6484C37.1184 25.4743 37.3546 25.3765 37.6008 25.3765C37.8471 25.3765 38.0832 25.4743 38.2574 25.6484C38.4315 25.8226 38.5293 26.0587 38.5293 26.3049C38.5293 27.0343 38.2396 27.7338 37.7239 28.2495C37.2081 28.7652 36.5087 29.0549 35.7793 29.0549C35.05 29.0549 34.3505 28.7652 33.8348 28.2495C33.319 27.7338 33.0293 27.0343 33.0293 26.3049L33.0313 26.3059ZM6.56731 26.3059C6.56438 25.5734 6.8522 24.8695 7.36757 24.3489C7.88294 23.8283 8.58378 23.5333 9.31633 23.5288C9.5651 23.5288 9.80369 23.6278 9.9796 23.8037C10.1555 23.9796 10.2543 24.218 10.2543 24.4668C10.2543 24.7156 10.1555 24.9542 9.9796 25.1301C9.80369 25.306 9.5651 25.4048 9.31633 25.4048C9.138 25.4032 8.96319 25.4548 8.81413 25.5527C8.66508 25.6507 8.54849 25.7905 8.47914 25.9548C8.4098 26.1191 8.39082 26.3005 8.42464 26.4756C8.45846 26.6507 8.54354 26.8118 8.66908 26.9385C8.79463 27.0651 8.95498 27.1516 9.12978 27.187C9.30458 27.2224 9.48595 27.2051 9.65087 27.1372C9.81579 27.0693 9.95683 26.9538 10.0561 26.8057C10.1553 26.6575 10.2083 26.4833 10.2083 26.3049C10.2083 26.0587 10.3061 25.8226 10.4803 25.6484C10.6544 25.4743 10.8906 25.3765 11.1368 25.3765C11.3831 25.3765 11.6193 25.4743 11.7934 25.6484C11.9675 25.8226 12.0653 26.0587 12.0653 26.3049C12.0653 27.0343 11.7756 27.7338 11.2599 28.2495C10.7441 28.7652 10.0447 29.0549 9.31532 29.0549C8.58598 29.0549 7.8865 28.7652 7.37078 28.2495C6.85505 27.7338 6.56532 27.0343 6.56532 26.3049L6.56731 26.3059ZM4.70934 5.65991C4.46056 5.65991 4.22198 5.56116 4.04607 5.38525C3.87016 5.20934 3.77132 4.9707 3.77132 4.72192C3.77132 4.47315 3.87016 4.2345 4.04607 4.05859C4.22198 3.88268 4.46056 3.78394 4.70934 3.78394H24.6093C24.8581 3.78394 25.0967 3.88268 25.2726 4.05859C25.4485 4.2345 25.5473 4.47315 25.5473 4.72192C25.5473 4.9707 25.4485 5.20934 25.2726 5.38525C25.0967 5.56116 24.8581 5.65991 24.6093 5.65991H4.70934Z"
                                    fill="#F16D7F" />
                            </svg>
                        </div>

                        <h3 class="advantages__item-heading">Free Delivery</h3>
                        <p class="advantages__item-text">Worldwide delivery on all. Authorit tively morph
                            next-generation innov tion with extensive models.</p>
                    </li>
                    <li class="advantages__item">
                        <div class="advantages__wrapper">

                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.994 37.0239L16.523 39.9238L14.235 36.0039L9.995 37.5159L9.17297 33.0359L4.67999 32.991L5.41199 28.491L1.20398 26.8909L3.414 22.925L0 19.96L3.41199 16.9929L1.20203 13.0278L5.41101 11.428L4.67798 6.93286L9.172 6.88892L9.99402 2.40894L14.234 3.91992L16.522 0L19.993 2.8999L23.464 0L25.753 3.9209L29.993 2.40894L30.814 6.88989L35.308 6.93481L34.576 11.4299L38.784 13.03L36.574 16.9958L39.986 19.9609L36.574 22.928L38.783 26.894L34.574 28.4939L35.307 32.988L30.812 33.033L29.991 37.5139L25.753 36.0029L23.464 39.9229L19.994 37.0239ZM21.2 35.541L22.961 37.012L24.122 35.022L24.914 33.666L26.382 34.189L28.533 34.957L28.95 32.6838L29.235 31.1289L30.796 31.113L33.078 31.092L32.706 28.8098L32.452 27.25L33.911 26.696L36.045 25.8828L34.925 23.873L34.159 22.498L35.342 21.4709L37.076 19.9609L35.343 18.4609L34.16 17.4319L34.926 16.0559L36.047 14.0449L33.913 13.2339L32.454 12.6809L32.709 11.1208L33.081 8.83984L30.799 8.81689L29.239 8.80103L28.954 7.24683L28.538 4.97388L26.386 5.74097L24.918 6.26392L24.125 4.90698L22.963 2.91699L21.201 4.38794L19.996 5.39282L18.791 4.38794L17.03 2.91699L15.869 4.90601L15.077 6.26294L13.608 5.73999L11.458 4.97192L11.04 7.24585L10.755 8.80005L9.19501 8.81592L6.914 8.83789L7.28601 11.1199L7.53998 12.678L6.08099 13.2329L3.94598 14.0439L5.06702 16.0549L5.83301 17.4299L4.65002 18.459L2.91602 19.967L4.64899 21.4739L5.83197 22.5029L5.06598 23.8779L3.94501 25.8879L6.078 26.698L7.53802 27.2529L7.28302 28.812L6.91199 31.0959L9.19299 31.1189L10.753 31.135L11.038 32.6899L11.455 34.9619L13.607 34.1948L15.076 33.6719L15.868 35.0288L17.03 37.019L18.791 35.5479L19.996 34.543L21.2 35.541ZM21.318 23.02C21.318 20.093 22.883 18.4648 24.777 18.4648C26.783 18.4648 28.077 20.0279 28.077 22.7949C28.077 25.8539 26.492 27.3718 24.662 27.3718C22.883 27.3718 21.338 25.922 21.318 23.02ZM22.839 22.9319C22.816 24.7829 23.521 26.1899 24.711 26.1899C25.988 26.1899 26.561 24.8049 26.561 22.8899C26.561 21.1249 26.054 19.6528 24.711 19.6528C23.5 19.6488 22.839 21.1029 22.839 22.9309V22.9319ZM15.194 27.332L23.609 12.613H24.842L16.427 27.332H15.194ZM11.979 16.99C11.979 14.09 13.542 12.458 15.437 12.458C17.437 12.458 18.763 14.022 18.763 16.79C18.763 19.848 17.177 21.365 15.327 21.365C13.544 21.365 12 19.915 11.979 16.991V16.99ZM13.521 16.9238C13.477 18.7748 14.162 20.1809 15.371 20.1829C16.648 20.1829 17.221 18.7988 17.221 16.8828C17.221 15.1168 16.714 13.645 15.371 13.645C14.162 13.642 13.521 15.092 13.521 16.925V16.9238Z"
                                    fill="#F16D7F" />
                            </svg>
                        </div>
                        <h3 class="advantages__item-heading">Sales & discounts</h3>
                        <p class="advantages__item-text">Worldwide delivery on all. Authorit tively morph
                            next-generation innov tion with extensive models.</p>
                    </li>
                    <li class="advantages__item">
                        <div class="advantages__wrapper">
                            <svg width="48" height="35" viewBox="0 0 48 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42.3938 8.53564C41.1774 8.52335 40.0058 8.99349 39.1351 9.84302C38.2644 10.6925 37.7655 11.8522 37.7479 13.0686C37.751 13.7086 37.892 14.3405 38.1612 14.9211C38.4304 15.5018 38.8215 16.0176 39.3079 16.4336L33.4479 18.4888L25.1089 8.80566C26.0042 8.50693 26.784 7.93646 27.3396 7.17358C27.8953 6.41071 28.1992 5.49331 28.2089 4.54956C28.1837 3.33432 27.6832 2.17743 26.8149 1.3269C25.9465 0.476377 24.7794 0 23.5639 0C22.3484 0 21.1813 0.476377 20.3129 1.3269C19.4446 2.17743 18.9441 3.33432 18.9189 4.54956C18.9285 5.48395 19.2261 6.39274 19.771 7.15186C20.316 7.91097 21.0817 8.48368 21.9639 8.79175L13.6119 18.4917L7.75396 16.4368C8.24003 16.0206 8.63074 15.5045 8.89959 14.9238C9.16843 14.3432 9.30908 13.7116 9.31194 13.0718C9.33497 12.195 9.10937 11.3296 8.6613 10.5757C8.21324 9.82172 7.56095 9.2099 6.77983 8.81104C5.99872 8.41217 5.12072 8.2424 4.24724 8.32153C3.37376 8.40067 2.54051 8.72555 1.8438 9.2583C1.14709 9.79105 0.61538 10.5101 0.310108 11.3323C0.00483695 12.1545 -0.0615238 13.0462 0.118702 13.9045C0.298928 14.7629 0.718349 15.5526 1.32854 16.1826C1.93873 16.8126 2.7148 17.2571 3.56694 17.4646V29.7556C3.5743 29.8376 3.59101 29.9184 3.61687 29.9966C3.58394 30.1233 3.56721 30.2538 3.56694 30.3848C3.56694 34.7968 21.4859 34.9268 23.5289 34.9268C25.5719 34.9268 43.4909 34.7978 43.4909 30.3848C43.4902 30.2539 43.4733 30.1234 43.4408 29.9966C43.4685 29.9189 43.4853 29.8379 43.4909 29.7556V17.4646C44.5898 17.2244 45.5595 16.5828 46.2103 15.6653C46.861 14.7478 47.1458 13.6204 47.0091 12.5039C46.8724 11.3874 46.3239 10.3621 45.471 9.62866C44.6181 8.89526 43.5223 8.50653 42.3979 8.53857L42.3938 8.53564ZM21.1749 4.55176C21.1633 4.07755 21.2934 3.61062 21.5485 3.21069C21.8036 2.81076 22.172 2.49591 22.6069 2.3064C23.0417 2.11688 23.5232 2.06132 23.9898 2.14673C24.4564 2.23214 24.887 2.45463 25.2265 2.78589C25.566 3.11715 25.7991 3.542 25.8959 4.00635C25.9928 4.4707 25.9491 4.95345 25.7703 5.39282C25.5916 5.8322 25.2859 6.20831 24.8924 6.47314C24.4988 6.73798 24.0353 6.8795 23.561 6.87964C22.9362 6.88605 22.3343 6.64481 21.8871 6.2085C21.44 5.77218 21.1838 5.17647 21.1749 4.55176ZM13.5849 20.8276C13.8019 20.9026 14.0362 20.9113 14.2581 20.8525C14.48 20.7938 14.6794 20.6701 14.8309 20.4976L23.5309 10.3977L32.2309 20.4976C32.3821 20.6702 32.5813 20.7938 32.803 20.8528C33.0248 20.9117 33.2589 20.9033 33.4759 20.8286L41.2339 18.1038V28.0408C36.3489 25.9188 25.1249 25.8406 23.5339 25.8406C21.9429 25.8406 10.7149 25.9198 5.83391 28.0408V18.1038L13.5849 20.8276ZM23.5279 32.7166C14.8279 32.7166 9.27888 31.7057 6.97087 30.8547C6.6198 30.7373 6.28407 30.578 5.97087 30.3806C6.69287 29.8596 9.03194 29.1487 12.9369 28.6487C19.9723 27.844 27.0765 27.844 34.1119 28.6487C38.0119 29.1487 40.357 29.8596 41.077 30.3806C40.7663 30.5794 40.4321 30.7388 40.082 30.8547C37.78 31.7037 32.2359 32.7166 23.5279 32.7166ZM2.28093 13.0686C2.2698 12.5945 2.40025 12.1279 2.65557 11.7283C2.91089 11.3286 3.27952 11.0139 3.71441 10.8247C4.14929 10.6355 4.63063 10.5801 5.0971 10.6658C5.56356 10.7514 5.99399 10.9743 6.3333 11.3057C6.67261 11.637 6.90543 12.0618 7.00212 12.5261C7.09882 12.9904 7.05498 13.4731 6.87615 13.9124C6.69732 14.3516 6.39159 14.7277 5.9981 14.9924C5.6046 15.2572 5.14118 15.3986 4.66692 15.3987C4.04176 15.4054 3.43941 15.1638 2.99212 14.7271C2.54482 14.2903 2.28911 13.6937 2.28093 13.0686ZM42.3938 15.3987C41.9359 15.3875 41.4914 15.2414 41.116 14.9788C40.7406 14.7162 40.451 14.3487 40.2834 13.9224C40.1158 13.496 40.0776 13.0297 40.1738 12.5818C40.2699 12.1339 40.496 11.7241 40.8238 11.4041C41.1516 11.084 41.5664 10.8677 42.0165 10.7822C42.4666 10.6968 42.9319 10.7459 43.3542 10.9236C43.7765 11.1013 44.137 11.3997 44.3906 11.7812C44.6442 12.1628 44.7796 12.6105 44.78 13.0686C44.7713 13.6935 44.5153 14.2895 44.068 14.7261C43.6208 15.1626 43.0188 15.4041 42.3938 15.3977V15.3987Z"
                                    fill="#F16D7F" />
                            </svg>


                        </div>
                        <h3 class="advantages__item-heading">Quality assurance</h3>
                        <p class="advantages__item-text">Worldwide delivery on all. Authorit tively morph
                            next-generation innov tion with extensive models.</p>
                    </li>
                </ul>
            </div>
        </section>
        <section class="contacts">
            <div class="container">
                <h2 class="visually-hidden">Follow us</h2>
                <div class="contacts__wrapper">
                    <div class="contacts__feedback">
                        <img src="img/smile.png" alt="smile" width="96" height="96">
                        <?php 
                            $feedbacks = getAllFeedbacks($link);
                            foreach($feedbacks as $feedback):?>
                        <p class="contacts__feedback-text"><?=$feedback['user_name']?></p>
                        <p class="contacts__feedback-text">“<?=$feedback['content']?>“</p>
                        <?php
                        endforeach;
                        ?>
                    </div>
                    <div class="contacts__form">
                        <p class="contacts__form-title">subscribe
                        </p>
                        <p class="contacts__form-text">for our newletter and promotion
                        </p>
                        <form action="handler.php" class="contacts__form-content">
                            <input type="email" name="email" placeholder="Enter Your Email"
                                class="contacts__form-email">
                            <button type="submit" class="contacts__form-button">Subscribe</button>
                        </form>
                        <p class="contacts__form-text">Leave your opinion</p>
                        <form class="contacts__form-content contacts__form-feedback" action="./php/models/dbFeedbacks.php" method="post" >
                            Enter your name:
                            <input type="text" name="user-name" class="contacts__form-email contacts__form-feedback_text" value=""/>
                            Leave your feedback:
                            <textarea name="feedback-text" class="contacts__form-email" value="">
                            </textarea>
                            <input type="submit" value="Publish" class="contacts__form-button">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <p class="footer__text">© 2021 Brand All Rights Reserved.</p>
                <div class="icons-wrapper">
                    <a href="#" class="footer__link">
                        <svg width="13" height="16" viewBox="0 0 13 16" xmlns="http://www.w3.org/2000/svg"
                            class="footer__icon">
                            <path
                                d="M6.74032 0.203125C3.55564 0.203125 0.408203 2.34063 0.408203 5.8C0.408203 8 1.63738 9.25 2.38233 9.25C2.68963 9.25 2.86655 8.3875 2.86655 8.14375C2.86655 7.85313 2.13091 7.23438 2.13091 6.025C2.13091 3.5125 4.03055 1.73125 6.4889 1.73125C8.60271 1.73125 10.1671 2.94062 10.1671 5.1625C10.1671 6.82187 9.50597 9.93437 7.36422 9.93437C6.59133 9.93437 5.93018 9.37187 5.93018 8.56563C5.93018 7.38438 6.74963 6.24062 6.74963 5.02187C6.74963 2.95312 3.835 3.32812 3.835 5.82812C3.835 6.35313 3.90018 6.93437 4.13298 7.4125C3.70463 9.26875 2.82931 12.0344 2.82931 13.9469C2.82931 14.5375 2.91311 15.1188 2.96899 15.7094C3.07452 15.8281 3.02175 15.8156 3.18316 15.7563C4.74757 13.6 4.69169 13.1781 5.3994 10.3562C5.78119 11.0875 6.76826 11.4812 7.55046 11.4812C10.8469 11.4812 12.3275 8.24688 12.3275 5.33125C12.3275 2.22813 9.66427 0.203125 6.74032 0.203125Z" />
                        </svg>
                    </a>
                    <a href="#" class="footer__link">
                        <svg width="17" height="14" viewBox="0 0 17 14" xmlns="http://www.w3.org/2000/svg"
                            class="footer__icon">
                            <path
                                d="M14.417 3.74052C14.427 3.88264 14.427 4.0248 14.427 4.16692C14.427 8.50192 11.1498 13.4969 5.15986 13.4969C3.31448 13.4969 1.60022 12.9588 0.158203 12.0248C0.420396 12.0552 0.67247 12.0654 0.944752 12.0654C2.46741 12.0654 3.8691 11.5476 4.98843 10.6644C3.5565 10.6339 2.3565 9.68977 1.94305 8.39027C2.14475 8.4207 2.34642 8.44102 2.5582 8.44102C2.85063 8.44102 3.14308 8.40039 3.41533 8.32936C1.92291 8.02477 0.803551 6.70498 0.803551 5.11108V5.07048C1.23715 5.31414 1.74139 5.46642 2.2758 5.4867C1.39849 4.89786 0.823727 3.8928 0.823727 2.75573C0.823727 2.14661 0.985041 1.58823 1.26741 1.10092C2.87077 3.09077 5.28086 4.39023 7.98334 4.53239C7.93293 4.28873 7.90266 4.03495 7.90266 3.78114C7.90266 1.97402 9.35477 0.501953 11.1598 0.501953C12.0976 0.501953 12.9446 0.897891 13.5396 1.53748C14.2757 1.39536 14.9816 1.12123 15.6068 0.745609C15.3648 1.50705 14.8505 2.14664 14.1749 2.5527C14.8304 2.48167 15.4657 2.29889 16.0505 2.04511C15.6069 2.69483 15.0522 3.27348 14.417 3.74052Z" />
                        </svg>

                    </a>
                    <a href="#" class="footer__link">
                        <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg"
                            class="footer__icon">
                            <path
                                d="M8.13897 3.68159C6.02383 3.68159 4.31774 5.38491 4.31774 7.49663C4.31774 9.60835 6.02383 11.3117 8.13897 11.3117C10.2541 11.3117 11.9602 9.60835 11.9602 7.49663C11.9602 5.38491 10.2541 3.68159 8.13897 3.68159ZM8.13897 9.9769C6.77211 9.9769 5.65467 8.8646 5.65467 7.49663C5.65467 6.12866 6.76878 5.01636 8.13897 5.01636C9.50915 5.01636 10.6233 6.12866 10.6233 7.49663C10.6233 8.8646 9.50583 9.9769 8.13897 9.9769ZM13.0078 3.52554C13.0078 4.02026 12.6087 4.41538 12.1165 4.41538C11.621 4.41538 11.2252 4.01694 11.2252 3.52554C11.2252 3.03413 11.6243 2.63569 12.1165 2.63569C12.6087 2.63569 13.0078 3.03413 13.0078 3.52554ZM15.5386 4.42866C15.4821 3.23667 15.2094 2.18081 14.3347 1.31089C13.4634 0.440967 12.4058 0.168701 11.2119 0.108936C9.9814 0.039209 6.29321 0.039209 5.0627 0.108936C3.8721 0.165381 2.81453 0.437646 1.93987 1.30757C1.06522 2.17749 0.795836 3.23335 0.735973 4.42534C0.666134 5.65386 0.666134 9.33608 0.735973 10.5646C0.79251 11.7566 1.06522 12.8124 1.93987 13.6824C2.81453 14.5523 3.86878 14.8246 5.0627 14.8843C6.29321 14.9541 9.9814 14.9541 11.2119 14.8843C12.4058 14.8279 13.4634 14.5556 14.3347 13.6824C15.2061 12.8124 15.4788 11.7566 15.5386 10.5646C15.6085 9.33608 15.6085 5.65718 15.5386 4.42866ZM13.949 11.8828C13.6895 12.5335 13.1874 13.0349 12.5322 13.2972C11.5511 13.6857 9.22314 13.596 8.13897 13.596C7.05479 13.596 4.72348 13.6824 3.74573 13.2972C3.09389 13.0382 2.59171 12.5369 2.32898 11.8828C1.93987 10.9033 2.02967 8.57905 2.02967 7.49663C2.02967 6.41421 1.9432 4.08667 2.32898 3.1105C2.58838 2.45972 3.09056 1.95835 3.74573 1.69604C4.7268 1.30757 7.05479 1.39722 8.13897 1.39722C9.22314 1.39722 11.5545 1.31089 12.5322 1.69604C13.184 1.95503 13.6862 2.4564 13.949 3.1105C14.3381 4.08999 14.2483 6.41421 14.2483 7.49663C14.2483 8.57905 14.3381 10.9066 13.949 11.8828Z" />
                        </svg>
                    </a>
                    <a href="#" class="footer__link">
                        <svg width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg"
                            class="footer__icon">
                            <path
                                d="M8.08836 8.28L8.50686 5.61602H5.89022V3.88729C5.89022 3.15847 6.25574 2.44806 7.42765 2.44806H8.61722V0.179975C8.61722 0.179975 7.53772 0 6.50561 0C4.35073 0 2.9422 1.27593 2.9422 3.5857V5.61602H0.546875V8.28H2.9422V14.72H5.89022V8.28H8.08836Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="js/addToCart.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>