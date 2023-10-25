<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?php 
  use Bitrix\Main\Localization\Loc;
  
  IncludeTemplateLangFile(__FILE__);
?>
  <footer>
    <div class="container">
        <div class="footer-flex">
            <a href="#" class="footer-logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="60" viewBox="0 0 150 60" fill="none">
                    <g clip-path="url(#clip0_577_2587)">
                        <path d="M26.8544 0.488976C27.4474 0.0153539 28.2494 0.147187 28.9493 0.117891C32.9762 0.1716 37.0104 0.0373261 41.0349 0.186248C40.5732 0.706256 40.1916 1.55096 39.4042 1.58514C37.7808 1.62176 36.155 1.58514 34.5437 1.58514C34.0179 2.02995 33.5694 2.55964 33.2168 3.15249C31.3212 6.3824 30.0065 9.91748 28.0987 13.1401C27.5276 14.1166 26.4923 14.6757 25.5445 15.2323C26.6114 15.1615 27.6807 15.1102 28.75 15.1249C28.456 15.5961 28.2154 16.138 27.7512 16.4701C26.3927 16.6068 25.0123 16.5262 23.6465 16.492C24.3342 15.6229 25.3477 15.0468 25.909 14.0678C27.8533 10.7939 29.2555 7.23199 31.1341 3.90931C31.7368 2.79849 32.8353 2.10759 33.9435 1.58026C31.6858 1.63885 29.4256 1.54852 27.1704 1.62176C26.3198 1.62176 25.7316 2.30534 25.0439 2.6984C25.5342 1.87527 26.1445 1.13054 26.8544 0.488976Z" fill="white"/>
                        <path d="M36.6527 6.65072C38.8253 2.62981 43.2581 -0.536623 47.9679 0.076156C48.9546 0.171369 48.2231 1.27242 47.6933 1.50435C46.2206 2.25872 44.6361 1.165 43.1342 1.07223C41.7149 1.50923 40.6018 2.59075 39.8339 3.83584C38.4997 5.99399 37.4887 8.32793 36.2031 10.5154C36.0403 10.7888 36.0962 11.3161 36.5215 11.0036C37.4644 9.72194 38.6576 8.65018 39.8582 7.61993C40.7379 6.94856 41.6833 6.19418 42.8231 6.10141C43.6883 6.08676 44.0382 7.12922 43.7563 7.83233C43.0127 10.115 41.4549 12.0046 40.5071 14.1921C40.354 14.612 40.0575 15.2125 40.5703 15.5104C41.5302 15.6129 42.1694 14.7487 42.9373 14.3214C42.5485 15.1491 41.7222 15.6251 40.9931 16.1256C40.3904 16.4869 39.5836 16.9679 38.9201 16.4698C38.3417 16.028 38.4486 15.1954 38.6504 14.5851C39.4037 12.3879 40.9469 10.5715 41.885 8.45243C42.0527 8.07403 42.2423 7.34162 41.6784 7.19514C40.6748 7.21955 39.9068 7.99346 39.1777 8.59647C36.8422 10.7595 34.6866 13.2057 33.3135 16.1085C33 16.8409 32.0182 16.4015 31.4082 16.4772C33.0511 13.1569 34.9078 9.93189 36.6527 6.65072Z" fill="white"/>
                        <path d="M49.7385 6.73626C50.7325 6.24799 51.9257 5.86225 53.0048 6.3017C53.6415 6.54583 53.763 7.36857 53.52 7.9374C53.1409 8.82117 52.3656 9.45104 51.6535 10.0589C49.8503 11.4871 47.8964 12.7054 45.9643 13.9431C46.1879 14.7268 46.7347 15.5105 47.6363 15.4983C49.058 15.7033 50.1346 14.6414 51.2817 13.9944C50.5794 15.0027 49.4785 15.6301 48.4164 16.1916C47.3544 16.7531 45.8987 16.9899 44.929 16.1062C43.8889 15.1296 44.1295 13.5135 44.5839 12.3099C45.6187 9.91557 47.4376 7.94885 49.7385 6.73626ZM49.284 7.32462C47.1965 8.66004 46.1247 11.1868 45.9497 13.6013C47.6509 12.5296 49.3715 11.4652 50.8102 10.0516C51.43 9.39977 52.1153 8.48426 51.7945 7.53946C51.3133 6.60442 50.0228 6.89739 49.284 7.32462Z" fill="white"/>
                        <path d="M4.18975 19.3686C8.87042 16.7002 14.8245 17.3349 19.5344 19.6103C19.5878 21.4315 19.5125 23.2723 19.6243 25.0813C18.9705 23.5628 17.4152 21.2704 15.5123 20.0961C12.664 18.1967 8.58851 17.6987 5.58958 19.5614C2.87256 21.2582 2.48858 25.5989 4.89453 27.7326C7.30048 29.8664 10.3942 30.7941 13.2424 32.0734C16.0858 33.2648 19.3545 34.8516 20.3169 38.0498C21.4494 41.873 19.1018 46.0281 15.5658 47.5711C10.5789 49.8489 4.64907 48.4304 0.131234 45.7083C0.0656168 43.4843 0.106931 41.2602 0 39.0361C1.04501 41.2651 2.83124 44.7245 5.60902 46.3162C8.68329 48.1375 13.1136 48.6965 15.9862 46.2015C18.188 44.3216 18.3144 40.5864 16.2438 38.5796C12.4842 34.876 6.75124 34.4659 2.77049 31.0871C-0.814134 28.0158 0.150675 21.6073 4.18975 19.3686Z" fill="white"/>
                        <path d="M136.027 27.1605C140.178 25.5102 142.414 20.9961 142.414 20.9961C142.414 20.9961 142.472 24.7485 142.472 26.6112L149.355 26.7137C149.355 26.7137 149.355 27.0946 149.355 27.202C147.996 27.2606 145.984 27.2704 145.984 27.2704C145.984 27.2704 144.04 27.246 142.48 27.246C142.48 32.2605 142.468 37.2384 142.48 42.2578C142.455 43.7861 142.81 45.7392 144.424 46.3349C146.482 47.0673 148.351 45.5903 149.746 44.2475C149.817 44.3989 149.948 44.6992 150.013 44.8505C148.499 46.352 146.888 47.934 144.784 48.5345C143.131 48.9984 141.068 48.6249 140.098 47.0697C139.08 45.4536 139.068 43.4639 139.048 41.6182C139.063 36.8209 139.048 32.0212 139.063 27.2142C138.042 27.2207 137.03 27.2028 136.027 27.1605Z" fill="white"/>
                        <path d="M45.4455 28.4355C47.1929 27.6421 48.9402 26.8364 50.7362 26.1699C50.8553 28.04 50.8261 29.915 50.7726 31.785C52.52 27.6909 57.3732 25.0323 61.648 26.8535C62.6347 27.5224 61.648 29.4242 59.7864 29.3461C57.8544 29.3266 57.5822 26.3677 53.6816 28.7602C50.8869 31.2504 50.5223 35.1077 50.8139 38.6208C51.125 41.8556 49.7422 46.0206 52.8189 48.2764C50.3417 48.2585 47.8636 48.2585 45.3848 48.2764C47.9778 46.5039 47.329 43.1495 47.397 40.464C47.312 37.2585 47.5574 34.0408 47.2658 30.8427C47.1783 29.7416 46.6606 28.9042 45.4455 28.4355Z" fill="white"/>
                        <path d="M111.276 28.4423C113.017 27.6043 114.802 26.8595 116.622 26.2109C116.642 27.5464 116.642 28.8964 116.634 30.227C119.825 27.7856 123.881 25.4663 128.025 26.5967C130.538 27.1557 132.207 29.5776 132.436 32.0677C132.878 36.4622 132.346 40.8981 132.723 45.2999C132.674 46.6035 133.811 47.3872 134.565 48.2759C132.134 48.258 129.704 48.258 127.274 48.2759C127.962 47.3921 128.975 46.6109 129.014 45.3902C129.337 41.7648 129.14 38.1028 129.153 34.4651C129.133 32.0238 128.363 29.0942 125.823 28.1958C122.508 26.8847 119.169 28.9697 116.637 30.9838C116.734 35.7591 116.488 40.5441 116.763 45.3048C116.8 46.5913 117.864 47.4092 118.654 48.2759C116.17 48.258 113.69 48.258 111.215 48.2759C113.813 46.4961 113.159 43.149 113.227 40.4294C113.147 37.2556 113.38 34.0452 113.101 30.8642C113.075 30.3226 112.888 29.8014 112.562 29.3691C112.236 28.9368 111.788 28.6138 111.276 28.4423Z" fill="white"/>
                        <path d="M28.0454 28.3213C31.8098 25.7042 37.538 25.4332 40.967 28.7705C42.4106 30.1304 43.0084 32.0908 43.2539 34.0072C37.6036 34.0268 31.9532 34.0072 26.3053 34.0072C26.0769 36.9954 26.4001 40.2229 28.3273 42.6472C30.7575 45.8209 35.4066 46.7218 39.0204 45.213C40.8237 44.5588 42.0315 42.9645 43.6841 42.0637C42.2466 44.6059 40.0509 46.6306 37.4067 47.8521C32.675 49.6392 27.1073 47.8985 24.575 43.7018C21.5712 38.6751 23.1266 31.6049 28.0454 28.3213ZM26.49 33.3725C30.9252 33.3603 35.3532 33.3896 39.7835 33.3603C39.0544 29.9277 36.0968 26.6685 32.3494 27.1617C29.0564 27.3448 27.0879 30.4258 26.49 33.3725Z" fill="white"/>
                        <path d="M63.7949 28.4057C65.5228 27.6416 67.2532 26.8603 69.0005 26.1328C69.0856 27.2998 69.122 28.4716 69.139 29.6386C72.4612 27.2217 76.9013 25.2612 80.9646 26.9678C85.1374 28.7475 86.8118 33.7376 86.3987 37.9953C86.1289 42.2628 83.4824 46.5083 79.351 47.939C75.9875 49.25 72.1647 48.6909 69.105 46.8501C69.2241 50.2851 68.9568 53.7299 69.2727 57.1502C69.3335 58.3342 70.3566 59.0911 70.9739 59.987C68.5874 59.987 66.1984 60.0066 63.8119 59.987C64.8764 58.8567 65.7561 57.5164 65.6419 55.8856C65.7318 47.9683 65.6954 40.0436 65.6614 32.1263C65.7999 30.5883 65.3406 28.8745 63.7949 28.4057ZM69.1147 30.4247C69.139 33.5692 69.1147 36.721 69.1147 39.8703C68.5412 45.439 75.7931 49.9238 80.4203 46.7061C83.2442 44.6016 83.514 40.6393 83.1981 37.4045C82.8019 33.8817 81.4556 29.8168 77.9366 28.3325C74.8842 26.9629 71.5693 28.5644 69.1147 30.4247Z" fill="white"/>
                        <path d="M93.5446 28.5438C97.3212 25.7046 103.266 25.331 106.806 28.7587C108.243 30.1234 108.841 32.0838 109.081 33.9954C103.438 34.0149 97.7878 33.9954 92.1375 33.9954C91.909 36.9714 92.2274 40.1744 94.1303 42.5914C96.5605 45.8018 101.222 46.7222 104.843 45.2085C106.644 44.5518 107.854 42.9527 109.511 42.0518C108.081 44.5917 105.897 46.619 103.263 47.8501C98.5655 49.642 93.462 47.9868 90.9248 43.7974C87.9866 38.8781 88.8761 31.9398 93.5446 28.5438ZM92.3173 33.3704C96.7452 33.3704 101.176 33.3875 105.603 33.3582C104.874 29.9256 101.917 26.6616 98.1645 27.1596C94.8909 27.3427 92.9151 30.4237 92.3173 33.3704Z" fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_577_2587">
                            <rect width="150" height="60" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
            <nav class="footer-menu">
                <ul class="footer-menu__items">
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">О бренде</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Шоурум</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Доставка и оплата</a>
                    </li>
                </ul>
                <ul class="footer-menu__items">
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Частые вопросы</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Новости</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Контакты</a>
                    </li>
                </ul>
                <ul class="footer-menu__items">
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Политика конфиденциальности</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Пользовательское соглашение</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Карта сайта</a>
                    </li>
                </ul>
            </nav>
            <div class="footer-social">
                <a href="#" class="footer-social__link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="none">
                        <path d="M20.8416 0.219849C20.5763 -0.0455262 20.3109 -0.0455343 19.9128 0.0871535L1.46923 6.98692C1.07117 7.11961 0.938477 7.51767 0.938477 7.78305C0.938477 8.18111 1.20385 8.44648 1.46923 8.57917L6.77674 10.5695C6.77674 10.5695 6.90943 10.5695 6.90943 10.7022L8.2363 15.4789C8.36899 15.877 8.63437 16.0097 8.89974 16.1424C9.2978 16.1424 9.56318 16.0097 9.82856 15.7443L11.4208 13.6213L11.5535 13.4886H11.6862L16.5956 17.7346C16.7283 17.8673 16.9937 18 17.1264 18C17.2591 18 17.3918 18 17.3918 18C17.6571 17.8673 17.9225 17.6019 17.9225 17.3366L20.9743 1.14866C21.107 0.750596 21.107 0.352537 20.8416 0.219849ZM8.89974 15.2136L7.57286 10.4368C7.57286 10.4368 7.57286 10.4368 7.57286 10.3041C7.44018 10.0387 7.57286 9.64068 7.83824 9.50799L20.0455 0.883288L9.96124 11.1002L8.89974 15.2136C9.03243 15.3462 8.89974 15.3462 8.89974 15.2136Z" fill="white"/>
                    </svg>
                </a>
                <a href="#" class="footer-social__link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="16" viewBox="0 0 26 16" fill="none">
                        <path d="M14.0799 16C5.35991 16 0.399912 10 0.159912 0H4.55991C4.71991 7.36 7.91991 10.4 10.4799 11.04V0H14.6399V6.32C17.1199 6.08 19.7599 3.2 20.7199 0H24.8799C24.1599 3.92 21.2799 6.8 19.2799 8C21.3599 8.96 24.6399 11.44 25.8399 16H21.2799C20.3199 12.96 17.8399 10.64 14.6399 10.32V16H14.0799Z" fill="white"/>
                    </svg>
                </a>
                <a href="#" class="footer-social__link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 26 20" fill="none">
                        <path d="M25.4566 3.74199C25.1576 2.62341 24.2765 1.7423 23.1579 1.4433C21.1305 0.899902 13 0.899902 13 0.899902C13 0.899902 4.86951 0.899902 2.84209 1.4433C1.72351 1.7423 0.8424 2.62341 0.5434 3.74199C0 5.76941 0 9.9999 0 9.9999C0 9.9999 0 14.2304 0.5434 16.2578C0.8424 17.3764 1.72351 18.2575 2.84209 18.5565C4.86951 19.0999 13 19.0999 13 19.0999C13 19.0999 21.1305 19.0999 23.1579 18.5565C24.2765 18.2575 25.1576 17.3764 25.4566 16.2578C26 14.2304 26 9.9999 26 9.9999C26 9.9999 26 5.76941 25.4566 3.74199ZM10.4 13.8999V6.0999L17.1548 9.9999L10.4 13.8999Z" fill="white"/>
                    </svg>
                </a>
                <a href="#" class="footer-social__link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M20.4972 3.48787C18.4482 1.44644 15.7237 0.21605 12.8311 0.0258747C9.93853 -0.1643 7.07512 0.69871 4.77425 2.45415C2.47338 4.2096 0.891948 6.73777 0.324526 9.56776C-0.242895 12.3977 0.242384 15.3366 1.68997 17.8368L-0.000732422 24L6.33331 22.3444C8.08466 23.297 10.048 23.7973 12.0437 23.7995C14.4082 23.8009 16.72 23.1039 18.6865 21.7968C20.6529 20.4897 22.1857 18.6313 23.0907 16.4567C23.9958 14.2821 24.2325 11.8891 23.7708 9.5805C23.3091 7.27195 22.1699 5.15162 20.4972 3.48787ZM12.0437 21.785C10.2629 21.7849 8.51496 21.308 6.98296 20.4043L6.62078 20.1892L2.86096 21.1706L3.86466 17.5248L3.62754 17.1497C2.45693 15.2928 1.9394 13.1012 2.1563 10.9196C2.37321 8.73796 3.31225 6.68994 4.82581 5.09748C6.33938 3.50503 8.34163 2.45844 10.5178 2.12224C12.694 1.78605 14.9207 2.17931 16.8479 3.2402C18.7751 4.3011 20.2935 5.96948 21.1644 7.98306C22.0353 9.99663 22.2094 12.2412 21.6592 14.364C21.109 16.4868 19.8657 18.3673 18.1249 19.7101C16.384 21.0528 14.2443 21.7816 12.0421 21.7818L12.0437 21.785Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.05734 6.92072C8.83321 6.42599 8.59771 6.41629 8.38658 6.4082H7.81327C7.66202 6.41216 7.51323 6.44725 7.37627 6.51124C7.23931 6.57524 7.11714 6.66677 7.01745 6.78006C6.68121 7.09729 6.41467 7.48046 6.23465 7.90539C6.05462 8.33031 5.96503 8.78777 5.97152 9.24889C5.97152 10.704 7.04181 12.1235 7.19123 12.3208C7.34065 12.518 9.2571 15.6206 12.2926 16.8122C14.8132 17.8017 15.3264 17.6044 15.8754 17.5559C16.4243 17.5074 17.6408 16.8365 17.8893 16.1429C18.1378 15.4493 18.1394 14.8494 18.0647 14.7298C17.99 14.6101 17.7902 14.5309 17.4914 14.3822C17.1925 14.2334 15.7243 13.5156 15.4515 13.4121C15.1786 13.3086 14.9789 13.2634 14.7791 13.5609C14.5793 13.8583 14.0093 14.5309 13.8339 14.7266C13.6585 14.9222 13.4863 14.9497 13.1842 14.8009C12.3041 14.452 11.4917 13.9531 10.7838 13.3264C10.1322 12.7266 9.57341 12.0342 9.12555 11.2715C8.95015 10.974 9.10606 10.8123 9.2571 10.6652C9.40815 10.5181 9.55432 10.3176 9.70536 10.1446C9.82786 9.9942 9.92795 9.82704 10.0026 9.64824C10.0422 9.56627 10.0608 9.47575 10.0565 9.38487C10.0523 9.29398 10.0254 9.20558 9.97821 9.12763C9.9035 8.97889 9.32856 7.51085 9.05734 6.92072Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="footer-line"></div>
        <div class="footer-copy">© 2023 The serpent</div>
    </div>
  </footer>
<?php //Этот кусок кода я хз нахрена нужен, так как он был после футера может потом понадобится ?>
<div class="search-modal">
    <div class="container">
        <div class="search-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                <path d="M20 11L14 17L20 23" stroke="#263740" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <form action="#" class="search-modal__form">
            <div class="search-modal__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M9.35441 18.013C13.9684 18.013 17.7088 14.2726 17.7088 9.65861C17.7088 5.0446 13.9684 1.3042 9.35441 1.3042C4.7404 1.3042 1 5.0446 1 9.65861C1 14.2726 4.7404 18.013 9.35441 18.013Z" stroke="#263740" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.93555 9.65852C4.93555 8.48634 5.40121 7.36206 6.23006 6.5332C7.05892 5.70434 8.18312 5.23877 9.3553 5.23877" stroke="#263740" stroke-linecap="square" stroke-linejoin="round"/>
                    <path d="M15.5527 15.249L20.9997 20.696" stroke="#263740" stroke-width="1.4" stroke-linecap="square" stroke-linejoin="round"/>
                </svg>
            </div>
            <input type="text" class="search-modal__input">
            <button class="btn">Найти</button>
        </form>
        <div class="search-modal__result">
            <div class="search-modal__column">
                <div class="search-modal__title">Популярные запросы</div>
                <a href="#" class="search-modal__item">
                    <span>Куп</span>альник
                </a>
                <a href="#" class="search-modal__item">
                    <span>Куп</span>альник слитный
                </a>
                <a href="#" class="search-modal__item">
                    <span>Куп</span>альник раздельний
                </a>
                <div class="search-modal__title">Категории</div>
                <a href="#" class="search-modal__item">
                    <span>Куп</span>альник слитный
                </a>
                <a href="#" class="search-modal__item">
                    <span>Куп</span>альник раздельний
                </a>
            </div>
            <div class="search-modal__column">
                <div class="search-modal__title">Популярные товары</div>
                <div class="search-modal__product">
                    <div class="search-modal__product-item">
                        <a href="#" class="search-modal__product-item__pic">
                            <img src="img/search-pic.jpg" alt="">
                        </a>
                        <div class="search-modal__product-item__content">
                            <a href="#" class="search-modal__product-item__title">Раздельный купальник “LARA”</a>
                            <div class="search-modal__product-item__flex">
                                <div class="search-modal__product-item__size">
                                    Размер: <span> xs</span>
                                </div>
                                <div class="search-modal__product-item__color">
                                    Цвет:
                                    <div class="product-slide__color">
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9" checked="">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #263740"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #E6B886"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #EDEDED"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-modal__product-item__price">
                                <span>10 500 </span> ₽
                            </div>
                        </div>
                    </div>
                    <div class="search-modal__product-item">
                        <a href="#" class="search-modal__product-item__pic">
                            <img src="img/search-pic.jpg" alt="">
                        </a>
                        <div class="search-modal__product-item__content">
                            <a href="#" class="search-modal__product-item__title">Раздельный купальник “LARA”</a>
                            <div class="search-modal__product-item__flex">
                                <div class="search-modal__product-item__size">
                                    Размер: <span> xs</span>
                                </div>
                                <div class="search-modal__product-item__color">
                                    Цвет:
                                    <div class="product-slide__color">
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9" checked="">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #263740"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #E6B886"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #EDEDED"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-modal__product-item__price">
                                <span>10 500 </span> ₽
                            </div>
                        </div>
                    </div>
                    <div class="search-modal__product-item">
                        <a href="#" class="search-modal__product-item__pic">
                            <img src="img/search-pic.jpg" alt="">
                        </a>
                        <div class="search-modal__product-item__content">
                            <a href="#" class="search-modal__product-item__title">Раздельный купальник “LARA”</a>
                            <div class="search-modal__product-item__flex">
                                <div class="search-modal__product-item__size">
                                    Размер: <span> xs</span>
                                </div>
                                <div class="search-modal__product-item__color">
                                    Цвет:
                                    <div class="product-slide__color">
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9" checked="">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #263740"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #E6B886"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #EDEDED"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-modal__product-item__price">
                                <span>10 500 </span> ₽
                            </div>
                        </div>
                    </div>
                    <div class="search-modal__product-item">
                        <a href="#" class="search-modal__product-item__pic">
                            <img src="img/search-pic.jpg" alt="">
                        </a>
                        <div class="search-modal__product-item__content">
                            <a href="#" class="search-modal__product-item__title">Раздельный купальник “LARA”</a>
                            <div class="search-modal__product-item__flex">
                                <div class="search-modal__product-item__size">
                                    Размер: <span> xs</span>
                                </div>
                                <div class="search-modal__product-item__color">
                                    Цвет:
                                    <div class="product-slide__color">
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9" checked="">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #263740"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #E6B886"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #EDEDED"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-modal__product-item__price">
                                <span>10 500 </span> ₽
                            </div>
                        </div>
                    </div>
                    <div class="search-modal__product-item">
                        <a href="#" class="search-modal__product-item__pic">
                            <img src="img/search-pic.jpg" alt="">
                        </a>
                        <div class="search-modal__product-item__content">
                            <a href="#" class="search-modal__product-item__title">Раздельный купальник “LARA”</a>
                            <div class="search-modal__product-item__flex">
                                <div class="search-modal__product-item__size">
                                    Размер: <span> xs</span>
                                </div>
                                <div class="search-modal__product-item__color">
                                    Цвет:
                                    <div class="product-slide__color">
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9" checked="">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #263740"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #E6B886"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #EDEDED"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-modal__product-item__price">
                                <span>10 500 </span> ₽
                            </div>
                        </div>
                    </div>
                    <div class="search-modal__product-item">
                        <a href="#" class="search-modal__product-item__pic">
                            <img src="img/search-pic.jpg" alt="">
                        </a>
                        <div class="search-modal__product-item__content">
                            <a href="#" class="search-modal__product-item__title">Раздельный купальник “LARA”</a>
                            <div class="search-modal__product-item__flex">
                                <div class="search-modal__product-item__size">
                                    Размер: <span> xs</span>
                                </div>
                                <div class="search-modal__product-item__color">
                                    Цвет:
                                    <div class="product-slide__color">
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9" checked="">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #263740"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #E6B886"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #EDEDED"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-modal__product-item__price">
                                <span>10 500 </span> ₽
                            </div>
                        </div>
                    </div>
                    <div class="search-modal__product-item">
                        <a href="#" class="search-modal__product-item__pic">
                            <img src="img/search-pic.jpg" alt="">
                        </a>
                        <div class="search-modal__product-item__content">
                            <a href="#" class="search-modal__product-item__title">Раздельный купальник “LARA”</a>
                            <div class="search-modal__product-item__flex">
                                <div class="search-modal__product-item__size">
                                    Размер: <span> xs</span>
                                </div>
                                <div class="search-modal__product-item__color">
                                    Цвет:
                                    <div class="product-slide__color">
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9" checked="">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #263740"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #E6B886"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #EDEDED"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-modal__product-item__price">
                                <span>10 500 </span> ₽
                            </div>
                        </div>
                    </div>
                    <div class="search-modal__product-item">
                        <a href="#" class="search-modal__product-item__pic">
                            <img src="img/search-pic.jpg" alt="">
                        </a>
                        <div class="search-modal__product-item__content">
                            <a href="#" class="search-modal__product-item__title">Раздельный купальник “LARA”</a>
                            <div class="search-modal__product-item__flex">
                                <div class="search-modal__product-item__size">
                                    Размер: <span> xs</span>
                                </div>
                                <div class="search-modal__product-item__color">
                                    Цвет:
                                    <div class="product-slide__color">
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9" checked="">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #263740"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #E6B886"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #EDEDED"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-modal__product-item__price">
                                <span>10 500 </span> ₽
                            </div>
                        </div>
                    </div>
                    <div class="search-modal__product-item">
                        <a href="#" class="search-modal__product-item__pic">
                            <img src="img/search-pic.jpg" alt="">
                        </a>
                        <div class="search-modal__product-item__content">
                            <a href="#" class="search-modal__product-item__title">Раздельный купальник “LARA”</a>
                            <div class="search-modal__product-item__flex">
                                <div class="search-modal__product-item__size">
                                    Размер: <span> xs</span>
                                </div>
                                <div class="search-modal__product-item__color">
                                    Цвет:
                                    <div class="product-slide__color">
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9" checked="">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #263740"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #E6B886"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #EDEDED"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-modal__product-item__price">
                                <span>10 500 </span> ₽
                            </div>
                        </div>
                    </div>
                    <div class="search-modal__product-item">
                        <a href="#" class="search-modal__product-item__pic">
                            <img src="img/search-pic.jpg" alt="">
                        </a>
                        <div class="search-modal__product-item__content">
                            <a href="#" class="search-modal__product-item__title">Раздельный купальник “LARA”</a>
                            <div class="search-modal__product-item__flex">
                                <div class="search-modal__product-item__size">
                                    Размер: <span> xs</span>
                                </div>
                                <div class="search-modal__product-item__color">
                                    Цвет:
                                    <div class="product-slide__color">
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9" checked="">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #263740"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #E6B886"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #EDEDED"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-modal__product-item__price">
                                <span>10 500 </span> ₽
                            </div>
                        </div>
                    </div>
                    <div class="search-modal__product-item">
                        <a href="#" class="search-modal__product-item__pic">
                            <img src="img/search-pic.jpg" alt="">
                        </a>
                        <div class="search-modal__product-item__content">
                            <a href="#" class="search-modal__product-item__title">Раздельный купальник “LARA”</a>
                            <div class="search-modal__product-item__flex">
                                <div class="search-modal__product-item__size">
                                    Размер: <span> xs</span>
                                </div>
                                <div class="search-modal__product-item__color">
                                    Цвет:
                                    <div class="product-slide__color">
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9" checked="">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #263740"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #E6B886"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #EDEDED"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-modal__product-item__price">
                                <span>10 500 </span> ₽
                            </div>
                        </div>
                    </div>
                    <div class="search-modal__product-item">
                        <a href="#" class="search-modal__product-item__pic">
                            <img src="img/search-pic.jpg" alt="">
                        </a>
                        <div class="search-modal__product-item__content">
                            <a href="#" class="search-modal__product-item__title">Раздельный купальник “LARA”</a>
                            <div class="search-modal__product-item__flex">
                                <div class="search-modal__product-item__size">
                                    Размер: <span> xs</span>
                                </div>
                                <div class="search-modal__product-item__color">
                                    Цвет:
                                    <div class="product-slide__color">
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9" checked="">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #263740"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #E6B886"></span>
                                            </span>
                                        </div>
                                        <div class="product-slide__color-item">
                                            <input type="radio" name="color-9">
                                            <span class="product-slide__color-circle">
                                                <span style="background: #EDEDED"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-modal__product-item__price">
                                <span>10 500 </span> ₽
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="auth-modal">
    <div class="auth-modal__close">
        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
            <path d="M1 1L9 9" stroke="#263740" stroke-linecap="round"/>
            <path d="M9 1L1 9" stroke="#263740" stroke-linecap="round"/>
        </svg>
    </div>
    <div class="auth-modal__entry">
        <div class="auth-modal__title">Авторизация</div>
        <div class="auth-modal__tabs">
            <div class="auth-modal__tab active" data-id="modal-entry">Вход</div>
            <div class="auth-modal__tab" data-id="modal-registry">Регистрация</div>
            <div class="auth-modal__slider"></div>
        </div>
        <form action="#">
            <input type="tel" class="auth-input" placeholder="Введите номер телефона:">
            <button class="btn btn-entry">Продолжить</button>
        </form>
    </div>
    <div class="auth-modal__two auth-modal__reg-code">
        <div class="auth-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                <path d="M5.96037 10.9386L0.999471 5.99996L5.95909 1.06008" stroke="#263740"/>
            </svg>
            НАЗАД
        </div>
        <div class="auth-modal__title">Вход</div>
        <div class="entry-mask">
            <div class="entry-mask__label">Входящий звонок</div>
            <div class="entry-mask__pic">
                <svg xmlns="http://www.w3.org/2000/svg" width="254" height="40" viewBox="0 0 254 40" fill="none">
                    <path d="M8.31656 19.776V21.04H5.40456V23.904H4.06056V21.04H1.14856V19.776H4.06056V16.896H5.40456V19.776H8.31656ZM10.5128 14.8H18.9608V15.888L14.4328 26H12.7368L17.1688 16.192H12.0488V18.192H10.5128V14.8ZM28.9162 29.104C27.7002 27.168 27.0122 24.56 27.0122 21.616C27.0122 18.672 27.7002 16.032 28.9162 14.128H30.3722C29.0762 16.4 28.5162 18.816 28.5162 21.616C28.5162 24.416 29.0762 26.832 30.3722 29.104H28.9162ZM32.2268 14.8H34.0668L36.9948 18.896L39.9228 14.8H41.7948L38.0028 20.176L42.0988 26H40.2108L36.9948 21.536L33.7948 26H31.9548L36.0348 20.24L32.2268 14.8ZM43.4174 14.8H45.2574L48.1854 18.896L51.1134 14.8H52.9854L49.1934 20.176L53.2894 26H51.4014L48.1854 21.536L44.9854 26H43.1454L47.2254 20.24L43.4174 14.8ZM54.6081 14.8H56.4481L59.3761 18.896L62.3041 14.8H64.1761L60.3841 20.176L64.4801 26H62.5921L59.3761 21.536L56.1761 26H54.3361L58.4161 20.24L54.6081 14.8ZM67.5196 29.104H66.0636C67.3596 26.832 67.9356 24.416 67.9356 21.616C67.9356 18.816 67.3596 16.4 66.0636 14.128H67.5196C68.7516 16.032 69.4396 18.672 69.4396 21.616C69.4396 24.56 68.7516 27.168 67.5196 29.104ZM77.3987 14.8H79.2387L82.1667 18.896L85.0947 14.8H86.9667L83.1747 20.176L87.2707 26H85.3827L82.1667 21.536L78.9667 26H77.1267L81.2067 20.24L77.3987 14.8ZM88.5893 14.8H90.4293L93.3573 18.896L96.2853 14.8H98.1573L94.3653 20.176L98.4613 26H96.5733L93.3573 21.536L90.1573 26H88.3173L92.3973 20.24L88.5893 14.8ZM99.7799 14.8H101.62L104.548 18.896L107.476 14.8H109.348L105.556 20.176L109.652 26H107.764L104.548 21.536L101.348 26H99.5079L103.588 20.24L99.7799 14.8Z" fill="#263740" fill-opacity="0.5"/>
                    <line x1="116" y1="19.5" x2="122" y2="19.5" stroke="#263740" stroke-opacity="0.3"/>
                    <path d="M128 12C128 5.37258 133.373 0 140 0C146.627 0 152 5.37258 152 12V28C152 34.6274 146.627 40 140 40C133.373 40 128 34.6274 128 28V12Z" fill="white"/>
                    <path d="M135.2 14.8H137.04L139.968 18.896L142.896 14.8H144.768L140.976 20.176L145.072 26H143.184L139.968 21.536L136.768 26H134.928L139.008 20.24L135.2 14.8Z" fill="#263740"/>
                    <path d="M158 12C158 5.37258 163.373 0 170 0C176.627 0 182 5.37258 182 12V28C182 34.6274 176.627 40 170 40C163.373 40 158 34.6274 158 28V12Z" fill="white"/>
                    <path d="M165.2 14.8H167.04L169.968 18.896L172.896 14.8H174.768L170.976 20.176L175.072 26H173.184L169.968 21.536L166.768 26H164.928L169.008 20.24L165.2 14.8Z" fill="#263740"/>
                    <line x1="188" y1="19.5" x2="194" y2="19.5" stroke="#263740" stroke-opacity="0.3"/>
                    <path d="M200 12C200 5.37258 205.373 0 212 0C218.627 0 224 5.37258 224 12V28C224 34.6274 218.627 40 212 40C205.373 40 200 34.6274 200 28V12Z" fill="white"/>
                    <path d="M207.2 14.8H209.04L211.968 18.896L214.896 14.8H216.768L212.976 20.176L217.072 26H215.184L211.968 21.536L208.768 26H206.928L211.008 20.24L207.2 14.8Z" fill="#263740"/>
                    <path d="M230 12C230 5.37258 235.373 0 242 0C248.627 0 254 5.37258 254 12V28C254 34.6274 248.627 40 242 40C235.373 40 230 34.6274 230 28V12Z" fill="white"/>
                    <path d="M237.2 14.8H239.04L241.968 18.896L244.896 14.8H246.768L242.976 20.176L247.072 26H245.184L241.968 21.536L238.768 26H236.928L241.008 20.24L237.2 14.8Z" fill="#263740"/>
                </svg>
            </div>
        </div>
        <div class="condition-text">
            Введите последние 4 цифры
            номера телефона:
        </div>
        <form action="#">
            <div class="code-input">
                <input type="text" placeholder="0">
                <input type="text" placeholder="0">
                <div class="code-input__delimiter">-</div>
                <input type="text" placeholder="0">
                <input type="text" placeholder="0">
            </div>
            <button class="btn btn-entry">Продолжить</button>
            <div class="code-timer">
                Повторно запросить код можно через: <span>1:30</span>
            </div>
        </form>
    </div>
    <div class="auth-modal__two auth-modal__entry-code">
        <div class="auth-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                <path d="M5.96037 10.9386L0.999471 5.99996L5.95909 1.06008" stroke="#263740"/>
            </svg>
            НАЗАД
        </div>
        <div class="auth-modal__title">Регистрация</div>
        <div class="entry-mask">
            <div class="entry-mask__label">Входящий звонок</div>
            <div class="entry-mask__pic">
                <svg xmlns="http://www.w3.org/2000/svg" width="254" height="40" viewBox="0 0 254 40" fill="none">
                    <path d="M8.31656 19.776V21.04H5.40456V23.904H4.06056V21.04H1.14856V19.776H4.06056V16.896H5.40456V19.776H8.31656ZM10.5128 14.8H18.9608V15.888L14.4328 26H12.7368L17.1688 16.192H12.0488V18.192H10.5128V14.8ZM28.9162 29.104C27.7002 27.168 27.0122 24.56 27.0122 21.616C27.0122 18.672 27.7002 16.032 28.9162 14.128H30.3722C29.0762 16.4 28.5162 18.816 28.5162 21.616C28.5162 24.416 29.0762 26.832 30.3722 29.104H28.9162ZM32.2268 14.8H34.0668L36.9948 18.896L39.9228 14.8H41.7948L38.0028 20.176L42.0988 26H40.2108L36.9948 21.536L33.7948 26H31.9548L36.0348 20.24L32.2268 14.8ZM43.4174 14.8H45.2574L48.1854 18.896L51.1134 14.8H52.9854L49.1934 20.176L53.2894 26H51.4014L48.1854 21.536L44.9854 26H43.1454L47.2254 20.24L43.4174 14.8ZM54.6081 14.8H56.4481L59.3761 18.896L62.3041 14.8H64.1761L60.3841 20.176L64.4801 26H62.5921L59.3761 21.536L56.1761 26H54.3361L58.4161 20.24L54.6081 14.8ZM67.5196 29.104H66.0636C67.3596 26.832 67.9356 24.416 67.9356 21.616C67.9356 18.816 67.3596 16.4 66.0636 14.128H67.5196C68.7516 16.032 69.4396 18.672 69.4396 21.616C69.4396 24.56 68.7516 27.168 67.5196 29.104ZM77.3987 14.8H79.2387L82.1667 18.896L85.0947 14.8H86.9667L83.1747 20.176L87.2707 26H85.3827L82.1667 21.536L78.9667 26H77.1267L81.2067 20.24L77.3987 14.8ZM88.5893 14.8H90.4293L93.3573 18.896L96.2853 14.8H98.1573L94.3653 20.176L98.4613 26H96.5733L93.3573 21.536L90.1573 26H88.3173L92.3973 20.24L88.5893 14.8ZM99.7799 14.8H101.62L104.548 18.896L107.476 14.8H109.348L105.556 20.176L109.652 26H107.764L104.548 21.536L101.348 26H99.5079L103.588 20.24L99.7799 14.8Z" fill="#263740" fill-opacity="0.5"/>
                    <line x1="116" y1="19.5" x2="122" y2="19.5" stroke="#263740" stroke-opacity="0.3"/>
                    <path d="M128 12C128 5.37258 133.373 0 140 0C146.627 0 152 5.37258 152 12V28C152 34.6274 146.627 40 140 40C133.373 40 128 34.6274 128 28V12Z" fill="white"/>
                    <path d="M135.2 14.8H137.04L139.968 18.896L142.896 14.8H144.768L140.976 20.176L145.072 26H143.184L139.968 21.536L136.768 26H134.928L139.008 20.24L135.2 14.8Z" fill="#263740"/>
                    <path d="M158 12C158 5.37258 163.373 0 170 0C176.627 0 182 5.37258 182 12V28C182 34.6274 176.627 40 170 40C163.373 40 158 34.6274 158 28V12Z" fill="white"/>
                    <path d="M165.2 14.8H167.04L169.968 18.896L172.896 14.8H174.768L170.976 20.176L175.072 26H173.184L169.968 21.536L166.768 26H164.928L169.008 20.24L165.2 14.8Z" fill="#263740"/>
                    <line x1="188" y1="19.5" x2="194" y2="19.5" stroke="#263740" stroke-opacity="0.3"/>
                    <path d="M200 12C200 5.37258 205.373 0 212 0C218.627 0 224 5.37258 224 12V28C224 34.6274 218.627 40 212 40C205.373 40 200 34.6274 200 28V12Z" fill="white"/>
                    <path d="M207.2 14.8H209.04L211.968 18.896L214.896 14.8H216.768L212.976 20.176L217.072 26H215.184L211.968 21.536L208.768 26H206.928L211.008 20.24L207.2 14.8Z" fill="#263740"/>
                    <path d="M230 12C230 5.37258 235.373 0 242 0C248.627 0 254 5.37258 254 12V28C254 34.6274 248.627 40 242 40C235.373 40 230 34.6274 230 28V12Z" fill="white"/>
                    <path d="M237.2 14.8H239.04L241.968 18.896L244.896 14.8H246.768L242.976 20.176L247.072 26H245.184L241.968 21.536L238.768 26H236.928L241.008 20.24L237.2 14.8Z" fill="#263740"/>
                </svg>
            </div>
        </div>
        <div class="condition-text">
            Введите последние 4 цифры <br>
            номера телефона:
        </div>
        <form action="#">
            <div class="code-input">
                <input type="text" placeholder="0">
                <input type="text" placeholder="0">
                <div class="code-input__delimiter">-</div>
                <input type="text" placeholder="0">
                <input type="text" placeholder="0">
            </div>
            <button class="btn btn-entry">Продолжить</button>
            <div class="code-timer">
                Повторно запросить код можно через: <span>1:30</span>
            </div>
        </form>
    </div>
  </div>
  </body>
</html>