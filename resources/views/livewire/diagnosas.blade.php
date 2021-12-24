<div class="p-5">
    @foreach ($gejalas as $i)
        <div class="mt-5">
            <label for="crud-form-1" class="form-label">{{ $i->nama }}</label>
            <select wire:model="gejala.{{ $i->id }}" class="form-select sm:mr-2"
                aria-label="Default select example">
                <option>Silahkan pilih Nilai CF</option>
                @foreach ($cfs as $item)
                    <option value="{{ $i->id . ',' . $item->nilai }}">
                        {{ $item->nilai . ' , ' . $item->nama }}
                    </option>
                @endforeach
            </select>

            @if ($errors->has('gejala.' . $i->id))
                <div class="text-theme-24 mt-2">{{ $errors->first('gejala.' . $i->id) }}</div>
            @endif

        </div>
    @endforeach

    <div class="text-right mt-5">
        <button wire:click="save" type="button" class="btn btn-primary w-24">Submit</button>
    </div>
</div>
