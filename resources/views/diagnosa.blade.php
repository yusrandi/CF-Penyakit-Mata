@extends('layouts.app')

@section('content')
    <!-- BEGIN: Content -->
    <div class="content">
        <div>
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Diagnosa Penyakit
                </h2>
            </div>

            <div class="intro-y tab-content mt-5">
                <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">

                    <div class="grid grid-cols-12 gap-12">

                        <!-- BEGIN: Work In Progress -->
                        <div class="intro-y box col-span-12 lg:col-span-12 mr-2">

                            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Form Diagnosa

                                </h2>

                            </div>

                            {{-- @livewire('diagnosas') --}}


                            <form action="{{ route('diagnosa.store') }}" method="post">
                                @csrf
                                <!-- BEGIN: Form Layout -->
                                <div class="p-5">
                                    @foreach ($gejalas as $i)
                                        <div class="mt-5">
                                            <label for="crud-form-1" class="form-label">{{ $i->nama }}</label>
                                            <select class="form-select sm:mr-2" aria-label="Default select example"
                                                name="{{ $i->kode }}">
                                                <option value="">Silahkan pilih Nilai CF</option>
                                                @foreach ($cfs as $item)
                                                    <option value="{{ $i->id . ',' . $item->nilai }}"
                                                        {{ old($i->kode) == $i->id . ',' . $item->nilai ? 'selected' : '' }}>
                                                        {{ $item->nama }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @if ($errors->has($i->kode))
                                                <div class="text-theme-24 mt-2"> This field is required
                                                </div>
                                            @endif

                                        </div>
                                    @endforeach
                                    <div class="mt-10">
                                        <button type="submit" class="btn btn-primary w-24">Submit</button>
                                    </div>

                            </form>
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
