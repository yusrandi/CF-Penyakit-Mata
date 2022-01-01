@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 xxl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Notification -->
                    <div class="col-span-12 mt-6 -mb-6 intro-y">
                        <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6"
                            role="alert">
                            <span>Selamat Datang di website Diagnosa Penyakit Mata</span>
                        </div>
                    </div>
                    <!-- BEGIN: Notification -->

                    <!-- BEGIN: Ads 1 -->
                    <div class="col-span-12 lg:col-span-6 mt-6">
                        <div class="ads-box box p-8 relative overflow-hidden bg-theme-17 intro-y">
                            <div class="ads-box__title w-full sm:w-72 text-white text-xl -mt-3">Jagalah Selalu Kesehatan Mata
                                anda</div>
                            <div
                                class="w-full sm:w-72 leading-relaxed text-white text-opacity-70 dark:text-gray-600 dark:text-opacity-100 mt-3">
                                Ayo, silahkan periksakan mata anda, agar kesehatan mata tetap terjaga</div>

                            <img class="hidden sm:block absolute top-0 right-0 w-2/2 -mt-3 mr-2"
                                alt="Icewall Tailwind HTML Admin Template" src="images/mata1.png">
                        </div>
                    </div>
                    <!-- END: Ads 1 -->
                    <!-- BEGIN: Ads 2 -->
                    <div class="col-span-12 lg:col-span-6 mt-6">
                        <div class="ads-box box p-8 relative overflow-hidden intro-y">
                            <div class="ads-box__title w-full sm:w-52 text-theme-17 dark:text-white text-xl -mt-3">
                                Ajaklah teman anda <span class="font-medium">periksa</span> GRATIS!</div>
                            <div class="w-full sm:w-60 leading-relaxed text-gray-600 mt-2">anda berpeluang menjaga mata anda
                                dari penyakit mata</div>

                            <img class="hidden sm:block absolute top-0 right-0 w-1/2 mt-1 -mr-12"
                                alt="Icewall Tailwind HTML Admin Template" src="images/mata2.png">
                        </div>
                    </div>
                    <!-- END: Ads 2 -->






                </div>
            </div>
            <div class="col-span-12 xxl:col-span-3">
                <div class="xxl:border-l border-theme-25 -mb-10 pb-10">
                    <div class="xxl:pl-6 grid grid-cols-12 gap-6">
                        <!-- BEGIN: Important Notes -->
                        <div class="col-span-12 md:col-span-6 xl:col-span-12 mt-3 xxl:mt-8">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-auto">
                                    Important Notes
                                </h2>
                                <button data-carousel="important-notes" data-target="prev"
                                    class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2">
                                    <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                                <button data-carousel="important-notes" data-target="next"
                                    class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2">
                                    <i data-feather="chevron-right" class="w-4 h-4"></i> </button>
                            </div>
                            <div class="mt-5 intro-x">
                                <div class="box zoom-in">
                                    <div class="tiny-slider" id="important-notes">
                                        <div class="p-5">
                                            <div class="text-base font-medium truncate">Tentang Website ini</div>
                                            <div class="text-gray-500 mt-1">20 Hours ago</div>
                                            <div class="text-gray-600 text-justify mt-1">Sistem diagnosa penyakit mata ini
                                                merupakan sebuah sistem yang dapat membantu para penderita yang memiliki
                                                gejala penyakit mata untuk mendiagnosa penyakit mata yang diderita ,
                                            </div>
                                            <div class="text-gray-600 text-justify mt-1">Sistem ini menggunakan basis
                                                pengetahuan yang didapatkan dari pakar kesehatan mata
                                                yang dapat mendeteksi gejala-gejala dini penyakit mata yang diderita</div>

                                        </div>
                                        <div class="p-5">
                                            <div class="text-base font-medium truncate">Survey Penyakit Mata</div>
                                            <div class="text-gray-500 mt-1">20 Hours ago</div>
                                            <div class="text-gray-600 text-justify mt-1">Menurut depkes tahun 2017 penyebab
                                                utama gangguan kebutaan di Indonesia adalah katarak (70.80%), sedangkan
                                                penyebab utama gangguan penglihatan adalah kelainan refraksi (10.15%).</div>
                                            <div class="text-gray-600 text-justify mt-1">Survei tersebut dilakukan pada
                                                penduduk diatas usia 50 tahun, sebanyak 15 provinsi itu sudah mencakup 65%
                                                orang Indonesia.</div>
                                            <div class="text-gray-600 text-justify mt-1">Penyakit mata sangat beragam dan
                                                cara menanganinya juga berbeda, tergantung dari penyebabnya. .</div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Important Notes -->
                        <!-- BEGIN: Recent Activities -->
                        {{-- <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Recent Activities
                                </h2>
                                <a href="" class="ml-auto text-theme-26 dark:text-theme-33 truncate">Show
                                    More</a>
                            </div>
                            <div class="report-timeline mt-5 relative">
                                <div class="intro-x relative flex items-center mb-3">
                                    <div class="report-timeline__image">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Icewall Tailwind HTML Admin Template" src="dist/images/profile-9.jpg">
                                        </div>
                                    </div>
                                    <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                        <div class="flex items-center">
                                            <div class="font-medium">Arnold Schwarzenegger</div>
                                            <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                        </div>
                                        <div class="text-gray-600 mt-1">Has joined the team</div>
                                    </div>
                                </div>
                                <div class="intro-x relative flex items-center mb-3">
                                    <div class="report-timeline__image">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Icewall Tailwind HTML Admin Template" src="dist/images/profile-8.jpg">
                                        </div>
                                    </div>
                                    <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                        <div class="flex items-center">
                                            <div class="font-medium">Russell Crowe</div>
                                            <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                        </div>
                                        <div class="text-gray-600">
                                            <div class="mt-1">Added 3 new photos</div>
                                            <div class="flex mt-2">
                                                <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Nikon Z6">
                                                    <img alt="Icewall Tailwind HTML Admin Template"
                                                        class="rounded-md border border-white"
                                                        src="dist/images/preview-1.jpg">
                                                </div>
                                                <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in"
                                                    title="Nike Air Max 270">
                                                    <img alt="Icewall Tailwind HTML Admin Template"
                                                        class="rounded-md border border-white"
                                                        src="dist/images/preview-2.jpg">
                                                </div>
                                                <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in"
                                                    title="Oppo Find X2 Pro">
                                                    <img alt="Icewall Tailwind HTML Admin Template"
                                                        class="rounded-md border border-white"
                                                        src="dist/images/preview-9.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-x text-gray-500 text-xs text-center my-4">12 November</div>
                                <div class="intro-x relative flex items-center mb-3">
                                    <div class="report-timeline__image">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Icewall Tailwind HTML Admin Template" src="dist/images/profile-1.jpg">
                                        </div>
                                    </div>
                                    <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                        <div class="flex items-center">
                                            <div class="font-medium">Robert De Niro</div>
                                            <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                        </div>
                                        <div class="text-gray-600 mt-1">Has changed <a
                                                class="text-theme-12 dark:text-gray-300" href="">Sony A7 III</a>
                                            price and description</div>
                                    </div>
                                </div>
                                <div class="intro-x relative flex items-center mb-3">
                                    <div class="report-timeline__image">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Icewall Tailwind HTML Admin Template" src="dist/images/profile-5.jpg">
                                        </div>
                                    </div>
                                    <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                        <div class="flex items-center">
                                            <div class="font-medium">Denzel Washington</div>
                                            <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                        </div>
                                        <div class="text-gray-600 mt-1">Has changed <a
                                                class="text-theme-12 dark:text-gray-300" href="">Sony A7 III</a>
                                            description</div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- END: Recent Activities -->
                        <!-- BEGIN: Transactions -->
                        {{-- <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Transactions
                                </h2>
                            </div>
                            <div class="mt-5">
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Icewall Tailwind HTML Admin Template"
                                                src="dist/images/profile-10.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Al Pacino</div>
                                            <div class="text-gray-600 text-xs mt-0.5">25 October 2020</div>
                                        </div>
                                        <div class="text-theme-24">+$49</div>
                                    </div>
                                </div>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Icewall Tailwind HTML Admin Template" src="dist/images/profile-2.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Morgan Freeman</div>
                                            <div class="text-gray-600 text-xs mt-0.5">19 October 2022</div>
                                        </div>
                                        <div class="text-theme-24">+$124</div>
                                    </div>
                                </div>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Icewall Tailwind HTML Admin Template" src="dist/images/profile-2.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Tom Cruise</div>
                                            <div class="text-gray-600 text-xs mt-0.5">17 December 2022</div>
                                        </div>
                                        <div class="text-theme-10">-$30</div>
                                    </div>
                                </div>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Icewall Tailwind HTML Admin Template" src="dist/images/profile-4.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Angelina Jolie</div>
                                            <div class="text-gray-600 text-xs mt-0.5">11 March 2021</div>
                                        </div>
                                        <div class="text-theme-10">-$23</div>
                                    </div>
                                </div>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Icewall Tailwind HTML Admin Template" src="dist/images/profile-8.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Johnny Depp</div>
                                            <div class="text-gray-600 text-xs mt-0.5">12 August 2022</div>
                                        </div>
                                        <div class="text-theme-24">+$49</div>
                                    </div>
                                </div>
                                <a href=""
                                    class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-27 dark:border-dark-5 text-theme-28 dark:text-gray-600">View
                                    More</a>
                            </div>
                        </div> --}}
                        <!-- END: Transactions -->
                        <!-- BEGIN: Schedules -->
                        {{-- <div
                            class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 xl:col-start-1 xl:row-start-2 xxl:col-start-auto xxl:row-start-auto mt-3">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Schedules
                                </h2>
                                <a href="" class="ml-auto text-theme-26 dark:text-gray-400 truncate flex items-center">
                                    <i data-feather="plus" class="w-4 h-4 mr-1"></i> Add New Schedules </a>
                            </div>
                            <div class="mt-5">
                                <div class="intro-x box">
                                    <div class="p-5">
                                        <div class="flex">
                                            <i data-feather="chevron-left" class="w-5 h-5 text-gray-600"></i>
                                            <div class="font-medium text-base mx-auto">April</div>
                                            <i data-feather="chevron-right" class="w-5 h-5 text-gray-600"></i>
                                        </div>
                                        <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                            <div class="font-medium">Su</div>
                                            <div class="font-medium">Mo</div>
                                            <div class="font-medium">Tu</div>
                                            <div class="font-medium">We</div>
                                            <div class="font-medium">Th</div>
                                            <div class="font-medium">Fr</div>
                                            <div class="font-medium">Sa</div>
                                            <div class="py-0.5 rounded relative text-gray-600">29</div>
                                            <div class="py-0.5 rounded relative text-gray-600">30</div>
                                            <div class="py-0.5 rounded relative text-gray-600">31</div>
                                            <div class="py-0.5 rounded relative">1</div>
                                            <div class="py-0.5 rounded relative">2</div>
                                            <div class="py-0.5 rounded relative">3</div>
                                            <div class="py-0.5 rounded relative">4</div>
                                            <div class="py-0.5 rounded relative">5</div>
                                            <div class="py-0.5 bg-theme-29 dark:bg-theme-10 rounded relative">6
                                            </div>
                                            <div class="py-0.5 rounded relative">7</div>
                                            <div class="py-0.5 bg-theme-26 dark:bg-theme-17 text-white rounded relative">
                                                8</div>
                                            <div class="py-0.5 rounded relative">9</div>
                                            <div class="py-0.5 rounded relative">10</div>
                                            <div class="py-0.5 rounded relative">11</div>
                                            <div class="py-0.5 rounded relative">12</div>
                                            <div class="py-0.5 rounded relative">13</div>
                                            <div class="py-0.5 rounded relative">14</div>
                                            <div class="py-0.5 rounded relative">15</div>
                                            <div class="py-0.5 rounded relative">16</div>
                                            <div class="py-0.5 rounded relative">17</div>
                                            <div class="py-0.5 rounded relative">18</div>
                                            <div class="py-0.5 rounded relative">19</div>
                                            <div class="py-0.5 rounded relative">20</div>
                                            <div class="py-0.5 rounded relative">21</div>
                                            <div class="py-0.5 rounded relative">22</div>
                                            <div class="py-0.5 bg-theme-30 dark:bg-theme-22 rounded relative">23
                                            </div>
                                            <div class="py-0.5 rounded relative">24</div>
                                            <div class="py-0.5 rounded relative">25</div>
                                            <div class="py-0.5 rounded relative">26</div>
                                            <div class="py-0.5 bg-theme-31 dark:bg-theme-23 rounded relative">27
                                            </div>
                                            <div class="py-0.5 rounded relative">28</div>
                                            <div class="py-0.5 rounded relative">29</div>
                                            <div class="py-0.5 rounded relative">30</div>
                                            <div class="py-0.5 rounded relative text-gray-600">1</div>
                                            <div class="py-0.5 rounded relative text-gray-600">2</div>
                                            <div class="py-0.5 rounded relative text-gray-600">3</div>
                                            <div class="py-0.5 rounded relative text-gray-600">4</div>
                                            <div class="py-0.5 rounded relative text-gray-600">5</div>
                                            <div class="py-0.5 rounded relative text-gray-600">6</div>
                                            <div class="py-0.5 rounded relative text-gray-600">7</div>
                                            <div class="py-0.5 rounded relative text-gray-600">8</div>
                                            <div class="py-0.5 rounded relative text-gray-600">9</div>
                                        </div>
                                    </div>
                                    <div class="border-t border-gray-200 dark:border-dark-5 p-5">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-theme-22 rounded-full mr-3"></div>
                                            <span class="truncate">UI/UX Workshop</span>
                                            <div
                                                class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden">
                                            </div>
                                            <span class="font-medium xl:ml-auto">23th</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-theme-26 dark:bg-theme-10 rounded-full mr-3">
                                            </div>
                                            <span class="truncate">VueJs Frontend Development</span>
                                            <div
                                                class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden">
                                            </div>
                                            <span class="font-medium xl:ml-auto">10th</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-theme-23 rounded-full mr-3"></div>
                                            <span class="truncate">Laravel Rest API</span>
                                            <div
                                                class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden">
                                            </div>
                                            <span class="font-medium xl:ml-auto">31th</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- END: Schedules -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
