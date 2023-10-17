<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.header')
    </head>

    <body class="bg-slate-200">
        <div class="w-[375px] bg-white-50 mx-auto flex flex-col">
            <div class="h-[179px] bg-[url('/public/assets/img/bg-layout.png')] bg-cover bg-bottom">
                <nav class="flex justify-between pt-8">
                    <div>
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_165_50351)">
                                <rect x="8" y="8" width="48" height="48" rx="24"
                                    fill="white" />
                                <path
                                    d="M41.375 32C41.375 32.2984 41.2564 32.5846 41.0455 32.7955C40.8345 33.0065 40.5483 33.125 40.25 33.125H26.4687L31.2987 37.9541C31.5101 38.1654 31.6288 38.4521 31.6288 38.751C31.6288 39.0499 31.5101 39.3365 31.2987 39.5478C31.0874 39.7592 30.8007 39.8779 30.5018 39.8779C30.203 39.8779 29.9163 39.7592 29.705 39.5478L22.955 32.7978C22.8501 32.6933 22.7669 32.5691 22.7101 32.4324C22.6533 32.2956 22.6241 32.149 22.6241 32.001C22.6241 31.8529 22.6533 31.7063 22.7101 31.5696C22.7669 31.4328 22.8501 31.3086 22.955 31.2041L29.705 24.4541C29.8096 24.3495 29.9339 24.2664 30.0706 24.2098C30.2073 24.1532 30.3539 24.124 30.5018 24.124C30.6498 24.124 30.7964 24.1532 30.9331 24.2098C31.0698 24.2664 31.1941 24.3495 31.2987 24.4541C31.4034 24.5587 31.4864 24.683 31.543 24.8197C31.5996 24.9564 31.6288 25.103 31.6288 25.251C31.6288 25.399 31.5996 25.5455 31.543 25.6822C31.4864 25.819 31.4034 25.9432 31.2987 26.0479L26.4687 30.875H40.25C40.5483 30.875 40.8345 30.9936 41.0455 31.2045C41.2564 31.4155 41.375 31.7017 41.375 32Z"
                                    fill="#F54748" />
                            </g>
                            <defs>
                                <filter id="filter0_d_165_50351" x="0" y="0" width="64"
                                    height="64" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="4" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_165_50351" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_165_50351"
                                        result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h1 class="font-semibold text-lg">
                            @yield('title')
                        </h1>
                    </div>
                    <div>
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_165_50355)">
                                <rect x="8" y="8" width="48" height="48" rx="24"
                                    fill="white" />
                                <path
                                    d="M38 42C37.1667 42 36.4583 41.7083 35.875 41.125C35.2917 40.5417 35 39.8333 35 39C35 38.8833 35.0083 38.7623 35.025 38.637C35.0417 38.5117 35.0667 38.3993 35.1 38.3L28.05 34.2C27.7667 34.45 27.45 34.646 27.1 34.788C26.75 34.93 26.3833 35.0007 26 35C25.1667 35 24.4583 34.7083 23.875 34.125C23.2917 33.5417 23 32.8333 23 32C23 31.1667 23.2917 30.4583 23.875 29.875C24.4583 29.2917 25.1667 29 26 29C26.3833 29 26.75 29.071 27.1 29.213C27.45 29.355 27.7667 29.5507 28.05 29.8L35.1 25.7C35.0667 25.6 35.0417 25.4877 35.025 25.363C35.0083 25.2383 35 25.1173 35 25C35 24.1667 35.2917 23.4583 35.875 22.875C36.4583 22.2917 37.1667 22 38 22C38.8333 22 39.5417 22.2917 40.125 22.875C40.7083 23.4583 41 24.1667 41 25C41 25.8333 40.7083 26.5417 40.125 27.125C39.5417 27.7083 38.8333 28 38 28C37.6167 28 37.25 27.9293 36.9 27.788C36.55 27.6467 36.2333 27.4507 35.95 27.2L28.9 31.3C28.9333 31.4 28.9583 31.5127 28.975 31.638C28.9917 31.7633 29 31.884 29 32C29 32.1167 28.9917 32.2377 28.975 32.363C28.9583 32.4883 28.9333 32.6007 28.9 32.7L35.95 36.8C36.2333 36.55 36.55 36.3543 36.9 36.213C37.25 36.0717 37.6167 36.0007 38 36C38.8333 36 39.5417 36.2917 40.125 36.875C40.7083 37.4583 41 38.1667 41 39C41 39.8333 40.7083 40.5417 40.125 41.125C39.5417 41.7083 38.8333 42 38 42Z"
                                    fill="#F54748" />
                            </g>
                            <defs>
                                <filter id="filter0_d_165_50355" x="0" y="0" width="64"
                                    height="64" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="4" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_165_50355" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_165_50355"
                                        result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                </nav>
            </div>
            @yield('content')
        </div>

        @yield('file-footer')
    </body>

</html>
