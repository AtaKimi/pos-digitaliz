@extends('layouts.admin')

@section('content')
    <div class="pb-5">
        {{-- header --}}
        <x-card class="mb-5">
            <div class="flex items-center">
                <div class="p-5 mr-4 bg-yellow-50 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path
                            d="M13.625 2.6875H2.6875L2.6875 33.3125H13.625V2.6875ZM33.3125 2.6875H22.375V13.625H33.3125V2.6875ZM33.3125 22.375V33.3125H22.375V22.375H33.3125ZM0.5 2.6875C0.5 1.47938 1.47938 0.5 2.6875 0.5H13.625C14.8331 0.5 15.8125 1.47938 15.8125 2.6875V33.3125C15.8125 34.5206 14.8331 35.5 13.625 35.5H2.6875C1.47938 35.5 0.5 34.5206 0.5 33.3125V2.6875ZM20.1875 2.6875C20.1875 1.47938 21.1669 0.5 22.375 0.5H33.3125C34.5206 0.5 35.5 1.47938 35.5 2.6875V13.625C35.5 14.8331 34.5206 15.8125 33.3125 15.8125H22.375C21.1669 15.8125 20.1875 14.8331 20.1875 13.625V2.6875ZM22.375 20.1875C21.1669 20.1875 20.1875 21.1669 20.1875 22.375V33.3125C20.1875 34.5206 21.1669 35.5 22.375 35.5H33.3125C34.5206 35.5 35.5 34.5206 35.5 33.3125V22.375C35.5 21.1669 34.5206 20.1875 33.3125 20.1875H22.375Z"
                            fill="#FDC55E" />
                    </svg>
                </div>
                <div>
                    <p class="text-xl font-bold text-gray-900">Dashboard</p>
                    <p class="hidden text-gray-600 md:block">Akses menu dan informasi penting lainnya disini</p>
                </div>
            </div>
        </x-card>
        {{-- header end --}}

        {{-- cards --}}
        <div class="flex flex-col gap-5 mb-5 md:flex-row">
            <x-card class="w-full flex flex-col gap-5">
                <div class="flex items-center gap-5 p-1 rounded-full bg-yellow-50 w-full">
                    <div class="p-3 bg-yellow-400 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 18 19"
                            fill="none">
                            <path
                                d="M3.64961 2.32549C3.8574 2.08306 4.16075 1.94354 4.48004 1.94354H13.8207C14.14 1.94354 14.4434 2.08306 14.6512 2.32549L17.5054 5.65544C17.7603 5.95279 17.9004 6.33151 17.9004 6.72315V7.00214C17.9004 8.43678 16.7374 9.59979 15.3027 9.59979C14.4691 9.59979 13.7273 9.20715 13.252 8.59673C12.7766 9.20715 12.0348 9.59979 11.2012 9.59979C10.3676 9.59979 9.62571 9.20715 9.15039 8.59673C8.67507 9.20715 7.93319 9.59979 7.09961 9.59979C6.26602 9.59979 5.52415 9.20715 5.04883 8.59673C4.57351 9.20715 3.83163 9.59979 2.99805 9.59979C1.5634 9.59979 0.400391 8.43678 0.400391 7.00214V6.72315C0.400391 6.33151 0.540487 5.95279 0.79536 5.65544L3.64961 2.32549ZM5.5957 7.00214C5.5957 7.83272 6.26903 8.50604 7.09961 8.50604C7.93019 8.50604 8.60352 7.83272 8.60352 7.00214C8.60352 6.70011 8.84836 6.45526 9.15039 6.45526C9.45242 6.45526 9.69727 6.70011 9.69727 7.00214C9.69727 7.83272 10.3706 8.50604 11.2012 8.50604C12.0318 8.50604 12.7051 7.83272 12.7051 7.00214C12.7051 6.70011 12.9499 6.45526 13.252 6.45526C13.554 6.45526 13.7988 6.70011 13.7988 7.00214C13.7988 7.83272 14.4721 8.50604 15.3027 8.50604C16.1333 8.50604 16.8066 7.83272 16.8066 7.00214V6.72315C16.8066 6.5926 16.7599 6.46636 16.675 6.36725L13.8207 3.03729H4.48004L1.6258 6.36725C1.54084 6.46636 1.49414 6.5926 1.49414 6.72315V7.00214C1.49414 7.83272 2.16746 8.50604 2.99805 8.50604C3.82863 8.50604 4.50195 7.83272 4.50195 7.00214C4.50195 6.70011 4.7468 6.45526 5.04883 6.45526C5.35086 6.45526 5.5957 6.70011 5.5957 7.00214ZM2.04102 10.1467C2.34305 10.1467 2.58789 10.3915 2.58789 10.6935V17.256H3.68164V11.7873C3.68164 11.1832 4.17133 10.6935 4.77539 10.6935H8.05664C8.6607 10.6935 9.15039 11.1832 9.15039 11.7873V17.256H15.7129V10.6935C15.7129 10.3915 15.9577 10.1467 16.2598 10.1467C16.5618 10.1467 16.8066 10.3915 16.8066 10.6935V17.256H17.3535C17.6555 17.256 17.9004 17.5009 17.9004 17.8029C17.9004 18.1049 17.6555 18.3498 17.3535 18.3498H0.947266C0.645235 18.3498 0.400391 18.1049 0.400391 17.8029C0.400391 17.5009 0.645235 17.256 0.947266 17.256H1.49414V10.6935C1.49414 10.3915 1.73898 10.1467 2.04102 10.1467ZM4.77539 17.256H8.05664V11.7873H4.77539V17.256ZM10.2441 11.7873C10.2441 11.1832 10.7338 10.6935 11.3379 10.6935H13.5254C14.1295 10.6935 14.6191 11.1832 14.6191 11.7873V15.0685C14.6191 15.6726 14.1295 16.1623 13.5254 16.1623H11.3379C10.7338 16.1623 10.2441 15.6726 10.2441 15.0685V11.7873ZM13.5254 11.7873H11.3379V15.0685H13.5254V11.7873Z"
                                fill="white" />
                        </svg>
                    </div>
                    <p class="text-md font-medium text-black text-start">Total Tenant</p>
                </div>
                <div>
                    <p class="text-2xl font-bold text-gray-900 pl-3">
                        {{ $tenant_counter }}
                    </p>
                </div>
            </x-card>

            {{-- card 2 --}}
            <x-card class="w-full flex flex-col gap-5">
                <div class="flex items-center gap-5 p-1 rounded-full bg-green-200 w-full">
                    <span class="p-3 bg-green-400 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 22"
                            fill="none">
                            <path
                                d="M0 7.19385C0 10.2749 2.19651 12.843 5.10905 13.4175C5.19341 12.4873 5.43223 11.6017 5.79965 10.7866C4.68755 10.4119 3.97385 9.55908 3.80493 8.34949H3.17188V7.80855H3.76273V7.25778C3.76273 7.19876 3.76273 7.13975 3.768 7.08566H3.17188V6.54472H3.82076C4.10563 4.96124 5.34537 4.02197 7.20761 4.02197C7.60854 4.02197 7.95672 4.06131 8.24687 4.13016V5.05959C7.96728 4.99075 7.62437 4.95632 7.21288 4.95632C6.047 4.95632 5.26096 5.54644 5.01301 6.54472H7.445V7.08566H4.93388C4.92861 7.14467 4.92861 7.2086 4.92861 7.27253V7.80855H7.445V8.34949H4.98664C5.13631 9.11336 5.58057 9.65705 6.26108 9.90861C7.58313 7.72379 9.89062 6.20192 12.5674 5.95915C11.9929 3.04661 9.42482 0.850098 6.34375 0.850098C2.84019 0.850098 0 3.69029 0 7.19385ZM20.3 14.172C20.3 18.0259 17.1758 21.1501 13.3219 21.1501C9.46796 21.1501 6.34375 18.0259 6.34375 14.172C6.34375 10.3181 9.46796 7.19385 13.3219 7.19385C17.1758 7.19385 20.3 10.3181 20.3 14.172ZM10.4672 15.8494C10.5543 16.908 11.4139 17.7332 12.9589 17.8309V18.6126H13.6442V17.8254C15.2415 17.7169 16.1766 16.8863 16.1766 15.6811C16.1766 14.5845 15.4622 14.02 14.1844 13.7268L13.6442 13.602V11.4739C14.3296 11.5499 14.7652 11.9137 14.8697 12.4185H16.072C15.9849 11.3979 15.0846 10.5999 13.6442 10.5131V9.73135H12.9589V10.5294C11.594 10.6596 10.6647 11.4577 10.6647 12.5868C10.6647 13.5857 11.3558 14.2208 12.5058 14.4814L12.9589 14.59V16.8483C12.2561 16.7451 11.7914 16.3706 11.6869 15.8494H10.4672ZM12.9531 13.4445C12.2793 13.2925 11.9134 12.9831 11.9134 12.5162C11.9134 11.9951 12.3084 11.6042 12.9589 11.4902V13.4445H12.9531ZM13.743 14.7691C14.5619 14.9537 14.9394 15.2523 14.9394 15.7788C14.9394 16.3814 14.469 16.794 13.6442 16.87V14.7474L13.743 14.7691Z"
                                fill="white" />
                        </svg>
                    </span>
                    <span class="font-medium text-md text-black">Total Pendapatan Service Tenant</span>
                </div>
                <div>
                    <p class="text-2xl font-bold text-gray-900 pl-3">
                        Rp.{{ number_format($total_service_paid_all, 2, ',', '.') }}</p>
                </div>
            </x-card>

            {{-- card 3 --}}
            <x-card class="w-full flex flex-col gap-5">
                <div class="flex items-center gap-5 p-1 rounded-full bg-red-50 w-full">
                    <span class="p-3 bg-red-400 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 20"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6949 18.6688C16.3045 18.6688 18.4199 16.5534 18.4199 13.9438C18.4199 11.3343 16.3045 9.21882 13.6949 9.21882C11.0854 9.21882 8.96992 11.3343 8.96992 13.9438C8.96992 16.5534 11.0854 18.6688 13.6949 18.6688ZM19.6012 13.9438C19.6012 17.2058 16.9569 19.8501 13.6949 19.8501C10.433 19.8501 7.78867 17.2058 7.78867 13.9438C7.78867 10.6819 10.433 8.03757 13.6949 8.03757C16.9569 8.03757 19.6012 10.6819 19.6012 13.9438Z"
                                fill="white" />
                            <path
                                d="M11.8492 15.0594C11.9055 15.7634 12.4613 16.3121 13.4602 16.3771V16.8969H13.9033V16.3735C14.936 16.3013 15.5406 15.7489 15.5406 14.9475C15.5406 14.2182 15.0787 13.8427 14.2526 13.6478L13.9033 13.5648V12.1496C14.3465 12.2001 14.6281 12.442 14.6957 12.7777H15.473C15.4167 12.099 14.8346 11.5683 13.9033 11.5106V10.9907H13.4602V11.5214C12.5777 11.608 11.9769 12.1387 11.9769 12.8897C11.9769 13.5539 12.4238 13.9763 13.1673 14.1496L13.4602 14.2218V15.7236C13.0058 15.655 12.7054 15.4059 12.6378 15.0594H11.8492ZM13.4565 13.4601C13.0209 13.359 12.7843 13.1532 12.7843 12.8427C12.7843 12.4961 13.0396 12.2362 13.4602 12.1604V13.4601H13.4565ZM13.9672 14.3409C14.4967 14.4637 14.7408 14.6622 14.7408 15.0124C14.7408 15.4132 14.4366 15.6875 13.9033 15.7381V14.3265L13.9672 14.3409Z"
                                fill="white" />
                            <path
                                d="M1.88242 0.950073C1.23004 0.950073 0.701172 1.47894 0.701172 2.13132V11.5813C0.701172 12.2337 1.23004 12.7626 1.88242 12.7626H6.70542C6.77362 12.356 6.87643 11.9612 7.01071 11.5813H4.24492C4.24492 10.2766 3.18719 9.21882 1.88242 9.21882V4.49382C3.18719 4.49382 4.24492 3.4361 4.24492 2.13132H16.0574C16.0574 3.4361 17.1151 4.49382 18.4199 4.49382V8.66102C18.8689 9.06289 19.2664 9.52115 19.6012 10.0247V2.13132C19.6012 1.47894 19.0723 0.950073 18.4199 0.950073H1.88242Z"
                                fill="white" />
                            <path
                                d="M12.5117 6.95466C12.513 6.92205 12.5137 6.88926 12.5137 6.85632C12.5137 5.55155 11.4559 4.49382 10.1512 4.49382C8.8464 4.49382 7.78867 5.55155 7.78867 6.85632C7.78867 7.66489 8.19487 8.37859 8.81434 8.80449C9.81435 7.85452 11.0913 7.19336 12.5117 6.95466Z"
                                fill="white" />
                        </svg>
                    </span>
                    <span class= "font-medium text-black">Total Belum Dibayar</span>
                </div>
                <div>
                    <p class="text-xl font-bold text-gray-900 pl-3">
                        Rp.{{ number_format($total_service_unpaid_all, 2, ',', '.') }}</p>
                </div>
            </x-card>
        </div>

        {{-- cards end --}}

        {{-- charts --}}
        <form action="" method="get">
            <div class="flex-col mb-5">
                {{-- chart 1 --}}
                <x-card class="mb-5">
                    <div class="flex items-center justify-between mb-5">
                        <div class="grid gap-4 ">
                            <div>
                                <h5 class="inline-flex items-center mb-2 text-xs font-normal leading-none text-gray-500">
                                    Aktifitas
                                </h5>
                                <p class="text-xl font-bold leading-none text-gray-900">Total Tenant</p>
                            </div>

                        </div>
                        <div>
                            <select name="TotalTenantFilter" onchange="this.closest('form').submit()"
                                class="border border-gray-600 rounded-full py-2 px-4">
                                @isset(request()->query()['TotalTenantFilter'])
                                    <option value="weekly" @if (request()->query()['TotalTenantFilter'] == 'weekly') selected @endif>Last 10 days
                                    </option>
                                    <option value="monthly" @if (request()->query()['TotalTenantFilter'] == 'monthly') selected @endif>Monthly</option>
                                    <option value="anually" @if (request()->query()['TotalTenantFilter'] == 'anually') selected @endif>Anually</option>
                                @else
                                    <option value="last_10_days" selected>Last 10 days</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="anually">Anually</option>
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div id="column-chart"></div>
                </x-card>
            </div>
            {{-- charts end --}}
        </form>

        {{-- table --}}
        <x-card class="max-w-full break-words">

            <x-card.header class="flex items-center justify-between mb-5">
                <x-table.table-title>
                    <x-slot:sub_title> Show yours tenant payment records </x-slot:sub_title>
                    <x-slot:title> Tenant Service Payment Records </x-slot:title>
                </x-table.table-title>
            </x-card.header>

            <x-table>
                <x-slot:header>
                    <x-table.th>
                        No
                    </x-table.th>
                    <x-table.th>
                        Tenant
                    </x-table.th>
                    <x-table.th>
                        User
                    </x-table.th>
                    <x-table.th>
                        Jumlah
                    </x-table.th>
                    <x-table.th>
                        Date
                    </x-table.th>
                    <x-table.th>
                        Action
                    </x-table.th>
                </x-slot:header>
                @forelse ($tenant_service_payments as $service)
                    <tr class="border-b bg-white-50 hover:bg-gray-50">
                        <x-table.td>
                            {{ $loop->iteration }}
                        </x-table.td>
                        <x-table.th>
                            <p class="text-xs font-normal">#{{ $service->tenant->code }}</p>
                            <h1 class="font-medium text-gray-900 whitespace-nowrap">
                                {{ $service->tenant->name }}
                            </h1>
                        </x-table.th>
                        <x-table.th class="flex gap-2">
                            <img class="block w-10 h-10 rounded-full"
                                src="{{ $service->user->getFirstMediaUrl('default') }}" alt="">
                            <div>
                                <h1 class="font-medium text-gray-900 whitespace-nowrap">
                                    {{ $service->user->name }}
                                </h1>
                                <p class="text-xs font-normal">{{ $service->user->email }}</p>
                            </div>
                        </x-table.th>
                        <x-table.td>
                            Rp.{{ number_format($service->total, 2, ',', '.') }}
                        </x-table.td>
                        <x-table.td>

                            <p class="whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($service->transfer_at)->format('d-m-Y') }}

                            </p>
                        </x-table.td>
                        <x-table.td>
                            <div class="flex justify-center">
                                <a type="button" href="{{ route('admin-tenant-show', $service->tenant) }}"
                                    class="p-2 border border-yellow-300 rounded-lg hover:bg-yellow-50 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 17 17" fill="none">
                                        <path
                                            d="M16.4063 8.8988C16.4063 8.8988 13.4063 3.3988 8.40625 3.3988C3.40625 3.3988 0.40625 8.8988 0.40625 8.8988C0.40625 8.8988 3.40625 14.3988 8.40625 14.3988C13.4063 14.3988 16.4063 8.8988 16.4063 8.8988ZM1.57895 8.8988C1.63588 8.81201 1.70079 8.71558 1.77352 8.61122C2.10841 8.13073 2.60256 7.49171 3.23836 6.85591C4.52728 5.56699 6.28687 4.3988 8.40625 4.3988C10.5256 4.3988 12.2852 5.56699 13.5741 6.85591C14.2099 7.49171 14.7041 8.13073 15.039 8.61122C15.1117 8.71558 15.1766 8.81201 15.2336 8.8988C15.1766 8.98559 15.1117 9.08203 15.039 9.18639C14.7041 9.66687 14.2099 10.3059 13.5741 10.9417C12.2852 12.2306 10.5256 13.3988 8.40625 13.3988C6.28687 13.3988 4.52728 12.2306 3.23836 10.9417C2.60256 10.3059 2.10841 9.66687 1.77352 9.18639C1.70079 9.08203 1.63588 8.98559 1.57895 8.8988Z"
                                            fill="#FDC55E" />
                                        <path
                                            d="M8.40625 6.3988C7.02554 6.3988 5.90625 7.51809 5.90625 8.8988C5.90625 10.2795 7.02554 11.3988 8.40625 11.3988C9.78696 11.3988 10.9063 10.2795 10.9063 8.8988C10.9063 7.51809 9.78696 6.3988 8.40625 6.3988ZM4.90625 8.8988C4.90625 6.96581 6.47325 5.3988 8.40625 5.3988C10.3392 5.3988 11.9063 6.96581 11.9063 8.8988C11.9063 10.8318 10.3392 12.3988 8.40625 12.3988C6.47325 12.3988 4.90625 10.8318 4.90625 8.8988Z"
                                            fill="#FDC55E" />
                                    </svg>
                                </a>
                            </div>
                        </x-table.td>
                    </tr>
                @empty
                    <tr>
                        <x-table.td colspan="55" class="py-5 text-center">tidak ada data</x-table.td>
                    </tr>
                @endforelse
            </x-table>
            {{ $tenant_service_payments->links('pagination.admin') }}
        </x-card>
    </div>


    <script>
        // ApexCharts options and config
        window.addEventListener("load", function() {
            const filledData = @json($filledData);
            const chartData = [];
            for (const key in filledData) {
                // Get the value of the current property.
                const value = filledData[key];

                // Perform whatever operation you need to perform on the key and value.
                chartData.push({
                    x: key,
                    y: value,
                });
            } // Loop through filledData and build chartData array

            const options = {
                colors: ["#1A56DB", "#FDBA8C"],
                series: [{
                        name: "Tenant",
                        color: "#1A56DB",
                        data: chartData,
                    },

                ],
                chart: {
                    type: "bar",
                    height: "200px",
                    fontFamily: "Inter, sans-serif",
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "70%",
                        borderRadiusApplication: "end",
                        borderRadius: 4,
                    },
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                    x: {
                        show: false,
                    },
                },
                states: {
                    hover: {
                        filter: {
                            type: "darken",
                            value: 1,
                        },
                    },
                },
                stroke: {
                    show: true,
                    width: 7,
                    colors: ["transparent"],
                },
                grid: {
                    show: true,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -14,
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    show: false,
                },
                xaxis: {
                    floating: false,
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-gray-500'
                        }
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    show: true,
                },
                fill: {
                    opacity: 1,
                },
            }

            if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("column-chart"), options);
                chart.render();
            }
        });
    </script>
@endsection
