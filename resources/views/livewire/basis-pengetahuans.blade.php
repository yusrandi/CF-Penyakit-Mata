<div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Basis Pengetahuan
        </h2>
    </div>

    <div class="intro-y tab-content mt-5">
        <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Top Categories -->
                <div class="intro-y box col-span-12 lg:col-span-9">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            Tabel Basis Pengetahuan
                        </h2>

                    </div>
                    <div class="p-5" id="basic-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                @if ($basispengetahuans->count())
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                                                    Penyakit
                                                </th>
                                                <th class="border-b-2 dark:border-dark-5">
                                                    Gejala
                                                </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">MB
                                                </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">MD
                                                </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">CF
                                                </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-right">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($basispengetahuans as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->penyakit->nama }}</td>
                                                    <td>{{ $item->gejala->nama }}</td>
                                                    <td>{{ $item->mb }}</td>
                                                    <td>{{ $item->md }}</td>
                                                    <td>{{ $item->cf }}</td>
                                                    <td class="text-right whitespace-nowrap">
                                                        <button wire:click="selectedItem({{ $item->id }}, 'update')"
                                                            type="button"
                                                            class="btn btn-success w-15 mr-2">Edit</button>
                                                        <button wire:click="selectedItem({{ $item->id }}, 'delete')"
                                                            wire:click="save" type="button"
                                                            class="btn btn-danger w-15">Delete</button>

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
                <div class="intro-y box col-span-12 lg:col-span-3">

                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            Form Tambah Basis Pengetahuan
                        </h2>

                    </div>
                    <!-- BEGIN: Form Layout -->
                    <div class="p-5">

                        <div>
                            <label for="crud-form-1" class="form-label">Pilih Penyakit</label>
                            <select wire:model="penyakit_id" class="form-select mt-2 sm:mr-2"
                                aria-label="Default select example">
                                <option>Silahkan pilih penyakit</option>
                                @foreach ($penyakits as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach

                            </select>
                            @error('penyakit_id')
                                <small class="pristine-error text-theme-24 mt-2">{{ $message }}</small>
                            @enderror

                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Pilih Gejala Penyakit</label>
                            <select wire:model="gejala_id" class="form-select mt-2 sm:mr-2"
                                aria-label="Default select example">
                                <option>Silahkan pilih Gejala</option>
                                @foreach ($gejalas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            @error('gejala_id')
                                <small class="pristine-error text-theme-24 mt-2">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Pilih Nilai MB</label>
                            <input wire:model="mb" id="crud-form-3" type="text" class="form-control" placeholder="0.2"
                                aria-describedby="input-group-1">
                            @error('mb')
                                <small class="pristine-error text-theme-24 mt-2">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Pilih Nilai MD</label>
                            <input wire:model="md" id="crud-form-3" type="text" class="form-control" placeholder="0.8"
                                aria-describedby="input-group-1">
                            @error('md')
                                <small class="pristine-error text-theme-24 mt-2">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="text-right mt-5">
                            <button wire:click="save" type="button" class="btn btn-primary w-24">Submit</button>
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
