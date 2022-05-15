@extends('layouts.app')

@section('content')
    <!-- BEGIN: Content -->
    <div class="content">
        <div>
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    <b>Result CF</b>
                </h2>
            </div>

            <div class="intro-y tab-content mt-5">
                <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">

                    <div class="grid grid-cols-12 gap-12">

                        <!-- BEGIN: Work In Progress -->
                        <div class="intro-y box col-span-12 lg:col-span-12 mr-2">

                            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Hasil Diagnosa
                                </h2>

                            </div>

                            <div class="p-5">
                                <!-- BEGIN: Weekly Top Products -->
                                <div class="col-span-12 mt-6">
                                    <div class="intro-y block sm:flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                            Nilai CF tiap-tiap penyakit
                                        </h2>

                                    </div>
                                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                        <table class="table table-report sm:mt-2">
                                            <thead>
                                                <tr>
                                                    <th class="whitespace-nowrap">#</th>
                                                    <th class="whitespace-nowrap">Nama Penyakit</th>
                                                    <th class="whitespace-nowrap">Hasil CF</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($penyakits as $key => $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td class="whitespace-nowrap">{{ $item->nama }}</td>
                                                        <td>{{ number_format($allResult[$key], 3) }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <!-- END: Weekly Top Products -->
                            </div>


                            <div class="p-5">
                                <div class="col-span-12">
                                    <div class="intro-y block sm:flex items-center">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                            Hasil CF Diagnosa
                                        </h2>


                                    </div>
                                    <div class="font-bold pl-4 mt-5">

                                        <div class="text-gray-300 font-small whitespace-nowrap">Maka CF dari Gejala yang di
                                            Inputkan pengguna untuk penyakit {{ $dataResult['nama'] }} dengan kemungkinan
                                            {{ number_format($dataResult['cf'], 3) }} atau
                                            {{ number_format($dataResult['cf'], 3) * 100 }} %</div>

                                    </div>


                                </div>

                            </div>

                            <div class="p-5">
                                <div class="col-span-12">
                                    <div class="intro-y block sm:flex items-center">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                            Details
                                        </h2>
                                    </div>
                                    <div class="font-bold pl-4 mt-5">
                                        <div class="text-gray-300 font-small">Solusi dari penyakit
                                            tersebut adalah
                                            {{ $dataResult['info'] }}</div>

                                    </div>


                                </div>

                            </div>



                        </div>
                        <!-- END: Form Layout -->

                    </div>
                    <!-- END: Work In Progress -->


                </div>

            </div>
        </div>

    </div>

    </div>
    <!-- END: Content -->
@endsection
