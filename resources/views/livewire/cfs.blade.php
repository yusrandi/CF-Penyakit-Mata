<div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Nilai CF
        </h2>
    </div>

    <div class="intro-y tab-content mt-5">
        <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Top Categories -->
                <div class="intro-y box col-span-12 lg:col-span-8">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            Tabel Nilai CF
                        </h2>

                    </div>
                    <div class="p-5" id="basic-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                @if ($cfs->count())
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Nama CF
                                                </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Nilai CF
                                                </th>

                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-right">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($cfs as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->nilai }}</td>

                                                    <td class="text-right text-right flex-center whitespace-nowrap">
                                                        <button wire:click="selectedItem({{ $item->id }}, 'update')"
                                                            type="button"
                                                            class="btn btn-success w-20 mr-2">Edit</button>
                                                        <button wire:click="selectedItem({{ $item->id }}, 'delete')"
                                                            wire:click="save" type="button"
                                                            class="btn btn-danger w-24">Delete</button>

                                                    </td>
                                                </tr>

                                            @endforeach

                                        </tbody>

                                    </table>
                                @else
                                    There is no data yet
                                @endif


                            </div>
                        </div>

                    </div>

                </div>
                <!-- END: Top Categories -->
                <!-- BEGIN: Work In Progress -->
                <div class="intro-y box col-span-12 lg:col-span-4">

                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            Form Tambah CF
                        </h2>

                    </div>
                    <!-- BEGIN: Form Layout -->
                    <div class="p-5">
                        <div>
                            <label for="crud-form-1" class="form-label">Nama</label>
                            <input wire:model="nama" id="crud-form-1" type="text" class="form-control w-full"
                                placeholder="Input Nama CF">
                            @error('nama')
                                <small class="pristine-error text-theme-24 mt-2">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label for="crud-form-3" class="form-label">Nilai</label>
                            <input wire:model="nilai" id="crud-form-3" type="text" class="form-control"
                                placeholder="Input Nilai CF" aria-describedby="input-group-1">

                            @error('nilai')
                                <small class="pristine-error text-theme-24 mt-2">{{ $message }}</small>
                            @enderror
                        </div>



                        <div class="text-right mt-5">
                            <button wire:click="save" type="button" class="btn btn-primary w-24">Submit</button>
                        </div>
                    </div>
                    <!-- END: Form Layout -->

                </div>
                <!-- END: Work In Progress -->

            </div>
        </div>
    </div>

</div>
