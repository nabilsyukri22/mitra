<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    {{ $rating }}
    {{-- @if ($date > $survei->tgl_akhir) --}}
    {{-- <fieldset class=""> --}}
    {{-- <input type="radio" id="field'.$m->id.'_star5" name="rating'.$m->id.'" value="5" /><label
                class="full" for="field'.$m->id.'_star5"></label>

            <input type="radio" id="field'.$m->id.'_star4" name="rating'.$m->id.'" value="4" /><label
                class="full" for="field'.$m->id.'_star4"></label>

            <input type="radio" id="field'.$m->id.'_star3" name="rating'.$m->id.'" value="3" /><label
                class="full" for="field'.$m->id.'_star3"></label>

            <input type="radio" id="field'.$m->id.'_star2" name="rating'.$m->id.'" value="2" /><label
                class="full" for="field'.$m->id.'_star2"></label>

            <input type="radio" id="field'.$m->id.'_star1" name="rating'.$m->id.'" value="1" /><label
                class="full" for="field'.$m->id.'_star1"></label> --}}
    @for ($i = 1; $i <= 5; $i++)
        <input type="radio" wire:model.defer="rating" wire:click="saveRating" name='rating_{{ $mitra->id }}'
            value="{{ $i }}" />
    @endfor
    {{-- @else
        <a href='#'> Delete </a>
    @endif --}}
</div>
