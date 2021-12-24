<div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Laporan
        </h2>
    </div>

    <div class="intro-y tab-content mt-5">
        <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Top Categories -->
                <div class="intro-y box col-span-12 lg:col-span-12">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            Tabel Laporan Diagnosa
                        </h2>
                        <button type="submit" class="btn btn-primary shadow-md mr-2" onclick="printContent('print')"><i
                                data-feather="printer" class="w-4 h-4 mr-2"></i>Print Report</button>

                    </div>
                    <div class="p-5" id="print">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                @if (count($laporans))
                                    <table class="table">
                                        <thead>
                                            <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                                <th class="whitespace-nowrap">#</th>
                                                <th class="whitespace-nowrap">Nama Pengguna</th>
                                                <th class="whitespace-nowrap">Email Pengguna</th>
                                                <th class="whitespace-nowrap">Nama Penyakit</th>
                                                <th class="whitespace-nowrap">Nilai CF(%)</th>
                                                <th class="whitespace-nowrap">Solusi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($laporans as $item)
                                                <tr>
                                                    <td class="border-b dark:border-dark-5">{{ $loop->iteration }}
                                                    </td>
                                                    <td class="border-b dark:border-dark-5">{{ $item->user->name }}
                                                    </td>
                                                    <td class="border-b dark:border-dark-5">{{ $item->user->email }}
                                                    </td>
                                                    <td class="border-b dark:border-dark-5">
                                                        {{ $item->penyakit->nama }}</td>
                                                    <td class="border-b dark:border-dark-5">{{ $item->cf * 100 }} %
                                                    </td>
                                                    <td class="border-b dark:border-dark-5">
                                                        {{ $item->penyakit->info }}</td>
                                                </tr>

                                            @endforeach

                                        </tbody>
                                    </table>

                                @else
                                    there no data yet
                                @endif

                            </div>
                        </div>

                    </div>

                </div>
                <!-- END: Top Categories -->


            </div>
            <!-- END: Work In Progress -->

        </div>
    </div>
</div>

</div>

@section('script')
    <script>
        function printContent(el) {
            var restorePage = document.body.innerHTML;
            var printContent = document.getElementById(el).innerHTML;

            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = restorePage;
        }

    </script>
@endsection
