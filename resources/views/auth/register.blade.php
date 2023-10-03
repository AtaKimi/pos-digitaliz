@extends('layouts.auth')

@section('content')
    <div class="flex justify-between items-center gap-20">
        <div>
            <img src="{{ asset('assets/img/auth/side_img_register.png') }}" alt="" srcset="">
        </div>
        <div class="flex flex-col gap-6 px-8 py-13 rounded-xl" style="width: 700px">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="flex justify-center mb-6"><svg width="120" height="111" viewBox="0 0 120 111" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M34.2875 27.3155C34.3756 27.2854 43.7554 23.9116 43.7554 23.9116L42.659 33.9029C42.6463 34.0917 42.5383 34.7946 42.5383 34.7946C42.0795 37.0431 40.4857 39 38.2003 39.7788C34.8203 40.9304 31.1998 39.0734 30.12 35.6338C29.1034 32.3957 30.6993 28.9026 33.7099 27.5432C33.7099 27.5432 34.1254 27.3707 34.2875 27.3155Z"
                            fill="#101010" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M20.0167 71.5958C30.129 71.9827 38.2229 80.5571 38.2229 91.0624C38.2229 101.814 29.7439 110.543 19.3024 110.543C8.86082 110.543 0.381836 101.814 0.381836 91.0624C0.381836 83.3277 4.77015 76.6397 11.121 73.4956L15.1056 82.7556C12.1962 84.3181 10.2095 87.4531 10.2095 91.0624C10.2095 96.2299 14.2834 100.425 19.3024 100.425C24.3213 100.425 28.3952 96.2299 28.3952 91.0624C28.3952 89.4595 28.0046 87.9503 27.3144 86.6306L20.0167 71.5958Z"
                            fill="#101010" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.0917 65.5665C13.8195 58.6504 10.259 50.945 8.44153 46.3008C7.97275 45.2556 7.55606 44.1805 7.19517 43.0794C7.00729 42.588 6.90683 42.3195 6.90683 42.3195C6.90683 42.3195 6.93101 42.3405 6.97565 42.3815C6.04181 39.3061 5.53955 36.036 5.53955 32.6457C5.53955 14.628 19.7462 0 37.2455 0C54.7467 0 68.9534 14.628 68.9534 32.6457C68.9534 50.5025 56.447 63.0938 41.5557 64.8544L36.2931 52.5638C36.3117 52.6216 35.0709 52.5086 37.2455 52.5086C47.8936 52.5086 56.5381 43.6085 56.5381 32.6457C56.5381 21.6832 47.8936 12.783 37.2455 12.783C26.5994 12.783 17.9548 21.6832 17.9548 32.6457C17.9548 35.9645 19.4449 39.7685 20.1462 41.8452C20.2225 41.7489 29.453 63.1063 34.1129 74.9583C30.251 71.1919 25.0368 68.8805 19.3035 68.8805C19.1249 68.8805 18.9463 68.8828 18.7696 68.8872C18.3362 68.051 17.9976 67.4067 17.8078 67.0418L17.0917 65.5665Z"
                            fill="#EF4748" />
                        <path
                            d="M50.5914 71.4921H50.1577V75.0634H50.7398C51.5538 75.0634 52.17 74.9081 52.5999 74.5974C53.0259 74.2867 53.2388 73.8392 53.2388 73.2549C53.2388 72.6457 53.0297 72.1997 52.6075 71.917C52.1853 71.6339 51.5157 71.4921 50.5914 71.4921ZM50.0893 85.2701L43.1475 68.9258L50.4051 69.0377C51.4701 69.0377 52.3183 69.1148 52.9422 69.2686C53.566 69.4225 54.1214 69.6806 54.6045 70.0434C55.1066 70.4067 55.4944 70.8602 55.7682 71.4048C56.0459 71.9491 56.183 72.5259 56.183 73.1347C56.183 74.4882 55.6998 75.5616 54.7298 76.3553C53.7599 77.1486 52.4477 77.5455 50.7855 77.5455C50.6143 77.5455 50.485 77.544 50.3975 77.5409C50.31 77.5379 50.23 77.5334 50.1577 77.527V82.4177L50.0893 85.2701Z"
                            fill="#EF4748" />
                        <path
                            d="M60.6492 75.7279C60.6492 76.8905 60.9916 77.8637 61.6763 78.6483C62.361 79.4326 63.2054 79.8245 64.2058 79.8245C65.2176 79.8245 66.062 79.4341 66.7428 78.6529C67.4237 77.8716 67.7623 76.8965 67.7623 75.7279C67.7623 74.5528 67.4237 73.5732 66.7428 72.7889C66.2484 72.2182 65.6664 71.855 64.997 71.6996C64.7459 71.6414 64.4834 71.6123 64.2058 71.6123C63.2054 71.6123 62.361 72.0043 61.6763 72.7889C60.9916 73.5732 60.6492 74.5528 60.6492 75.7279ZM57.3438 75.7279C57.3438 74.7373 57.5149 73.8098 57.861 72.9458C58.2033 72.0814 58.7093 71.3077 59.3788 70.6251C60.0102 69.9728 60.7443 69.4731 61.5773 69.1254C62.4141 68.7781 63.2891 68.6042 64.2058 68.6042C65.1225 68.6042 66.0011 68.7796 66.8379 69.1299C67.6786 69.4807 68.4241 69.9853 69.0745 70.6433C69.7288 71.3017 70.2271 72.0629 70.5618 72.9272C70.9004 73.7916 71.0715 74.7252 71.0715 75.7279C71.0715 76.5643 70.9537 77.3516 70.7179 78.0901C70.482 78.8282 70.132 79.5018 69.6679 80.1106C69.0099 80.9781 68.2035 81.6516 67.2488 82.1316C66.294 82.6112 65.2784 82.8512 64.2058 82.8512C63.2967 82.8512 62.4256 82.6758 61.5925 82.3255C60.7595 81.9747 60.0216 81.4701 59.3788 80.8121C58.7093 80.1292 58.2033 79.3585 57.861 78.5006C57.5149 77.6422 57.3438 76.7181 57.3438 75.7279Z"
                            fill="#EF4748" />
                        <path d="M76.5662 69.0377H73.353V82.4173H76.5662V69.0377Z" fill="#EF4748" />
                        <path
                            d="M79.7051 82.4177V68.6042H80.0132L88.5071 76.7956L88.3967 69.0377H91.3599V82.9253H91.0822L82.5579 74.9149L82.6682 82.4177H79.7051Z"
                            fill="#EF4748" />
                        <path
                            d="M97.1835 82.4177L97.2482 71.6524L92.9004 71.8339V69.0378H104.658V71.8339H103.882L100.306 71.5844L100.398 82.4177H97.1835Z"
                            fill="#EF4748" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M46.105 94.6241C46.105 93.6351 46.277 92.7086 46.6212 91.8421C46.963 90.9779 47.47 90.2062 48.1374 89.5222C48.7699 88.8706 49.5025 88.3715 50.3396 88.0226C51.1745 87.676 52.0511 87.5027 52.9673 87.5027C53.8836 87.5027 54.7626 87.676 55.5998 88.0272C56.4393 88.3785 57.1834 88.8822 57.8345 89.5407C58.4903 90.1992 58.988 90.9617 59.3252 91.8259C59.6624 92.6901 59.8298 93.6236 59.8298 94.6241C59.8298 95.4629 59.7135 96.2485 59.4786 96.9879C59.2414 97.725 58.8926 98.3997 58.4275 99.0074C57.7717 99.8762 56.9648 100.549 56.009 101.029C55.0533 101.51 54.0394 101.75 52.9673 101.75C52.0581 101.75 51.1861 101.575 50.3536 101.223C49.5211 100.872 48.7815 100.368 48.1374 99.7098C47.47 99.0259 46.963 98.2564 46.6212 97.3992C46.277 96.5396 46.105 95.6154 46.105 94.6241ZM55.4905 97.5632C55.4951 97.5586 55.4998 97.554 55.5022 97.5517C56.1835 96.7684 56.5253 95.7933 56.5253 94.6241C56.5253 93.4503 56.1835 92.4706 55.5022 91.6873C54.8208 90.9017 53.9766 90.4788 52.9673 90.5089C52.6348 90.5204 52.3605 90.6128 52.2233 90.6891L55.4905 97.5632Z"
                            fill="#101010" />
                        <path
                            d="M62.0786 101.315V87.9354H70.4469V90.6575L65.2091 90.5444L65.1406 93.4831L69.8992 93.3243V96.0278L65.1634 95.9148L65.2737 101.315H62.0786Z"
                            fill="#101010" />
                        <path
                            d="M78.3471 98.24C79.1763 98.7446 78.9747 98.3901 79.5529 98.5934C80.1311 98.7964 80.6977 98.8976 81.2454 98.8976C81.8046 98.8976 82.2497 98.7763 82.5883 98.5333C82.9268 98.2903 83.0942 97.9781 83.0942 97.5967C83.0942 97.0491 82.4931 96.4341 81.2911 95.7512C81.1009 95.6404 80.9526 95.5543 80.8461 95.4927L79.937 94.9854C79.0507 94.4869 78.3966 93.9242 77.9667 93.2968C77.5407 92.6694 77.3276 91.9588 77.3276 91.1651C77.3276 90.0887 77.7385 89.2058 78.5525 88.5168C79.3703 87.8281 80.4276 87.4834 81.7209 87.4834C82.1964 87.4834 82.7137 87.539 83.2729 87.6497C83.8282 87.7601 84.4484 87.9324 85.1293 88.1664C84.8934 88.0186 84.6614 91.0207 84.4331 90.8975C84.0337 90.6817 83.6495 90.5033 83.2805 90.3623C82.6985 90.1408 82.2042 90.0301 81.7934 90.0301C81.3445 90.0301 80.9868 90.1272 80.7282 90.3207C80.4657 90.5146 80.3365 90.7777 80.3365 91.1099C80.3365 91.3435 80.4125 91.5619 80.5685 91.7649C80.7244 91.9679 80.9565 92.1527 81.2646 92.3186L82.8431 93.186C84.163 93.9121 85.0493 94.5826 85.5057 95.1975C85.9584 95.8128 86.1866 96.5419 86.1866 97.3843C86.1866 98.6886 85.7417 99.742 84.844 100.545C83.9501 101.348 82.7632 101.749 81.2835 101.749C80.7814 101.749 80.2376 101.697 79.648 101.592C79.0622 101.487 78.4155 101.325 77.708 101.103L78.3471 98.24Z"
                            fill="#101010" />
                        <path
                            d="M90.907 98.3844H95.4829L93.2463 92.8723L90.907 98.3844ZM86.4185 101.315L93.2805 87.5205H93.4859L100.2 101.315H86.4185Z"
                            fill="#101010" />
                        <path d="M101.211 101.315V87.9354H104.426L104.342 98.6436L109.675 98.4456V101.315H101.211Z"
                            fill="#101010" />
                        <path
                            d="M118.8 92.5624V96.427L114.373 95.8529V98.5008H118.663L119.618 98.4275V101.315H111.25V87.9355H118.386L119.565 87.8765L119.546 90.6945H114.373V93.1123"
                            fill="#101010" />
                    </svg>
                </div>
                <div class="flex flex-col gap-4 text-grey-900">
                    <h1 class="text-3xl font-bold  tracking-tight sp">Sign Up</h1>
                    <p>Enter your email and password for register</p>
                </div>
                <div class="pt-4">
                    <h1 class="text-lg font-semibold text-grey-900 mb-4">DATA USER</h1>
                    <div class="flex flex-col gap-3">
                        <div class="">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="string" id="name" name="name"
                                class="bg-gray-50 border border-name-300 text-gray-900 text-sm rounded-lg w-full p-4"
                                placeholder="name" required>
                            @error('name')
                                <p class="text-red-500 text-sm mt-2">
                                    {{ $message }}
                                </p>
                            @enderror
                            <div class="">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" id="email" name="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-4"
                                    placeholder="email" required>
                                @error('email')
                                    <p class="text-red-500 text-sm mt-2">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="phone_number"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                    number</label>
                                <input type="string" id="phone_number" name="phone_number"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-4"
                                    placeholder="089617355573" required>
                                @error('phone_number')
                                    <p class="text-red-500 text-sm mt-2">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" id="password" name="password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-4"
                                    placeholder="password" required>
                                @error('password')
                                    <p class="text-red-500 text-sm mt-2">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="password_confirmation"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                    Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-4"
                                    placeholder="confirm password" required>
                                @error('password_confirmation')
                                    <p class="text-red-500 text-sm mt-2">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h1 class="text-lg font-semibold text-grey-900 mb-4">DATA TENANT</h1>
                        <div class="flex flex-col gap-3">
                            <div class="">
                                <label for="tenant_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tenant
                                    Name</label>
                                <input type="string" id="tenant_name" name="tenant_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-4"
                                    placeholder="Tenant Name" required>
                                @error('tenant_name')
                                    <p class="text-red-500 text-sm mt-2">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="tenant_address"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                <input type="string" id="tenant_address" name="tenant_address"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-4"
                                    placeholder="Tenant address" required>
                                @error('tenant_address')
                                    <p class="text-red-500 text-sm mt-2">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div>
                                <label for="tenant_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea id="tenant_description" rows="4" name="tenant_description"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Enter a description"></textarea>
                                @error('tenant_description')
                                    <p class="text-red-500 text-sm mt-2">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-red-500 py-4 px-6 rounded-xl text-white-50 text-xl font-semibold">Sign
                            up</button>
                    </div>
            </form>
        </div>
    </div>
@endsection
